<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Mail\OrderPlaced;
use App\Mail\CustomerOrderNotification;
use App\Mail\PaymentConfirmed;
use App\Mail\AdminPaymentConfirmation;
use App\Mail\TransferNotification;

use PDF;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cart = session()->get('cart', []);

        // Interstate shipping fees by state
        $interstateShippingFees = [
            // South West - ₦7,000
            'Oyo' => 7000,
            'Ondo' => 7000,
            'Osun' => 7000,
            'Ekiti' => 7000,
            'Ogun' => 7000,

            // South East - ₦8,000
            'Enugu' => 8000,
            'Anambra' => 8000,
            'Ebonyi' => 8000,
            'Abia' => 8000,
            'Imo' => 8000,

            // South South - ₦8,500
            'Bayelsa' => 8500,
            'Rivers' => 8500,
            'Cross River' => 8500,
            'Edo' => 8500,
            'Akwa Ibom' => 8500,
            'Delta' => 8500,

            // North Central - ₦9,000
            'Kwara' => 9000,
            'FCT' => 9000,
            'Niger' => 9000,
            'Kogi' => 9000,
            'Benue' => 9000,
            'Plateau' => 9000,
            'Nasarawa' => 9000,

            // North West - ₦9,000
            'Zamfara' => 9000,
            'Sokoto' => 9000,
            'Kaduna' => 9000,
            'Kebbi' => 9000,
            'Katsina' => 9000,
            'Kano' => 9000,
            'Jigawa' => 9000,

            // North East - ₦9,000
            'Bauchi' => 9000,
            'Borno' => 9000,
            'Taraba' => 9000,
            'Adamawa' => 9000,
            'Yobe' => 9000,
            'Gombe' => 9000,
        ];

        // Lagos area shipping fees
        $lagosAreaFees = [
            // ₦2,000 areas
            'Folagoro' => 2000,
            'Oworo' => 2000,
            'New Garage' => 2000,
            'Shomolu' => 2000,
            'Akoka' => 2000,

            // ₦3,000 areas
            'Maryland' => 3000,
            'Ojota' => 3000,
            'Anthony' => 3000,
            'Obanikoro' => 3000,
            'Ilupeju' => 3000,
            'Ogudu' => 3000,
            'Fadeyi' => 3000,
            'Ogba' => 3000,
            'Omole' => 3000,
            'Magodo' => 3000,
            'Mile 12' => 3000,
            'Ebute Meta' => 3000,
            'Oyingbo' => 3000,
            'Mushin' => 3000,
            'Surulere' => 3000,
            'Oshodi' => 3000,
            'Onipan' => 3000,
            'VI' => 3000,
            'Ikoyi' => 3000,
            'Ajao' => 3000,
            'Ifako Gbagada' => 3000,
            'Costain' => 3000,
            'Ilasamaja' => 3000,
            'Orile' => 3000,
            'Dopemu' => 3000,
            'Agege' => 3000,
            'Iju Ikota' => 3000,
            'Airport' => 3000,
            'Ojo' => 3000,
            'Ikeja' => 3000,
            'VGC' => 3000,
            'Ajah' => 3000,
            'Jakande' => 3000,
            'Chevron' => 3000,
            'Egbeda' => 3000,
            'Abule Egba' => 3000,
            'Shasha' => 3000,
            'Command' => 3000,
            'Ijaiye' => 3000,

            // ₦3,500 areas
            'Ologolo' => 3500,
            'Ikate' => 3500,
            'Lekki 1' => 3500,
            'Agungi' => 3500,
            'Festac' => 3500,
            'Jakande' => 3500,
            'Amuwo' => 3500,
            'Okota' => 3500,
            'Ijegun' => 3500,
            'Ayobo' => 3500,
            'Meiran' => 3500,
            'Palace' => 3500,
            'Akowonjo' => 3500,
            'Ipaja' => 3500,
            'Isolo' => 3500,
            'Alagomeji' => 3500,

            // ₦4,000 areas
            'Ahamadiy' => 4000,
            'Owode' => 4000,
            'Alagbado' => 4000,
            'Badore' => 4000,
            'Eleganza' => 4000,
            'Abraham Adesanya' => 4000,
            'Sangotedo' => 4000,
            'Ogombo' => 4000,
            'Navy Town' => 4000,
            'Satellite Town' => 4000,
            'Ajegunle' => 4000,
            'Maza Maza' => 4000,
            'Alakija' => 4000,
            'Fagba' => 4000,

            // ₦5,000 areas
            'Ikorodu' => 5000,
            'Awoyaya' => 5000,
            'Alagbole' => 5000,
            'Langbasa' => 5000,
            'Oniru' => 5000,
            'Marina' => 5000,
            'I. Island' => 5000,
            'Ikotun' => 5000,
            'Igando' => 5000,
            'Idimu' => 5000,
            'Apapa' => 5000,
        ];

        // Calculate subtotal
        $subtotal = 0;
        foreach ((array) $cart as $id => $details) {
            $discount = floatval($details["discount"] ?? 0);
            $price = floatval($details["price"]);
            $quantity = intval($details['quantity']);
            $subtotal += ($discount > 0 ? $discount : $price) * $quantity;
        }

        $userState = $request->input('state');
        $lagosArea = $request->input('lagos_area'); // Get Lagos area if selected

        // Determine shipping fee
        if ($userState === 'Lagos' && $lagosArea) {
            $stateShippingFee = $lagosAreaFees[$lagosArea] ?? 3000; // Default to ₦3,000 if area not found
        } else {
            $stateShippingFee = $interstateShippingFees[$userState] ?? 9000; // Default to ₦9,000
        }

        $totalAmount = $subtotal + $stateShippingFee;

        \Log::info("State: {$userState}, Lagos Area: {$lagosArea}, Shipping: {$stateShippingFee}");

        // Validation
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'lagos_area' => 'nullable|string|max:100', // Lagos area is optional
            'country' => 'required|string|max:100',
            'payment_method' => 'required|in:cash_on_delivery,card,transfer',
        ]);

        // Create order
        $order = new Order();
        $order->first_name = $validatedData['fname'];
        $order->last_name = $validatedData['lname'];
        $order->email = $validatedData['email'];
        $order->slug = Str::uuid();
        $order->phone = $validatedData['phone'];
        $order->address = $validatedData['address'];
        $order->city = $validatedData['city'];
        $order->state = $validatedData['state'];
        $order->country = $validatedData['country'];
        $order->payment_method = $validatedData['payment_method'];
        $order->payment_status = 'pending';
        $order->delivery_status = 'pending';
        $order->transaction_reference = uniqid('order_');
        $order->total_amount = $totalAmount;
        $order->shipping_fee = $stateShippingFee;

        if (Auth::check()) {
            $order->user_id = Auth::id();
        }

        $order->save();

        // Create order items
        foreach ($cart as $id => $details) {
            $product = Product::find($id);
            if (!$product) continue;

            $discount = floatval($details["discount"] ?? 0);
            $cartPrice = floatval($details["price"]);
            $itemPrice = $discount > 0 ? $discount : $cartPrice;

            $orderItemData = [
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $details['quantity'],
                'price' => $itemPrice,
            ];

            if (isset($details['variant_id']) && $details['variant_id']) {
                $variant = $product->variants()->find($details['variant_id']);

                if ($variant) {
                    $orderItemData['variant_id'] = $variant->id;
                    $orderItemData['variant_type'] = $details['variant_type'] ?? $variant->type;
                    $orderItemData['variant_size'] = $details['variant_size'] ?? $variant->size;

                    if ($variant->stock >= $details['quantity']) {
                        $variant->stock -= $details['quantity'];
                        $variant->save();
                    }
                }
            } else {
                $product->stock -= $details['quantity'];
            }

            OrderItem::create($orderItemData);
            $product->orders += 1;
            $product->save();
        }

        // Handle payment methods
        if ($validatedData['payment_method'] === 'transfer') {
            return redirect()->route('payment.transfer', $order->id);
        } elseif ($validatedData['payment_method'] === 'card') {
            return $this->initiatePaystackPayment($order);
        } else {
            session()->forget('cart');

            $adminEmail = 'riyallure@gmail.com';
            Mail::to($adminEmail)->send(new OrderPlaced($order));
            Mail::to($order->email)->send(new CustomerOrderNotification($order));

            Alert::success('Order placed successfully', "We have received your order.");
            return redirect()->route('index')->with('success', 'Order placed successfully!');
        }
    }

    public function showTransferPage(Order $order)
    {
        return view('home.pages.transfer', compact('order'));
    }

    public function notifyTransferPayment(Order $order)
    {
        $adminEmail = 'riyallure@gmail.com';
        Mail::to($adminEmail)->send(new TransferNotification($order));

        $whatsappMessage = urlencode("Hello, I've sent the payment for Order ID: {$order->id} with Amount: ₦" . number_format($order->total_amount, 2) . ", with the name {$order->first_name} {$order->last_name}");

        return redirect()->away("https://wa.me/2348121538384?text={$whatsappMessage}");
    }

    // Keep all other methods unchanged...
    public function initiatePaystackPayment($order)
    {
        $paystack = new \Yabacon\Paystack(env('PAYSTACK_SECRET_KEY'));

        $data = [
            'amount' => $order->total_amount * 100,
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
                session()->forget('cart');

                $adminEmail = 'riyallure@gmail.com';
                Mail::to($adminEmail)->send(new OrderPlaced($order));
                Mail::to($order->email)->send(new CustomerOrderNotification($order));

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

    public function orderDelivered($order)
    {
        $order = Order::find($order);
        $order->delivery_status = "delivered";
        $order->payment_status = "paid";
        $order->save();
        return redirect()->back()->with('message', 'Order Delivered successfully!');
    }

    public function confirmPayment(Request $request, Order $order)
    {
        $order->payment_status = 'paid';
        $order->save();

        $adminEmail = 'riyallure@gmail.com';
        Mail::to($order->email)->send(new PaymentConfirmed($order));
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
        $order = Order::with('items.product')->findOrFail($id);
        $pdf = PDF::loadView('orders.pdf', compact('order'));
        return $pdf->download('order-' . $order->id . '.pdf');
    }
}
