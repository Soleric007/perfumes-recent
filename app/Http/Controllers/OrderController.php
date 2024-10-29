<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;


use App\Mail\OrderPlaced;
use App\Mail\CustomerOrderNotification;
use App\Mail\PaymentConfirmed;
use App\Mail\AdminPaymentConfirmation;

use PDF;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cart = session()->get('cart', []);

        // Shipping fees based on Nigerian states
        $shippingFeesByState = [
            'Adamawa' => 7000,
            'Bauchi' => 7000,
            'Borno' => 7000,
            'Gombe' => 7000,
            'Taraba' => 7000,
            'Yobe' => 7000,
            'Jigawa' => 7000,
            'Kaduna' => 7000,
            'Kano' => 7000,
            'Katsina' => 7000,
            'Kebbi' => 7000,
            'Sokoto' => 7000,
            'Zamfara' => 7000,
            'Benue' => 7000,
            'Kogi' => 7000,
            'Kwara' => 7000,
            'Nasarawa' => 7000,
            'Niger' => 7000,
            'Plateau' => 7000,
            'FCT' => 7000,
            'Abia' => 6000,
            'Anambra' => 6000,
            'Ebonyi' => 6000,
            'Enugu' => 6000,
            'Imo' => 6000,
            'Akwa Ibom' => 7000,
            'Bayelsa' => 7000,
            'Cross River' => 7000,
            'Delta' => 7000,
            'Edo' => 7000,
            'Rivers' => 7000,
            'Ekiti' => 5000,
            'Ogun' => 5000,
            'Ondo' => 5000,
            'Osun' => 5000,
            'Oyo' => 5000,
            'Lagos' => 4000
        ];



        // Calculate total amount
        $subtotal = 0;
        $totalshippingfee = 0;
        foreach ((array) session('cart') as $id => $details) {
            $discount = $details["discount"];
            $price = floatval($details["price"]);
            $quantity = intval($details['quantity']);

            $subtotal += (($discount !== '0') ? $discount : $price) * $quantity;
        }

        $userState = $request->input('state');
        $stateShippingFee = $shippingFeesByState[$userState] ?? 0;
        $totalshippingfee = $stateShippingFee;
        $totalAmount = $subtotal + $totalshippingfee;

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
            'payment_method' => 'required|in:cash_on_delivery,card,transfer', // Add 'transfer' as a payment method
        ]);

        // Create new order
        $order = new Order();
        $order->first_name = $validatedData['fname'];
        $order->last_name = $validatedData['lname'];
        $order->email = $validatedData['email'];
        $order->slug = Str::uuid();
        $order->phone = $validatedData['phone'];
        $order->address = $validatedData['address'];
        $order->city = $validatedData['city'];
        $order->state = $validatedData['state'];
        $order->postal_code = $validatedData['zip'];
        $order->country = $validatedData['country'];
        $order->payment_method = $validatedData['payment_method'];
        $order->payment_status = 'pending';
        $order->delivery_status = 'pending';
        $order->transaction_reference = uniqid('order_');
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

        if ($validatedData['payment_method'] === 'transfer') {
            // Redirect to the transfer payment page
            return redirect()->route('payment.transfer', $order->id);
        } elseif ($validatedData['payment_method'] === 'card') {
            // Redirect to Paystack for payment
            return $this->initiatePaystackPayment($order);
        } else {
            // Handle cash on delivery orders
            $this->processOrderItems($order, $cart);
            session()->forget('cart');
            Alert::success('Order placed successfully', "We have received your order.");
            return redirect()->route('index')->with('success', 'Order placed successfully, An email will be sent you once your order has been confirmed!');
        }
    }

    public function showTransferPage(Order $order)
    {
        // Display the bank details and instructions to the user
        return view('home.pages.transfer', compact('order'));
    }


    public function initiatePaystackPayment($order)
    {
        $paystack = new \Yabacon\Paystack(env('PAYSTACK_SECRET_KEY'));

        $data = [
            'amount' => $order->total_amount * 100, // Paystack uses kobo, so multiply by 100
            'email' => $order->email,
            'reference' => $order->transaction_reference,
            'callback_url' => route('payment.callback'),
        ];

        try {
            $tranx = $paystack->transaction->initialize($data);
            return redirect($tranx->data->authorization_url);
        } catch (\Yabacon\Paystack\Exception\ApiException $e) {
            return back()->withErrors(['error' => 'Payment initialization failed: ' . $e->getMessage()]);
        }
    }


    public function paymentCallback(Request $request)
    {
        $paystack = new \Yabacon\Paystack(env('PAYSTACK_SECRET_KEY'));

        try {
            $tranx = $paystack->transaction->verify([
                'reference' => $request->query('reference'),
            ]);

            $order = Order::where('transaction_reference', $tranx->data->reference)->firstOrFail();

            if ($tranx->data->status === 'success') {
                $order->payment_status = 'paid';
                $this->processOrderItems($order, session()->get('cart', []));
                session()->forget('cart');
                Alert::success('Payment Successful', 'Your order has been placed.');
            } else {
                $order->payment_status = 'failed';
                Alert::error('Payment Failed', 'The payment was not successful.');
            }

            $order->save();
            return redirect()->route('index');
        } catch (\Yabacon\Paystack\Exception\ApiException $e) {
            return back()->withErrors(['error' => 'Payment verification failed: ' . $e->getMessage()]);
        }
    }


    protected function processOrderItems($order, $cart)
    {
        foreach ($cart as $id => $details) {
            $product = Product::find($id);
            if ($product) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $details['quantity'],
                    'price' => $product->price,
                ]);
                $product->stock -= $details['quantity'];
                $product->orders += 1;
                $product->save();
            }
        }

        // Send notification emails
        $adminEmail = 'riyallure@gmail.com';
        Mail::to($adminEmail)->send(new OrderPlaced($order));
        Mail::to($order->email)->send(new CustomerOrderNotification($order));
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

    public function confirmPayment(Request $request, Order $order)
    {
        $order->payment_status = 'paid';
        $order->save();

        // Notify the customer via email
        Mail::to($order->email)->send(new PaymentConfirmed($order));

        // Notify the admin if needed
        $adminEmail = 'riyallure@gmail.com';
        Mail::to($adminEmail)->send(new AdminPaymentConfirmation($order));

        Mail::to($adminEmail)->send(new OrderPlaced($order));
        Mail::to($order->email)->send(new CustomerOrderNotification($order));

        return redirect()->back()->with('success', 'Payment has been confirmed successfully.');
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
