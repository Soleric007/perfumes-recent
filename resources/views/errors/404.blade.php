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
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_error text-center">
            <img class="mx-auto" src="/template/assets/images/404.svg" alt="Error">
            <h1 class="cs_fs_54">Error 404! Page not found.</h1>
            <a href="{{route('index')}}" class="cs_btn cs_style_1 cs_fs_18 cs_medium">Back to Home</a>
        </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>


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
