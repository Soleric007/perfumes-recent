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
    <div class="cs_height_40 cs_height_lg_30"></div>
    <div class="container">
        <div class="cs_breadcamp_wrap cs_style_1 cs_accent_light_bg cs_bg_filed cs_radius_8" data-src="template/assets/images/bread4.jpg">
            <div>
                <h1 style="color: #fff" class="cs_breadcamp_title cs_fs_54 cs_semibold">About RIYALLURE</h1>
                <ol class="mb-0 breadcrumb cs_fs_18">
                    <li style="color: #fff" class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li style="color: #fff" class="breadcrumb-item active">About</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Breadcamp -->
    <!-- Start About Section -->
    <section>
        <div class="cs_height_120 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_about">
                <div class="cs_about_left"><img src="/template/assets/images/about_img_1.jpeg" alt=""
                        class="cs_radius_7">
                </div>
                <div class="cs_about_right">
                    <h2 class="cs_secondary_font cs_fs_36 cs_medium">ABOUT RIYALLURE PERFUMES</h2>
                    <p class="mb-0">Riyallure is a Nigerian perfume brand dedicated to crafting exquisite fragrances that embody the unique personalities and moods of individuals. Our alluring, long-lasting scents are thoughtfully designed to evoke emotions and enhance your personal style. Each perfume is a work of art, expertly blended with rich ingredients sourced from around the world. We celebrate the beauty of self-expression, ensuring you feel confident and captivating every day. At Riyallure, we believe that a fragrance is more than just a scent; it’s an extension of who you are. Join us on this aromatic journey and discover the perfect fragrance that resonates with you.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <!-- Start Our Values -->
    <section>
        <div class="cs_height_120 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_slider cs_style_1 cs_slider_gap_20">
                <div class="cs_slider_heading_1">
                    <div class="cs_fs_36 cs_medium cs_primary_color">OUR VALUES</div>
                    <div class="cs_slider_arrows cs_style_1 cs_type_1 cs_mobile_hide">
                        <div class="cs_left_arrow cs_center">
                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M-4.76837e-07 6.00003C-4.76837e-07 5.87216 0.0488744 5.74416 0.146499 5.64653L5.1465 0.646531C5.34187 0.451156 5.65825 0.451156 5.8535 0.646531C6.04875 0.841906 6.04887 1.15828 5.8535 1.35353L1.207 6.00003L5.8535 10.6465C6.04887 10.8419 6.04887 11.1583 5.8535 11.3535C5.65812 11.5488 5.34175 11.5489 5.1465 11.3535L0.146499 6.35353C0.0488744 6.25591 -4.76837e-07 6.12791 -4.76837e-07 6.00003Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="cs_right_arrow cs_center">
                            <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.00003 6.00003C6.00003 5.87216 5.95116 5.74416 5.85353 5.64653L0.853531 0.646531C0.658156 0.451156 0.341781 0.451156 0.146531 0.646531C-0.0487188 0.841906 -0.0488437 1.15828 0.146531 1.35353L4.79303 6.00003L0.146531 10.6465C-0.0488437 10.8419 -0.0488437 11.1583 0.146531 11.3535C0.341906 11.5488 0.658281 11.5489 0.853531 11.3535L5.85353 6.35353C5.95116 6.25591 6.00003 6.12791 6.00003 6.00003Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
                    data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2"
                    data-lg-slides="3" data-xl-slides="4" data-add-slides="4">
                    <div class="cs_slider_wrapper">
                        <div class="cs_slider">
                            <div class="cs_value_box cs_radius_8">
                                <div class="cs_value_box_icon"><img src="/template/assets/images/icons/value_icon_1.svg"
                                        alt="Icon"></div>
                                <h2 class="cs_value_box_title cs_secondary_font cs_fs_24 cs_medium cs_secondary_color">
                                    Quality Assurance</h2>
                                <p class="mb-0 cs_value_box_subtitle">We prioritize quality assurance, ensuring every fragrance meets our high standards for your satisfaction.</p>
                            </div>
                        </div>
                        <div class="cs_slider">
                            <div class="cs_value_box cs_radius_8">
                                <div class="cs_value_box_icon"><img src="/template/assets/images/icons/value_icon_1.svg"
                                        alt="Icon"></div>
                                <h2 class="cs_value_box_title cs_secondary_font cs_fs_24 cs_medium cs_secondary_color">
                                    Customer Satisfaction</h2>
                                <p class="mb-0 cs_value_box_subtitle">Your happiness is our success. We prioritize your
                                    satisfaction and continuously seek ways to enhance your experience.</p>
                            </div>
                        </div>
                        <div class="cs_slider">
                            <div class="cs_value_box cs_radius_8">
                                <div class="cs_value_box_icon"><img src="/template/assets/images/icons/value_icon_1.svg"
                                        alt="Icon"></div>
                                <h2 class="cs_value_box_title cs_secondary_font cs_fs_24 cs_medium cs_secondary_color">
                                    Trust and Reliability</h2>
                                <p class="mb-0 cs_value_box_subtitle">We've built a reputation for trustworthiness and
                                    reliability. Count on us for your fragrance needs.</p>
                            </div>
                        </div>
                        <div class="cs_slider">
                            <div class="cs_value_box cs_radius_8">
                                <div class="cs_value_box_icon"><img src="/template/assets/images/icons/value_icon_1.svg"
                                        alt="Icon"></div>
                                <h2 class="cs_value_box_title cs_secondary_font cs_fs_24 cs_medium cs_secondary_color">
                                    Personalization</h2>
                                <p class="mb-0 cs_value_box_subtitle">Beauty is personal. We believe in tailoring our perfume offerings to meet your unique scent preferences and desires.</p>
                            </div>
                        </div>
                        <div class="cs_slider">
                            <div class="cs_value_box cs_radius_8">
                                <div class="cs_value_box_icon"><img
                                        src="/template/assets/images/icons/value_icon_1.svg" alt="Icon"></div>
                                <h2 class="cs_value_box_title cs_secondary_font cs_fs_24 cs_medium cs_secondary_color">
                                    Quality Assurance</h2>
                                <p class="mb-0 cs_value_box_subtitle">We prioritize quality assurance, ensuring every fragrance meets our high standards for your satisfaction.</p>
                            </div>
                        </div>
                        <div class="cs_slider">
                            <div class="cs_value_box cs_radius_8">
                                <div class="cs_value_box_icon"><img
                                        src="/template/assets/images/icons/value_icon_1.svg" alt="Icon"></div>
                                <h2 class="cs_value_box_title cs_secondary_font cs_fs_24 cs_medium cs_secondary_color">
                                    Customer Satisfaction</h2>
                                <p class="mb-0 cs_value_box_subtitle">Your happiness is our success. We prioritize your
                                    satisfaction and continuously seek ways to enhance your experience.</p>
                            </div>
                        </div>
                        <div class="cs_slider">
                            <div class="cs_value_box cs_radius_8">
                                <div class="cs_value_box_icon"><img
                                        src="/template/assets/images/icons/value_icon_1.svg" alt="Icon"></div>
                                <h2 class="cs_value_box_title cs_secondary_font cs_fs_24 cs_medium cs_secondary_color">
                                    Trust and Reliability</h2>
                                <p class="mb-0 cs_value_box_subtitle">We've built a reputation for trustworthiness and
                                    reliability. Count on us for your beauty needs.</p>
                            </div>
                        </div>
                        <div class="cs_slider">
                            <div class="cs_value_box cs_radius_8">
                                <div class="cs_value_box_icon"><img
                                        src="/template/assets/images/icons/value_icon_1.svg" alt="Icon"></div>
                                <h2 class="cs_value_box_title cs_secondary_font cs_fs_24 cs_medium cs_secondary_color">
                                    Personalization</h2>
                                <p class="mb-0 cs_value_box_subtitle">Beauty is personal. We believe in tailoring our perfume offerings to meet your unique scent preferences and desires.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_pagination cs_style_1 cs_mobile_show"></div>
            </div>
        </div>
    </section>
    <!-- End Our Values -->
    <!-- Start Road Map -->
    <div class="cs_height_120 cs_height_lg_70"></div>
    {{-- <div class="container">
        <div class="cs_accent_light_bg">
            <div class="cs_height_100 cs_height_lg_70"></div>
            <div class="text-center cs_fs_36 cs_medium cs_primary_color">MILESTONES</div>
            <div class="cs_height_30 cs_height_lg_30"></div>
            <div class="cs_roadmap_list_wrap">
                <div class="cs_height_30 cs_height_lg_10"></div>
                <div class="cs_roadmap_list_seperator">
                    <div class="cs_roadmap_list_seperator_in"></div>
                </div>
                <ul class="cs_roadmap_list cs_mp_0">
                    <li>
                        <div class="cs_roadmap_item">
                            <span class="cs_shape_box"><span></span></span>
                            <div class="cs_roadmap_year cs_accent_color cs_semibold cs_fs_36">2010</div>
                            <div class="cs_roadmap_right">
                                <h3 class="cs_fs_24 cs_medium cs_secondary_color cs_secondary_font">Inception</h3>
                                <p class="mb-0 cs_light">RIYALLURE's humble beginnings, starting as a small online store
                                    with a passion for beauty.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="cs_roadmap_item">
                            <span class="cs_shape_box"><span></span></span>
                            <div class="cs_roadmap_year cs_accent_color cs_semibold cs_fs_36">2015</div>
                            <div class="cs_roadmap_right">
                                <h3 class="cs_fs_24 cs_medium cs_secondary_color cs_secondary_font">Expansion</h3>
                                <p class="mb-0 cs_light">We expanded our product range, focusing on curating premium
                                    beauty products.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="cs_roadmap_item">
                            <span class="cs_shape_box"><span></span></span>
                            <div class="cs_roadmap_year cs_accent_color cs_semibold cs_fs_36">2018</div>
                            <div class="cs_roadmap_right">
                                <h3 class="cs_fs_24 cs_medium cs_secondary_color cs_secondary_font">Brand Launch</h3>
                                <p class="mb-0 cs_light">RIYALLURE launched its own brand, ensuring quality and
                                    affordability.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="cs_roadmap_item">
                            <span class="cs_shape_box"><span></span></span>
                            <div class="cs_roadmap_year cs_accent_color cs_semibold cs_fs_36">2020</div>
                            <div class="cs_roadmap_right">
                                <h3 class="cs_fs_24 cs_medium cs_secondary_color cs_secondary_font">1M Customers</h3>
                                <p class="mb-0 cs_light">We hit 1 million satisfied customers, a testament to our
                                    commitment to excellence.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="cs_roadmap_item">
                            <span class="cs_shape_box"><span></span></span>
                            <div class="cs_roadmap_year cs_accent_color cs_semibold cs_fs_36">2022</div>
                            <div class="cs_roadmap_right">
                                <h3 class="cs_fs_24 cs_medium cs_secondary_color cs_secondary_font">Eco Packaging</h3>
                                <p class="mb-0 cs_light">Introduction of eco-friendly packaging, contributing to a
                                    sustainable future.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cs_height_100 cs_height_lg_70"></div>
        </div>
    </div> --}}
    <!-- End Road Map -->
    <!-- Start CTA Section -->
    <div class="cs_height_120 cs_height_lg_70"></div>
    <div class="container">
        <div id="colorMe" class="overflow-hidden cs_cta cs_style_3 cs_accent_bg cs_radius_16 position-relative">
            <div class="cs_cta_text">
                <h2 class="cs_cta_title cs_white_color cs_fs_54 cs_semibold">Your fragrance journey is our journey</h2>
                <p class="cs_cta_subtitle cs_fs_18">Join us, explore our handpicked selection of products, and let's
                    embark on a fragrant experience together.</p>
                <a href="{{route('contact')}}" class="cs_btn cs_style_1 cs_medium"><span>CONTACT RIYALLURE</span></a>
            </div>
            <img src="/template/assets/images/ctaimg.png" alt="" class="cs_cta_img">
            <div class="cs_star_shape_1">
                <svg width="51" height="51" viewBox="0 0 51 51" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.975597 24.1509L8.29239 22.0555C11.5873 21.1246 14.5888 19.3618 17.0095 16.9358C19.4302 14.5099 21.1891 11.502 22.1181 8.1999L24.209 0.867266C24.3141 0.610722 24.493 0.391297 24.7229 0.236873C24.9528 0.0824499 25.2233 0 25.5 0C25.7767 0 26.0472 0.0824499 26.2771 0.236873C26.507 0.391297 26.6859 0.610722 26.791 0.867266L28.8819 8.1999C29.8109 11.502 31.5698 14.5099 33.9905 16.9358C36.4112 19.3618 39.4127 21.1246 42.7076 22.0555L50.0244 24.1509C50.3053 24.2309 50.5526 24.4004 50.7287 24.6339C50.9047 24.8674 51 25.1521 51 25.4448C51 25.7374 50.9047 26.0221 50.7287 26.2556C50.5526 26.4891 50.3053 26.6587 50.0244 26.7386L42.7076 28.834C39.4127 29.765 36.4112 31.5278 33.9905 33.9537C31.5698 36.3797 29.8109 39.3876 28.8819 42.6897L26.791 50.0223C26.7113 50.3038 26.5421 50.5516 26.3091 50.7281C26.0761 50.9045 25.792 51 25.5 51C25.208 51 24.9239 50.9045 24.6909 50.7281C24.4579 50.5516 24.2887 50.3038 24.209 50.0223L22.1181 42.6897C21.1891 39.3876 19.4302 36.3797 17.0095 33.9537C14.5888 31.5278 11.5873 29.765 8.29239 28.834L0.975597 26.7386C0.694656 26.6587 0.447395 26.4891 0.271328 26.2556C0.0952606 26.0221 0 25.7374 0 25.4448C0 25.1521 0.0952606 24.8674 0.271328 24.6339C0.447395 24.4004 0.694656 24.2309 0.975597 24.1509Z"
                        fill="#FAEFF2" />
                </svg>
            </div>
            <div class="cs_star_shape_2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.459105 11.3651L3.9023 10.3791C5.45286 9.94098 6.8653 9.11143 8.00445 7.96981C9.1436 6.82819 9.97135 5.4127 10.4085 3.85878L11.3925 0.408125C11.4419 0.287398 11.5261 0.18414 11.6343 0.11147C11.7425 0.0388 11.8698 0 12 0C12.1302 0 12.2575 0.0388 12.3657 0.11147C12.4739 0.18414 12.5581 0.287398 12.6075 0.408125L13.5915 3.85878C14.0286 5.4127 14.8564 6.82819 15.9956 7.96981C17.1347 9.11143 18.5471 9.94098 20.0977 10.3791L23.5409 11.3651C23.6731 11.4028 23.7895 11.4826 23.8723 11.5924C23.9552 11.7023 24 11.8363 24 11.974C24 12.1117 23.9552 12.2457 23.8723 12.3556C23.7895 12.4655 23.6731 12.5453 23.5409 12.5829L20.0977 13.569C18.5471 14.0071 17.1347 14.8366 15.9956 15.9782C14.8564 17.1198 14.0286 18.5353 13.5915 20.0892L12.6075 23.5399C12.57 23.6724 12.4904 23.789 12.3808 23.872C12.2711 23.9551 12.1374 24 12 24C11.8626 24 11.7289 23.9551 11.6192 23.872C11.5096 23.789 11.43 23.6724 11.3925 23.5399L10.4085 20.0892C9.97135 18.5353 9.1436 17.1198 8.00445 15.9782C6.8653 14.8366 5.45286 14.0071 3.9023 13.569L0.459105 12.5829C0.326897 12.5453 0.210537 12.4655 0.127682 12.3556C0.0448284 12.2457 0 12.1117 0 11.974C0 11.8363 0.0448284 11.7023 0.127682 11.5924C0.210537 11.4826 0.326897 11.4028 0.459105 11.3651Z"
                        fill="#FAEFF2" />
                </svg>
            </div>
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_70"></div>
    <!-- End CTA Section -->
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
