<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - Riyallure</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 650px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .email-container {
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #ab8e66 0%, #8b7355 100%);
            color: #ffffff;
            padding: 40px 30px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 32px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .header .emoji {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .header p {
            margin: 10px 0 0;
            font-size: 16px;
            opacity: 0.95;
        }

        .content {
            padding: 40px 30px;
        }

        .greeting {
            font-size: 20px;
            color: #ab8e66;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .message {
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .order-summary-box {
            background: linear-gradient(135deg, #f1e0c5 0%, #f8f0e3 100%);
            border-radius: 10px;
            padding: 25px;
            margin: 30px 0;
            border: 2px solid #ab8e66;
        }

        .order-summary-box h2 {
            margin: 0 0 20px 0;
            color: #4A3C2B;
            font-size: 20px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px dashed #d4c4b0;
        }

        .summary-row:last-child {
            border-bottom: none;
        }

        .summary-label {
            font-weight: 600;
            color: #666;
        }

        .summary-value {
            color: #333;
            font-weight: 600;
        }

        .order-id {
            background-color: #4A3C2B;
            color: #f1e0c5;
            padding: 8px 16px;
            border-radius: 20px;
            display: inline-block;
            font-weight: 600;
            font-size: 14px;
            font-family: monospace;
        }

        .section-title {
            color: #ab8e66;
            font-size: 20px;
            font-weight: 600;
            margin: 35px 0 20px 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #ab8e66;
        }

        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        .order-table thead {
            background-color: #ab8e66;
            color: #ffffff;
        }

        .order-table th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .order-table td {
            padding: 15px;
            border-bottom: 1px solid #f0f0f0;
        }

        .order-table tbody tr:last-child td {
            border-bottom: none;
        }

        .product-name {
            font-weight: 600;
            color: #333;
            font-size: 15px;
        }

        .variant-info {
            font-size: 13px;
            color: #666;
            margin-top: 5px;
        }

        .variant-badge {
            display: inline-block;
            background-color: #f1e0c5;
            color: #4A3C2B;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
            margin-right: 5px;
            text-transform: uppercase;
        }

        .price {
            color: #ab8e66;
            font-weight: 600;
            white-space: nowrap;
        }

        .total-section {
            background-color: #fafafa;
            padding: 25px;
            border-radius: 8px;
            margin-top: 25px;
            border: 1px solid #e0e0e0;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            font-size: 15px;
        }

        .total-row.grand-total {
            border-top: 2px solid #ab8e66;
            margin-top: 10px;
            padding-top: 15px;
            font-size: 20px;
            font-weight: 700;
            color: #ab8e66;
        }

        .shipping-info {
            background-color: #f8f9fa;
            border-left: 4px solid #ab8e66;
            padding: 20px;
            margin: 25px 0;
            border-radius: 5px;
        }

        .shipping-info h3 {
            margin: 0 0 15px 0;
            color: #ab8e66;
            font-size: 18px;
        }

        .info-text {
            color: #555;
            margin: 5px 0;
            line-height: 1.6;
        }

        .info-text strong {
            color: #333;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }

        .status-paid {
            background-color: #d4edda;
            color: #155724;
        }

        .info-box {
            background-color: #e7f3ff;
            border-left: 4px solid #2196F3;
            padding: 20px;
            margin: 25px 0;
            border-radius: 5px;
        }

        .info-box p {
            margin: 8px 0;
            color: #0d47a1;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #ab8e66 0%, #8b7355 100%);
            color: #ffffff;
            padding: 15px 35px;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            font-size: 16px;
            text-align: center;
            margin: 20px 0;
            box-shadow: 0 4px 6px rgba(171, 142, 102, 0.3);
            transition: all 0.3s;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(171, 142, 102, 0.4);
        }

        .next-steps {
            background-color: #fff8e1;
            border-radius: 8px;
            padding: 25px;
            margin: 25px 0;
        }

        .next-steps h3 {
            color: #f57c00;
            margin: 0 0 15px 0;
            font-size: 18px;
        }

        .steps-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .steps-list li {
            padding: 10px 0 10px 35px;
            position: relative;
            color: #555;
        }

        .steps-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 10px;
            background-color: #4caf50;
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }

        .footer {
            background-color: #2c2c2c;
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }

        .footer h3 {
            margin: 0 0 15px 0;
            color: #ab8e66;
            font-size: 20px;
        }

        .footer p {
            margin: 8px 0;
            font-size: 14px;
            color: #cccccc;
        }

        .divider {
            height: 1px;
            background: linear-gradient(to right, transparent, #ab8e66, transparent);
            margin: 30px 0;
        }

        @media only screen and (max-width: 600px) {
            body {
                padding: 10px;
            }

            .content {
                padding: 25px 20px;
            }

            .header {
                padding: 30px 20px;
            }

            .header h1 {
                font-size: 24px;
            }

            .summary-row {
                flex-direction: column;
                gap: 5px;
            }

            .order-table {
                font-size: 13px;
            }

            .order-table th,
            .order-table td {
                padding: 10px 8px;
            }

            .cta-button {
                display: block;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <div class="emoji">🎉</div>
            <h1>Order Confirmed!</h1>
            <p>Thank you for choosing Riyallure Perfumes</p>
        </div>

        <div class="content">
            <p class="greeting">Hello {{ $order->first_name }} {{ $order->last_name }},</p>

            <p class="message">
                Thank you for your order! We're excited to get your premium perfumes ready for you.
                Your order has been received and is being processed.
            </p>

            <div class="order-summary-box">
                <h2>📋 Order Summary</h2>
                <div class="summary-row">
                    <span class="summary-label">Order Number:</span>
                    <span class="order-id">#{{ $order->id }}</span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Order Date:</span>
                    <span class="summary-value">{{ $order->created_at->format('F d, Y - h:i A') }}</span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Payment Method:</span>
                    <span class="summary-value" style="text-transform: capitalize;">
                        {{ str_replace('_', ' ', $order->payment_method) }}
                    </span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Payment Status:</span>
                    <span
                        class="status-badge {{ $order->payment_status === 'paid' ? 'status-paid' : 'status-pending' }}">
                        {{ $order->payment_status }}
                    </span>
                </div>
            </div>

            <h2 class="section-title">🛍️ Your Order Details</h2>
            <table class="order-table">
                <thead>
                    <tr>
                        <th style="width: 50%;">Product</th>
                        <th style="width: 15%; text-align: center;">Qty</th>
                        <th style="width: 35%; text-align: right;">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->items as $item)
                        <tr>
                            <td>
                                <div class="product-name">{{ $item->product->title }}</div>
                                @if ($item->variant_id)
                                    <div class="variant-info">
                                        <span class="variant-badge">{{ $item->variant_type }}</span>
                                        <span class="variant-badge">{{ $item->variant_size }}</span>
                                    </div>
                                @endif
                            </td>
                            <td style="text-align: center; font-weight: 600;">{{ $item->quantity }}</td>
                            <td style="text-align: right;" class="price">
                                ₦{{ number_format($item->quantity * $item->price, 2) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="total-section">
                @php
                    $subtotal = $order->items->sum(function ($item) {
                        return $item->quantity * $item->price;
                    });
                    $shippingFee = $order->shipping_fee ?? 0;
                @endphp

                <div class="total-row">
                    <span>Subtotal:</span>
                    <span class="price">₦{{ number_format($subtotal, 2) }}</span>
                </div>
                <div class="total-row">
                    <span>Shipping Fee:</span>
                    <span class="price">₦{{ number_format($shippingFee, 2) }}</span>
                </div>
                <div class="total-row grand-total">
                    <span>TOTAL:</span>
                    <span>₦{{ number_format($order->total_amount, 2) }}</span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="shipping-info">
                <h3>📍 Shipping Address</h3>
                <p class="info-text"><strong>{{ $order->first_name }} {{ $order->last_name }}</strong></p>
                <p class="info-text">{{ $order->address }}</p>
                <p class="info-text">{{ $order->city }}, {{ $order->state }}</p>
                <p class="info-text">{{ $order->country }}@if ($order->postal_code)
                        , {{ $order->postal_code }}
                    @endif
                </p>
                <p class="info-text" style="margin-top: 15px;">
                    <strong>Phone:</strong> {{ $order->phone }}<br>
                    <strong>Email:</strong> {{ $order->email }}
                </p>
            </div>

            @if ($order->payment_method === 'transfer' && $order->payment_status === 'pending')
                <div class="info-box">
                    <p style="margin: 0 0 10px 0; font-weight: 600; font-size: 16px;">💳 Payment Instructions</p>
                    <p>You selected <strong>Bank Transfer</strong> as your payment method. Please complete your payment
                        and upload proof of payment to confirm your order.</p>
                    <p style="margin-top: 15px;">
                        <a href="{{ route('payment.transfer', $order->id) }}" class="cta-button">Complete Payment</a>
                    </p>
                </div>
            @endif

            <div class="next-steps">
                <h3>📌 What Happens Next?</h3>
                <ul class="steps-list">
                    <li>We'll review and confirm your order</li>
                    <li>Your perfumes will be carefully packaged</li>
                    <li>We'll send you shipping updates via email</li>
                    <li>Delivery within 2-5 business days to {{ $order->state }}</li>
                </ul>
            </div>

            <p class="message" style="text-align: center; margin-top: 30px;">
                Need help? Contact us at <strong style="color: #ab8e66;">riyallure@gmail.com</strong><br>
                or call <strong style="color: #ab8e66;">08121538384</strong>
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <h3>Riyallure Perfumes</h3>
            <p>Premium Fragrances for Every Occasion</p>
            <p style="margin-top: 20px; font-size: 13px; opacity: 0.8;">
                This email was sent to {{ $order->email }}<br>
                © {{ date('Y') }} Riyallure. All rights reserved.
            </p>
        </div>
    </div>
</body>

</html>
