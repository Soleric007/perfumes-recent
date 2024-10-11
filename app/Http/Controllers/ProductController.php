<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
            } else {
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
            session()->flash('error', 'Product not found in cart.');
        }
    }
}

}
