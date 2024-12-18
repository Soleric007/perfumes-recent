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
            data-src="template/assets/images/bread.jpg">
            <div>
                <h1 style="color: #fff" class="cs_breadcamp_title cs_fs_54 cs_semibold">Complete Your Perfume Order</h1>
                <ol class="mb-0 breadcrumb cs_fs_18">
                    <li style="color: #fff" class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li style="color: #fff" class="breadcrumb-item active">Checkout</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Breadcamp -->
    <div class="cs_height_120 cs_height_lg_70"></div>
    <div class="container">
        <form action="{{ route('order.store') }}" method="POST">
            @csrf
            <div class="row cs_gap_y_40">
                <div class="col-lg-7">

                    <h2 class="mb-0 cs_fs_36 cs_secondary_font cs_medium">BILLING DETAILS</h2>
                    <div class="cs_height_16 cs_height_lg_16"></div>
                    <p class="mb-0 cs_light cs_primary_color">Please enter your billing details:</p>
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
                            <label class="cs_semibold">State<span>*</span></label>
                            <select name="state" id="stateSelect" required class="cs_form_field">
                                <option value="">Select a State</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                                <option value="FCT">Federal Capital Territory</option>
                            </select>
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
                        <h3 class="mb-0 cs_fs_24 cs_medium cs_secondary_font">ORDER SUMMARY</h3>
                        @php
                            $subtotal = 0;
                            $totalshippingfee = 0;
                            foreach ((array) session('cart') as $id => $details) {
                                $discount = $details['discount'];
                                $price = floatval($details['price']);
                                $quantity = intval($details['quantity']);

                                $subtotal += ($discount !== '0' ? $discount : $price) * $quantity;
                            }
                            $total = $subtotal + $totalshippingfee;
                        @endphp


                        <div class="cs_height_8 cs_height_lg_8"></div>
                        <ul class="cs_mp_0 cs_order_summary">
                            @foreach ((array) session('cart') as $id => $details)
                                <li>
                                    <div class="cs_order_summary_list_title">
                                        <h3 class="mb-0 text-xl uppercase cs_secondary_font cs_semibold cs_fs_16">
                                            {{ $details['name'] }}</h3>
                                        <h3 class="mb-0 cs_secondary_font cs_semibold cs_fs_16 cs_accent_color">
                                            N{{ $details['quantity'] * ($details['discount'] !== '0' ? $details['discount'] : $details['price']) }}
                                        </h3>
                                    </div>
                                    <p>Quantity: {{ $details['quantity'] }}</p>
                                </li>
                            @endforeach

                        </ul>
                        <div class="cs_height_40 cs_height_lg_30"></div>
                        <ul class="cs_card_price_list cs_type_1 cs_mp_0">
                            <li>
                                <span class="cs_light">Subtotal</span>
                                <span class="cs_semibold cs_primary_color">N{{ $subtotal }}</span>
                            </li>
                            <li>
                                <span class="cs_light">Shipping Fee</span>
                                <span id="shippingFee"
                                    class="cs_semibold cs_primary_color">N{{ $totalshippingfee }}</span>
                            </li>
                            <li class="cs_total_price">
                                <span class="cs_fs_18 cs_primary_color">Total</span>
                                <span id="totalAmount" class="cs_fs_18 cs_primary_color">N{{ $total }}</span>
                            </li>
                        </ul>
                        <div class="cs_height_50 cs_height_lg_40"></div>
                        <h3 class="mb-0 cs_secondary_font cs_fs_24 cs_medium">PAYMENT METHOD</h3>
                        <div class="cs_height_8 cs_height_lg_8"></div>
                        <p class="mb-0 cs_light">Choose your preferred payment method:</p>
                        <div class="cs_height_8 cs_height_lg_8"></div>

                        <ul class="cs_payment_method_list cs_mp_0">
                            <li>
                                <div class="cs_custom_checkbox cs_style_1 cs_light">
                                    <input required name="payment_method" type="radio" value="transfer">
                                    <span>Pay with Transfer</span>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stateSelect = document.getElementById('stateSelect');
            const shippingFeeElement = document.getElementById('shippingFee');
            const totalAmountElement = document.getElementById('totalAmount');

            // Define the shipping fees for each state
            const shippingFees = {
                'Adamawa': 7000,
                'Bauchi': 7000,
                'Borno': 7000,
                'Gombe': 7000,
                'Taraba': 7000,
                'Yobe': 7000,
                'Jigawa': 7000,
                'Kaduna': 7000,
                'Kano': 7000,
                'Katsina': 7000,
                'Kebbi': 7000,
                'Sokoto': 7000,
                'Zamfara': 7000,
                'Benue': 7000,
                'Kogi': 7000,
                'Kwara': 7000,
                'Nasarawa': 7000,
                'Niger': 7000,
                'Plateau': 7000,
                'FCT': 7000,
                'Abia': 6000,
                'Anambra': 6000,
                'Ebonyi': 6000,
                'Enugu': 6000,
                'Imo': 6000,
                'Akwa Ibom': 7000,
                'Bayelsa': 7000,
                'Cross River': 7000,
                'Delta': 7000,
                'Edo': 7000,
                'Rivers': 7000,
                'Ekiti': 5000,
                'Ogun': 5000,
                'Ondo': 5000,
                'Osun': 5000,
                'Oyo': 5000,
                'Lagos': 4000
            };


            let subtotal = {{ $subtotal }}; // Replace with actual subtotal value from server-side
            let defaultShippingFee = {{ $totalshippingfee }}; // Replace with initial shipping fee

            stateSelect.addEventListener('change', function() {
                let selectedState = stateSelect.value;
                let shippingFee = shippingFees[selectedState] || defaultShippingFee;

                // Update the shipping fee in the DOM
                shippingFeeElement.textContent = `N${shippingFee}`;

                // Calculate and update the total
                let total = subtotal + shippingFee;
                totalAmountElement.textContent = `N${total}`;
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var scrolllpos = localStorage.getItem('scrollpos');
            if (scrolllpos) {
                window.scrollTo(0, scrolllpos);
            }
        });
        window.addEventListener('beforeunload', function() {
            localStorage.setItem('scrollpos', window.scrollY);
        });
    </script>
    <script src="/template/assets/js/jquery.slick.min.js"></script>
    <script src="/template/assets/js/select2.min.js"></script>
    <script src="/template/assets/js/main.js"></script>

</body>

</html>
