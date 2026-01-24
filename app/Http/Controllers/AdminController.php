<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Category;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Scent;


class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $orders = Order::with('items.product')->latest()->paginate(10);
        $user = Auth::user();
        $totalEarnings = Order::sum('total_amount');
        $totalCustomers = count(User::all());
        $totalProducts = count(Product::all());

        return view('admin.pages.dashboard', compact('user', 'orders', 'totalEarnings', 'totalCustomers', 'totalProducts'));
    }
    public function createproduct()
    {
        $user = Auth::user();
        $categories = Category::all();
        $scents = Scent::all();
        return view('admin.pages.createproduct', compact('user', 'categories', 'scents'));

    }
public function storeProduct(Request $request)
{
    // Validate product data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|min:30',
        'price' => 'required|numeric',
        'discount' => 'numeric',
        'shippingfee' => 'numeric',
        'stock' => 'required|string',
        'image' => 'required|file|mimes:jpg,png,jpeg,webp|max:20048',
        'category_id' => 'required|exists:categories,id',
        'scent_id' => 'nullable|exists:scents,id',
        'variants' => 'nullable|array',
        'variants.*.type' => 'required_with:variants|in:spray,oil',
        'variants.*.size' => 'required_with:variants|string',
        'variants.*.price' => 'required_with:variants|numeric',
        'variants.*.stock' => 'required_with:variants|integer|min:0',
    ]);

    // Upload image
    if ($request->hasFile('image')) {
        $validatedData['image'] = $request->file('image')->store('images', 'public');
    }

    // Create new product
    $product = Product::create($validatedData);

    // Create variants if provided
    if ($request->has('variants') && is_array($request->variants)) {
        foreach ($request->variants as $variant) {
            if (!empty($variant['type']) && !empty($variant['size']) && !empty($variant['price'])) {
                $product->variants()->create([
                    'type' => $variant['type'],
                    'size' => $variant['size'],
                    'price' => $variant['price'],
                    'stock' => $variant['stock'] ?? 0,
                ]);
            }
        }
    }

    $target = '/home/riyallur/riyallure/storage/app/public';
    $link = '/home/riyallur/public_html/storage';

    if (!file_exists($link)) {
        symlink($target, $link);
    }

    Alert::success('Product Added Successfully', 'Product Added.');
    return redirect()->route('admin.products')->with('message', 'Product Added Successfully');
}

    public function showproducts()
    {
        $searchText = '';
        $products = Product::latest()->paginate(10);
        return view('admin.pages.products', compact('products', 'searchText'));
    }

    public function showproductdetails($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('admin.pages.productdetails', compact('product'));
    }
    public function editProduct($id)
{
    $product = Product::with('variants')->findOrFail($id);
    $categories = Category::all();
    $scents = Scent::all();
    $user = Auth::user();

    return view('admin.pages.createproduct', compact('product', 'user', 'categories', 'scents'));
}

public function updateProduct(Request $request, $id)
{
    // Reconnect to database to avoid prepared statement issues

    $product = Product::with('variants')->findOrFail($id);

    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|min:30',
        'price' => 'required|numeric',
        'discount' => 'numeric',
        'shippingfee' => 'numeric',
        'stock' => 'required|string',
        'image' => 'nullable|file|mimes:jpg,png,jpeg,webp|max:20048',
        'category_id' => 'required|exists:categories,id',
        'scent_id' => 'nullable|exists:scents,id',
        'variants' => 'nullable|array',
        'variants.*.type' => 'required_with:variants|in:spray,oil',
        'variants.*.size' => 'required_with:variants|string',
        'variants.*.price' => 'required_with:variants|numeric',
        'variants.*.stock' => 'required_with:variants|integer|min:0',
        'variants_edit' => 'nullable|array',
        'existing_variants' => 'nullable|array',
    ]);

    \DB::beginTransaction();

    try {
        // Update image if provided
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images', 'public');
        } else {
            unset($validatedData['image']);
        }

        // Update product
        $product->update($validatedData);

        // Update existing variants
        if ($request->has('variants_edit') && is_array($request->variants_edit)) {
            foreach ($request->variants_edit as $variantId => $variantData) {
                $variant = $product->variants()->find($variantId);
                if ($variant) {
                    $variant->update([
                        'type' => $variantData['type'],
                        'size' => $variantData['size'],
                        'price' => $variantData['price'],
                        'stock' => $variantData['stock'] ?? 0,
                    ]);
                }
            }
        }

        // Handle variant deletion more safely
        if ($request->has('existing_variants') && is_array($request->existing_variants)) {
            $existingVariantIds = array_filter($request->existing_variants, function($id) {
                return is_numeric($id) && $id > 0;
            });

            // Get current variants
            $currentVariants = $product->variants()->get();

            // Delete variants that are not in the existing_variants array
            foreach ($currentVariants as $variant) {
                if (!in_array($variant->id, $existingVariantIds)) {
                    $variant->delete();
                }
            }
        }

        // Add new variants
        if ($request->has('variants') && is_array($request->variants)) {
            foreach ($request->variants as $variant) {
                if (!empty($variant['type']) && !empty($variant['size']) && !empty($variant['price'])) {
                    $product->variants()->create([
                        'type' => $variant['type'],
                        'size' => $variant['size'],
                        'price' => $variant['price'],
                        'stock' => $variant['stock'] ?? 0,
                    ]);
                }
            }
        }

        \DB::commit();

        Alert::success('Product Updated Successfully', 'Product has been updated.');
        return redirect()->route('admin.products')->with('message', 'Product Updated Successfully');

    } catch (\Exception $e) {
        \DB::rollBack();
        \Log::error('Error updating product: ' . $e->getMessage());

        Alert::error('Update Failed', 'An error occurred while updating the product. Please try again.');
        return redirect()->back()->withInput();
    }
}
    public function deleteProduct($product)
{
    $product = Product::find($product);

    if ($product) {
        $product->delete();
        Alert::success('Product Deleted Successfully', 'Product Removed.');
    } else {
        Alert::error('Product not found', 'Unable to delete.');
    }

    return redirect()->route('admin.products')->with('message', 'Product Removed Successfully');
}

    public function showorder()
    {
        $orders = Order::with('items.product')->latest()->paginate(10);
        // dd($orders);
        return view('admin.pages.orders', compact('orders'));
    }

    public function showcustomers()
    {
        $users = User::paginate('10');
        return view('admin.pages.customers', compact('users'));
    }
    public function deleteCustomer($customer)
    {
        $user = User::find($customer);
        $user->delete();
        Alert::success('Customer Removed Successfully', 'User Removed.');
        return redirect()->route('admin.customers')->with('message', 'Customer Removed Successfully');
    }

    public function showAddCategory()
    {
        return view('admin.pages.addcategory');
    }
    public function showCategories()
    {
        $categories = Category::all();
        return view('admin.pages.categories', compact('categories'));
    }
    public function storeCategory(Request $request)
    {
        // Validate product data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|min:2',
        ]);
        // Create new product
        $category = Category::create($validatedData);
        Alert::success('Category Added Successfully', 'Category Added.');

        return redirect()->route('admin.catgories')->with('message', 'Category Added Successfully');
    }
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        Alert::success('Category Deleted Successfully', 'Category Removed.');
        return redirect()->route('admin.catgories')->with('message', 'Category Removed Successfully');
    }


    public function product_search(Request $request) {
        $searchText = $request->search;
        $products = Product::where('title', 'LIKE', '%'.$searchText.'%')->paginate(10);

        return view('admin.pages.products', compact('products','searchText'));
    }
}
