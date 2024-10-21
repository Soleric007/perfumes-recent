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


    <div class="cs_height_40 cs_height_lg_30"></div>
    <div class="container">
        <div class="cs_breadcamp_wrap cs_style_1 cs_accent_light_bg cs_bg_filed cs_radius_8"
            data-src="template/assets/images/bread4.jpg">
            <div>
                <h1 style="color: #fff" class="cs_breadcamp_title cs_fs_54 cs_semibold">Contact Us</h1>
                <ol class="mb-0 breadcrumb cs_fs_18">
                    <li style="color: #fff" class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li style="color: #fff" class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_contact_section cs_gray_bg_4 cs_radius_10">
            <div class="row align-items-center cs_gap_y_40">
                <div class="col-lg-6">
                    <div class="cs_contact_form_wrap">
                        <h2 class="cs_fs_36 cs_medium text-uppercase cs_secondary_font">GET IN TOUCH</h2>
                        <p class="cs_light">Have a question or need assistance? Feel free to reach out to us by filling
                            out the contact form below. We'll get back to you as soon as possible.</p>
                        <form action="{{ route('send-mail') }}" method="POST" class="cs_contact_form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="cs_semibold">Name<span>*</span></label>
                                    <input type="text" name="name" class="cs_form_field">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    <div class="cs_height_15 cs_height_lg_15"></div>
                                </div>
                                <div class="col-lg-6">
                                    <label class="cs_semibold">Email Address<span>*</span></label>
                                    <input type="email" name="email" class="cs_form_field">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    <div class="cs_height_15 cs_height_lg_15"></div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="cs_semibold">Subject<span>*</span></label>
                                    <input type="text" name="subject" class="cs_form_field">
                                    <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                                    <div class="cs_height_15 cs_height_lg_15"></div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="cs_semibold">Message<span>*</span></label>
                                    <textarea cols="30" name="message" rows="10" class="cs_form_field"></textarea>
                                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                                    <div class="cs_height_30 cs_height_lg_30"></div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="cs_btn cs_style_1 cs_fs_18 w-100"><span>SEND
                                            MESSAGE</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1">
                    <div class="cs_contact_info cs_radius_8 cs_accent_bg">
                        <img src="template/assets/images/contact_info_img.svg" alt=""
                            class="cs_contact_info_img">
                        <h2 class="cs_normal cs_fs_36 cs_white_color cs_secondary_font">CONTACT INFORMATION</h2>
                        <p class="cs_white_color cs_light">For immediate assistance, you can contact us directly:</p>
                        <div class="cs_contact_info_item">

                            <div class="cs_contact_info_right">
                                <h4 class="cs_fs_16 cs_semibold cs_white_color cs_secondary_font">Customer Support</h4>
                                <a href="mailto:riyallure@gmail.com"
                                    class="cs_light cs_white_color">riyallure@gmail.com</a>
                            </div>
                        </div>
                        <div class="cs_contact_info_item">
                            <div class="cs_contact_info_icon"><img src="template/assets/images/icons/contact_icon_2.svg"
                                    alt="Icon"></div>
                            <div class="cs_contact_info_right">
                                <h4 class="cs_fs_16 cs_semibold cs_white_color cs_secondary_font">Sales Inquiries</h4>
                                <a href="mailto:riyallure@gmail.com"
                                    class="cs_light cs_white_color">riyallure@gmail.com</a>
                            </div>
                        </div>
                        <div class="cs_contact_info_item">
                            <div class="cs_contact_info_icon"><img
                                    src="template/assets/images/icons/contact_icon_3.svg" alt="Icon"></div>
                            <div class="cs_contact_info_right">
                                <h4 class="cs_fs_16 cs_semibold cs_white_color cs_secondary_font">Phone</h4>
                                <a href="tel:09162820046" class="cs_light cs_white_color">09162820046</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_70"></div>
        <!-- Start Google Map -->
        <div class="cs_map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126846.01691772758!2d3.2076318282771243!3d6.529511488361946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9228fa2a3999%3A0xd7a8324bddbba1f0!2sIkeja%2C%20Lagos!5e0!3m2!1sen!2sng!4v1729160733477!5m2!1sen!2sng"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End Google Map -->
    </div>
    <div class="cs_height_120 cs_height_lg_70"></div>

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
