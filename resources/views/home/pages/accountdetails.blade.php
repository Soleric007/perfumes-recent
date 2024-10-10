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
    <title>Glowify - Beauty E-Commerce</title>
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
    @include('home.sections.cartmodal')
    <!-- End Header Section -->

    <div class="container">
        <div class="cs_height_45 cs_height_lg_45"></div>
        <ol class="mb-0 breadcrumb cs_fs_18">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('useraccount') }}">My Account</a></li>
            <li class="breadcrumb-item active">Account Details</li>
        </ol>
        <div class="cs_height_30 cs_height_lg_30"></div>
    </div>
    <div class="container">
        <div class="cs_account_wrap">
            <div class="cs_account_nav cs_radius_10">
                <div class="cs_account_avatar">
                    <h3 class=""><span>Hello,</span> <br>{{ $user->name }}</h3>
                </div>
                <ul class="cs_account_nav_list cs_mp_0">
                    <li>
                        <a href="{{ route('useraccount') }}"><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ route('orders') }}"><span>Orders</span></a>
                    </li>
                    {{-- <li>
                <a href="{{ route('address') }}"><span>Address</span></a>
              </li> --}}
                    <li class="active">
                        <a href="{{ route('accountdetails') }}"><span>Account Details</span></a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="logout" type="submit">
                                Log Out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="cs_account_content">
                <div class="cs_account_card cs_radius_10">
                    <div class="cs_account_card_head cs_type_1">
                        <h3 class="mb-0 cs_fs_18">Account Details</h3>
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="cs_plr_25">
                        <hr>

                        <div class="cs_height_25 cs_height_lg_25"></div>
                        <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row cs_gap_y_20">
                                <div class="col-lg-6">
                                    <label class="cs_medium">Full Name <span>*</span></label>
                                    <input type="text" name="name" class="cs_form_field"
                                        value="{{ $user->name }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />

                                </div>

                                <div class="col-lg-6">
                                    <label class="cs_medium">Email <span>*</span></label>
                                    <input type="text" name="email" class="cs_form_field" disabled
                                        value="{{ $user->email }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                </div>
                                <div class="col-lg-6">
                                    <label class="cs_medium">Phone Number <span>*</span></label>
                                    <input type="text" name="phone" class="cs_form_field"
                                        value="{{ $user->phone ? $user->phone : '' }}">
                                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />

                                </div>
                                <div class="col-lg-12">
                                    <label class="cs_medium">Profile Picture</label>
                                    <input type="file" name="image" class="cs_form_field">
                                    <x-input-error class="mt-2" :messages="$errors->get('image')" />

                                </div>
                                <div>
                                    <button class="cs_btn cs_style_1 cs_type_1"><span>Save Changes</span></button>
                                </div>
                            </div>
                        </form>
                        <div class="cs_height_40 cs_height_lg_30"></div>
                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')

                            <h3 class="mb-0 cs_fs_18 cs_semibold">Password Change</h3>
                            <div class="cs_height_15 cs_height_lg_15"></div>
                            <p class="mt-1 mb-8 text-sm text-gray-600">
                                {{ __('Ensure your account is using a long, random password to stay secure.') }}
                            </p>
                            <div class="row cs_gap_y_20">
                                <div class="col-lg-6">
                                    <label for="update_password_current_password" class="cs_medium">Current Password
                                        <span>*</span></label>
                                    <input id="update_password_current_password" name="current_password"
                                        type="password" class="cs_form_field">
                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />

                                </div>
                                <div class="col-lg-6">
                                    <label for="update_password_password" class="cs_medium">New Password
                                        <span>*</span></label>
                                    <input autocomplete="new-password" type="password" id="update_password_password"
                                        name="password" class="cs_form_field">
                                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />

                                </div>
                            </div>
                            <div class="row cs_gap_y_20">
                                <div class="col-lg-6">
                                    <label for="update_password_password_confirmation" class="cs_medium">Confirm New
                                        Password
                                        <span>*</span></label>
                                    <input id="update_password_password_confirmation" name="password_confirmation"
                                        type="password" class="cs_form_field">
                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />

                                </div>

                            </div>

                            <div class="cs_height_30 cs_height_lg_30"></div>
                            <div>
                                <button type="submit" class="cs_btn cs_style_1 cs_type_1"><span>Change
                                        Password</span></button>
                            </div>
                            <div class="cs_height_30 cs_height_lg_30"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_70"></div>

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
