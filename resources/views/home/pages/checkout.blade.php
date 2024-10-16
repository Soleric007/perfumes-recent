<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Favicon Icon -->
    <link rel="icon" href="/template/assets/images/favicon.png">
    <!-- Site Title -->
    <title>Riyallure - Perfumes</title>
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

    <div class="cs_site_header_height_1"></div>

    <!-- Start Breadcamp -->
    <div class="cs_height_40 cs_height_lg_30"></div>
    <div class="container">
        <div class="cs_breadcamp_wrap cs_style_1 cs_accent_light_bg cs_bg_filed cs_radius_8"
            data-src="assets/images/breadcamp_bg_11.jpg">
            <div>
                <h1 class="cs_breadcamp_title cs_fs_54 cs_semibold">Complete Your Beauty Order</h1>
                <ol class="breadcrumb cs_fs_18 mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Breadcamp -->
    <div class="cs_height_120 cs_height_lg_70"></div>
    <div class="container">
        <form action="{{route('order.store')}}" method="POST">
            @csrf
            <div class="row cs_gap_y_40">
                <div class="col-lg-7">

                    <h2 class="cs_fs_36 cs_secondary_font cs_medium mb-0">BILLING DETAILS</h2>
                    <div class="cs_height_16 cs_height_lg_16"></div>
                    <p class="cs_light cs_primary_color mb-0">Please enter your billing details:</p>
                    <div class="cs_height_35 cs_height_lg_30"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="cs_semibold">First Name<span>*</span></label>
                            <input type="text" required name="fname" class="cs_form_field">
                            <div class="cs_height_30 cs_height_lg_20"></div>
                        </div>
                        <div class="col-lg-6">
                            <label class="cs_semibold">Last Name<span>*</span></label>
                            <input type="text" required name="lname" class="cs_form_field">
                            <div class="cs_height_30 cs_height_lg_20"></div>
                        </div>
                        <div class="col-lg-6">
                            <label class="cs_semibold">Email Address<span>*</span></label>
                            <input type="email" required name="email" class="cs_form_field">
                            <div class="cs_height_30 cs_height_lg_20"></div>
                        </div>
                        <div class="col-lg-6">
                            <label class="cs_semibold">Phone<span>*</span></label>
                            <input type="text" required name="phone" class="cs_form_field">
                            <div class="cs_height_30 cs_height_lg_20"></div>
                        </div>
                        <div class="col-lg-12">
                            <label class="cs_semibold">Address<span>*</span></label>
                            <textarea cols="30" required name="address" rows="3" class="cs_form_field"></textarea>
                            <div class="cs_height_30 cs_height_lg_20"></div>
                        </div>
                        <div class="col-lg-6">
                            <label class="cs_semibold">City<span>*</span></label>
                            <input type="text" required name="city" class="cs_form_field">
                            <div class="cs_height_30 cs_height_lg_20"></div>
                        </div>
                        <div class="col-lg-6">
                            <label class="cs_semibold">State/Province<span>*</span></label>
                            <input type="text" name="state" required class="cs_form_field">
                            <div class="cs_height_30 cs_height_lg_20"></div>
                        </div>
                        <div class="col-lg-6">
                            <label class="cs_semibold">ZIP/Postal Code<span>*</span></label>
                            <input type="text" name="zip" required class="cs_form_field">
                            <div class="cs_height_30 cs_height_lg_20"></div>
                        </div>
                        <div class="col-lg-6">
                            <label class="cs_semibold">Country<span>*</span></label>
                            <select required name="country" class="cs_form_field">
                                <option value="Nigeria">Nigeria</option>

                            </select>
                            <div class="cs_height_30 cs_height_lg_20"></div>
                        </div>
                    </div>

                </div>
                <div class="col-xxl-4 col-lg-5 offset-xxl-1">
                    <div class="cs_order_card cs_accent_light_bg cs_radius_10">
                        <h3 class="cs_fs_24 cs_medium cs_secondary_font mb-0">ORDER SUMMARY</h3>
                        @php $subtotal = 0 @endphp
                        @php $total = 0 @endphp
                        @php $totaldiscount = 0 @endphp
                        @php $totalshippingfee = 0 @endphp
                        @foreach ((array) session('cart') as $id => $details)
                            @php $subtotal += $details['price'] * $details['quantity'] @endphp
                            @php $totaldiscount += $details['discount'] @endphp
                            {{-- @php $totalshippingfee += $details['shippingfee'] @endphp --}}
                        @endforeach
                        @php $total = $subtotal - ($subtotal * ($totaldiscount / 100)) @endphp

                        <div class="cs_height_8 cs_height_lg_8"></div>
                        <ul class="cs_mp_0 cs_order_summary">
                            @foreach ((array) session('cart') as $id => $details)
                                <li>
                                    <div class="cs_order_summary_list_title">
                                        <h3 class="mb-0 cs_secondary_font cs_semibold cs_fs_16 text-xl uppercase">
                                            {{ $details['name'] }}</h3>
                                        <h3 class="mb-0 cs_secondary_font cs_semibold cs_fs_16 cs_accent_color">
                                            ${{ $details['price'] }}</h3>
                                    </div>
                                    <p>Quantity: {{ $details['quantity'] }}</p>
                                    <p>Discount: {{ $details['discount'] }}%</p>
                                </li>
                            @endforeach

                        </ul>
                        <div class="cs_height_40 cs_height_lg_30"></div>
                        <ul class="cs_card_price_list cs_type_1 cs_mp_0">
                            <li>
                                <span class="cs_light">Subtotal</span>
                                <span class="cs_semibold cs_primary_color cs_semibold">${{ $total }}</span>
                            </li>
                            <li>
                                <span class="cs_light">Shipping Fee</span>
                                <span class="cs_semibold cs_primary_color cs_semibold">$4.99</span>
                            </li>
                            <li class="cs_total_price">
                                <span class="cs_fs_18 cs_primary_color">Total</span>
                                <span class="cs_fs_18 cs_primary_color">${{ $total }}</span>
                            </li>
                        </ul>
                        <div class="cs_height_50 cs_height_lg_40"></div>
                        <h3 class="cs_secondary_font cs_fs_24 cs_medium mb-0">PAYMENT METHOD</h3>
                        <div class="cs_height_8 cs_height_lg_8"></div>
                        <p class="mb-0 cs_light">Choose your preferred payment method:</p>
                        <div class="cs_height_8 cs_height_lg_8"></div>

                        <ul class="cs_payment_method_list cs_mp_0">
                            <li>
                                <div class="cs_custom_checkbox cs_style_1 cs_light">
                                    <input required name="payment_method" type="radio" value="card">
                                    <span>Debit Card</span>
                                </div>
                            </li>

                            <li>
                                <div class="cs_custom_checkbox cs_style_1 cs_light">
                                    <input required name="payment_method" type="radio" value="cash_on_delivery">
                                    <span>Cash on Delevery</span>
                                </div>
                            </li>
                        </ul>
                        <div class="cs_height_40 cs_height_lg_30"></div>
                        <button type="submit" class="cs_btn cs_style_1 cs_fs_18 w-100"><span>PLACE
                                ORDER</span></button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <!-- Start Footer Section -->

    @include('home.sections.footer')

    <!-- End Footer Section -->
    <!-- Script -->
    <script src="/template/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/template/assets/js/jquery.slick.min.js"></script>
    <script src="/template/assets/js/select2.min.js"></script>
    <script src="/template/assets/js/main.js"></script>

</body>

</html>
