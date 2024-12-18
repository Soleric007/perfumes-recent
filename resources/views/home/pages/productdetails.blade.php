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

    <!-- Start Product Details -->
    <div class="container">
        <div class="cs_height_45 cs_height_lg_45"></div>
        <ol class="mb-0 breadcrumb cs_fs_18">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('shop.show') }}">Shop</a></li>
            <li class="breadcrumb-item active">Details</li>
        </ol>
        <div class="cs_height_45 cs_height_lg_45"></div>
        <div class="row cs_gap_y_40">
            <div class="col-lg-6">
                <div class="cs_single_product_slider_1 cs_type_1">
                    <div class="cs_single_product_thumb">
                        <div class="cs_single_product_thumb_item cs_product_zoom">
                            <img src="/storage/{{ $product->image }}" alt="Thumb">
                        </div>
                    </div>
                    <div class="cs_height_30 cs_height_lg_30"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cs_details cs_style_1">
                    <div class="cs_product_category uppercase cs_fs_14 cs_light">
                        <a href="{{ route('shop.show') }}">{{$product->category->name ?? ''}}</a>
                    </div>
                    <h2 class="mb-0 cs_product_title cs_fs_36 cs_medium cs_secondary_font uppercase">
                        {{ $product->title }}</h2>
                    <div class="cs_height_16 cs_height_lg_16"></div>
                    <div class="cs_height_34 cs_height_lg_30"></div>
                    <p class="mb-0 cs_product_price cs_fs_54 cs_semibold cs_accent_color">N{{ $product->price }}</p>
                    @if ($product->discount > 0)
                        <div class="cs_discount"><span
                                class="cs_accent_strong_bg cs_white_color cs_fs_14 cs_light">Discount Price:</span><span
                                class="cs_fs_18">N{{ $product->discount }}</span></div>
                        <div class="cs_height_40 cs_height_lg_30"></div>
                    @endif
                    <hr>
                    <div class="cs_height_40 cs_height_lg_30"></div>
                    <ul class="cs_details_list_2 cs_mp_0 cs_light">
                        <li><b class="cs_semibold cs_primary_color">Brief Description</b> {{ $product->description }}
                        </li>
                        <li><b class="cs_semibold cs_primary_color">Stock</b> {{ $product->stock }}</li>
                    </ul>
                    <div class="cs_height_50 cs_height_lg_40"></div>

                    <div class="cs_height_30 cs_height_lg_30"></div>

                    <div class="cs_height_50 cs_height_lg_40"></div>

                    <div class="cs_height_50 cs_height_lg_40"></div>
                    <div class="cs_btn_group_1">
                        <a href="{{ route('addtocart', $product->id) }}" class="cs_btn cs_style_2 cs_fs_18 cs_medium">
                            <svg width="15" height="19" viewBox="0 0 15 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.4994 10.15C6.62507 10.151 5.77741 9.86171 5.10077 9.33137C4.42412 8.80103 3.96034 8.06245 3.78838 7.24139C3.77468 7.15491 3.78077 7.0666 3.80623 6.98259C3.8317 6.89858 3.87593 6.82088 3.93586 6.75487C3.99579 6.68886 4.06999 6.63611 4.15332 6.60029C4.23665 6.56448 4.32711 6.54644 4.41844 6.54743C4.56854 6.54534 4.71448 6.59464 4.82999 6.68647C4.9455 6.77829 5.02299 6.9066 5.04849 7.04829C5.16715 7.59074 5.4771 8.07756 5.92627 8.42698C6.37545 8.77639 6.93649 8.96712 7.51515 8.96712C8.09381 8.96712 8.65485 8.77639 9.10403 8.42698C9.5532 8.07756 9.86315 7.59074 9.98181 7.04829C10.0073 6.9066 10.0848 6.77829 10.2003 6.68647C10.3158 6.59464 10.4618 6.54534 10.6119 6.54743C10.7032 6.54644 10.7937 6.56448 10.877 6.60029C10.9603 6.63611 11.0345 6.68886 11.0944 6.75487C11.1544 6.82088 11.1986 6.89858 11.2241 6.98259C11.2495 7.0666 11.2556 7.15491 11.2419 7.24139C11.0689 8.06756 10.6005 8.81007 9.91737 9.341C9.23422 9.87193 8.37912 10.158 7.4994 10.15Z"
                                    fill="#E61F7F" />
                                <path
                                    d="M13.1075 18.1033H1.89252C1.63615 18.1037 1.38239 18.054 1.14668 17.9574C0.910966 17.8608 0.698235 17.7193 0.521424 17.5415C0.344612 17.3637 0.207417 17.1533 0.118184 16.9231C0.0289511 16.6929 -0.0104547 16.4477 0.00236435 16.2025L0.512708 5.79904C0.533829 5.33263 0.742257 4.89207 1.09447 4.56935C1.44668 4.24663 1.91544 4.0667 2.40287 4.06714H12.5971C13.0846 4.0667 13.5533 4.24663 13.9055 4.56935C14.2577 4.89207 14.4662 5.33263 14.4873 5.79904L14.9976 16.2025C15.0105 16.4477 14.9711 16.6929 14.8818 16.9231C14.7926 17.1533 14.6554 17.3637 14.4786 17.5415C14.3018 17.7193 14.089 17.8608 13.8533 17.9574C13.6176 18.054 13.3639 18.1037 13.1075 18.1033ZM2.40287 5.28007C2.23577 5.28007 2.07551 5.34365 1.95735 5.45682C1.8392 5.56999 1.77281 5.72347 1.77281 5.88352L1.26247 16.2628C1.2582 16.3446 1.27133 16.4263 1.30108 16.503C1.33082 16.5798 1.37655 16.6499 1.43549 16.7092C1.49443 16.7684 1.56534 16.8156 1.64391 16.8478C1.72248 16.88 1.80707 16.8966 1.89252 16.8964H13.1075C13.1929 16.8966 13.2775 16.88 13.3561 16.8478C13.4347 16.8156 13.5056 16.7684 13.5645 16.7092C13.6234 16.6499 13.6692 16.5798 13.6989 16.503C13.7287 16.4263 13.7418 16.3446 13.7375 16.2628L13.2272 5.85938C13.2272 5.69934 13.1608 5.54585 13.0426 5.43268C12.9245 5.31951 12.7642 5.25593 12.5971 5.25593L2.40287 5.28007Z"
                                    fill="#E61F7F" />
                                <path
                                    d="M11.2794 4.67672H10.0193V3.62069C10.0193 2.98051 9.75376 2.36655 9.28113 1.91388C8.8085 1.46121 8.16747 1.2069 7.49907 1.2069C6.83067 1.2069 6.18964 1.46121 5.71701 1.91388C5.24438 2.36655 4.97886 2.98051 4.97886 3.62069V4.67672H3.71875V3.62069C3.71875 2.66042 4.11703 1.73949 4.82598 1.06048C5.53493 0.381464 6.49647 0 7.49907 0C8.50167 0 9.46321 0.381464 10.1722 1.06048C10.8811 1.73949 11.2794 2.66042 11.2794 3.62069V4.67672Z"
                                    fill="#E61F7F" />
                            </svg>
                            ADD TO BAG
                        </a>
                        <a href="{{ route('addtocart', $product->id) }}"
                            class="cs_btn cs_style_1 cs_fs_18 cs_medium">BUY NOW</a>
                        <a href="{{ route('addToWishlist', $product->id) }}"
                            class="cs_like_btn cs_center cs_accent_color">
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
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_80 cs_height_lg_50"></div>
    </div>

    <!-- Start Related Products -->
    <div class="cs_height_120 cs_height_lg_70"></div>
    <div class="container">
        <h2 class="cs_fs_36 cs_medium cs_secondary_font">Related Products</h2>
        <div class="cs_grid_5_column cs_products_view cs_style_1">
            @foreach ($relatedProducts as $product)
                <div class="cs_grid_col">
                    <div class="cs_product_card cs_style_1 cs_radius_12">
                        <div class="cs_product_card_in">
                            <div class="cs_product_thumb cs_center">
                                <img src="/storage/{{ $product->image }}" alt="Product">
                                <div class="cs_products_btns">
                                    <a href="{{ route('addtocart', $product->id) }}"
                                        class="cs_btn cs_style_1 cs_medium cs_size_md">
                                        <img src="template/assets/images/icons/cart_white.svg" alt="">
                                        <span>Add To Bag</span>
                                    </a>
                                    <a href="{{ route('addToWishlist', $product->id) }}"
                                        class="cs_like_btn cs_center cs_accent_color">
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
                                    </a>
                                </div>
                            </div>
                            <div class="cs_product_info">
                                <div class="cs_product_category text-uppercase cs_fs_14 cs_light">
                                    <a href="{{ route('shop.show') }}">{{$product->category->name ?? ''}}</a>
                                </div>
                                <h2 class="cs_product_title cs_fs_18 cs_normal cs_secondary_font first-letter:uppercase">{{$product->title}}
                                </h2>
                                <p class="cs_product_price cs_fs_24 cs_primary_color cs_medium">N{{$product->price}}</p>

                            </div>
                        </div>
                        <a href="{{ route('shop.product.detail', $product->slug) }}" class="cs_product_link"></a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_70"></div>
    <!-- End Related Products -->

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
