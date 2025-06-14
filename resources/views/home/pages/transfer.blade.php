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
        <p>Please transfer the total amount of <strong>{{ number_format($order->total_amount, 2) }}</strong> to the
            following bank account:</p>
        <ul>
            <li><strong>Bank Name:</strong> Access Bank</li>
            <li><strong>Account Number:</strong> 1848449170</li>
            <li><strong>Account Name:</strong> Zankpa Zynariya Blessing</li>
        </ul>
        <p>After completing the transfer, click the button below to notify us.</p>

        <a target="_blank" href="https://wa.me/8121538384?text=I%27ve%20sent%20the%20payment%20for%20Order%20ID%3A%20{{ $order->transaction_reference }}%20with%20Amount%3A%20{{ number_format($order->total_amount, 2) }}"
            class="btn btn-success py-2 px-4">I've Sent the Money</a>
    </div>

    @include('home.sections.footer')

    <!-- End Footer Section -->
    <!-- Script -->
    <script src="/template/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/template/assets/js/jquery.slick.min.js"></script>
    <script src="/template/assets/js/select2.min.js"></script>
    <script src="/template/assets/js/main.js"></script>
</body>

</html>
