<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Scent;


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
        $product = Product::with('variants')->where('slug', $slug)->firstOrFail();

        if (!$product) {
            return redirect()->route('index')->with('error', 'Product not found.');
        }

        $sprayVariants = $product->variants()->where('type', 'spray')->get();
        $oilVariants = $product->variants()->where('type', 'oil')->get();


        // Fetch related products based on the same category, excluding the current product
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id',  '!=', $product->id) // Exclude the current product
            ->limit(4) // Limit the number of related products
            ->get();

         return view('home.pages.productdetails', compact('product', 'relatedProducts', 'sprayVariants', 'oilVariants'));

    }
    public function showAllScents()
    {
        $scents = Scent::all();
        return view('home.pages.scents', compact('scents'));
    }
    public function showShop(Request $request, $slug = null)
    {
        $query = Product::latest();
        $searchText = '';
        $activeScent = null;

        // Get all scents for sidebar
        $allScents = Scent::all();

        // Filter by scent if provided via route parameter
        if ($slug) {
            $scent = Scent::where('slug', $slug)->firstOrFail();
            $query->where('scent_id', $scent->id);
            $activeScent = $scent;
        } elseif ($request->has('scent') && $request->scent) {
            $scent = Scent::where('slug', $request->scent)->firstOrFail();
            $query->where('scent_id', $scent->id);
            $activeScent = $scent;
        }

        $products = $query->paginate(10);
        $totalProducts = Product::count();

        return view('home.pages.shop', compact('products', 'searchText', 'activeScent', 'allScents', 'totalProducts'));
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
