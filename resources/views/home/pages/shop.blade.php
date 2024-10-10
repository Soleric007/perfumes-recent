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


    <!-- Start Breadcamp -->
    <div class="cs_height_40 cs_height_lg_30"></div>
    <div class="container">
        <div class="cs_breadcamp_wrap cs_style_1 cs_type_1 cs_accent_light_bg cs_bg_filed cs_radius_8"
            data-src="assets/images/breadcamp_bg_2.jpeg">
            <div>
                <h1 class="cs_breadcamp_title cs_fs_54 cs_semibold">Discover Our Beauty Collection</h1>
                <ol class="mb-0 breadcrumb cs_fs_18">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Breadcamp -->
    <!-- Start All Products  -->

    <div class="cs_height_80 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_filter_heading cs_style_1">
            <div class="cs_filter_heading_left">
                <h3>Sort by</h3>
                <select class="cs_custom_select">
                    <option value="1">Default sorting</option>
                    <option value="1">Sort by popularity</option>
                    <option value="2">Sort by latest</option>
                    <option value="3">Low to high price</option>
                    <option value="4">High to low price</option>
                </select>
            </div>
            <div class="cs_filter_heading_right cs_light">
                <div class="cs_view_box">
                    <span>Showing 1 - 16 of 98 results</span>
                    <div class="cs_view_box_in">
                        <button type="button" class="cs_list_view">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_57_2940)">
                                    <path
                                        d="M22.5 21H1.50001C0.671548 21 0 20.3284 0 19.5C0 18.6716 0.671548 18 1.50001 18H22.5C23.3285 18 24.0001 18.6716 24.0001 19.5C24 20.3284 23.3285 21 22.5 21Z"
                                        fill="currentColor" />
                                    <path
                                        d="M22.5 13.5H1.50001C0.671548 13.5 0 12.8284 0 12C0 11.1716 0.671548 10.5 1.50001 10.5H22.5C23.3285 10.5 24.0001 11.1715 24.0001 12C24.0001 12.8285 23.3285 13.5 22.5 13.5Z"
                                        fill="currentColor" />
                                    <path
                                        d="M22.5 5.99996H1.50001C0.671548 5.99996 0 5.32841 0 4.49995C0 3.67149 0.671548 2.99994 1.50001 2.99994H22.5C23.3285 2.99994 24.0001 3.67149 24.0001 4.49995C24.0001 5.32841 23.3285 5.99996 22.5 5.99996Z"
                                        fill="currentColor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_57_2940">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                        <button type="button" class="cs_grid_view active">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.1875 12.9375H15.75C14.1992 12.9375 12.9375 14.1992 12.9375 15.75V21.1875C12.9375 22.7383 14.1992 24 15.75 24H21.1875C22.7383 24 24 22.7383 24 21.1875V15.75C24 14.1992 22.7383 12.9375 21.1875 12.9375ZM22.125 21.1875C22.125 21.7044 21.7044 22.125 21.1875 22.125H15.75C15.2331 22.125 14.8125 21.7044 14.8125 21.1875V15.75C14.8125 15.2331 15.2331 14.8125 15.75 14.8125H21.1875C21.7044 14.8125 22.125 15.2331 22.125 15.75V21.1875ZM8.25 12.9375H2.8125C1.26169 12.9375 0 14.1992 0 15.75V21.1875C0 22.7383 1.26169 24 2.8125 24H8.25C9.80081 24 11.0625 22.7383 11.0625 21.1875V15.75C11.0625 14.1992 9.80081 12.9375 8.25 12.9375ZM9.1875 21.1875C9.1875 21.7044 8.76694 22.125 8.25 22.125H2.8125C2.29556 22.125 1.875 21.7044 1.875 21.1875V15.75C1.875 15.2331 2.29556 14.8125 2.8125 14.8125H8.25C8.76694 14.8125 9.1875 15.2331 9.1875 15.75V21.1875ZM8.25 0H2.8125C1.26169 0 0 1.26169 0 2.8125V8.25C0 9.80081 1.26169 11.0625 2.8125 11.0625H8.25C9.80081 11.0625 11.0625 9.80081 11.0625 8.25V2.8125C11.0625 1.26169 9.80081 0 8.25 0ZM9.1875 8.25C9.1875 8.76694 8.76694 9.1875 8.25 9.1875H2.8125C2.29556 9.1875 1.875 8.76694 1.875 8.25V2.8125C1.875 2.29556 2.29556 1.875 2.8125 1.875H8.25C8.76694 1.875 9.1875 2.29556 9.1875 2.8125V8.25ZM21.1875 0H15.75C14.1992 0 12.9375 1.26169 12.9375 2.8125V8.25C12.9375 9.80081 14.1992 11.0625 15.75 11.0625H21.1875C22.7383 11.0625 24 9.80081 24 8.25V2.8125C24 1.26169 22.7383 0 21.1875 0ZM22.125 8.25C22.125 8.76694 21.7044 9.1875 21.1875 9.1875H15.75C15.2331 9.1875 14.8125 8.76694 14.8125 8.25V2.8125C14.8125 2.29556 15.2331 1.875 15.75 1.875H21.1875C21.7044 1.875 22.125 2.29556 22.125 2.8125V8.25Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_50 cs_height_lg_50"></div>
        <div class="cs_grid_5_column cs_products_view cs_style_1">

            @foreach ($products as $product)
                <div class="cs_grid_col">
                    <div class="cs_product_card cs_style_1 cs_radius_12">
                        <div class="cs_product_card_in">
                            <div class="cs_product_thumb cs_center">
                                <img src="/storage/{{$product->image}}" alt="Product">
                                <div class="cs_products_btns">
                                    <a href="{{route('addtocart', $product->id)}}" class="cs_btn cs_style_1 cs_medium cs_size_md">
                                        <img src="/template/assets/images/icons/cart_white.svg" alt="">
                                        <span>Add To Bag</span>
                                    </a>
                                    <button class="cs_like_btn cs_center cs_accent_color">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 17.8873C9.71527 17.8873 9.44077 17.7842 9.22684 17.5968C8.41888 16.8903 7.63992 16.2264 6.95267 15.6408L6.94916 15.6377C4.93423 13.9207 3.19427 12.4378 1.98364 10.9771C0.630341 9.34409 0 7.79578 0 6.10434C0 4.46097 0.563507 2.94485 1.58661 1.83508C2.62192 0.712189 4.04251 0.09375 5.58716 0.09375C6.74164 0.09375 7.79892 0.45874 8.72955 1.1785C9.19922 1.54181 9.62494 1.98645 10 2.5051C10.3752 1.98645 10.8008 1.54181 11.2706 1.1785C12.2012 0.45874 13.2585 0.09375 14.413 0.09375C15.9575 0.09375 17.3782 0.712189 18.4135 1.83508C19.4366 2.94485 20 4.46097 20 6.10434C20 7.79578 19.3698 9.34409 18.0165 10.9769C16.8059 12.4378 15.0661 13.9205 13.0515 15.6374C12.363 16.224 11.5828 16.8889 10.773 17.5971C10.5592 17.7842 10.2846 17.8873 10 17.8873ZM5.58716 1.26532C4.37363 1.26532 3.25882 1.74963 2.44781 2.62915C1.62476 3.52194 1.17142 4.75607 1.17142 6.10434C1.17142 7.52692 1.70013 8.79919 2.88559 10.2296C4.03137 11.6122 5.73563 13.0645 7.70889 14.7462L7.71255 14.7492C8.4024 15.3371 9.18442 16.0036 9.99832 16.7153C10.8171 16.0023 11.6003 15.3347 12.2916 14.7458C14.2647 13.0642 15.9688 11.6122 17.1146 10.2296C18.2999 8.79919 18.8286 7.52692 18.8286 6.10434C18.8286 4.75607 18.3752 3.52194 17.5522 2.62915C16.7413 1.74963 15.6264 1.26532 14.413 1.26532C13.524 1.26532 12.7078 1.54791 11.9872 2.10516C11.3449 2.60199 10.8975 3.23004 10.6352 3.66949C10.5003 3.89548 10.2629 4.03036 10 4.03036C9.73709 4.03036 9.49966 3.89548 9.36478 3.66949C9.10263 3.23004 8.65524 2.60199 8.01285 2.10516C7.29218 1.54791 6.47598 1.26532 5.58716 1.26532Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <svg width="21" height="19" viewBox="0 0 21 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.4135 18.6287C10.1288 18.6287 9.85431 18.5255 9.64038 18.3381C8.83243 17.6317 8.05347 16.9677 7.36621 16.3821L7.3627 16.3791C5.34778 14.662 3.60782 13.1791 2.39719 11.7184C1.04388 10.0854 0.413544 8.53711 0.413544 6.84567C0.413544 5.2023 0.977051 3.68619 2.00015 2.57642C3.03546 1.45352 4.45605 0.835083 6.0007 0.835083C7.15518 0.835083 8.21246 1.20007 9.1431 1.91983C9.61276 2.28314 10.0385 2.72778 10.4135 3.24643C10.7888 2.72778 11.2143 2.28314 11.6841 1.91983C12.6148 1.20007 13.6721 0.835083 14.8265 0.835083C16.371 0.835083 17.7918 1.45352 18.8271 2.57642C19.8502 3.68619 20.4135 5.2023 20.4135 6.84567C20.4135 8.53711 19.7834 10.0854 18.4301 11.7183C17.2194 13.1791 15.4796 14.6618 13.465 16.3788C12.7765 16.9653 11.9963 17.6303 11.1866 18.3384C10.9728 18.5255 10.6981 18.6287 10.4135 18.6287ZM6.0007 6.84567C4.78717 6.84567 7.311 5.62048 6.5 6.5C5.67694 7.39279 13.465 3.42343 13.465 4.7717C13.465 6.19427 17.6416 7.48105 18.8271 8.91141C19.9729 10.294 12.8533 11.9751 14.8265 13.6568L13.465 14.8386C14.1548 15.4266 11.8651 14.8386 11.0488 15.5495C11.8676 14.8365 9.80878 16.5888 10.5 16C12.4731 14.3183 12.3192 15.0394 13.465 13.6568C14.6503 12.2264 15.5 8.92258 15.5 7.5C15.5 6.15173 14.2881 7.73846 13.465 6.84567C12.6541 5.96616 12.2621 4.41083 11.0488 4.41083C10.1598 4.41083 13.1214 2.28925 12.4007 2.8465C11.7585 3.34332 11.3111 3.97137 11.0488 4.41083C11.3117 4.41083 10.9139 4.63681 11.0488 4.41083C10.7859 4.41083 9.91321 4.63681 9.77832 4.41083C9.51617 3.97137 12.3265 4.49683 11.6841 4C13.6696 7.99918 6.88953 6.84567 6.0007 6.84567Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="cs_product_info">

                                <h2 class="text-3xl cs_product_title cs_fs_18 cs_normal cs_secondary_font">{{$product->title}}</h2>
                                <p class="cs_product_price cs_fs_24 cs_primary_color cs_medium">${{$product->price}}</p>
                                <div class="cs_product_ratings">
                                    <div class="cs_rating" data-rating="4.5">
                                        <div class="cs_rating_percentage"></div>
                                    </div>
                                    <div class="cs_rating_number cs_ternary_color cs_fs_14 cs_light">
                                        <span>(4.5/5)</span>
                                        <span> | 143 Reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('shop.product.detail', $product->id)}}" class="cs_product_link"></a>
                    </div>
                </div>
            @endforeach



        </div>
        <div class="cs_height_150 cs_height_lg_80"></div>
        <!-- End All Products  -->

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
