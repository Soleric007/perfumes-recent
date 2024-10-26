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



    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('sweetalert::alert')

    <!-- Start Header Section -->
    @include('home.sections.header')

    <div class="cs_site_header_height_1"></div>


    <!-- Start Breadcamp -->
    <div class="cs_height_40 cs_height_lg_30"></div>
    <div class="container">
        <div class="cs_breadcamp_wrap cs_style_1 cs_accent_light_bg cs_bg_filed cs_radius_8"
            data-src="template/assets/images/bread3.jpg">
            <div>
                <h1 style="color: #fff" class="cs_breadcamp_title cs_fs_54 cs_semibold">Your RIYALLURE Cart</h1>
                <ol class="mb-0 breadcrumb cs_fs_18">
                    <li style="color: #fff" class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li style="color: #fff" class="breadcrumb-item active">Cart</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Breadcamp -->
    <div class="cs_height_120 cs_height_lg_70"></div>
    <div class="container">
        <div class="row cs_gap_y_40">
            <div class="col-lg-7">
                <h2 class="mb-0 cs_fs_36 cs_secondary_font cs_medium">MY CART
                    ({{ session('cart') ? count(session('cart')) : 0 }})</h2>
                <div class="cs_height_40 cs_height_lg_40"></div>


                @php
                    $subtotal = 0;
                    $totalshippingfee = 0;
                    foreach ((array) session('cart') as $id => $details) {
                        $discount = floatval($details['discount']);
                        $price = floatval($details['price']);
                        $quantity = intval($details['quantity']);
                        $shippingFee = floatval($details['shippingfee']);

                        $subtotal += ($discount !== 0 ? $discount : $price) * $quantity;
                        $totalshippingfee += $shippingFee;
                    }
                    $total = $subtotal + $totalshippingfee;
                @endphp


                @if (session('cart'))

                    <ul class="cs_cart_list cs_mp_0">
                        @foreach (session('cart') as $id => $details)
                            <li data-id="{{ $id }}">
                                <div class="cs_product_card cs_style_11 cs_radius_10">
                                    <a href="" class="cs_product_thumb">
                                        <img src="/storage/{{ $details['image'] }}" alt="Product">
                                    </a>
                                    <div class="cs_product_card_right">

                                        <h2 class="cs_product_title cs_fs_24 cs_medium cs_secondary_font">
                                            <a href="">{{ $details['name'] }}</a>
                                        </h2>
                                        <p class="cs_product_price cs_fs_24 cs_primary_color cs_medium cs_accent_color">
                                            N{{ $details['discount'] !== '0' ? $details['discount'] : $details['price'] }}
                                        </p>
                                        <div class="flex flex-col gap-2">
                                            <label for="quantity" class="text-xl">Quantity:</label>
                                            <input type="number" value="{{ $details['quantity'] }}"
                                                class="form-control quantity update-cart" />
                                        </div>
                                        <div>
                                            <h3>
                                                <span class="cs_fs_24 cs_medium cs_primary_color">Subtotal:</span>
                                                <span
                                                    class="cs_fs_24 cs_medium cs_primary_color">{{ $details['quantity'] . ' x ' . ($details['discount'] !== '0' ? $details['discount'] : $details['price']) }}
                                                    =
                                                    N{{ $details['quantity'] * ($details['discount'] !== '0' ? $details['discount'] : $details['price']) }}</span>
                                            </h3>
                                        </div>

                                        <button class="cs_product_card_close remove-from-cart">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.02556 21C0.822736 21 0.624454 20.9399 0.455797 20.8272C0.287141 20.7146 0.155687 20.5544 0.0780629 20.367C0.000439235 20.1796 -0.0198669 19.9734 0.0197131 19.7745C0.0592931 19.5756 0.156981 19.3929 0.30042 19.2495L19.2493 0.300367C19.4416 0.108045 19.7024 0 19.9744 0C20.2464 0 20.5072 0.108045 20.6996 0.300367C20.8919 0.49269 20.9999 0.753534 20.9999 1.02552C20.9999 1.2975 20.8919 1.55835 20.6996 1.75067L1.75071 20.6998C1.65557 20.7951 1.54253 20.8707 1.41809 20.9222C1.29364 20.9737 1.16025 21.0002 1.02556 21Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M19.9744 21C19.8397 21.0002 19.7063 20.9737 19.5818 20.9222C19.4574 20.8707 19.3444 20.7951 19.2492 20.6998L0.300364 1.75067C0.108044 1.55835 0 1.2975 0 1.02552C0 0.753534 0.108044 0.49269 0.300364 0.300367C0.492684 0.108045 0.753525 0 1.02551 0C1.29749 0 1.55833 0.108045 1.75065 0.300367L20.6995 19.2495C20.843 19.3929 20.9406 19.5756 20.9802 19.7745C21.0198 19.9734 20.9995 20.1796 20.9219 20.367C20.8442 20.5544 20.7128 20.7146 20.5441 20.8272C20.3755 20.9399 20.1772 21 19.9744 21Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <a href="{{ route('shop.show') }}">
                        <p class="cs_empty_cart_text cs_fs_18 cs_medium">No items in your cart. Start shopping now.</p>
                    </a>
                @endif
            </div>
            <div class="col-xxl-4 col-lg-5 offset-xxl-1">
                <form action="{{ route('checkout') }}" class="cs_order_card cs_accent_light_bg cs_radius_10">
                    <h3 class="cs_order_card_title cs_fs_24 cs_medium cs_secondary_font">YOUR ORDER</h3>

                    <ul class="cs_card_price_list cs_mp_0">
                        <li>
                            <span class="cs_light">Items</span>
                            <span class="cs_light">Price</span>
                        </li>
                        <li>
                            <span class="cs_light">Subtotal</span>
                            <span class="cs_semibold cs_primary_color">N{{ $subtotal }}</span>
                        </li>
                        <li>
                            <span class="cs_light">Shipping Fee</span>
                            <span class="cs_semibold cs_primary_color">N{{ $totalshippingfee }}</span>
                        </li>
                        <li class="cs_total_price">
                            <span class="cs_medium cs_fs_24 cs_primary_color">Total</span>
                            <span class="cs_medium cs_fs_24 cs_primary_color">N{{ $total }}</span>
                        </li>
                    </ul>

                    <div class="cs_height_40 cs_height_lg_30"></div>
                    <button class="cs_btn cs_style_1 cs_fs_18 w-100" type="submit"><span>PROCEED TO
                            CHECKOUT</span></button>
                </form>
            </div>
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_70"></div>

    <!-- End FAQ Section -->
    <!-- Start Footer Section -->

    @include('home.sections.footer')

    <!-- End Footer Section -->
    <!-- Script -->
    <script src="/template/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/template/assets/js/jquery.slick.min.js"></script>
    <script src="/template/assets/js/select2.min.js"></script>
    <script src="/template/assets/js/main.js"></script>
    <script type="text/javascript">
        function confirmation(e) {
            var urlToredirect = e.currentTarget.getAttribute('href');
            swal({
                    title: "Are you sure to remove this product",
                    text: "You will not be able to revert this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willcancel) => {
                    if (willcancel) {
                        window.location.href = urlToredirect;
                    }
                });
        }
    </script>
    <script type="text/javascript">
        $(".update-cart").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('updatecart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("li").attr("data-id"),
                    quantity: ele.parents("li").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            swal({
                title: "Are you sure want to remove?",
                text: "You will not be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willRemove) => {
                if (willRemove) {
                    $.ajax({
                        url: '{{ url('cart/remove') }}/' + ele.parents("li").attr("data-id"),
                        method: "GET",
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            window.location.reload();
                        },
                        error: function(xhr, status, error) {
                            alert("Failed to remove item from cart.");
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
