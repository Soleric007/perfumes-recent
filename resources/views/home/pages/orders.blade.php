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
          <li class="breadcrumb-item active">Orders</li>
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
              <li class="active">
                <a href="{{ route('orders') }}"><span>Orders</span></a>
              </li>
              {{-- <li>
                <a href="{{ route('address') }}"><span>Address</span></a>
              </li> --}}
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
                      <tr>
                        <td><a href="https://html.laralink.com/glowify/order-details.html">#239012834</a></td>
                        <td>05/05/2024</td>
                        <td class="cs_primary_color">Delivered</td>
                        <td>$700</td>
                        <td class="text-end">
                          <a class="cs_text_btn" href="https://html.laralink.com/glowify/order-details.html">
                            <span>View Details</span>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="https://html.laralink.com/glowify/order-details.html">#786123096</a></td>
                        <td>28/04/2024</td>
                        <td class="cs_ternary_color">Canceled</td>
                        <td>$702</td>
                        <td class="text-end">
                          <a class="cs_text_btn" href="https://html.laralink.com/glowify/order-details.html">
                            <span>View Details</span>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="https://html.laralink.com/glowify/order-details.html">#890187263</a></td>
                        <td>20/04/2024</td>
                        <td class="cs_primary_color">Delivered</td>
                        <td>$489</td>
                        <td class="text-end">
                          <a class="cs_text_btn" href="https://html.laralink.com/glowify/order-details.html">
                            <span>View Details</span>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="https://html.laralink.com/glowify/order-details.html">#091827374</a></td>
                        <td>19/04/2024</td>
                        <td class="cs_ternary_color">Canceled</td>
                        <td>$900</td>
                        <td class="text-end">
                          <a class="cs_text_btn" href="https://html.laralink.com/glowify/order-details.html">
                            <span>View Details</span>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="https://html.laralink.com/glowify/order-details.html">#781092837</a></td>
                        <td>10/04/2024</td>
                        <td class="cs_primary_color">Delivered</td>
                        <td>$2020</td>
                        <td class="text-end">
                          <a class="cs_text_btn" href="https://html.laralink.com/glowify/order-details.html">
                            <span>View Details</span>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="https://html.laralink.com/glowify/order-details.html">#782736489</a></td>
                        <td>25/03/2024</td>
                        <td class="cs_primary_color">Delivered</td>
                        <td>$1400</td>
                        <td class="text-end">
                          <a class="cs_text_btn" href="https://html.laralink.com/glowify/order-details.html">
                            <span>View Details</span>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="https://html.laralink.com/glowify/order-details.html">#981203982</a></td>
                        <td>10/03/2024</td>
                        <td class="cs_primary_color">Delivered</td>
                        <td>$1200</td>
                        <td class="text-end">
                          <a class="cs_text_btn" href="https://html.laralink.com/glowify/order-details.html">
                            <span>View Details</span>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="cs_table_1_footer">
                  <div class="cs_table_1_footer_left">
                    Page
                    <select>
                      <option value="1">1</option>
                      <option value="2">3</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    Of 12
                  </div>
                  <div class="cs_table_1_footer_right">
                    <ul class="mb-0 pagination justify-content-center justify-content-md-start">
                      <li class="page-item disabled">
                        <a class="page-link" href="#">
                          <i class="fa-solid fa-angles-left"></i>
                        </a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item">
                        <span class="page-link">
                          <i class="fa-solid fa-ellipsis"></i>
                        </span>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">6</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">7</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                          <i class="fa-solid fa-angles-right"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
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
