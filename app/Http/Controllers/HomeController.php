<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('home.pages.index', compact('products'));
    }
    public function redirect()
    {
        $products = Product::latest()->paginate(5);
        return view('home.pages.index', compact('products'));
    }
    public function showAboutUs()
    {
        return view('home.pages.about');
    }
    public function showProductDetails($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        if (!$product) {
            // Handle the case where the product is not found
            return redirect()->route('index')->with('error', 'Product not found.');
        }

        // Fetch related products based on the same category, excluding the current product
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id) // Exclude the current product
            ->limit(4) // Limit the number of related products
            ->get();

        return view('home.pages.productdetails', compact('product', 'relatedProducts'));
    }

    public function showShop()
    {
        $products = Product::latest()->paginate(10);
        $searchText = '';
        return view('home.pages.shop', compact('products', 'searchText'));
    }
    public function showFaq()
    {
        return view('home.pages.faq');
    }
    public function showContact()
    {
        return view('home.pages.contact');
    }
    public function showWishlist()
    {
        return view('home.pages.wishlist');
    }
    public function showOrders()
    {
        $user = Auth::user();
        return view('home.pages.orders', compact('user'));
    }
    public function showAddress()
    {
        $user = Auth::user();
        return view('home.pages.address', compact('user'));
    }
    public function showAccountdetails()
    {
        $user = Auth::user();
        return view('home.pages.accountdetails', compact('user'));
    }

    public function showUserAccount()
    {
        $user = Auth::user();
        return view('home.pages.useraccount', compact('user'));
    }

    public function product_search(Request $request)
    {
        $searchText = $request->search;
        $products = Product::where('title', 'LIKE', '%' . $searchText . '%')->paginate(10);

        return view('home.pages.shop', compact('products', 'searchText'));
    }
}
