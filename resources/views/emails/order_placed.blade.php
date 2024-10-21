<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>New Order Notification</title>
</head>

<body>
    <h2>New Order Placed</h2>
    <p>An order has been placed by {{ $order->first_name }} {{ $order->last_name }}.</p>
    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Total Amount:</strong> N{{ number_format($order->total_amount, 2) }}</p>
    <p><strong>Email:</strong> {{ $order->email }}</p>
    <p><strong>Phone:</strong> {{ $order->phone }}</p>
    <p><strong>Address:</strong> {{ $order->address }}, {{ $order->city }}, {{ $order->state }}, {{ $order->country }}
    </p>

    <h4>Order Items:</h4>
    <ul>
        @foreach ($order->items as $item)
            <li>{{ $item->product->title }} (Quantity: {{ $item->quantity }}, Price:
                N{{ number_format($item->price, 2) }})</li>
        @endforeach
    </ul>
</body>

</html>
