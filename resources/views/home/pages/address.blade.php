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
        <div class="cs_height_45 cs_height_lg_45"></div>
        <ol class="mb-0 breadcrumb cs_fs_18">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">My Account</a></li>
            <li class="breadcrumb-item active">Address</li>
        </ol>
        <div class="cs_height_30 cs_height_lg_30"></div>
      </div>
      <div class="container">
        <div class="cs_account_wrap">
          <div class="cs_account_nav cs_radius_10">
            <div class="cs_account_avatar">
              
              <h3 class=""><span>Hello,</span> <br>{{$user->name}}</h3>
            </div>
            <ul class="cs_account_nav_list cs_mp_0">
              <li>
                <a href="{{ route('useraccount') }}"><span>Dashboard</span></a>
              </li>
              <li>
                <a href="{{ route('orders') }}"><span>Orders</span></a>
              </li>
              <li class="active">
                <a href="{{ route('address') }}"><span>Address</span></a>
              </li>
              <li>
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
                <h3 class="mb-0 cs_fs_18 cs_semibold">The following addresses will be used on the checkout page by default.</h3>
              </div>
              <div class="cs_plr_25">
                <!-- <div class="cs_height_30 cs_height_lg_30"></div> -->
                <div class="row cs_gap_y_20">
                  <div class="col-md-6">
                    <div class="cs_address_card cs_radius_5">
                      <h3 class="cs_fs_24 cs_semibold">Billing address</h3>
                      <p>
                        <span class="cs_primary_color">Name:</span> {{$user->name}}<br>
                        <span class="cs_primary_color">Phone:</span> +088123098123<br>
                        <span class="cs_primary_color">Email:</span> {{$user->email}}<br>
                        <span class="cs_primary_color">Company name:</span> N/A<br>
                        <span class="cs_primary_color">Country/Region:</span> USA<br>
                        <span class="cs_primary_color">Address:</span> 772 Grand Avenue Orlando, FL 32809<br>
                        <span class="cs_primary_color">Town/City:</span> Orlando<br>
                        <span class="cs_primary_color">State:</span> Grand Avenue<br>
                        <span class="cs_primary_color">ZIP Code:</span> 203069<br>
                      </p>
                      <a href="https://html.laralink.com/RIYALLURE/update-{{ route('address') }}" class="cs_btn cs_style_2 cs_medium cs_size_md">
                        <span>Update Address</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="cs_address_card cs_radius_5">
                      <h3 class="cs_fs_24 cs_semibold">Shipping address</h3>
                      <p>You have not set up this type of address yet.</p>
                      <a href="https://html.laralink.com/RIYALLURE/add-{{ route('address') }}" class="cs_btn cs_style_2 cs_medium cs_size_md">
                        <span>Add Address</span>
                      </a>
                    </div>
                  </div>
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
