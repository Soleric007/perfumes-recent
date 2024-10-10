<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
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
        $products = Product::paginate(10);
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
    public function showorderdetails()
    {
        $user = Auth::user();
        return view('admin.pages.orderdetails', compact('user'));
    }
    public function showorder()
    {
        $user = Auth::user();
        return view('admin.pages.orders', compact('user'));
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
