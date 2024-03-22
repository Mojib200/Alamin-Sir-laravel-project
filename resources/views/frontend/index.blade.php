@extends('frontend.frontend_master')
@section('content')
    <!-- sidebar cart - end
                            ================================================== -->

    <!-- slider_section - start
                            ================================================== -->

    <section class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-3">

                    {{-- login success message --}}
                    @if (session('log_success'))
                        <div class="alert alert-success text-center">
                            {{ Auth::user()->name . session('log_success') }}
                        </div>
                    @endif

                    <div class="main_slider" data-slick='{"arrows": false}'>
                        <div class="slider_item set-bg-image"
                            data-background="{{ asset('/frontend/frontend_asset') }}/images/slider/slide-2.jpg">
                            <div class="slider_content">
                                <h3 class="small_title" data-animation="fadeInUp2" data-delay=".2s">Clothing</h3>
                                <h4 class="big_title" data-animation="fadeInUp2" data-delay=".4s">Smart blood <span>Pressure
                                        monitor</span></h4>
                                <p data-animation="fadeInUp2" data-delay=".6s">The best gadgets collection 2021</p>
                                <div class="item_price" data-animation="fadeInUp2" data-delay=".6s">
                                    <del>$430.00</del>
                                    <span class="sale_price">$350.00</span>
                                </div>
                                <a class="btn btn_primary" href="shop_details.html" data-animation="fadeInUp2"
                                    data-delay=".8s">Start Buying</a>
                            </div>
                        </div>
                        <div class="slider_item set-bg-image"
                            data-background="{{ asset('/frontend/frontend_asset') }}/images/slider/slide-3.jpg">
                            <div class="slider_content">
                                <h3 class="small_title" data-animation="fadeInUp2" data-delay=".2s">Clothing</h3>
                                <h4 class="big_title" data-animation="fadeInUp2" data-delay=".4s">Smart blood <span>Pressure
                                        monitor</span></h4>
                                <p data-animation="fadeInUp2" data-delay=".6s">The best gadgets collection 2021</p>
                                <div class="item_price" data-animation="fadeInUp2" data-delay=".6s">
                                    <del>$430.00</del>
                                    <span class="sale_price">$350.00</span>
                                </div>
                                <a class="btn btn_primary" href="shop_details.html" data-animation="fadeInUp2"
                                    data-delay=".8s">Start Buying</a>
                            </div>
                        </div>
                        <div class="slider_item set-bg-image"
                            data-background="{{ asset('/frontend/frontend_asset') }}/images/slider/slide-1.jpg">
                            <div class="slider_content">
                                <h3 class="small_title" data-animation="fadeInUp2" data-delay=".2s">Clothing</h3>
                                <h4 class="big_title" data-animation="fadeInUp2" data-delay=".4s">Smart blood <span>Pressure
                                        monitor</span></h4>
                                <p data-animation="fadeInUp2" data-delay=".6s">The best gadgets collection 2021</p>
                                <div class="item_price" data-animation="fadeInUp2" data-delay=".6s">
                                    <del>$430.00</del>
                                    <span class="sale_price">$350.00</span>
                                </div>
                                <a class="btn btn_primary" href="shop_details.html" data-animation="fadeInUp2"
                                    data-delay=".8s">Start Buying</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider_section - end
                            ================================================== -->

    <!-- policy_section - start
                            ================================================== -->
    <section class="policy_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="policy-wrap">
                        <div class="policy_item">
                            <div class="item_icon">
                                <i class="icon icon-Truck"></i>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Free Shipping</h3>
                                <p>
                                    Free shipping on all US order
                                </p>
                            </div>
                        </div>

                        <div class="policy_item">
                            <div class="item_icon">
                                <i class="icon icon-Headset"></i>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Support 24/ 7</h3>
                                <p>
                                    Contact us 24 hours a day
                                </p>
                            </div>
                        </div>

                        <div class="policy_item">
                            <div class="item_icon">
                                <i class="icon icon-Wallet"></i>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">100% Money Back</h3>
                                <p>
                                    You have 30 days to Return
                                </p>
                            </div>
                        </div>

                        <div class="policy_item">
                            <div class="item_icon">
                                <i class="icon icon-Starship"></i>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">90 Days Return</h3>
                                <p>
                                    If goods have problems
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- policy_section - end
                            ================================================== -->


    <!-- products-with-sidebar-section - start
                            ================================================== -->
    <section class="products-with-sidebar-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-3">
                    <div class="best-selling-products">
                        <div class="sec-title-link">
                            <h3>Best selling</h3>
                            <div class="view-all"><a href="#">View all<i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="product-area clearfix">
                            @foreach ($product as $product)
                                <div class="grid">
                                    <div class="product-pic">
                                        <img src="{{ asset('/uploads/product') }}/{{ $product->thumbnail }}" alt>
                                        @if ($product->regular_price > $product->discount_price)
                                            @if ($product->discount_price)
                                                <span class="theme-badge-2">
                                                    {{ round(($product->regular_price - $product->discount_price) / ($product->regular_price / 100), 2) }}
                                                    % off</span>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">{{ $product->name }}</a></h4>
                                        <p><a href="{{route('product_deatiles',$product->id)}}">{{ Str::limit($product->description, 20) }} </a></p>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="price">
                                            <span class="price">

                                                @if ($product->discount_price && $product->regular_price > $product->discount_price)
                                                    <ins> <span class="woocommerce-Price-amount amount">
                                                            <bdi>
                                                                <span
                                                                    class="woocommerce-Price-currencySymbol">$</span>{{ $product->discount_price }}
                                                            </bdi>
                                                    </ins>
                                            </span>
                                            <del aria-hidden="true">
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        <span
                                                            class="woocommerce-Price-currencySymbol">$</span>{{ $product->regular_price }}
                                                    </bdi>
                                                </span>
                                            </del>
                                        @elseif($product->regular_price)
                                            <ins> <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        <span
                                                            class="woocommerce-Price-currencySymbol">$</span>{{ $product->regular_price }}
                                                    </bdi>
                                            </ins>
                                        </span>
                            @endif




                            <div class="add-cart-area">
                                <a  href="{{route('product_deatiles',$product->id)}}" class="add-to-cart btn btn-success">Deatiles</a>
                            </div>
                        </div>
                    </div>
                    @endforeach




                </div>
            </div>

            <div class="top_category_wrap">
                <div class="sec-title-link">
                    <h3>Top categories</h3>
                </div>
                <div class="top_category_carousel2" data-slick='{"dots": false}'>
                    <div class="slider_item">
                        <div class="category_boxed">
                            <a href="#!">
                                <span class="item_image">
                                    <img src="{{ asset('/frontend/frontend_asset') }}/images/categories/category_1.png"
                                        alt="image_not_found">
                                </span>
                                <span class="item_title">Men's Watches</span>
                            </a>
                        </div>
                    </div>

                    <div class="slider_item">
                        <div class="category_boxed">
                            <a href="#!">
                                <span class="item_image">
                                    <img src="{{ asset('/frontend/frontend_asset') }}/images/categories/category_2.png"
                                        alt="image_not_found">
                                </span>
                                <span class="item_title">iPad</span>
                            </a>
                        </div>
                    </div>

                    <div class="slider_item">
                        <div class="category_boxed">
                            <a href="#!">
                                <span class="item_image">
                                    <img src="{{ asset('/frontend/frontend_asset') }}/images/categories/category_3.png"
                                        alt="image_not_found">
                                </span>
                                <span class="item_title">iPhone</span>
                            </a>
                        </div>
                    </div>

                    <div class="slider_item">
                        <div class="category_boxed">
                            <a href="#!">
                                <span class="item_image">
                                    <img src="{{ asset('/frontend/frontend_asset') }}/images/categories/category_4.png"
                                        alt="image_not_found">
                                </span>
                                <span class="item_title">Headphone</span>
                            </a>
                        </div>
                    </div>

                    <div class="slider_item">
                        <div class="category_boxed">
                            <a href="#!">
                                <span class="item_image">
                                    <img src="{{ asset('/frontend/frontend_asset') }}/images/categories/category_5.png"
                                        alt="image_not_found">
                                </span>
                                <span class="item_title">Mac Mini</span>
                            </a>
                        </div>
                    </div>

                    <div class="slider_item">
                        <div class="category_boxed">
                            <a href="#!">
                                <span class="item_image">
                                    <img src="{{ asset('/frontend/frontend_asset') }}/images/categories/category_1.png"
                                        alt="image_not_found">
                                </span>
                                <span class="item_title">Men's Watches</span>
                            </a>
                        </div>
                    </div>

                    <div class="slider_item">
                        <div class="category_boxed">
                            <a href="#!">
                                <span class="item_image">
                                    <img src="{{ asset('/frontend/frontend_asset') }}/images/categories/category_2.png"
                                        alt="image_not_found">
                                </span>
                                <span class="item_title">CCTV Camera</span>
                            </a>
                        </div>
                    </div>

                    <div class="slider_item">
                        <div class="category_boxed">
                            <a href="#!">
                                <span class="item_image">
                                    <img src="{{ asset('/frontend/frontend_asset') }}/images/categories/category_3.png"
                                        alt="image_not_found">
                                </span>
                                <span class="item_title">CCTV Camera</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel_nav carousel-nav-top-right">
                    <button type="button" class="tc_left_arrow"><i class="fal fa-long-arrow-alt-left"></i></button>
                    <button type="button" class="tc_right_arrow"><i class="fal fa-long-arrow-alt-right"></i></button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 order-lg-9">
            <div class="product-sidebar">
                <div class="widget latest_product_carousel">
                    <div class="title_wrap">
                        <h3 class="area_title">Latest Products</h3>
                        <div class="carousel_nav">
                            <button type="button" class="vs4i_left_arrow"><i class="fal fa-angle-left"></i></button>
                            <button type="button" class="vs4i_right_arrow"><i class="fal fa-angle-right"></i></button>
                        </div>
                    </div>
                    <div class="vertical_slider_4item" data-slick='{"dots": false}'>

                        @foreach ($products as $products)

                        <div class="slider_item">

                            <div class="small_product_layout">
                                <a class="item_image" href="shop_details.html">

                                    <img src="{{ asset('/uploads/product') }}/{{ $products->thumbnail }}"
                                        alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="shop_details.html">  {{ $products->name }}</a>
                                    </h3>
                                    <ul class="rating_star ul_li">
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </li>
                                    </ul>
                                    <div class="item_price">
                                        <span>{{ $products->discount_price }}</span>
                                        <del>{{ $products->regular_price }}</del>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endforeach
                    </div>

                </div>
                <div class="widget product-add">
                    <div class="product-img">
                        <img src="{{ asset('/frontend/frontend_asset') }}/images/shop/product_img_10.png" alt>
                    </div>
                    <div class="details">
                        <h4>iPad pro</h4>
                        <p>iPad pro with M1 chipe</p>
                        <a class="btn btn_primary" href="#">Start Buying</a>
                    </div>
                </div>
                <div class="widget audio-widget">
                    <h5>Audio <span>5</span></h5>
                    <ul>
                        <li><a href="#">MI headphone</a></li>
                        <li><a href="#">Bluetooth AirPods</a></li>
                        <li><a href="#">Music system</a></li>
                        <li><a href="#">JBL bar 5.1</a></li>
                        <li><a href="#">Edifier Computer Speaker</a></li>
                        <li><a href="#">Macbook pro</a></li>
                        <li><a href="#">Men's watch</a></li>
                        <li><a href="#">Washing metchin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        </div> <!-- end container  -->
    </section>
    <!-- products-with-sidebar-section - end
                            ================================================== -->


    <!-- promotion_section - start
                            ================================================== -->
    <section class="promotion_section">
        <div class="container">
            <div class="row promotion_banner_wrap">
                <div class="col col-lg-6">
                    <div class="promotion_banner">
                        <div class="item_image">
                            <img src="{{ asset('/frontend/frontend_asset') }}/images/promotion/banner_img_1.png" alt>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Protective sleeves <span>combo.</span></h3>
                            <p>It is a long established fact that a reader will be distracted</p>
                            <a class="btn btn_primary" href="shop_details.html">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-6">
                    <div class="promotion_banner">
                        <div class="item_image">
                            <img src="{{ asset('/frontend/frontend_asset') }}/images/promotion/banner_img_2.png" alt>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Nutrillet blender <span>combo.</span></h3>
                            <p>
                                It is a long established fact that a reader will be distracted
                            </p>
                            <a class="btn btn_primary" href="shop_details.html">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promotion_section - end
                            ================================================== -->

    <!-- new_arrivals_section - start
                            ================================================== -->
    <section class="new_arrivals_section section_space">
        <div class="container">
            <div class="sec-title-link">
                <h3>New Arrivals</h3>
            </div>

            <div class="row newarrivals_products">
                <div class="col col-lg-5">
                    <div class="deals_product_layout1">
                        <div class="bg_area">
                            <h3 class="item_title">Best <span>Product</span> Deals</h3>
                            <p>
                                Get a 20% Cashback when buying TWS Product From SoundPro Audio Technology.
                            </p>
                            <a class="btn btn_primary" href="shop_details.html">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-7">
                    <div class="new-arrivals-grids clearfix">
                        <div class="grid">
                            <div class="product-pic">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/shop/product-img-28.png" alt>
                            </div>
                            <div class="details">
                                <h4><a href="#">iPhone 13 pro</a></h4>
                                <p><a href="#">A dramatically more powerful camera system a display</a></p>
                                <span class="price">
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">$</span>471.48
                                            </bdi>
                                        </span>
                                    </ins>
                                </span>
                                <div class="add-cart-area">
                                    <button class="add-to-cart">Add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="product-pic">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/shop/product-img-26.png" alt>
                                <span class="theme-badge-2">20% off</span>
                            </div>
                            <div class="details">
                                <h4><a href="#">Apple</a></h4>
                                <p><a href="#">Apple MacBook Pro13.3″ Laptop with Touch bar ID </a></p>
                                <span class="price">
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">$</span>471.48
                                            </bdi>
                                        </span>
                                    </ins>
                                    <del aria-hidden="true">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">$</span>904.21
                                            </bdi>
                                        </span>
                                    </del>
                                </span>
                                <div class="add-cart-area">
                                    <button class="add-to-cart">Add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="product-pic">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/shop/product-img-27.png" alt>
                                <span class="theme-badge-2">15% off</span>

                            </div>
                            <div class="details">
                                <h4><a href="#">Mac Mini</a></h4>
                                <p><a href="#">Apple MacBook Pro13.3″ Laptop with Touch ID </a></p>
                                <span class="price">
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">$</span>471.48
                                            </bdi>
                                        </span>
                                    </ins>
                                    <del aria-hidden="true">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">$</span>904.21
                                            </bdi>
                                        </span>
                                    </del>
                                </span>
                                <div class="add-cart-area">
                                    <button class="add-to-cart">Add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="product-pic">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/shop/product_img_12.png" alt>
                                <span class="theme-badge">Sale</span>
                            </div>
                            <div class="details">
                                <h4><a href="#">Apple</a></h4>
                                <p><a href="#">Apple MacBook Pro13.3″ Laptop with Touch ID </a></p>
                                <span class="price">
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">$</span>471.48
                                            </bdi>
                                        </span>
                                    </ins>
                                    <del aria-hidden="true">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">$</span>904.21
                                            </bdi>
                                        </span>
                                    </del>
                                </span>
                                <div class="add-cart-area">
                                    <button class="add-to-cart">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- new_arrivals_section - end
                            ================================================== -->

    <!-- brand_section - start
                            ================================================== -->
    <div class="brand_section pb-0">
        <div class="container">
            <div class="brand_carousel">
                <div class="slider_item">
                    <a class="product_brand_logo" href="#!">
                        <img src="{{ asset('/frontend/frontend_asset') }}/images/brand/brand_1.png"
                            alt="image_not_found">
                        <img src="{{ asset('/frontend/frontend_asset') }}/images/brand/brand_1.png"
                            alt="image_not_found">
                    </a>
                </div>
                <div class="slider_item">
                    <a class="product_brand_logo" href="#!">
                        <img src="{{ asset('/frontend/frontend_asset') }}/images/brand/brand_2.png"
                            alt="image_not_found">
                        <img src="{{ asset('/frontend/frontend_asset') }}/images/brand/brand_2.png"
                            alt="image_not_found">
                    </a>
                </div>
                <div class="slider_item">
                    <a class="product_brand_logo" href="#!">
                        <img src="{{ asset('/frontend/frontend_asset') }}/images/brand/brand_3.png"
                            alt="image_not_found">
                        <img src="{{ asset('/frontend/frontend_asset') }}/images/brand/brand_3.png"
                            alt="image_not_found">
                    </a>
                </div>
                <div class="slider_item">
                    <a class="product_brand_logo" href="#!">
                        <img src="{{ asset('/frontend/frontend_asset') }}/images/brand/brand_4.png"
                            alt="image_not_found">
                        <img src="{{ asset('/frontend/frontend_asset') }}/images/brand/brand_4.png"
                            alt="image_not_found">
                    </a>
                </div>
                <div class="slider_item">
                    <a class="product_brand_logo" href="#!">
                        <img src="{{ asset('/frontend/frontend_asset') }}/images/brand/brand_5.png"
                            alt="image_not_found">
                        <img src="{{ asset('/frontend/frontend_asset') }}/images/brand/brand_5.png"
                            alt="image_not_found">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- brand_section - end
                            ================================================== -->

    <!-- viewed_products_section - start
                            ================================================== -->
    <section class="viewed_products_section section_space">
        <div class="container">

            <div class="sec-title-link mb-0">
                <h3>Recently Viewed Products</h3>
            </div>

            <div class="viewed_products_wrap arrows_topright">
                <div class="viewed_products_carousel row" data-slick='{"dots": false}'>
                    <div class="slider_item col">
                        <div class="viewed_product_item">
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/viewed_products/viewed_product_img_1.png"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Electronics</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">Computers</a></li>
                                    <li><a href="#!">Laptop</a></li>
                                    <li><a href="#!">Macbook</a></li>
                                    <li><a href="#!">Accessories</a></li>
                                    <li><a href="#!">More...</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="viewed_product_item">
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/viewed_products/viewed_product_img_2.png"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">PC & Laptop</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">Computers</a></li>
                                    <li><a href="#!">Laptop</a></li>
                                    <li><a href="#!">Macbook</a></li>
                                    <li><a href="#!">Accessories</a></li>
                                    <li><a href="#!">More...</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="slider_item col">
                        <div class="viewed_product_item">
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/viewed_products/viewed_product_img_3.png"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Tables & Mobiles</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">Computers</a></li>
                                    <li><a href="#!">Laptop</a></li>
                                    <li><a href="#!">Macbook</a></li>
                                    <li><a href="#!">Accessories</a></li>
                                    <li><a href="#!">More...</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="viewed_product_item">
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/viewed_products/viewed_product_img_4.png"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Accessories</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">Computers</a></li>
                                    <li><a href="#!">Laptop</a></li>
                                    <li><a href="#!">Macbook</a></li>
                                    <li><a href="#!">Accessories</a></li>
                                    <li><a href="#!">More...</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="slider_item col">
                        <div class="viewed_product_item">
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/viewed_products/viewed_product_img_5.png"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">TV & Audio</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">Computers</a></li>
                                    <li><a href="#!">Laptop</a></li>
                                    <li><a href="#!">Macbook</a></li>
                                    <li><a href="#!">Accessories</a></li>
                                    <li><a href="#!">More...</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="viewed_product_item">
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/viewed_products/viewed_product_img_6.png"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Games & Consoles</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">Computers</a></li>
                                    <li><a href="#!">Laptop</a></li>
                                    <li><a href="#!">Macbook</a></li>
                                    <li><a href="#!">Accessories</a></li>
                                    <li><a href="#!">More...</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="slider_item col">
                        <div class="viewed_product_item">
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/viewed_products/viewed_product_img_1.png"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Electronics</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">Computers</a></li>
                                    <li><a href="#!">Laptop</a></li>
                                    <li><a href="#!">Macbook</a></li>
                                    <li><a href="#!">Accessories</a></li>
                                    <li><a href="#!">More...</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="viewed_product_item">
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/viewed_products/viewed_product_img_2.png"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">PC & Laptop</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">Computers</a></li>
                                    <li><a href="#!">Laptop</a></li>
                                    <li><a href="#!">Macbook</a></li>
                                    <li><a href="#!">Accessories</a></li>
                                    <li><a href="#!">More...</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="slider_item col">
                        <div class="viewed_product_item">
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/viewed_products/viewed_product_img_3.png"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Tables & Mobiles</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">Computers</a></li>
                                    <li><a href="#!">Laptop</a></li>
                                    <li><a href="#!">Macbook</a></li>
                                    <li><a href="#!">Accessories</a></li>
                                    <li><a href="#!">More...</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="viewed_product_item">
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/viewed_products/viewed_product_img_4.png"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Accessories</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">Computers</a></li>
                                    <li><a href="#!">Laptop</a></li>
                                    <li><a href="#!">Macbook</a></li>
                                    <li><a href="#!">Accessories</a></li>
                                    <li><a href="#!">More...</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="slider_item col">
                        <div class="viewed_product_item">
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/viewed_products/viewed_product_img_5.png"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">TV & Audio</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">Computers</a></li>
                                    <li><a href="#!">Laptop</a></li>
                                    <li><a href="#!">Macbook</a></li>
                                    <li><a href="#!">Accessories</a></li>
                                    <li><a href="#!">More...</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="viewed_product_item">
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/viewed_products/viewed_product_img_6.png"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Games & Consoles</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">Computers</a></li>
                                    <li><a href="#!">Laptop</a></li>
                                    <li><a href="#!">Macbook</a></li>
                                    <li><a href="#!">Accessories</a></li>
                                    <li><a href="#!">More...</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_nav">
                    <button type="button" class="vpc_left_arrow"><i class="fal fa-long-arrow-alt-left"></i></button>
                    <button type="button" class="vpc_right_arrow"><i class="fal fa-long-arrow-alt-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- viewed_products_section - end
                            ================================================== -->

    <!-- newsletter_section - start
                            ================================================== -->
    <section class="newsletter_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-lg-6">
                    <h2 class="newsletter_title text-white">Sign Up for Newsletter </h2>
                    <p>Get E-mail updates about our latest products and special offers.</p>
                </div>
                <div class="col col-lg-6">
                    <form action="#!">
                        <div class="newsletter_form">
                            <input type="email" name="email" placeholder="Enter your email address">
                            <button type="submit" class="btn btn_secondary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter_section - end
                            ================================================== -->
@endsection
