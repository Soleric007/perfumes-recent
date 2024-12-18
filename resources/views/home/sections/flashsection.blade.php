<section class="cs_accent_bg_03p">
    <div class="cs_height_140 cs_height_lg_75"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1">
            <div class="cs_section_heading_in">
                <h3 class="mb-0 cs_section_heading_title cs_fs_54 cs_semibold d-flex align-items-center">Fla<svg
                        width="31" height="52" viewBox="0 0 31 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.0632 51.8766C10.7511 52.1706 11.5509 51.9252 11.9527 51.2905L30.2339 22.2436C30.53 21.7735 30.5479 21.1798 30.28 20.6949C30.0122 20.2084 29.5004 19.9063 28.9455 19.9063H16.7446L21.2822 1.89838C21.4652 1.17089 21.0947 0.419528 20.4059 0.123473C19.7216 -0.171058 18.9167 0.0758405 18.5164 0.709591L0.235189 29.7565C-0.0608663 30.2266 -0.0787415 30.8202 0.189079 31.3052C0.456899 31.7917 0.968673 32.0937 1.52361 32.0937H13.7245L9.18691 50.1017C9.0039 50.8293 9.3743 51.5806 10.0632 51.8766Z"
                            fill="currentColor"></path>
                    </svg>h sale
                </h3>
            </div>
            <div class="cs_section_heading_right">
                <h3 class="mb-0 cs_fs_16 cs_normal cs_secondary_font">Ends in</h3>
                <div class="cs_countdown cs_style_1 cs_fs_36" data-countdate="2024-04-02T03:45:26">
                    <div class="cs_countdown_box cs_accent_bg cs_white_color cs_center" title="Hour">
                        <p class="mb-0 cs_count_hours cs_countdown_number"></p>
                    </div>
                    <div class="cs_countdown_box cs_accent_bg cs_white_color cs_center" title="Minute">
                        <p class="mb-0 cs_count_minutes cs_countdown_number"></p>
                    </div>
                    <div class="cs_countdown_box cs_accent_bg cs_white_color cs_center" title="Second">
                        <p class="mb-0 cs_count_seconds cs_countdown_number"></p>
                    </div>
                </div>
                <a class="cs_text_btn cs_accent_color cs_medium cs_fs_24" href="{{ route('shop.show') }}">
                    <span>View All</span>
                </a>
            </div>
        </div>
        <div class="cs_height_60 cs_height_lg_50"></div>
        <div class="cs_slider cs_style_1 cs_slider_gap_20 cs_show_arrow_hover">
            <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
                data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3"
                data-lg-slides="4" data-xl-slides="5" data-add-slides="5">
                <div class="cs_slider_wrapper">
                    @foreach ($products as $product)
                        <div class="cs_slider">
                            <div class="cs_product_card cs_style_1 cs_radius_12">
                                <div class="cs_product_card_in">

                                    <div class="cs_product_thumb cs_center">
                                        <img src="/storage/{{$product->image}}" alt="Product">
                                        <div class="cs_products_btns">
                                            <a href="{{route('addtocart', $product->id)}}" class="cs_btn cs_style_1 cs_medium cs_size_md">
                                                <img src="/template/assets/images/icons/cart_white.svg" alt="">
                                                <span>Add To Bag</span>
                                            </a>
                                            <a href="{{route('addToWishlist', $product->id)}}" class="cs_like_btn cs_center cs_accent_color">
                                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 17.8873C9.71527 17.8873 9.44077 17.7842 9.22684 17.5968C8.41888 16.8903 7.63992 16.2264 6.95267 15.6408L6.94916 15.6377C4.93423 13.9207 3.19427 12.4378 1.98364 10.9771C0.630341 9.34409 0 7.79578 0 6.10434C0 4.46097 0.563507 2.94485 1.58661 1.83508C2.62192 0.712189 4.04251 0.09375 5.58716 0.09375C6.74164 0.09375 7.79892 0.45874 8.72955 1.1785C9.19922 1.54181 9.62494 1.98645 10 2.5051C10.3752 1.98645 10.8008 1.54181 11.2706 1.1785C12.2012 0.45874 13.2585 0.09375 14.413 0.09375C15.9575 0.09375 17.3782 0.712189 18.4135 1.83508C19.4366 2.94485 20 4.46097 20 6.10434C20 7.79578 19.3698 9.34409 18.0165 10.9769C16.8059 12.4378 15.0661 13.9205 13.0515 15.6374C12.363 16.224 11.5828 16.8889 10.773 17.5971C10.5592 17.7842 10.2846 17.8873 10 17.8873ZM5.58716 1.26532C4.37363 1.26532 3.25882 1.74963 2.44781 2.62915C1.62476 3.52194 1.17142 4.75607 1.17142 6.10434C1.17142 7.52692 1.70013 8.79919 2.88559 10.2296C4.03137 11.6122 5.73563 13.0645 7.70889 14.7462L7.71255 14.7492C8.4024 15.3371 9.18442 16.0036 9.99832 16.7153C10.8171 16.0023 11.6003 15.3347 12.2916 14.7458C14.2647 13.0642 15.9688 11.6122 17.1146 10.2296C18.2999 8.79919 18.8286 7.52692 18.8286 6.10434C18.8286 4.75607 18.3752 3.52194 17.5522 2.62915C16.7413 1.74963 15.6264 1.26532 14.413 1.26532C13.524 1.26532 12.7078 1.54791 11.9872 2.10516C11.3449 2.60199 10.8975 3.23004 10.6352 3.66949C10.5003 3.89548 10.2629 4.03036 10 4.03036C9.73709 4.03036 9.49966 3.89548 9.36478 3.66949C9.10263 3.23004 8.65524 2.60199 8.01285 2.10516C7.29218 1.54791 6.47598 1.26532 5.58716 1.26532Z"
                                                        fill="currentColor" />
                                                </svg>
                                                <svg width="21" height="19" viewBox="0 0 21 19" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.4135 18.6287C10.1288 18.6287 9.85431 18.5255 9.64038 18.3381C8.83243 17.6317 8.05347 16.9677 7.36621 16.3821L7.3627 16.3791C5.34778 14.662 3.60782 13.1791 2.39719 11.7184C1.04388 10.0854 0.413544 8.53711 0.413544 6.84567C0.413544 5.2023 0.977051 3.68619 2.00015 2.57642C3.03546 1.45352 4.45605 0.835083 6.0007 0.835083C7.15518 0.835083 8.21246 1.20007 9.1431 1.91983C9.61276 2.28314 10.0385 2.72778 10.4135 3.24643C10.7888 2.72778 11.2143 2.28314 11.6841 1.91983C12.6148 1.20007 13.6721 0.835083 14.8265 0.835083C16.371 0.835083 17.7918 1.45352 18.8271 2.57642C19.8502 3.68619 20.4135 5.2023 20.4135 6.84567C20.4135 8.53711 19.7834 10.0854 18.4301 11.7183C17.2194 13.1791 15.4796 14.6618 13.465 16.3788C12.7765 16.9653 11.9963 17.6303 11.1866 18.3384C10.9728 18.5255 10.6981 18.6287 10.4135 18.6287ZM6.0007 6.84567C4.78717 6.84567 7.311 5.62048 6.5 6.5C5.67694 7.39279 13.465 3.42343 13.465 4.7717C13.465 6.19427 17.6416 7.48105 18.8271 8.91141C19.9729 10.294 12.8533 11.9751 14.8265 13.6568L13.465 14.8386C14.1548 15.4266 11.8651 14.8386 11.0488 15.5495C11.8676 14.8365 9.80878 16.5888 10.5 16C12.4731 14.3183 12.3192 15.0394 13.465 13.6568C14.6503 12.2264 15.5 8.92258 15.5 7.5C15.5 6.15173 14.2881 7.73846 13.465 6.84567C12.6541 5.96616 12.2621 4.41083 11.0488 4.41083C10.1598 4.41083 13.1214 2.28925 12.4007 2.8465C11.7585 3.34332 11.3111 3.97137 11.0488 4.41083C11.3117 4.41083 10.9139 4.63681 11.0488 4.41083C10.7859 4.41083 9.91321 4.63681 9.77832 4.41083C9.51617 3.97137 12.3265 4.49683 11.6841 4C13.6696 7.99918 6.88953 6.84567 6.0007 6.84567Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cs_product_info">
                                        <div class="cs_product_category text-uppercase cs_fs_14 cs_light">
                                            <a href="{{ route('shop.show') }}">RIYALLURE</a>
                                        </div>
                                        <h2 class="cs_product_title cs_fs_18 cs_normal cs_secondary_font uppercase text-2xl">
                                            {{ $product->title }}</h2>
                                            <p class="cs_product_price cs_fs_24 cs_primary_color cs_medium">
                                                ${{ $product->discount !== '0' ? $product->discount : $product->price }}

                                                <small>${{ $product->discount == '0' ? '' : $product->price }}</small>
                                            </p>
                                            <div class="cs_product_ratings">
                                                <div class="cs_rating" data-rating="4.5">
                                                    <div class="cs_rating_percentage"></div>
                                                </div>

                                            </div>
                                            <div class="cs_progress" data-progress="{{($product->stock/200) * 100}}">
                                                <div class="cs_progress_in"></div>
                                            </div>
                                            <p class="mb-0 cs_product_stock cs_fs_14 cs_light">Stock: {{$product->stock}}</p>
                                    </div>
                                </div>
                                <a href="{{route('shop.product.detail', $product->id)}}" class="cs_product_link"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="cs_pagination cs_style_1 cs_mobile_show">

            </div>

            <div class="cs_slider_arrows cs_style_1 cs_mobile_hide">
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
    </div>
    <div class="cs_height_122 cs_height_lg_80"></div>
</section>
