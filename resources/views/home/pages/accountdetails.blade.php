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
            <li class="breadcrumb-item"><a href="home-v2.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">My Account</a></li>
          <li class="breadcrumb-item active">Account Details</li>
        </ol>
        <div class="cs_height_30 cs_height_lg_30"></div>
      </div>
      <div class="container">
        <div class="cs_account_wrap">
          <div class="cs_account_nav cs_radius_10">
            <div class="cs_account_avatar">
              <img src="template/assets/images/avatar_1.jpeg" alt="">
              <h3 class=""><span>Hello,</span> <br>{{$user->name}}</h3>
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
                                                <button class="logout" type="submit" >
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
              <div class="cs_plr_25">
                <hr>
                <div class="cs_height_25 cs_height_lg_25"></div>
                <div class="row cs_gap_y_20">
                  <div class="col-lg-6">
                    <label class="cs_medium">Full Name <span>*</span></label>
                    <input type="text" class="cs_form_field" value="{{$user->name}}">
                  </div>

                  <div class="col-lg-6">
                    <label class="cs_medium">Email <span>*</span></label>
                    <input type="text" class="cs_form_field" disabled value="{{$user->email}}">
                  </div>
                  <div class="col-lg-12">
                    <label class="cs_medium">Thumbnail</label>
                    <input type="file" class="cs_form_field">
                  </div>
                </div>
                <div class="cs_height_40 cs_height_lg_30"></div>
                <h3 class="mb-0 cs_fs_18 cs_semibold">Password Change</h3>
                <div class="cs_height_15 cs_height_lg_15"></div>
                <div class="row cs_gap_y_20">
                  <div class="col-lg-6">
                    <label class="cs_medium">Current Password <span>*</span></label>
                    <input type="password" class="cs_form_field">
                  </div>
                  <div class="col-lg-6">
                    <label class="cs_medium">New Password <span>*</span></label>
                    <input type="password" class="cs_form_field">
                  </div>
                </div>
                <div class="cs_height_30 cs_height_lg_30"></div>
                <div>
                  <button class="cs_btn cs_style_1 cs_type_1"><span>Save Changes</span></button>
                </div>
                <div class="cs_height_30 cs_height_lg_30"></div>
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
