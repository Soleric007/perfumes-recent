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
    <div class="cs_site_header_height_1"></div>

    <!-- End Header Section -->
    <div class="container">
        <div class="cs_height_45 cs_height_lg_45"></div>
        <ol class="mb-0 breadcrumb cs_fs_18">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">My Account</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
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
                    <li class="active">
                        <a href="{{ route('useraccount') }}"><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ route('orders') }}"><span>Orders</span></a>
                    </li>
                    <li>
                        <a href="{{ route('address') }}"><span>Address</span></a>
                    </li>
                    <li>
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
                    <div class="cs_account_card_head">
                        <h3 class="mb-0 cs_fs_18">Personal Profile</h3>
                        <a class="cs_text_btn cs_accent_color cs_medium" href="{{ route('accountdetails') }}">
                            <span>Edit</span>
                        </a>
                    </div>
                    <div class="cs_account_body">
                        <div class="cs_personal_info">
                            <p>Name: {{ $user->name }}</p>
                            <p>Email: {{ $user->email }}</p>
                            <p>Number: {{ $user->phone }}</p>
                        </div>
                    </div>
                </div>
                <div class="cs_height_30 cs_height_lg_30"></div>
                
            </div>
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_70"></div>

    <!-- Start Footer Section -->


    @include('home.sections.footer')

    <!-- End Footer Section -->
    <!-- Script -->
    <script src="/template/assets/js/jquery-3.6.0.min.js"></script>

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
