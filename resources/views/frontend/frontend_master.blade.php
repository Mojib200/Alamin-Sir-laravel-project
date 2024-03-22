<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Stowaa - Ecommerce HTML Template</title>
    <link rel="shortcut icon" href="{{ asset('/frontend/frontend_asset') }}/images/logo/favourite_icon_1.png">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/frontend_asset') }}/css/bootstrap.min.css">

    <!-- icon font - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/frontend_asset') }}/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/frontend_asset') }}/css/stroke-gap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/frontend_asset') }}/css/icofont.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/frontend_asset') }}/css/animate.css">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/frontend_asset') }}/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/frontend_asset') }}/css/slick-theme.css">

    <!-- popup - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/frontend_asset') }}/css/magnific-popup.css">

    <!-- jquery-ui - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/frontend_asset') }}/css/jquery-ui.css">

    <!-- select option - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/frontend_asset') }}/css/nice-select.css">

    <!-- woocommercen - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/frontend_asset') }}/css/woocommerce.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/frontend_asset') }}/css/style.css">
</head>

<body>

    <!-- body_wrap - start -->
    <div class="body_wrap">

        <!-- backtotop - start -->
        <div class="backtotop">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- preloader - start -->
        <div id="preloader"></div>
        <!-- preloader - end -->


        <!-- header_section - start
        ================================================== -->
        <header class="header_section header-style-no-collapse">
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-6">
                            <ul class="header_select_options ul_li">
                                <li>
                                    <div class="select_option">
                                        <div class="flug_wrap">
                                            <img src="{{ asset('/frontend/frontend_asset') }}/images/flug/flug_uk.png"
                                                alt="image_not_found">
                                        </div>
                                        <select>
                                            <option data-display="Select Option">Select Your Language</option>
                                            <option value="1" selected>English</option>
                                            <option value="2">Bangla</option>
                                            <option value="3" disabled>Arabic</option>
                                            <option value="4">Hebrew</option>
                                        </select>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="col col-md-6">
                            <p class="header_hotline">Call us toll free: <strong>+1888 234 5678</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-lg-3 col-md-3 col-sm-12">
                            <div class="brand_logo">
                                <a class="brand_link" href="index.html">
                                    <img src="{{ asset('/frontend/frontend_asset') }}/images/logo/logo_1x.png"
                                        srcset="{{ asset('/frontend/frontend_asset') }}/images/logo/logo_2x.png 2x"
                                        alt>
                                </a>
                            </div>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12">
                            <form action="#">
                                <div class="advance_serach">
                                    <div class="select_option mb-0 clearfix">
                                        <select>
                                            <option data-display="All Categories">Select A Category</option>
                                            <option value="1">New Arrival Products</option>
                                            <option value="2">Most Popular Products</option>
                                            <option value="3">Deals of the day</option>
                                            <option value="4">Mobile Accessories</option>
                                            <option value="5">Computer Accessories</option>
                                            <option value="6">Consumer Electronics</option>
                                            <option value="7">Automobiles & Motorcycles</option>
                                        </select>
                                    </div>
                                    <div class="form_item">
                                        <input type="search" name="search" placeholder="Search Prudcts...">
                                        <button type="submit" class="search_btn"><i class="far fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12">
                            <button class="mobile_menu_btn2 navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fal fa-bars"></i>
                            </button>
                            <button type="button" class="cart_btn">
                                <ul class="header_icons_group ul_li_right">
                                    <li>
                                        <a href="wishlist.html">
                                            <svg role="img" xmlns="http://www.w3.org/2000/svg" width="30px"
                                                height="30px" viewBox="0 0 24 24" stroke="#051d43" stroke-width="1"
                                                stroke-linecap="square" stroke-linejoin="miter" fill="none"
                                                color="#2329D6">
                                                <title>Favourite</title>
                                                <path
                                                    d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z" />
                                            </svg>
                                            <span class="wishlist_counter">3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <span class="cart_icon">
                                            <i class="icon icon-ShoppingCart"></i>
                                            <small class="cart_counter">3</small>
                                        </span>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-3">
                            <div class="allcategories_dropdown">
                                @Auth
                                <button class="allcategories_btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#allcategories_collapse" aria-expanded="false"
                                    aria-controls="allcategories_collapse">
                                    <svg role="img" xmlns="http://www.w3.org/2000/svg" width="32px"
                                        height="32px" viewBox="0 0 24 24" aria-labelledby="statsIconTitle"
                                        stroke="#000" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" fill="none" color="#000">
                                        <title id="statsIconTitle">Stats</title>
                                        <path d="M6 7L15 7M6 12L18 12M6 17L12 17" />
                                    </svg>
                                    Browse categories
                                </button>
                                <div class="allcategories_collapse" id="allcategories_collapse">
                                    <div class="card card-body">
                                        <ul class="allcategories_list ul_li_block">
                                            <li><a href="shop_grid.html"><i class="icon icon-Starship"></i> New
                                                    Arrival Products</a></li>
                                            <li><a href="shop_list.html"><i class="icon icon-WorldWide"></i> Most
                                                    Popular Products</a></li>
                                            <li><a href="shop_grid.html"><i class="icon icon-Star"></i> Deals of the
                                                    day</a></li>
                                            <li><a href="shop_list.html"><i class="icon icon-Phone"></i> Mobile
                                                    Accessories</a></li>
                                            <li><a href="shop_grid.html"><i class="icon icon-DesktopMonitor"></i>
                                                    Computer Accessories</a></li>
                                            <li><a href="shop_list.html"><i class="icon icon-Bulb"></i> Consumer
                                                    Electronics</a></li>
                                            <li><a href="shop_grid.html"><i class="icon icon-Car"></i> Automobiles &
                                                    Motorcycles</a></li>
                                            <li><a href="shop_list.html"><i class="icon icon-Phone"></i> Mobile
                                                    Accessories</a></li>
                                            <li><a href="shop_grid.html"><i class="icon icon-DesktopMonitor"></i>
                                                    Computer Accessories</a></li>
                                            <li><a href="shop_list.html"><i class="icon icon-Bulb"></i> Consumer
                                                    Electronics</a></li>
                                            <li><a href="shop_grid.html"><i class="icon icon-Car"></i> Automobiles &
                                                    Motorcycles</a></li>
                                        </ul>
                                    </div>
                                </div>
                                @endAuth
                            </div>
                        </div>

                        <div class="col col-md-6">
                            <nav class="main_menu navbar navbar-expand-lg">
                                <div class="main_menu_inner collapse navbar-collapse" id="main_menu_dropdown">
                                    <button type="button" class="offcanvas_close">
                                        <i class="fal fa-times"></i>
                                    </button>
                                    <ul class="main_menu_list ul_li">
                                        <li><a class="nav-link" href="#">Home</a></li>
                                        <li><a class="nav-link" href="{{ url('about_us') }}">About us</a></li>
                                        <li><a class="nav-link" href="#">Shop</a></li>
                                        <li><a class="nav-link" href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="offcanvas_overlay"></div>
                        </div>

                        <div class="col col-md-3">
                            <ul class="header_icons_group ul_li_right">
                                {{-- guest means jodi keu login na kore tar jonno --}}
                                @guest
                                    <li>
                                        <a href="{{ url('accounts') }}">login/Register</a>
                                    </li>
                                @endguest
                                {{-- Auth means jodi keu login kore tar name and profile etc --}}
                                @auth
                                    <li>
                                        <a href="#">{{ Auth::user()->name }}</a>
                                    </li>

                                    <li>
                                        <a href="account.html">
                                            <svg role="img" xmlns="http://www.w3.org/2000/svg" width="30px"
                                                height="30px" viewBox="0 0 24 24" stroke="#051d43" stroke-width="1"
                                                stroke-linecap="square" stroke-linejoin="miter" fill="none"
                                                color="#2329D6">
                                                <title id="personIconTitle">Person</title>
                                                <path
                                                    d="M4,20 C4,17 8,17 10,15 C11,14 8,14 8,9 C8,5.667 9.333,4 12,4 C14.667,4 16,5.667 16,9 C16,14 13,14 14,15 C16,17 20,17 20,20" />
                                            </svg>
                                        </a>
                                    </li>
                                 <ul type="none">
                                    <li> <a href="{{ route('logout') }}" class="dropdown-item ai-icon"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit()">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12">
                                            </line>
                                        </svg>
                                        <span class="ml-2">Logout </span>

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                <li><a href="{{ url('password/reset') }}">  <span class="ml-2">Reset Password </span></a></li>
                                 </ul>

                                @endauth

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header_section - end
        ================================================== -->

        <!-- main body - start
        ================================================== -->
        <main>

            <!-- sidebar cart - start
            ================================================== -->
            <div class="sidebar-menu-wrapper">
                <div class="cart_sidebar">
                    <button type="button" class="close_btn"><i class="fal fa-times"></i></button>
                    <ul class="cart_items_list ul_li_block mb_30 clearfix">
                        <li>
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/cart/cart_img_1.jpg"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_title">Yellow Blouse</h4>
                                <span class="item_price">$30.00</span>
                            </div>
                            <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                        </li>
                        <li>
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/cart/cart_img_2.jpg"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_title">Yellow Blouse</h4>
                                <span class="item_price">$30.00</span>
                            </div>
                            <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                        </li>
                        <li>
                            <div class="item_image">
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/cart/cart_img_3.jpg"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_title">Yellow Blouse</h4>
                                <span class="item_price">$30.00</span>
                            </div>
                            <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                        </li>
                    </ul>

                    <ul class="total_price ul_li_block mb_30 clearfix">
                        <li>
                            <span>Subtotal:</span>
                            <span>$90</span>
                        </li>
                        <li>
                            <span>Vat 5%:</span>
                            <span>$4.5</span>
                        </li>
                        <li>
                            <span>Discount 20%:</span>
                            <span>- $18.9</span>
                        </li>
                        <li>
                            <span>Total:</span>
                            <span>$75.6</span>
                        </li>
                    </ul>

                    <ul class="btns_group ul_li_block clearfix">
                        <li><a class="btn btn_primary" href="cart.html">View Cart</a></li>
                        <li><a class="btn btn_secondary" href="checkout.html">Checkout</a></li>
                    </ul>
                </div>

                <div class="cart_overlay"></div>
            </div>

            @yield('content')

        </main>
        <!-- main body - end
        ================================================== -->

        <!-- footer_section - start
        ================================================== -->
        <footer class="footer_section">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-sm-6">
                            <div class="footer_widget footer_about">
                                <div class="brand_logo">
                                    <a class="brand_link" href="index.html">
                                        <img src="{{ asset('/frontend/frontend_asset') }}/images/logo/logo_1x.png"
                                            srcset="{{ asset('/frontend/frontend_asset') }}/images/logo/logo_2x.png 2x"
                                            alt="logo_not_found">
                                    </a>
                                </div>
                                <ul class="social_round ul_li">
                                    <li><a href="#!"><i class="icofont-youtube-play"></i></a></li>
                                    <li><a href="#!"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="#!"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#!"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#!"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="footer_widget footer_useful_links">
                                <h3 class="footer_widget_title text-uppercase">Quick Links</h3>
                                <ul class="ul_li_block">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="footer_widget footer_useful_links">
                                <h3 class="footer_widget_title text-uppercase">Custom area</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">My Account</a></li>
                                    <li><a href="#!">Orders</a></li>
                                    <li><a href="#!">Team</a></li>
                                    <li><a href="#!">Privacy Policy</a></li>
                                    <li><a href="#!">My Cart</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-lg-4 col-md-6 col-sm-6">
                            <div class="footer_widget footer_contact">
                                <h3 class="footer_widget_title text-uppercase">Contact Onfo</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt.
                                </p>
                                <div class="hotline_wrap">
                                    <div class="footer_hotline">
                                        <div class="item_icon">
                                            <i class="icofont-headphone-alt"></i>
                                        </div>
                                        <div class="item_content">
                                            <h4 class="item_title">Have any question?</h4>
                                            <span class="hotline_number">+ 123 456 7890</span>
                                        </div>
                                    </div>
                                    <div class="livechat_btn clearfix">
                                        <a class="btn border_primary" href="#!">Live Chat</a>
                                    </div>
                                </div>
                                <ul class="store_btns_group ul_li">
                                    <li><a href="#!"><img
                                                src="{{ asset('/frontend/frontend_asset') }}/images/app_store.png"
                                                alt="app_store"></a></li>
                                    <li><a href="#!"><img
                                                src="{{ asset('/frontend/frontend_asset') }}/images/play_store.png"
                                                alt="play_store"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-6">
                            <p class="copyright_text">
                                ©2021 <a href="#!">stowaa</a>. All Rights Reserved.
                            </p>
                        </div>

                        <div class="col col-md-6">
                            <div class="payment_method">
                                <h4>Payment:</h4>
                                <img src="{{ asset('/frontend/frontend_asset') }}/images/payments_icon.png"
                                    alt="image_not_found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer_section - end
        ================================================== -->

    </div>
    <!-- body_wrap - end -->

    <!-- fraimwork - jquery include -->
    <script src="{{ asset('/frontend/frontend_asset') }}/js/jquery.min.js"></script>
    <script src="{{ asset('/frontend/frontend_asset') }}/js/popper.min.js"></script>
    <script src="{{ asset('/frontend/frontend_asset') }}/js/bootstrap.min.js"></script>

    <!-- carousel - jquery plugins collection -->
    <script src="{{ asset('/frontend/frontend_asset') }}/js/jquery-plugins-collection.js"></script>

    <!-- google map  -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
    <script src="{{ asset('/frontend/frontend_asset') }}/js/gmaps.min.js"></script>

    <!-- custom - main-js -->
    <script src="{{ asset('/frontend/frontend_asset') }}/js/main.js"></script>
    {!! NoCaptcha::renderJs() !!}

</body>

</html>
