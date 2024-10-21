<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Order Details</title>
    <style>
        /* Custom styling for the PDF */
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        h2,
        h4 {
            margin-top: 0;
        }
    </style>
</head>

<body>
    <h2>Order Details - #{{ $order->id }}</h2>
    <p><strong>Name:</strong> {{ $order->first_name }} {{ $order->last_name }}</p>
    <p><strong>Email:</strong> {{ $order->email }}</p>
    <p><strong>Phone:</strong> {{ $order->phone }}</p>
    <p><strong>Address:</strong> {{ $order->address }}, {{ $order->city }}, {{ $order->state }}, {{ $order->country }}
    </p>
    <p><strong>Total Amount:</strong> ${{ number_format($order->total_amount, 2) }}</p>
    <br>
    <h4>Order Items:</h4>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $item)
                <tr>
                    <td>{{ $item->product->title }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>${{ number_format($item->price * $item->quantity, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
