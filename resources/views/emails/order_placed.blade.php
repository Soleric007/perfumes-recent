<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order Notification - Riyallure</title>
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
            padding: 35px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .header p {
            margin: 8px 0 0;
            font-size: 14px;
            opacity: 0.95;
        }

        .content {
            padding: 35px 30px;
        }

        .order-badge {
            background-color: #4A3C2B;
            color: #f1e0c5;
            padding: 8px 18px;
            border-radius: 20px;
            display: inline-block;
            font-weight: 600;
            font-size: 14px;
            font-family: monospace;
            margin-bottom: 25px;
        }

        .customer-info {
            background-color: #fafafa;
            border-left: 4px solid #ab8e66;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }

        .customer-info h3 {
            margin: 0 0 15px 0;
            color: #ab8e66;
            font-size: 18px;
            font-weight: 600;
        }

        .info-row {
            display: flex;
            margin-bottom: 10px;
            padding: 8px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #666;
            min-width: 120px;
            flex-shrink: 0;
        }

        .info-value {
            color: #333;
            flex-grow: 1;
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

        .footer {
            background-color: #2c2c2c;
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }

        .footer p {
            margin: 8px 0;
            font-size: 13px;
            color: #cccccc;
        }

        .footer strong {
            color: #ab8e66;
        }

        @media only screen and (max-width: 600px) {
            body {
                padding: 10px;
            }

            .content {
                padding: 25px 20px;
            }

            .info-row {
                flex-direction: column;
            }

            .info-label {
                margin-bottom: 5px;
            }

            .order-table {
                font-size: 13px;
            }

            .order-table th,
            .order-table td {
                padding: 10px 8px;
            }
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <h1>🛍️ NEW ORDER RECEIVED</h1>
            <p>Riyallure Perfumes</p>
        </div>

        <!-- Content -->
        <div class="content">
            <span class="order-badge">Order #{{ $order->id }}</span>

            <p style="font-size: 16px; color: #555; margin-top: 10px;">
                A new order has been placed and is awaiting processing.
            </p>

            <!-- Customer Information -->
            <div class="customer-info">
                <h3>👤 Customer Information</h3>
                <div class="info-row"><span class="info-label">Name:</span><span class="info-value">{{ $order->first_name }} {{ $order->last_name }}</span></div>
                <div class="info-row"><span class="info-label">Email:</span><span class="info-value">{{ $order->email }}</span></div>
                <div class="info-row"><span class="info-label">Phone:</span><span class="info-value">{{ $order->phone }}</span></div>
                <div class="info-row">
                    <span class="info-label">Address:</span>
                    <span class="info-value">{{ $order->address }}, {{ $order->city }}, {{ $order->state }}, {{ $order->country }} @if($order->postal_code)- {{ $order->postal_code }}@endif</span>
                </div>
                <div class="info-row"><span class="info-label">Payment Method:</span><span class="info-value" style="text-transform: capitalize;">{{ str_replace('_', ' ', $order->payment_method) }}</span></div>
                <div class="info-row">
                    <span class="info-label">Payment Status:</span>
                    <span class="info-value" style="text-transform: capitalize; color: {{ $order->payment_status === 'paid' ? '#10b981' : '#f59e0b' }}; font-weight: 600;">
                        {{ $order->payment_status }}
                    </span>
                </div>
            </div>

            <!-- Order Items -->
            <h2 class="section-title">📦 Order Details</h2>
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
                                @if($item->variant_id)
                                    <div class="variant-info">
                                        <span class="variant-badge">{{ strtoupper($item->variant_type) }}</span>
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

            <!-- Total Section -->
            <div class="total-section">
                @php
                    $subtotal = $order->items->sum(fn($item) => $item->quantity * $item->price);
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

            <p style="margin-top: 30px; padding: 15px; background-color: #fff3cd; border-left: 4px solid #ffc107; border-radius: 5px; color: #856404;">
                <strong>⚠️ Action Required:</strong> Please process this order and update its status in your admin dashboard.
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>Riyallure Perfumes</strong></p>
            <p>Premium Fragrances for Every Occasion</p>
            <p style="margin-top: 15px; color: #999;">
                This is an automated notification. Please do not reply to this email.
            </p>
        </div>
    </div>
</body>
</html>
