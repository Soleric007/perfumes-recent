<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    //


    /**
     * Write code on Method
     *
     */
    public function viewCart()
    {
        return view('home.pages.cart');
    }
    public function viewCheckout()
    {
        return view('home.pages.checkout');
    }

    /**
     * Write code on Method
     *
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "discount" => $product->discount,
                "shippingfee" => $product->shippingfee,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        Alert::success('Product Added Successfully', 'Product Added to Cart.');
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Write code on Method
     *
     */
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            if ($request->quantity <= 0) {
                session()->flash('error', 'Invalid quantity.');
            }

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {
                $cart[$request->id]["quantity"] = $request->quantity;
                session()->put('cart', $cart);
                session()->flash('success', 'Cart updated successfully');
                Alert::success('Cart updated successfully', 'Cart item has been updated.');
            } else {
                Alert::error('Product not found in cart.', 'Cart item not found.');
                session()->flash('error', 'Product not found in cart.');
            }
        }
    }



    /**
     * Write code on Method
     *
     */
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                session()->flash('success', 'Product removed successfully');
            } else {
                // Alert::error('Product not found in cart.', 'Cart item not found.');
                session()->flash('error', 'Product not found in cart.');
            }
        }
        Alert::success('Product Removed successfully', 'Product removed');
        return redirect()->back();
    }

    public function addToWishlist($id)
    {
        $product = Product::findOrFail($id);

        $wishlist = session()->get('wishlist', []);

        if (isset($cart[$id])) {
            $wishlist[$id]['quantity']++;
        } else {
            $wishlist[$id] = [
                "name" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "discount" => $product->discount,
                "shippingfee" => $product->shippingfee,
                "image" => $product->image
            ];
        }

        session()->put('wishlist', $wishlist);
        Alert::success('Product Added Successfully', 'Product Added to Wishlist.');
        return redirect()->back()->with('success', 'Product added to wishlist successfully!');
    }
    public function removeFromWishlist(Request $request)
    {
        if ($request->id) {
            $wishlist = session()->get('wishlist');

            if (isset($wishlist[$request->id])) {
                unset($wishlist[$request->id]);
                session()->put('wishlist', $wishlist);
                session()->flash('success', 'Product removed from wishilist successfully');
            } else {
                // Alert::error('Product not found in wishlist.', 'Product not found.');
                session()->flash('error', 'Product not found in wishlist.');
            }
        }

        Alert::success('Product Removed Successfully', 'Product Removed from Wishlist.');
        return redirect()->back();
    }
}
