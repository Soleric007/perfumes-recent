<header class="cs_site_header cs_style_1 cs_primary_color cs_sticky_header cs_white_bg">
    <div class="cs_top_header cs_primary_bg cs_accent_light_color cs_light">
        <div class="container">
            <div class="cs_top_header_in">
                <div class="cs_top_header_left cs_mobile_hide">
                    <ul class="cs_top_header_list cs_mp_0">
                        <li>
                            <div class="cs_header_social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </li>
                        <li>
                            <p class="cs_header_icon_box">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 0C4.74305 0 2.49999 2.24306 2.49999 5.00001C2.49999 5.82765 2.70692 6.64825 3.10029 7.3761L7.22657 14.8389C7.28151 14.9384 7.38618 15 7.5 15C7.61382 15 7.7185 14.9384 7.77343 14.8389L11.9012 7.37364C12.2931 6.64825 12.5 5.82762 12.5 4.99998C12.5 2.24306 10.257 0 7.5 0ZM7.5 7.5C6.12153 7.5 5.00001 6.37849 5.00001 5.00001C5.00001 3.62153 6.12153 2.50002 7.5 2.50002C8.87848 2.50002 9.99999 3.62153 9.99999 5.00001C9.99999 6.37849 8.87848 7.5 7.5 7.5Z"
                                        fill="currentColor" />
                                </svg>
                                123 Anywhere Street, Anytown USA
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="cs_top_header_rihgt">
                    <ul class="cs_top_header_list cs_mp_0 cs_top_header_info_list">
                        <li>
                            <a href="{{route('faq')}}" class="cs_header_icon_box">
                                <svg width="15" height="17" viewBox="0 0 15 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 0.701523C3.36499 0.701523 0 4.17892 0 8.45207C0 9.6973 0.295015 10.9322 0.859985 12.0432L0.024995 15.257C-0.040005 15.5154 0.03 15.7944 0.214995 15.9804C0.350005 16.1251 0.535005 16.2026 0.725005 16.2026C0.790005 16.2026 0.850005 16.1923 0.915005 16.1768L4.02499 15.3139C5.10001 15.8977 6.29501 16.2026 7.5 16.2026C11.635 16.2026 15 12.7252 15 8.45207C15 4.17892 11.635 0.701523 7.5 0.701523ZM7.5 13.1541C7.04501 13.1541 6.67499 12.7717 6.67499 12.3015C6.67499 11.8313 7.04501 11.4489 7.5 11.4489C7.95499 11.4489 8.32501 11.8313 8.32501 12.3015C8.32501 12.7717 7.95499 13.1541 7.5 13.1541ZM8.82501 8.87577C8.45001 9.11343 8.22 9.50613 8.22 9.92983C8.22 10.3432 7.89499 10.6791 7.495 10.6791C7.095 10.6791 6.76999 10.3432 6.76999 9.92983C6.76999 8.97908 7.25501 8.11103 8.07001 7.59432C8.405 7.38249 8.60501 7.01045 8.59501 6.60226C8.59 6.02356 8.10502 5.51203 7.54001 5.4862C6.95002 5.4552 6.45499 5.91504 6.39999 6.51961C6.36499 6.93296 6.005 7.22749 5.60998 7.19649C5.20999 7.16031 4.92002 6.79344 4.95499 6.38009C5.07501 4.98498 6.23001 3.93609 7.60001 3.98775C8.92999 4.04459 10.025 5.20717 10.05 6.58161C10.065 7.51166 9.595 8.39006 8.82501 8.87577Z"
                                        fill="currentColor" />
                                </svg>
                                Help Center
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_main_header">
        <div class="container">
            <div class="cs_main_header_in">
                <div class="cs_main_header_left">
                    <a class="cs_site_branding" href="{{ route('index') }}">
                        <img src="/template/assets/images/logo.svg" alt="Logo">
                    </a>
                </div>
                <div class="cs_main_header_right">
                    <div class="cs_header_search_form_wrap">
                        <form action="#" class="cs_header_search_form">
                            <input type="text" placeholder="Search for products and brands"
                                class="cs_header_search_field">
                            <button class="cs_header_submit_btn">
                                <img src="/template/assets/images/icons/search.svg" alt="">
                            </button>
                        </form>
                    </div>
                    <button class="cs_mobile_search_toggle cs_mobile_show" type="button">
                        <img src="/template/assets/images/icons/search.svg" alt="">
                    </button>
                    <ul class="cs_header_list cs_mp_0">
                        @if (Route::has('login'))
                            @auth
                                <li>
                                    <div class="cs_header_credential_btns">
                                        <a href="{{ route('useraccount') }}"><img src="/template/assets/images/icons/user.svg"
                                                alt=""></a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="cs_login_btn" type="submit" >
                                                Log Out
                                            </button>
                                        </form>

                                        <!-- <span>
                                  <a href="{{ route('login') }}">Log in</a> / <a href="{{ route('register') }}">Sign Up</a>
                                </span> -->
                                    </div>
                                </li>
                            @else
                                <li>
                                    <div class="cs_header_credential_btns">
                                        <a href="{{ route('useraccount') }}"><img src="/template/assets/images/icons/user.svg"
                                                alt=""></a>
                                        <span>
                                            <a href="{{ route('login') }}">Log in</a> / <a
                                                href="{{ route('register') }}">Sign Up</a>
                                        </span>
                                    </div>
                                </li>
                            @endauth
                        @endif
                        <li>
                            <button type="button" class="cs_cart_btn">
                                <img src="/template/assets/images/icons/bag.svg" alt="">
                                <span class="cs_cart_label cs_accent_bg cs_white_color">3</span>
                                <span>My Bag <b>($54.97)</b></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_bottom_header">
        <div class="container">
            <div class="cs_bottom_header_in">
                <div class="cs_bottom_header_left">
                    <div class="cs_nav_wrap">
                        <div class="cs_site_branding_wrap cs_mobile_show">
                            <a class="cs_site_branding" href="{{ route('index') }}">
                                <img src="/template/assets/images/logo.svg" alt="Logo">
                            </a>
                            <button class="cs_close_mobile_active">
                                <i class="fa-regular fa-circle-xmark"></i>
                            </button>
                        </div>
                        <div class="cs_nav_out">
                            <!-- <div class="cs_nav_category_wrap cs_dropdown">
                    <span class="cs_nav_category_btn cs_dropdown_btn">All Categories</span>
                    <ul class="cs_nav_category_list cs_dropdown_content">
                      <li>
                        <a href="https://html.laralink.com/glowify/shop-catalog.html">
                          <img src="/template/assets/images/nav-category/1.jpeg" alt="Product">
                          <span>New Arrivals</span>
                        </a>
                      </li>
                      <li>
                        <a href="https://html.laralink.com/glowify/shop-catalog-v2.html">
                          <img src="/template/assets/images/nav-category/2.jpeg" alt="Product">
                          <span>Flash Sale</span>
                        </a>
                      </li>
                      <li>
                        <a href="https://html.laralink.com/glowify/shop-catalog-v3.html">
                          <img src="/template/assets/images/nav-category/3.jpeg" alt="Product">
                          <span>Special Offer!</span>
                        </a>
                      </li>
                      <li>
                        <a href="https://html.laralink.com/glowify/shop-catalog.html">
                          <img src="/template/assets/images/nav-category/4.jpeg" alt="Product">
                          <span>Skincare</span>
                        </a>
                      </li>
                      <li>
                        <a href="https://html.laralink.com/glowify/shop-catalog-v2.html">
                          <img src="/template/assets/images/nav-category/5.jpeg" alt="Product">
                          <span>Body Care</span>
                        </a>
                      </li>
                      <li>
                        <a href="https://html.laralink.com/glowify/shop-catalog-v3.html">
                          <img src="/template/assets/images/nav-category/6.jpeg" alt="Product">
                          <span>Haircare</span>
                        </a>
                      </li>
                      <li>
                        <a href="https://html.laralink.com/glowify/shop-catalog.html">
                          <img src="/template/assets/images/nav-category/7.jpeg" alt="Product">
                          <span>Beauty Tools</span>
                        </a>
                      </li>
                      <li>
                        <a href="https://html.laralink.com/glowify/shop-catalog-v2.html">
                          <img src="/template/assets/images/nav-category/10.jpeg" alt="Product">
                          <span>Makeup</span>
                        </a>
                      </li>
                      <li>
                        <a href="https://html.laralink.com/glowify/shop-catalog-v3.html">
                          <img src="/template/assets/images/nav-category/9.jpeg" alt="Product">
                          <span>Face Care</span>
                        </a>
                      </li>
                    </ul>
                  </div> -->
                            <nav class="cs_nav cs_mobile_active">
                                <span class="cs_mobile_tab_btn cs_mobile_show">Menu</span>
                                <ul class="cs_nav_list">
                                    <li class="">
                                        <a href="{{ route('index') }}">Home</a>

                                    </li>
                                    <li class="">
                                        <a href="{{ route('shop.show') }}">Shop</a>
                                        <!-- <ul class="cs_mega_wrapper">
                          <li class="menu-item-has-children">
                            <h4>Shop Variation</h4>
                            <ul>
                              <li><a href="{{route('shop.show')}}">Shop V1 - Default</a></li>
                              <li><a href="https://html.laralink.com/glowify/shop-v2.html">Shop V2 - Classic</a></li>
                              <li><a href="https://html.laralink.com/glowify/shop-v3.html">Shop V3 - Modern</a></li>
                              <li>
                                <h4>Shop Layout</h4>
                                <ul>
                                  <li><a href="https://html.laralink.com/glowify/shop-right-sidebar.html">With Right Sidebar</a></li>
                                  <li><a href="https://html.laralink.com/glowify/shop-four-column.html">Four Column Product </a></li>
                                  <li><a href="shop-three-column.html">Three Column Product </a></li>
                                  <li><a href="https://html.laralink.com/glowify/shop-two-column.html">Two Column Product </a></li>
                                  <li><a href="https://html.laralink.com/glowify/shop-list-view-left-sidebar.html">List View Left Sidebar</a></li>
                                  <li><a href="https://html.laralink.com/glowify/shop-list-view-right-sidebar.html">List View Right Sidebar</a></li>
                                  <li><a href="https://html.laralink.com/glowify/shop-list-view.html">List View Fullwidth</a></li>
                                  <li><a href="https://html.laralink.com/glowify/shop-without-banner.html">Shop Without Banner</a></li>
                                  <li><a href="https://html.laralink.com/glowify/shop-with-banner.html">Shop With Banner</a></li>
                                  <li><a href="https://html.laralink.com/glowify/shop-with-highlight-category.html">With Highlight Category</a></li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item-has-children">
                            <h4>Shop Catalog</h4>
                            <ul>
                              <li><a href="https://html.laralink.com/glowify/shop-catalog.html">Catalog - V1</a></li>
                              <li><a href="https://html.laralink.com/glowify/shop-catalog-v2.html">Catalog - V2</a></li>
                              <li><a href="https://html.laralink.com/glowify/shop-catalog-v3.html">Catalog - V3</a></li>
                              <li>
                                <h4>Offer Catalog</h4>
                                <ul>
                                  <li><a href="https://html.laralink.com/glowify/shop-flash-sale-catalog.html">Flash Sale Catalog - V1</a></li>
                                  <li><a href="https://html.laralink.com/glowify/shop-flash-sale-catalog-v2.html">Flash Sale Catalog - V2</a></li>
                                </ul>
                              </li>
                              <li>
                                <h4>Filter Type</h4>
                                <ul>
                                  <li><a href="https://html.laralink.com/glowify/shop-v2.html">Filter Sidebar - V1</a></li>
                                  <li><a href="https://html.laralink.com/glowify/shop-list-view-left-sidebar.html">Filter Sidebar - V2</a></li>
                                  <li><a href="https://html.laralink.com/glowify/shop-v3.html">Filter Top</a></li>
                                  <li><a href="{{route('shop.show')}}">Drawer Filter</a></li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item-has-children">
                            <h4>Page Loading</h4>
                            <ul>
                              <li><a href="{{route('shop.show')}}">Pagination</a></li>
                              <li><a href="https://html.laralink.com/glowify/shop-load-more.html">Load More</a></li>
                              <li><a href="https://html.laralink.com/glowify/shop-infinity-scroll.html">Infinity Scroll</a></li>
                              <li>
                                <h4>Other Pages</h4>
                                <ul>
                                  <li><a href="https://html.laralink.com/glowify/{{ route('useraccount') }}">My Account</a></li>
                                  <li><a href="{{route('wishlist')}}">Wishlist</a></li>
                                  <li><a href="{{route('cart')}}">Cart</a></li>
                                  <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item-has-children">
                            <a href="{{route('shop.show')}}" class="overflow-hidden cs_banner cs_style_5 cs_accent_light_bg cs_radius_10 position-relative cs_bg_filed" data-src="/template/assets/images/offer.jpeg">
                              <div class="cs_banner_text">
                                <p class="cs_fs_24 cs_white_color cs_medium">SUMMER SALE</p>
                                <h2 class="cs_fs_54 cs_white_color cs_normal cs_secondary_font">Save 20%</h2>
                                <span class="cs_banner_lavel cs_accent_strong_bg cs_white_color cs_fs_18 cs_radius_5">Shop Now</span>
                              </div>
                            </a>
                          </li>
                        </ul> -->
                                    </li>
                                    <li class="">
                                        <a href="{{route('aboutUs')}}">About</a>
                                    </li>

                                    <li class="">
                                        <a href="{{route('faq')}}">FAQ</a>

                                    </li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>

                                </ul>
                            </nav>
                            <div class="cs_header_social cs_mobile_show">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_bottom_header_right">
                    <a href="#" class="cs_header_number_wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.35" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-headset">
                            <path
                                d="M3 11h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm0 0a9 9 0 1 1 18 0m0 0v5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z" />
                            <path d="M21 16v2a4 4 0 0 1-4 4h-5" />
                        </svg>
                        <span class="cs_accent_color cs_fs_24 cs_header_number">+99327456</span>
                        <span class="cs_header_number_text">24/7 Support Center</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_header_overlay_mobile"></div>
</header>
