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
        <div class="container">
          <div class="cs_breadcamp_wrap cs_style_1 cs_accent_light_bg cs_bg_filed cs_radius_8" data-src="template/assets/images/breadcamp_bg_9.jpeg">
            <div>
              <h1 class="cs_breadcamp_title cs_fs_54 cs_semibold">Your Glowify Wish List</h1>
              <ol class="mb-0 breadcrumb cs_fs_18">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Wishlist</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- End Breadcamp -->
        <div class="cs_height_110 cs_height_lg_70"></div>
        <div class="container">
          <h2 class="mb-0 cs_fs_36 cs_medium">MY WISHLIST <span class="cs_accent_color">(5)</span></h2>
          <div class="cs_height_50 cs_height_lg_40"></div>
          <div class="cs_grid_5_column">
            <div class="cs_grid_col">
              <div class="cs_product_card cs_style_1 cs_radius_12">
                <div class="cs_product_card_in">
                  <div class="cs_product_thumb cs_center">
                    <img src="template/assets/images/product_6.png" alt="Product">
                    <div class="cs_products_btns cs_plr_25">
                      <button class="cs_btn cs_style_1 cs_medium cs_size_md w-100">
                        <img src="template/assets/images/icons/cart_white.svg" alt="">
                        <span>Add To Bag</span>
                      </button>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <div class="cs_product_category text-uppercase cs_fs_14 cs_light">
                      <a href="{{route('shop.show')}}">MAKEUP</a>
                    </div>
                    <h2 class="cs_product_title cs_fs_18 cs_normal cs_secondary_font">Dewy Finish Foundation</h2>
                    <p class="cs_product_price cs_fs_24 cs_primary_color cs_medium">$39.99</p>
                    <div class="cs_product_ratings">
                      <div class="cs_rating" data-rating="4.5">
                        <div class="cs_rating_percentage" style="width: 90%;"></div>
                      </div>
                      <div class="cs_rating_number cs_ternary_color cs_fs_14 cs_light">
                        <span>(4.5/5)</span>
                        <span> | 369 Sold</span>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="product-details.html" class="cs_product_link"></a>
              </div>
              <button class="cs_card_remove_btn w-100">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.714286 3.99996H2.14286V17.6533C2.14474 18.2751 2.41024 18.871 2.88136 19.3107C3.35247 19.7504 3.99089 19.9982 4.65714 20H15.3714C16.0327 19.9912 16.6638 19.7403 17.1288 19.3014C17.5938 18.8624 17.8553 18.2705 17.8571 17.6533V3.99996H19.2857C19.4752 3.99996 19.6568 3.92972 19.7908 3.8047C19.9247 3.67967 20 3.5101 20 3.33329C20 3.15648 19.9247 2.98691 19.7908 2.86189C19.6568 2.73686 19.4752 2.66663 19.2857 2.66663H0.714286C0.524845 2.66663 0.343164 2.73686 0.209209 2.86189C0.0752549 2.98691 0 3.15648 0 3.33329C0 3.5101 0.0752549 3.67967 0.209209 3.8047C0.343164 3.92972 0.524845 3.99996 0.714286 3.99996ZM16.4286 3.99996V17.6533C16.4286 17.922 16.3142 18.1798 16.1106 18.3698C15.907 18.5599 15.6308 18.6666 15.3429 18.6666H4.62857C4.3456 18.6597 4.07673 18.5499 3.87926 18.3606C3.68179 18.1713 3.57133 17.9175 3.57143 17.6533V3.99996H16.4286Z" fill="currentColor"/>
                  <path d="M7.14397 1.33333H12.8583C13.0477 1.33333 13.2294 1.2631 13.3633 1.13807C13.4973 1.01305 13.5725 0.843478 13.5725 0.666667C13.5725 0.489856 13.4973 0.320286 13.3633 0.195262C13.2294 0.0702379 13.0477 0 12.8583 0H7.14397C6.95453 0 6.77285 0.0702379 6.6389 0.195262C6.50494 0.320286 6.42969 0.489856 6.42969 0.666667C6.42969 0.843478 6.50494 1.01305 6.6389 1.13807C6.77285 1.2631 6.95453 1.33333 7.14397 1.33333Z" fill="currentColor"/>
                  <path d="M7.62835 16C7.81779 16 7.99947 15.9297 8.13342 15.8047C8.26738 15.6797 8.34263 15.5101 8.34263 15.3333V7.33329C8.34263 7.15648 8.26738 6.98691 8.13342 6.86189C7.99947 6.73686 7.81779 6.66663 7.62835 6.66663C7.43891 6.66663 7.25723 6.73686 7.12327 6.86189C6.98932 6.98691 6.91406 7.15648 6.91406 7.33329V15.3333C6.91406 15.5101 6.98932 15.6797 7.12327 15.8047C7.25723 15.9297 7.43891 16 7.62835 16Z" fill="currentColor"/>
                  <path d="M12.3705 16C12.56 16 12.7417 15.9297 12.8756 15.8047C13.0096 15.6797 13.0848 15.5101 13.0848 15.3333V7.33329C13.0848 7.15648 13.0096 6.98691 12.8756 6.86189C12.7417 6.73686 12.56 6.66663 12.3705 6.66663C12.1811 6.66663 11.9994 6.73686 11.8655 6.86189C11.7315 6.98691 11.6562 7.15648 11.6562 7.33329V15.3333C11.6562 15.5101 11.7315 15.6797 11.8655 15.8047C11.9994 15.9297 12.1811 16 12.3705 16Z" fill="currentColor"/>
                </svg>
                REMOVE
              </button>
            </div>
            <div class="cs_grid_col">
              <div class="cs_product_card cs_style_1 cs_radius_12">
                <div class="cs_product_card_in">
                  <div class="cs_product_thumb cs_center">
                    <img src="template/assets/images/product_7.png" alt="Product">
                    <div class="cs_products_btns cs_plr_25">
                      <button class="cs_btn cs_style_1 cs_medium cs_size_md w-100">
                        <img src="template/assets/images/icons/cart_white.svg" alt="">
                        <span>Add To Bag</span>
                      </button>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <div class="cs_product_category text-uppercase cs_fs_14 cs_light">
                      <a href="{{route('shop.show')}}">MAKEUP TOOLS</a>
                    </div>
                    <h2 class="cs_product_title cs_fs_18 cs_normal cs_secondary_font">Pro-Blend Makeup Brushes</h2>
                    <p class="cs_product_price cs_fs_24 cs_primary_color cs_medium">$29.99</p>
                    <div class="cs_product_ratings">
                      <div class="cs_rating" data-rating="4.8">
                        <div class="cs_rating_percentage" style="width: 96%;"></div>
                      </div>
                      <div class="cs_rating_number cs_ternary_color cs_fs_14 cs_light">
                        <span>(4.8/5)</span>
                        <span>| 1.5K Sold</span>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="product-details.html" class="cs_product_link"></a>
              </div>
              <button class="cs_card_remove_btn w-100">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.714286 3.99996H2.14286V17.6533C2.14474 18.2751 2.41024 18.871 2.88136 19.3107C3.35247 19.7504 3.99089 19.9982 4.65714 20H15.3714C16.0327 19.9912 16.6638 19.7403 17.1288 19.3014C17.5938 18.8624 17.8553 18.2705 17.8571 17.6533V3.99996H19.2857C19.4752 3.99996 19.6568 3.92972 19.7908 3.8047C19.9247 3.67967 20 3.5101 20 3.33329C20 3.15648 19.9247 2.98691 19.7908 2.86189C19.6568 2.73686 19.4752 2.66663 19.2857 2.66663H0.714286C0.524845 2.66663 0.343164 2.73686 0.209209 2.86189C0.0752549 2.98691 0 3.15648 0 3.33329C0 3.5101 0.0752549 3.67967 0.209209 3.8047C0.343164 3.92972 0.524845 3.99996 0.714286 3.99996ZM16.4286 3.99996V17.6533C16.4286 17.922 16.3142 18.1798 16.1106 18.3698C15.907 18.5599 15.6308 18.6666 15.3429 18.6666H4.62857C4.3456 18.6597 4.07673 18.5499 3.87926 18.3606C3.68179 18.1713 3.57133 17.9175 3.57143 17.6533V3.99996H16.4286Z" fill="currentColor"/>
                  <path d="M7.14397 1.33333H12.8583C13.0477 1.33333 13.2294 1.2631 13.3633 1.13807C13.4973 1.01305 13.5725 0.843478 13.5725 0.666667C13.5725 0.489856 13.4973 0.320286 13.3633 0.195262C13.2294 0.0702379 13.0477 0 12.8583 0H7.14397C6.95453 0 6.77285 0.0702379 6.6389 0.195262C6.50494 0.320286 6.42969 0.489856 6.42969 0.666667C6.42969 0.843478 6.50494 1.01305 6.6389 1.13807C6.77285 1.2631 6.95453 1.33333 7.14397 1.33333Z" fill="currentColor"/>
                  <path d="M7.62835 16C7.81779 16 7.99947 15.9297 8.13342 15.8047C8.26738 15.6797 8.34263 15.5101 8.34263 15.3333V7.33329C8.34263 7.15648 8.26738 6.98691 8.13342 6.86189C7.99947 6.73686 7.81779 6.66663 7.62835 6.66663C7.43891 6.66663 7.25723 6.73686 7.12327 6.86189C6.98932 6.98691 6.91406 7.15648 6.91406 7.33329V15.3333C6.91406 15.5101 6.98932 15.6797 7.12327 15.8047C7.25723 15.9297 7.43891 16 7.62835 16Z" fill="currentColor"/>
                  <path d="M12.3705 16C12.56 16 12.7417 15.9297 12.8756 15.8047C13.0096 15.6797 13.0848 15.5101 13.0848 15.3333V7.33329C13.0848 7.15648 13.0096 6.98691 12.8756 6.86189C12.7417 6.73686 12.56 6.66663 12.3705 6.66663C12.1811 6.66663 11.9994 6.73686 11.8655 6.86189C11.7315 6.98691 11.6562 7.15648 11.6562 7.33329V15.3333C11.6562 15.5101 11.7315 15.6797 11.8655 15.8047C11.9994 15.9297 12.1811 16 12.3705 16Z" fill="currentColor"/>
                </svg>
                REMOVE
              </button>
            </div>
            <div class="cs_grid_col">
              <div class="cs_product_card cs_style_1 cs_radius_12">
                <div class="cs_product_card_in">
                  <div class="cs_product_thumb cs_center">
                    <img src="template/assets/images/product_8.png" alt="Product">
                    <div class="cs_products_btns cs_plr_25">
                      <button class="cs_btn cs_style_1 cs_medium cs_size_md w-100">
                        <img src="template/assets/images/icons/cart_white.svg" alt="">
                        <span>Add To Bag</span>
                      </button>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <div class="cs_product_category text-uppercase cs_fs_14 cs_light">
                      <a href="{{route('shop.show')}}">SKINCARE</a>
                    </div>
                    <h2 class="cs_product_title cs_fs_18 cs_normal cs_secondary_font">Organic Facial Cleanser</h2>
                    <p class="cs_product_price cs_fs_24 cs_primary_color cs_medium">$19.99</p>
                    <div class="cs_product_ratings">
                      <div class="cs_rating" data-rating="4.3">
                        <div class="cs_rating_percentage" style="width: 86%;"></div>
                      </div>
                      <div class="cs_rating_number cs_ternary_color cs_fs_14 cs_light">
                        <span>(4.3/5)</span>
                        <span>| 120 Sold</span>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="product-details.html" class="cs_product_link"></a>
              </div>
              <button class="cs_card_remove_btn w-100">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.714286 3.99996H2.14286V17.6533C2.14474 18.2751 2.41024 18.871 2.88136 19.3107C3.35247 19.7504 3.99089 19.9982 4.65714 20H15.3714C16.0327 19.9912 16.6638 19.7403 17.1288 19.3014C17.5938 18.8624 17.8553 18.2705 17.8571 17.6533V3.99996H19.2857C19.4752 3.99996 19.6568 3.92972 19.7908 3.8047C19.9247 3.67967 20 3.5101 20 3.33329C20 3.15648 19.9247 2.98691 19.7908 2.86189C19.6568 2.73686 19.4752 2.66663 19.2857 2.66663H0.714286C0.524845 2.66663 0.343164 2.73686 0.209209 2.86189C0.0752549 2.98691 0 3.15648 0 3.33329C0 3.5101 0.0752549 3.67967 0.209209 3.8047C0.343164 3.92972 0.524845 3.99996 0.714286 3.99996ZM16.4286 3.99996V17.6533C16.4286 17.922 16.3142 18.1798 16.1106 18.3698C15.907 18.5599 15.6308 18.6666 15.3429 18.6666H4.62857C4.3456 18.6597 4.07673 18.5499 3.87926 18.3606C3.68179 18.1713 3.57133 17.9175 3.57143 17.6533V3.99996H16.4286Z" fill="currentColor"/>
                  <path d="M7.14397 1.33333H12.8583C13.0477 1.33333 13.2294 1.2631 13.3633 1.13807C13.4973 1.01305 13.5725 0.843478 13.5725 0.666667C13.5725 0.489856 13.4973 0.320286 13.3633 0.195262C13.2294 0.0702379 13.0477 0 12.8583 0H7.14397C6.95453 0 6.77285 0.0702379 6.6389 0.195262C6.50494 0.320286 6.42969 0.489856 6.42969 0.666667C6.42969 0.843478 6.50494 1.01305 6.6389 1.13807C6.77285 1.2631 6.95453 1.33333 7.14397 1.33333Z" fill="currentColor"/>
                  <path d="M7.62835 16C7.81779 16 7.99947 15.9297 8.13342 15.8047C8.26738 15.6797 8.34263 15.5101 8.34263 15.3333V7.33329C8.34263 7.15648 8.26738 6.98691 8.13342 6.86189C7.99947 6.73686 7.81779 6.66663 7.62835 6.66663C7.43891 6.66663 7.25723 6.73686 7.12327 6.86189C6.98932 6.98691 6.91406 7.15648 6.91406 7.33329V15.3333C6.91406 15.5101 6.98932 15.6797 7.12327 15.8047C7.25723 15.9297 7.43891 16 7.62835 16Z" fill="currentColor"/>
                  <path d="M12.3705 16C12.56 16 12.7417 15.9297 12.8756 15.8047C13.0096 15.6797 13.0848 15.5101 13.0848 15.3333V7.33329C13.0848 7.15648 13.0096 6.98691 12.8756 6.86189C12.7417 6.73686 12.56 6.66663 12.3705 6.66663C12.1811 6.66663 11.9994 6.73686 11.8655 6.86189C11.7315 6.98691 11.6562 7.15648 11.6562 7.33329V15.3333C11.6562 15.5101 11.7315 15.6797 11.8655 15.8047C11.9994 15.9297 12.1811 16 12.3705 16Z" fill="currentColor"/>
                </svg>
                REMOVE
              </button>
            </div>
            <div class="cs_grid_col">
              <div class="cs_product_card cs_style_1 cs_radius_12">
                <div class="cs_product_card_in">
                  <div class="cs_product_thumb cs_center">
                    <img src="template/assets/images/product_9.png" alt="Product">
                    <div class="cs_products_btns cs_plr_25">
                      <button class="cs_btn cs_style_1 cs_medium cs_size_md w-100">
                        <img src="template/assets/images/icons/cart_white.svg" alt="">
                        <span>Add To Bag</span>
                      </button>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <div class="cs_product_category text-uppercase cs_fs_14 cs_light">
                      <a href="{{route('shop.show')}}">HAIRCARE</a>
                    </div>
                    <h2 class="cs_product_title cs_fs_18 cs_normal cs_secondary_font">Nourishing Hair Mask</h2>
                    <p class="cs_product_price cs_fs_24 cs_primary_color cs_medium">$24.99</p>
                    <div class="cs_product_ratings">
                      <div class="cs_rating" data-rating="4.7">
                        <div class="cs_rating_percentage" style="width: 94%;"></div>
                      </div>
                      <div class="cs_rating_number cs_ternary_color cs_fs_14 cs_light">
                        <span>(4.7/5)</span>
                        <span>| 691 Sold</span>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="product-details.html" class="cs_product_link"></a>
              </div>
              <button class="cs_card_remove_btn w-100">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.714286 3.99996H2.14286V17.6533C2.14474 18.2751 2.41024 18.871 2.88136 19.3107C3.35247 19.7504 3.99089 19.9982 4.65714 20H15.3714C16.0327 19.9912 16.6638 19.7403 17.1288 19.3014C17.5938 18.8624 17.8553 18.2705 17.8571 17.6533V3.99996H19.2857C19.4752 3.99996 19.6568 3.92972 19.7908 3.8047C19.9247 3.67967 20 3.5101 20 3.33329C20 3.15648 19.9247 2.98691 19.7908 2.86189C19.6568 2.73686 19.4752 2.66663 19.2857 2.66663H0.714286C0.524845 2.66663 0.343164 2.73686 0.209209 2.86189C0.0752549 2.98691 0 3.15648 0 3.33329C0 3.5101 0.0752549 3.67967 0.209209 3.8047C0.343164 3.92972 0.524845 3.99996 0.714286 3.99996ZM16.4286 3.99996V17.6533C16.4286 17.922 16.3142 18.1798 16.1106 18.3698C15.907 18.5599 15.6308 18.6666 15.3429 18.6666H4.62857C4.3456 18.6597 4.07673 18.5499 3.87926 18.3606C3.68179 18.1713 3.57133 17.9175 3.57143 17.6533V3.99996H16.4286Z" fill="currentColor"/>
                  <path d="M7.14397 1.33333H12.8583C13.0477 1.33333 13.2294 1.2631 13.3633 1.13807C13.4973 1.01305 13.5725 0.843478 13.5725 0.666667C13.5725 0.489856 13.4973 0.320286 13.3633 0.195262C13.2294 0.0702379 13.0477 0 12.8583 0H7.14397C6.95453 0 6.77285 0.0702379 6.6389 0.195262C6.50494 0.320286 6.42969 0.489856 6.42969 0.666667C6.42969 0.843478 6.50494 1.01305 6.6389 1.13807C6.77285 1.2631 6.95453 1.33333 7.14397 1.33333Z" fill="currentColor"/>
                  <path d="M7.62835 16C7.81779 16 7.99947 15.9297 8.13342 15.8047C8.26738 15.6797 8.34263 15.5101 8.34263 15.3333V7.33329C8.34263 7.15648 8.26738 6.98691 8.13342 6.86189C7.99947 6.73686 7.81779 6.66663 7.62835 6.66663C7.43891 6.66663 7.25723 6.73686 7.12327 6.86189C6.98932 6.98691 6.91406 7.15648 6.91406 7.33329V15.3333C6.91406 15.5101 6.98932 15.6797 7.12327 15.8047C7.25723 15.9297 7.43891 16 7.62835 16Z" fill="currentColor"/>
                  <path d="M12.3705 16C12.56 16 12.7417 15.9297 12.8756 15.8047C13.0096 15.6797 13.0848 15.5101 13.0848 15.3333V7.33329C13.0848 7.15648 13.0096 6.98691 12.8756 6.86189C12.7417 6.73686 12.56 6.66663 12.3705 6.66663C12.1811 6.66663 11.9994 6.73686 11.8655 6.86189C11.7315 6.98691 11.6562 7.15648 11.6562 7.33329V15.3333C11.6562 15.5101 11.7315 15.6797 11.8655 15.8047C11.9994 15.9297 12.1811 16 12.3705 16Z" fill="currentColor"/>
                </svg>
                REMOVE
              </button>
            </div>
            <div class="cs_grid_col">
              <div class="cs_product_card cs_style_1 cs_radius_12">
                <div class="cs_product_card_in">
                  <div class="cs_product_thumb cs_center">
                    <img src="template/assets/images/product_10.png" alt="Product">
                    <div class="cs_products_btns cs_plr_25">
                      <button class="cs_btn cs_style_1 cs_medium cs_size_md w-100">
                        <img src="template/assets/images/icons/cart_white.svg" alt="">
                        <span>Add To Bag</span>
                      </button>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <div class="cs_product_category text-uppercase cs_fs_14 cs_light">
                      <a href="{{route('shop.show')}}">MAKEUP</a>
                    </div>
                    <h2 class="cs_product_title cs_fs_18 cs_normal cs_secondary_font">Bold Matte Lipstick</h2>
                    <p class="cs_product_price cs_fs_24 cs_primary_color cs_medium">$14.99</p>
                    <div class="cs_product_ratings">
                      <div class="cs_rating" data-rating="4.6">
                        <div class="cs_rating_percentage" style="width: 92%;"></div>
                      </div>
                      <div class="cs_rating_number cs_ternary_color cs_fs_14 cs_light">
                        <span>(4.6/5)</span>
                        <span>| 793 Sold</span>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="product-details.html" class="cs_product_link"></a>
              </div>
              <button class="cs_card_remove_btn w-100">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.714286 3.99996H2.14286V17.6533C2.14474 18.2751 2.41024 18.871 2.88136 19.3107C3.35247 19.7504 3.99089 19.9982 4.65714 20H15.3714C16.0327 19.9912 16.6638 19.7403 17.1288 19.3014C17.5938 18.8624 17.8553 18.2705 17.8571 17.6533V3.99996H19.2857C19.4752 3.99996 19.6568 3.92972 19.7908 3.8047C19.9247 3.67967 20 3.5101 20 3.33329C20 3.15648 19.9247 2.98691 19.7908 2.86189C19.6568 2.73686 19.4752 2.66663 19.2857 2.66663H0.714286C0.524845 2.66663 0.343164 2.73686 0.209209 2.86189C0.0752549 2.98691 0 3.15648 0 3.33329C0 3.5101 0.0752549 3.67967 0.209209 3.8047C0.343164 3.92972 0.524845 3.99996 0.714286 3.99996ZM16.4286 3.99996V17.6533C16.4286 17.922 16.3142 18.1798 16.1106 18.3698C15.907 18.5599 15.6308 18.6666 15.3429 18.6666H4.62857C4.3456 18.6597 4.07673 18.5499 3.87926 18.3606C3.68179 18.1713 3.57133 17.9175 3.57143 17.6533V3.99996H16.4286Z" fill="currentColor"/>
                  <path d="M7.14397 1.33333H12.8583C13.0477 1.33333 13.2294 1.2631 13.3633 1.13807C13.4973 1.01305 13.5725 0.843478 13.5725 0.666667C13.5725 0.489856 13.4973 0.320286 13.3633 0.195262C13.2294 0.0702379 13.0477 0 12.8583 0H7.14397C6.95453 0 6.77285 0.0702379 6.6389 0.195262C6.50494 0.320286 6.42969 0.489856 6.42969 0.666667C6.42969 0.843478 6.50494 1.01305 6.6389 1.13807C6.77285 1.2631 6.95453 1.33333 7.14397 1.33333Z" fill="currentColor"/>
                  <path d="M7.62835 16C7.81779 16 7.99947 15.9297 8.13342 15.8047C8.26738 15.6797 8.34263 15.5101 8.34263 15.3333V7.33329C8.34263 7.15648 8.26738 6.98691 8.13342 6.86189C7.99947 6.73686 7.81779 6.66663 7.62835 6.66663C7.43891 6.66663 7.25723 6.73686 7.12327 6.86189C6.98932 6.98691 6.91406 7.15648 6.91406 7.33329V15.3333C6.91406 15.5101 6.98932 15.6797 7.12327 15.8047C7.25723 15.9297 7.43891 16 7.62835 16Z" fill="currentColor"/>
                  <path d="M12.3705 16C12.56 16 12.7417 15.9297 12.8756 15.8047C13.0096 15.6797 13.0848 15.5101 13.0848 15.3333V7.33329C13.0848 7.15648 13.0096 6.98691 12.8756 6.86189C12.7417 6.73686 12.56 6.66663 12.3705 6.66663C12.1811 6.66663 11.9994 6.73686 11.8655 6.86189C11.7315 6.98691 11.6562 7.15648 11.6562 7.33329V15.3333C11.6562 15.5101 11.7315 15.6797 11.8655 15.8047C11.9994 15.9297 12.1811 16 12.3705 16Z" fill="currentColor"/>
                </svg>
                REMOVE
              </button>
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
