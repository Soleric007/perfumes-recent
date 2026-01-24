<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\PerfumeVariant;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function viewCart()
    {
        return view('home.pages.cart');
    }

    public function viewCheckout()
    {
        return view('home.pages.checkout');
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::with('variants')->findOrFail($id);

        // Get variant ID from request if provided
        $variantId = $request->query('variant_id');
        $variant = null;
        $priceToUse = floatval($product->price);
        $stockAvailable = intval($product->stock);

        if ($variantId) {
            $variant = $product->variants()->findOrFail($variantId);
            $priceToUse = floatval($variant->price);
            $stockAvailable = intval($variant->stock);

            // Check variant stock
            if (!$variant->isInStock()) {
                Alert::error('Out of Stock', 'This variant is currently out of stock.');
                return redirect()->back();
            }
        } else {
            // Check main product stock
            if ($product->stock <= 0) {
                Alert::error('Out of Stock', 'This product is currently out of stock.');
                return redirect()->back();
            }
        }

        $cart = session()->get('cart', []);

        // Create unique cart key combining product ID and variant ID
        $cartKey = $variantId ? "{$id}_variant_{$variantId}" : $id;

        if (isset($cart[$cartKey])) {
            // Check if adding one more exceeds stock
            $newQuantity = $cart[$cartKey]['quantity'] + 1;
            if ($newQuantity > $stockAvailable) {
                Alert::error('Insufficient Stock', 'Only ' . $stockAvailable . ' items available in stock.');
                return redirect()->back();
            }
            $cart[$cartKey]['quantity'] = $newQuantity;
        } else {
            $cartItem = [
                "product_id" => $id,
                "name" => $product->title,
                "quantity" => 1,
                "price" => $priceToUse,
                "discount" => floatval($product->discount),
                "shippingfee" => floatval($product->shippingfee),
                "image" => $product->image,
                "stock" => $stockAvailable,
            ];

            // Add variant details if selected
            if ($variant) {
                $cartItem['variant_id'] = $variant->id;
                $cartItem['variant_type'] = $variant->type;
                $cartItem['variant_size'] = $variant->size;
            }

            $cart[$cartKey] = $cartItem;
        }

        session()->put('cart', $cart);
        Alert::success('Product Added Successfully', 'Product Added to Cart.');

        // Check if this was a "Buy Now" action
        if ($request->has('buy_now')) {
            return redirect()->route('checkout');
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function buyNow(Request $request, $id)
    {
        // First, add to cart (reuse the same logic)
        $product = Product::with('variants')->findOrFail($id);

        $variantId = $request->query('variant_id');
        $variant = null;
        $priceToUse = floatval($product->price);
        $stockAvailable = intval($product->stock);

        if ($variantId) {
            $variant = $product->variants()->findOrFail($variantId);
            $priceToUse = floatval($variant->price);
            $stockAvailable = intval($variant->stock);

            if (!$variant->isInStock()) {
                Alert::error('Out of Stock', 'This variant is currently out of stock.');
                return redirect()->back();
            }
        } else {
            if ($product->stock <= 0) {
                Alert::error('Out of Stock', 'This product is currently out of stock.');
                return redirect()->back();
            }
        }

        $cart = session()->get('cart', []);
        $cartKey = $variantId ? "{$id}_variant_{$variantId}" : $id;

        if (isset($cart[$cartKey])) {
            $newQuantity = $cart[$cartKey]['quantity'] + 1;
            if ($newQuantity > $stockAvailable) {
                Alert::error('Insufficient Stock', 'Only ' . $stockAvailable . ' items available in stock.');
                return redirect()->back();
            }
            $cart[$cartKey]['quantity'] = $newQuantity;
        } else {
            $cartItem = [
                "product_id" => $id,
                "name" => $product->title,
                "quantity" => 1,
                "price" => $priceToUse,
                "discount" => floatval($product->discount),
                "shippingfee" => floatval($product->shippingfee),
                "image" => $product->image,
                "stock" => $stockAvailable,
            ];

            if ($variant) {
                $cartItem['variant_id'] = $variant->id;
                $cartItem['variant_type'] = $variant->type;
                $cartItem['variant_size'] = $variant->size;
            }

            $cart[$cartKey] = $cartItem;
        }

        session()->put('cart', $cart);

        // Redirect directly to checkout
        return redirect()->route('checkout');
    }
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            if ($request->quantity <= 0) {
                session()->flash('error', 'Invalid quantity.');
                return;
            }

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {
                $cartItem = $cart[$request->id];

                // Check stock availability
                $stockAvailable = $cartItem['stock'] ?? 0;

                if ($request->quantity > $stockAvailable) {
                    Alert::error('Insufficient Stock', 'Only ' . $stockAvailable . ' items available in stock.');
                    session()->flash('error', 'Only ' . $stockAvailable . ' items available in stock.');
                    return;
                }

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
        Alert::success('Product Removed successfully', 'Product removed');
        return redirect()->back();
    }

    public function addToWishlist($id)
    {
        $product = Product::findOrFail($id);

        $wishlist = session()->get('wishlist', []);

        if (isset($wishlist[$id])) {
            $wishlist[$id]['quantity']++;
        } else {
            $wishlist[$id] = [
                "name" => $product->title,
                "quantity" => 1,
                "price" => floatval($product->price),
                "discount" => floatval($product->discount),
                "shippingfee" => floatval($product->shippingfee),
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
                session()->flash('success', 'Product removed from wishlist successfully');
            } else {
                session()->flash('error', 'Product not found in wishlist.');
            }
        }

        Alert::success('Product Removed Successfully', 'Product Removed from Wishlist.');
        return redirect()->back();
    }
}
