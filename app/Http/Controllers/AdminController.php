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
        return view('admin.pages.createproduct', compact('user', 'categories'));
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
            'image' => 'required|file|mimes:jpg,png,jpeg,webp|max:2048',
            'category_id' => 'required|exists:categories,id'
        ]);

        // Upload image
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images', 'public');
        }

        // Create new product
        $product = Product::create($validatedData);

        Alert::success('Product Added Successfully', 'Product Added.');
        return redirect()->route('admin.products')->with('message', 'Product Added Successfully');
    }

    public function showproducts()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.pages.products', compact('products'));
    }
    public function showproductdetails($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('admin.pages.productdetails', compact('product'));
    }
    public function deleteProduct($product)
    {
        $product = Product::find($product);
        $product->delete();
        Alert::success('Product Deleted Successfully', 'Product Removed.');
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
