<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $user = Auth::user();
        return view('admin.pages.dashboard', compact('user'));
    }
    public function createproduct()
    {
        $user = Auth::user();
        return view('admin.pages.createproduct', compact('user'));
    }
    public function storeProduct(Request $request){
        // Validate product data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|min:30',
            'price' => 'required|string',
            'discount' => 'string',
            'shippingfee' => 'string',
            'stock' => 'required|string',
            'image' => 'required|file|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        // Upload image
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images', 'public');
        }

        // Create new product
        $product = Product::create($validatedData);

        return redirect()->route('admin.products')->with('message', 'Product Added Successfully');
    }

    public function showproducts()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.pages.products', compact('products'));
    }
    public function showproductdetails($product)
    {
        $product = Product::find($product);
        return view('admin.pages.productdetails', compact('product'));
    }
    public function deleteProduct($product)
    {
        $product = Product::find($product);
        $product->delete();
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
        return redirect()->route('admin.customers')->with('message', 'Customer Removed Successfully');
    }
}
