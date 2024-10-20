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
        <div class="cs_breadcamp_wrap cs_style_1 cs_accent_light_bg cs_bg_filed cs_radius_8" data-src="template/assets/images/bread2.jpg">
            <div>
                <h1 style="color: #fff" class="cs_breadcamp_title cs_fs_54 cs_semibold">Frequently Asked Questions</h1>
                <ol class="mb-0 breadcrumb cs_fs_18">
                    <li style="color: #fff" class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li style="color: #fff" class="breadcrumb-item active">FAQ</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Breadcamp -->
    <!-- Start FAQ Section -->
    <section>
        <div class="cs_height_120 cs_height_lg_70"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cs_section_heading cs_style_1">
                        <div class="cs_section_heading_in">
                            <h3 class="mb-0 cs_section_heading_title cs_fs_54 cs_semibold d-flex align-items-center">
                                General Questions <br>Answers!</h3>
                        </div>
                    </div>
                    <div class="cs_height_60 cs_height_lg_50"></div>
                </div>
                <div class="col-lg-7">
                    <hr>
                    <div class="cs_accordians cs_style_1 cs_light cs_type_1">
                        <div class="cs_accordian active">
                            <div class="cs_accordian_head">
                                <h3 class="mb-0 cs_accordian_title cs_primary_color cs_fs_24 fw-medium">I cant find the perfume i want?	</h3>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p class="mb-0 cs_secondary_color cs_font_26 fw-light">>If you can't find the fragrance you want, please don't hesitate to reach out to us directly! You can contact me through our social media links, and I'll be happy to assist you in finding the specific fragrance you're looking for.</p>
                            </div>
                        </div>
                        <div class="cs_accordian">
                            <div class="cs_accordian_head">
                                <h3 class="mb-0 cs_accordian_title cs_primary_color cs_fs_24 fw-medium">How long does it
                                    take for home delivery?</h3>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p class="mb-0 cs_secondary_color cs_font_26 fw-light">Home delivery typically takes 3 to 7 days, depending on your location. We strive to ensure your order arrives as quickly as possible, so you can enjoy your fragrances without delay!</p>
                            </div>
                        </div>
                        <div class="cs_accordian">
                            <div class="cs_accordian_head">
                                <h3 class="mb-0 cs_accordian_title cs_primary_color cs_fs_24 fw-medium">Do you offer
                                    international shipping?</h3>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p class="mb-0 cs_secondary_color cs_font_26 fw-light">Yes, we offer international shipping, and we are proud to provide reliable shipping throughout Nigeria. Enjoy our wide range of perfumes delivered right to your doorstep, no matter where you are in the country.</p>
                            </div>
                        </div>

                        <div class="cs_accordian">
                            <div class="cs_accordian_head">
                                <h3 class="mb-0 cs_accordian_title cs_primary_color cs_fs_24 fw-medium">Are your
                                    products cruelty-free?</h3>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p class="mb-0 cs_secondary_color cs_font_26 fw-light">Absolutely! We only source 100% cruelty-free perfumes, ensuring they are crafted with compassion and care. Enjoy a luxurious, guilt-free fragrance experience with our ethically sourced products, knowing that every purchase supports responsible and humane practices.</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="cs_height_120 cs_height_lg_70"></div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="cs_section_heading cs_style_1">
                        <div class="cs_section_heading_in">
                            <h3 class="mb-0 cs_section_heading_title cs_fs_54 cs_semibold d-flex align-items-center">
                                Payment Methods <br>Answers!</h3>
                        </div>
                    </div>
                    <div class="cs_height_60 cs_height_lg_50"></div>
                </div>
                <div class="col-lg-7">
                    <hr>
                    <div class="cs_accordians cs_style_1 cs_light cs_type_1">
                        <div class="cs_accordian active">
                            <div class="cs_accordian_head">
                                <h3 class="mb-0 cs_accordian_title cs_primary_color cs_fs_24 fw-medium">What Payment
                                    Methods Are Accepted?</h3>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p class="mb-0 cs_secondary_color cs_font_26 fw-light">We accept various payment methods for your convenience. You can easily pay through our website using major credit cards and other secure payment options. Alternatively, you can contact us directly to arrange payment via interbank transfer.</p>
                            </div>
                        </div>
                        <div class="cs_accordian">
                            <div class="cs_accordian_head">
                                <h3 class="mb-0 cs_accordian_title cs_primary_color cs_fs_24 fw-medium">Can I use a
                                    different payment method?</h3>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p class="mb-0 cs_secondary_color cs_font_26 fw-light">Yes, you can use different payment methods! In addition to our website’s secure options, feel free to contact us for arrangements with alternative payment methods, such as interbank transfer. We're here to accommodate your needs!</p>
                            </div>
                        </div>

                        <div class="cs_accordian">
                            <div class="cs_accordian_head">
                                <h3 class="mb-0 cs_accordian_title cs_primary_color cs_fs_24 fw-medium">Is it possible
                                    to cash on delivery?</h3>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p class="mb-0 cs_secondary_color cs_font_26 fw-light">Unfortunately, cash on delivery is not an option due to our security policy. We prioritize safe and secure transactions, so we encourage you to use one of our accepted payment methods for a seamless shopping experience.</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="cs_height_120 cs_height_lg_70"></div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="cs_section_heading cs_style_1">
                        <div class="cs_section_heading_in">
                            <h3 class="mb-0 cs_section_heading_title cs_fs_54 cs_semibold d-flex align-items-center">
                                Orders & Returns <br>Answers!</h3>
                        </div>
                    </div>
                    <div class="cs_height_60 cs_height_lg_50"></div>
                </div>
                <div class="col-lg-7">
                    <hr>
                    <div class="cs_accordians cs_style_1 cs_light cs_type_1">
                        <div class="cs_accordian active">
                            <div class="cs_accordian_head">
                                <h3 class="mb-0 cs_accordian_title cs_primary_color cs_fs_24 fw-medium">How Can I
                                    Cancel Or Change My Order?</h3>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p class="mb-0 cs_secondary_color cs_font_26 fw-light">You can easily cancel or change your order through our website. Simply log in to your account, navigate to your order history, and follow the prompts to make any necessary adjustments. If you need further assistance, feel free to contact us!</p>
                            </div>
                        </div>
                        <div class="cs_accordian">
                            <div class="cs_accordian_head">
                                <h3 class="mb-0 cs_accordian_title cs_primary_color cs_fs_24 fw-medium">How do I place
                                    an Order? </h3>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p class="mb-0 cs_secondary_color cs_font_26 fw-light">
                                    Placing an order is simple! Just follow these steps:

                                    Browse Our Collection: Explore our range of fragrances on the website.
                                    Select Your Favorite: Click on the perfume you wish to purchase for more details.
                                    Add to Cart: Choose your desired size and quantity, then click "Add to Cart."
                                    Review Your Cart: Once you're ready, go to your cart to review your selections.
                                    Checkout: Click on the "Checkout" button, enter your shipping information, and choose your preferred payment method.
                                    Confirm Your Order: Review your order summary and click "Place Order" to complete your purchase.</p>
                            </div>
                        </div>
                        <div class="cs_accordian">
                            <div class="cs_accordian_head">
                                <h3 class="mb-0 cs_accordian_title cs_primary_color cs_fs_24 fw-medium">How Can I
                                    Return a Product?</h3>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p class="mb-0 cs_secondary_color cs_font_26 fw-light">Once a product is delivered, it cannot be returned. Please ensure you carefully review your order before completing the purchase. If you have any questions or concerns about a product before placing your order, feel free to reach out to us for assistance!</p>
                            </div>
                        </div>
                        <div class="cs_accordian">
                            <div class="cs_accordian_head">
                                <h3 class="mb-0 cs_accordian_title cs_primary_color cs_fs_24 fw-medium">Do I need an
                                    account to place an order?</h3>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p class="mb-0 cs_secondary_color cs_font_26 fw-light">Yes, you need an account to place an order. Creating an account allows for a smoother checkout process, helps you track your orders, and provides access to exclusive offers. Signing up is quick and easy!</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_70"></div>
    </section>
    <!-- End FAQ Section -->
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
