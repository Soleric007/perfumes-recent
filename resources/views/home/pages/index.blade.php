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

     <!-- End Header Section -->
     <!-- Start Hero Section -->
     <div class="cs_height_40 cs_height_lg_30"></div>
     @include('home.sections.herosection')
     <!-- End Hero Section -->
     <!-- Start Category Section -->
     @include('home.sections.category')
     <!-- End Category Section -->
     <!-- Start Flash Sale Section -->
     @include('home.sections.flashsection')
     <!-- End Flash Sale Section -->
     <!-- Start Featured Products Section -->
     @include('home.sections.featuredproducts')

     <!-- End Featured Products Section -->

     <!-- Start New in Store -->

     {{-- @include('home.sections.newinstore') --}}
     <!-- End New in Store -->
     <!-- Start Banner Section -->
     <div class="cs_height_150 cs_height_lg_80"></div>
     @include('home.sections.bannersection')

     <!-- End Banner Section -->
     <!-- Start Feature Section -->
     @include('home.sections.features')
     <!-- End Feature Section -->
     <!-- Start FAQ Section -->
     @include('home.sections.faq')

     <!-- End FAQ Section -->
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
