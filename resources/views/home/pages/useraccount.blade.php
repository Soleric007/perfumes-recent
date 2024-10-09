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


        <!-- Start Breadcamp -->
    <div class="cs_height_40 cs_height_lg_30"></div>
    <div class="cs_site_header_height_1"></div>

    <!-- End Header Section -->
    <div class="container">
      <div class="cs_height_45 cs_height_lg_45"></div>
      <ol class="mb-0 breadcrumb cs_fs_18">
        <li class="breadcrumb-item"><a href="home-v2.html">Home</a></li>
        <li class="breadcrumb-item"><a href="#">My Account</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <div class="cs_height_30 cs_height_lg_30"></div>
    </div>
    <div class="container">
      <div class="cs_account_wrap">
        <div class="cs_account_nav cs_radius_10">
          <div class="cs_account_avatar">
            <img src="/template/assets/images/avatar_1.jpeg" alt="">
            <h3 class=""><span>Hello,</span> <br>{{$user->name}}</h3>
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
                                            <button class="logout" type="submit" >
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
                <p>Name: {{$user->name}}</p>
                <p>Email: jh****oni@gmail.com</p>
                <p>Number: +088123098123</p>
              </div>
            </div>
          </div>
          <div class="cs_height_30 cs_height_lg_30"></div>
          <div class="cs_account_card cs_radius_10">
            <div class="cs_account_card_head cs_type_1">
              <h3 class="mb-0 cs_fs_18">Your Orders</h3>
              <select>
                <option value="1">All Order</option>
                <option value="2">Pending</option>
                <option value="3">Delivered</option>
                <option value="3">Canceled</option>
              </select>
            </div>
            <div class="cs_plr_25">
              <div class="table-responsive">
                <table class="m-0 cs_table_1">
                  <thead>
                    <tr>
                      <th>Order</th>
                      <th>Placed On</th>
                      <th>Status</th>
                      <th>Total</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="https://html.laralink.com/glowify/order-details.html">#129818276</a></td>
                      <td>25/05/2024</td>
                      <td class="cs_accent_color">Pending</td>
                      <td>$724</td>
                      <td class="text-end">
                        <a class="cs_text_btn" href="https://html.laralink.com/glowify/order-details.html">
                          <span>View Details</span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="https://html.laralink.com/glowify/order-details.html">#676515234</a></td>
                      <td>19/05/2024</td>
                      <td class="cs_accent_color">Pending</td>
                      <td>$876</td>
                      <td class="text-end">
                        <a class="cs_text_btn" href="https://html.laralink.com/glowify/order-details.html">
                          <span>View Details</span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="https://html.laralink.com/glowify/order-details.html">#091827653</a></td>
                      <td>14/05/2024</td>
                      <td class="cs_accent_color">Pending</td>
                      <td>$1002</td>
                      <td class="text-end">
                        <a class="cs_text_btn" href="https://html.laralink.com/glowify/order-details.html">
                          <span>View Details</span>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
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
