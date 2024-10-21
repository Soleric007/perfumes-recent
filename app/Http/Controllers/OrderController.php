<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


use App\Mail\OrderPlaced;

use PDF;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cart = session()->get('cart', []);

        // Calculate total amount
        $subtotal = 0;
        foreach ($cart as $id => $details) {
            $subtotal += $details['price'] * $details['quantity'];
        }
        $shippingFee = 4.99;
        $totalAmount = $subtotal + $shippingFee;

        // Save order details
        $validatedData = $request->validate([
            'fname'        => 'required|string|max:255',
            'lname'        => 'required|string|max:255',
            'email'        => 'required|email',
            'phone'        => 'required|string|max:15',
            'address'      => 'required|string|max:255',
            'city'         => 'required|string|max:100',
            'state'        => 'required|string|max:100',
            'zip'          => 'required|string|max:10',
            'country'      => 'required|string|max:100',
            'payment_method' => 'required|in:cash_on_delivery,card', // Assuming these are your methods
        ]);

        // Create new order
        $order = new Order();

        if ($validatedData['payment_method'] === 'card') {
            return redirect()->route('stripe');
        }

        $order->first_name = $validatedData['fname'];
        $order->last_name = $validatedData['lname'];
        $order->email = $validatedData['email'];
        $order->phone = $validatedData['phone'];
        $order->address = $validatedData['address'];
        $order->city = $validatedData['city'];
        $order->state = $validatedData['state'];
        $order->postal_code = $validatedData['zip'];
        $order->country = $validatedData['country'];
        $order->payment_method = $validatedData['payment_method'];
        $order->payment_status = 'pending';
        $order->delivery_status = 'pending';
        $order->total_amount = $totalAmount;
        $order->save();


        // Update product stock and orders count
        foreach ($cart as $id => $details) {
            $product = Product::find($id);
            if ($product) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $details['quantity'],
                    'price' => $product->price, // Save the price at the time of order
                ]);
                $product->stock -= $details['quantity'];  // Reduce stock
                $product->orders += 1;  // Increment orders count
                $product->save();
            }
        }

        // Send notification email to admin
        $adminEmail = 'riyallure4@gmail.com'; // Replace with the admin's email address
        Mail::to($adminEmail)->send(new OrderPlaced($order));
        // Send notification email to user
        $userEmail = $order->email; // Replace with the user's email address
        Mail::to($userEmail)->send(new OrderPlaced($order));

        // Clear the cart session
        session()->forget('cart');
        Alert::success('Your Order is on its way!', "An email confirmation has been sent to you.");

        return redirect()->route('index')->with('success', 'Order placed successfully, An email will be sent you once your order has been confirmed!');
    }
    public function orderDelivered($order)
    {
        $order = Order::find($order);
        $order->delivery_status = "delivered";
        $order->payment_status = "paid";
        $order->save();
        // dd($orders);
        return redirect()->back()->with('message', 'Order Delivered successfully!');
    }
    public function deleteOrder($slug)
    {
        $order = Order::where('slug', $slug)->firstOrFail();
        $order->delete();
        return redirect()->back()->with('message', 'Order Removed Successfully');
    }
    public function showorderdetails($slug)
    {
        $order = Order::where('slug', $slug)->firstOrFail();
        return view('admin.pages.orderdetails', compact('order'));
    }


    public function downloadPDF($id)
    {
        // Fetch the order details using the order ID
        $order = Order::with('items.product')->findOrFail($id); // Assuming you have an 'orderItems' relationship

        // Load a view file and pass the order data to it
        $pdf = PDF::loadView('orders.pdf', compact('order'));

        // Download the PDF file with a custom filename
        return $pdf->download('order-' . $order->id . '.pdf');
    }
}
