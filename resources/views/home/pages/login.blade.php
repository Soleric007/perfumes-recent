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
    <!-- Cart Modal -->

    <!-- End Header Section -->
    <div class="container">
        <div class="cs_breadcamp_wrap cs_style_1 cs_accent_light_bg cs_bg_filed cs_radius_8"
            data-src="template/assets/images/bread.jpg">
            <div>
                <h1 style="color: #fff" class="cs_breadcamp_title cs_fs_54 cs_semibold">Member Login</h1>
                <p style="color: #fff" class="mb-0 cs_fs_18">Access your RIYALLURE account to continue your fragrance
                    journey.</p>
            </div>
        </div>
    </div>
    <!-- End Breadcamp -->
    <div class="cs_height_80 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_login_card cs_gray_bg_4 cs_radius_10">
            <div class="row align-items-center cs_gap_y_40">
                <div class="col-xxl-5 col-xl-6 col-lg-7">
                    <img src="/template/assets/images/loginimg.jpg" alt="">
                </div>
                <div class="col-lg-5 offset-xl-1">
                    <h2 class="cs_fs_36 cs_medium">WELCOME BACK!</h2>
                    <p class="mb-0 cs_light">Please enter your details</p>
                    <div class="cs_height_30 cs_height_lg_20"></div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label class="cs_semibold">Email Address<span>*</span></label>
                        <input type="email" name="email" :value="old('email')" required autofocus
                            autocomplete="username" class="cs_form_field">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        <div class="cs_height_20 cs_height_lg_20"></div>
                        <label class="cs_semibold">Password<span>*</span></label>
                        <div class="cs_password">
                            <input type="password" name="password" required autocomplete="current-password"
                                class="cs_password_input cs_form_field">
                            <button class="cs_eye_btn" type="button">
                                <svg width="29" height="16" viewBox="0 0 29 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.5 0C8.95924 0 3.93459 2.80577 0.22691 7.36308C-0.0756367 7.73644 -0.0756367 8.25807 0.22691 8.63144C3.93459 13.1942 8.95924 16 14.5 16C20.0408 16 25.0654 13.1942 28.7731 8.63692C29.0756 8.26355 29.0756 7.74194 28.7731 7.36857C25.0654 2.80577 20.0408 0 14.5 0ZM14.8975 13.6335C11.2194 13.8476 8.18211 11.0419 8.41347 7.63212C8.6033 4.82086 11.0652 2.54221 14.1025 2.36651C17.7806 2.15237 20.8179 4.95813 20.5865 8.36788C20.3908 11.1736 17.9289 13.4523 14.8975 13.6335ZM14.7136 11.0309C12.7322 11.1462 11.0949 9.63624 11.2254 7.80233C11.3262 6.28689 12.6551 5.06246 14.2924 4.96362C16.2738 4.84832 17.9111 6.35827 17.7806 8.19218C17.6738 9.71311 16.3449 10.9375 14.7136 11.0309Z"
                                        fill="currentColor" />
                                </svg>
                            </button>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                        </div>
                        <div class="cs_height_35 cs_height_lg_35"></div>
                        <div class="cs_login_card_row_1 cs_light">
                            <div class="cs_custom_checkbox cs_style_1">
                                <input type="checkbox">
                                <span>Remember Me</span>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="">Forgot Password?</a>
                            @endif
                        </div>
                        <div class="cs_height_35 cs_height_lg_35"></div>
                        <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_medium w-100">LOG IN</button>
                    </form>
                    <div class="cs_height_30 cs_height_lg_30"></div>
                    <p class="mb-0 cs_light cs_primary_color">Don't have an account? <a href="{{ route('register') }}"
                            class="cs_accent_color cs_semibold">Signup Now</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>

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
