<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Favicon Icon -->
    <link rel="icon" href="/template/assets/images/fave.png">
    <!-- Site Title -->
    <title>RIYALLURE - Perfumes</title>
    <link rel="stylesheet" href="/template/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/template/assets/css/slick.min.css">
    <link rel="stylesheet" href="/template/assets/css/select2.min.css">
    <link rel="stylesheet" href="/template/assets/css/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Start Header Section -->
    @include('home.sections.header')

    <div class="cs_site_header_height_40"></div>

    <div class="container mt-[8rem] lg:mt-[20rem] text-lg text-center space-y-10">
        <h2 class="text-3xl font-bold lg:text-5xl">Complete Your Payment</h2>

        <!-- NEW: Display delivery zone and breakdown -->
        <div class="max-w-md p-6 mx-auto text-left bg-gray-100 rounded-lg">
            <h3 class="mb-4 text-xl font-semibold">Order Summary</h3>
            <div class="space-y-2">
                <div class="flex justify-between">
                    <span>Subtotal:</span>
                    <span class="font-medium">₦{{ number_format($order->total_amount - $order->shipping_fee, 2) }}</span>
                </div>
                <div class="flex justify-between">
                    <span>Delivery Zone:</span>
                    <span class="font-medium">{{ $order->state === 'Lagos' ? 'Inside Lagos' : 'Interstate' }}</span>
                </div>
                <div class="flex justify-between">
                    <span>Shipping Fee:</span>
                    <span class="font-medium">₦{{ number_format($order->shipping_fee, 2) }}</span>
                </div>
                <hr class="my-3">
                <div class="flex justify-between text-lg font-bold">
                    <span>Total Amount:</span>
                    <span class="text-green-600">₦{{ number_format($order->total_amount, 2) }}</span>
                </div>
            </div>
        </div>

        <p>Please transfer the total amount to the following bank account:</p>
        <ul class="max-w-md p-6 mx-auto text-left rounded-lg bg-blue-50">
            <li class="mb-2"><strong>Bank Name:</strong> Access Bank</li>
            <li class="mb-2"><strong>Account Number:</strong> 1848449170</li>
            <li class="mb-2"><strong>Account Name:</strong> Zankpa Zynariya Blessing</li>
        </ul>
        <p class="text-sm text-gray-600">After completing the transfer, click the button below to notify us.</p>

        <!-- UPDATED: Changed to form submission instead of direct link -->
        <form action="{{ route('payment.transfer.notify', $order->id) }}" method="POST">
            @csrf
            <button type="submit" class="px-6 py-3 font-semibold text-white bg-green-600 rounded-lg btn btn-success hover:bg-green-700">
                I've Sent the Money
            </button>
        </form>
    </div>

    @include('home.sections.footer')

    <!-- Script -->
    <script src="/template/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/template/assets/js/jquery.slick.min.js"></script>
    <script src="/template/assets/js/select2.min.js"></script>
    <script src="/template/assets/js/main.js"></script>
</body>

</html>
