<!DOCTYPE html>
<html>

<head>
    <title>Order Confirmation</title>
</head>

<body>
    <h1>Thank you for your order!</h1>
    <p>Hello {{ $order->first_name }},</p>
    <p>We have received your order with the following details:</p>

    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Total Amount:</strong> N{{ $order->total_amount }}</p>
    <p><strong>Payment Method:</strong> {{ $order->payment_method }}</p>

    <p>We will notify you once your order is shipped.</p>

    <p>Thank you for shopping with us!</p>
</body>

</html>
