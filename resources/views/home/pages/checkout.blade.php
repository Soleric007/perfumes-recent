@php
    $subtotal = 0;
    $totalshippingfee = 0;
    foreach ((array) session('cart') as $id => $details) {
        $discount = floatval($details['discount']);
        $price = floatval($details['price']);
        $quantity = intval($details['quantity']);
        $subtotal += ($discount > 0 ? $discount : $price) * $quantity;
    }
    $total = $subtotal + $totalshippingfee;
@endphp

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
                                <option value="Lagos">Lagos</option>
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

                        <!-- NEW: Lagos Area Selector (hidden by default) -->
                        <div class="col-lg-6" id="lagosAreaContainer" style="display: none;">
                            <label class="cs_semibold">Lagos Area<span>*</span></label>
                            <select name="lagos_area" id="lagosAreaSelect" class="cs_form_field">
                                <option value="">Select Area</option>
                                <optgroup label="₦2,000 - Zone A">
                                    <option value="Folagoro">Folagoro</option>
                                    <option value="Oworo">Oworo</option>
                                    <option value="New Garage">New Garage</option>
                                    <option value="Shomolu">Shomolu</option>
                                    <option value="Akoka">Akoka</option>
                                </optgroup>
                                <optgroup label="₦3,000 - Zone B">
                                    <option value="Maryland">Maryland</option>
                                    <option value="Ojota">Ojota</option>
                                    <option value="Anthony">Anthony</option>
                                    <option value="Obanikoro">Obanikoro</option>
                                    <option value="Ilupeju">Ilupeju</option>
                                    <option value="Ogudu">Ogudu</option>
                                    <option value="Fadeyi">Fadeyi</option>
                                    <option value="Ogba">Ogba</option>
                                    <option value="Omole">Omole</option>
                                    <option value="Magodo">Magodo</option>
                                    <option value="Mile 12">Mile 12</option>
                                    <option value="Ebute Meta">Ebute Meta</option>
                                    <option value="Oyingbo">Oyingbo</option>
                                    <option value="Mushin">Mushin</option>
                                    <option value="Surulere">Surulere</option>
                                    <option value="Oshodi">Oshodi</option>
                                    <option value="Onipan">Onipan</option>
                                    <option value="VI">VI (Victoria Island)</option>
                                    <option value="Ikoyi">Ikoyi</option>
                                    <option value="Ajao">Ajao</option>
                                    <option value="Ifako Gbagada">Ifako Gbagada</option>
                                    <option value="Costain">Costain</option>
                                    <option value="Ilasamaja">Ilasamaja</option>
                                    <option value="Orile">Orile</option>
                                    <option value="Dopemu">Dopemu</option>
                                    <option value="Agege">Agege</option>
                                    <option value="Iju Ikota">Iju Ikota</option>
                                    <option value="Airport">Airport</option>
                                    <option value="Ojo">Ojo</option>
                                    <option value="Ikeja">Ikeja</option>
                                    <option value="VGC">VGC</option>
                                    <option value="Ajah">Ajah</option>
                                    <option value="Jakande">Jakande</option>
                                    <option value="Chevron">Chevron</option>
                                    <option value="Egbeda">Egbeda</option>
                                    <option value="Abule Egba">Abule Egba</option>
                                    <option value="Shasha">Shasha</option>
                                    <option value="Command">Command</option>
                                    <option value="Ijaiye">Ijaiye</option>
                                </optgroup>
                                <optgroup label="₦3,500 - Zone C">
                                    <option value="Ologolo">Ologolo</option>
                                    <option value="Ikate">Ikate</option>
                                    <option value="Lekki 1">Lekki 1</option>
                                    <option value="Agungi">Agungi</option>
                                    <option value="Festac">Festac</option>
                                    <option value="Amuwo">Amuwo Odofin</option>
                                    <option value="Okota">Okota</option>
                                    <option value="Ijegun">Ijegun</option>
                                    <option value="Ayobo">Ayobo</option>
                                    <option value="Meiran">Meiran</option>
                                    <option value="Palace">Palace</option>
                                    <option value="Akowonjo">Akowonjo</option>
                                    <option value="Ipaja">Ipaja</option>
                                    <option value="Isolo">Isolo</option>
                                    <option value="Alagomeji">Alagomeji</option>
                                </optgroup>
                                <optgroup label="₦4,000 - Zone D">
                                    <option value="Ahamadiy">Ahamadiy</option>
                                    <option value="Owode">Owode</option>
                                    <option value="Alagbado">Alagbado</option>
                                    <option value="Badore">Badore</option>
                                    <option value="Eleganza">Eleganza</option>
                                    <option value="Abraham Adesanya">Abraham Adesanya</option>
                                    <option value="Sangotedo">Sangotedo</option>
                                    <option value="Ogombo">Ogombo</option>
                                    <option value="Navy Town">Navy Town</option>
                                    <option value="Satellite Town">Satellite Town</option>
                                    <option value="Ajegunle">Ajegunle</option>
                                    <option value="Maza Maza">Maza Maza</option>
                                    <option value="Alakija">Alakija</option>
                                    <option value="Fagba">Fagba</option>
                                </optgroup>
                                <optgroup label="₦5,000 - Zone E">
                                    <option value="Ikorodu">Ikorodu</option>
                                    <option value="Awoyaya">Awoyaya</option>
                                    <option value="Alagbole">Alagbole</option>
                                    <option value="Langbasa">Langbasa</option>
                                    <option value="Oniru">Oniru</option>
                                    <option value="Marina">Marina</option>
                                    <option value="I. Island">Ikoyi Island</option>
                                    <option value="Ikotun">Ikotun</option>
                                    <option value="Igando">Igando</option>
                                    <option value="Idimu">Idimu</option>
                                    <option value="Apapa">Apapa</option>
                                </optgroup>
                            </select>
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


                        <div class="cs_height_8 cs_height_lg_8"></div>
                        <ul class="cs_mp_0 cs_order_summary">
                            @foreach ((array) session('cart') as $id => $details)
                                @php
                                    $discount = floatval($details['discount']);
                                    $price = floatval($details['price']);
                                    $quantity = intval($details['quantity']);
                                    $itemPrice = $discount > 0 ? $discount : $price;
                                @endphp
                                <li>
                                    <div class="cs_order_summary_list_title">
                                        <h3 class="mb-0 text-xl uppercase cs_secondary_font cs_semibold cs_fs_16">
                                            {{ $details['name'] }}</h3>
                                        <h3 class="mb-0 cs_secondary_font cs_semibold cs_fs_16 cs_accent_color">
                                            N{{ number_format($quantity * $itemPrice, 2) }}
                                        </h3>
                                    </div>
                                    <p>Quantity: {{ $quantity }}</p>
                                </li>
                            @endforeach

                        </ul>
                        <div class="cs_height_40 cs_height_lg_30"></div>
                        <ul class="cs_card_price_list cs_type_1 cs_mp_0">
                            <li>
                                <span class="cs_light">Subtotal</span>
                                <span class="cs_semibold cs_primary_color">N{{ number_format($subtotal, 2) }}</span>
                            </li>
                            <li>
                                <span class="cs_light">Shipping Fee</span>
                                <span id="shippingFee"
                                    class="cs_semibold cs_primary_color">N{{ number_format($totalshippingfee, 2) }}</span>
                            </li>
                            <li class="cs_total_price">
                                <span class="cs_fs_18 cs_primary_color">Total</span>
                                <span id="totalAmount"
                                    class="cs_fs_18 cs_primary_color">N{{ number_format($total, 2) }}</span>
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
            const lagosAreaContainer = document.getElementById('lagosAreaContainer');
            const lagosAreaSelect = document.getElementById('lagosAreaSelect');
            const shippingFeeElement = document.getElementById('shippingFee');
            const totalAmountElement = document.getElementById('totalAmount');

            // Interstate shipping fees
            const interstateShippingFees = {
                // South West - ₦7,000
                'Oyo': 7000,
                'Ondo': 7000,
                'Osun': 7000,
                'Ekiti': 7000,
                'Ogun': 7000,

                // South East - ₦8,000
                'Enugu': 8000,
                'Anambra': 8000,
                'Ebonyi': 8000,
                'Abia': 8000,
                'Imo': 8000,

                // South South - ₦8,500
                'Bayelsa': 8500,
                'Rivers': 8500,
                'Cross River': 8500,
                'Edo': 8500,
                'Akwa Ibom': 8500,
                'Delta': 8500,

                // North Central - ₦9,000
                'Kwara': 9000,
                'FCT': 9000,
                'Niger': 9000,
                'Kogi': 9000,
                'Benue': 9000,
                'Plateau': 9000,
                'Nasarawa': 9000,

                // North West - ₦9,000
                'Zamfara': 9000,
                'Sokoto': 9000,
                'Kaduna': 9000,
                'Kebbi': 9000,
                'Katsina': 9000,
                'Kano': 9000,
                'Jigawa': 9000,

                // North East - ₦9,000
                'Bauchi': 9000,
                'Borno': 9000,
                'Taraba': 9000,
                'Adamawa': 9000,
                'Yobe': 9000,
                'Gombe': 9000,
            };

            // Lagos area shipping fees
            const lagosAreaFees = {
                'Folagoro': 2000,
                'Oworo': 2000,
                'New Garage': 2000,
                'Shomolu': 2000,
                'Akoka': 2000,
                'Maryland': 3000,
                'Ojota': 3000,
                'Anthony': 3000,
                'Obanikoro': 3000,
                'Ilupeju': 3000,
                'Ogudu': 3000,
                'Fadeyi': 3000,
                'Ogba': 3000,
                'Omole': 3000,
                'Magodo': 3000,
                'Mile 12': 3000,
                'Ebute Meta': 3000,
                'Oyingbo': 3000,
                'Mushin': 3000,
                'Surulere': 3000,
                'Oshodi': 3000,
                'Onipan': 3000,
                'VI': 3000,
                'Ikoyi': 3000,
                'Ajao': 3000,
                'Ifako Gbagada': 3000,
                'Costain': 3000,
                'Ilasamaja': 3000,
                'Orile': 3000,
                'Dopemu': 3000,
                'Agege': 3000,
                'Iju Ikota': 3000,
                'Airport': 3000,
                'Ojo': 3000,
                'Ikeja': 3000,
                'VGC': 3000,
                'Ajah': 3000,
                'Jakande': 3000,
                'Chevron': 3000,
                'Egbeda': 3000,
                'Abule Egba': 3000,
                'Shasha': 3000,
                'Command': 3000,
                'Ijaiye': 3000,
                'Ologolo': 3500,
                'Ikate': 3500,
                'Lekki 1': 3500,
                'Agungi': 3500,
                'Festac': 3500,
                'Amuwo': 3500,
                'Okota': 3500,
                'Ijegun': 3500,
                'Ayobo': 3500,
                'Meiran': 3500,
                'Palace': 3500,
                'Akowonjo': 3500,
                'Ipaja': 3500,
                'Isolo': 3500,
                'Alagomeji': 3500,
                'Ahamadiy': 4000,
                'Owode': 4000,
                'Alagbado': 4000,
                'Badore': 4000,
                'Eleganza': 4000,
                'Abraham Adesanya': 4000,
                'Sangotedo': 4000,
                'Ogombo': 4000,
                'Navy Town': 4000,
                'Satellite Town': 4000,
                'Ajegunle': 4000,
                'Maza Maza': 4000,
                'Alakija': 4000,
                'Fagba': 4000,
                'Ikorodu': 5000,
                'Awoyaya': 5000,
                'Alagbole': 5000,
                'Langbasa': 5000,
                'Oniru': 5000,
                'Marina': 5000,
                'I. Island': 5000,
                'Ikotun': 5000,
                'Igando': 5000,
                'Idimu': 5000,
                'Apapa': 5000,
            };
            let subtotal = {{ $subtotal }};

            // Show/hide Lagos area selector
            stateSelect.addEventListener('change', function() {
                if (stateSelect.value === 'Lagos') {
                    lagosAreaContainer.style.display = 'block';
                    lagosAreaSelect.setAttribute('required', 'required');
                } else {
                    lagosAreaContainer.style.display = 'none';
                    lagosAreaSelect.removeAttribute('required');
                    lagosAreaSelect.value = '';

                    // Calculate interstate shipping
                    let shippingFee = interstateShippingFees[stateSelect.value] || 9000;
                    updateShippingDisplay(shippingFee);
                }
            });

            // Update shipping when Lagos area is selected
            lagosAreaSelect.addEventListener('change', function() {
                let shippingFee = lagosAreaFees[lagosAreaSelect.value] || 3000;
                updateShippingDisplay(shippingFee);
            });

            function updateShippingDisplay(shippingFee) {
                shippingFeeElement.textContent = `N${shippingFee.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}`;
                let total = subtotal + shippingFee;
                totalAmountElement.textContent = `N${total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}`;
            }
        });
    </script>

    <script src="/template/assets/js/jquery.slick.min.js"></script>
    <script src="/template/assets/js/select2.min.js"></script>
    <script src="/template/assets/js/main.js"></script>

</body>

</html>
