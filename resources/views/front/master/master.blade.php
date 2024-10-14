<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset($logo->fav_icon)}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/fontawesome-all.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/slick.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/magnific-popup.css">
    <!-- line awesome -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/line-awesome.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/main.css">

</head>
<body>

<!--==================== Preloader Start ====================-->
<div class="loader-mask">
    <div class="loader">
        <div></div>
        <div></div>
    </div>
</div>
<!--==================== Preloader End ====================-->

<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- ==================== Scroll to Top End Here ==================== -->

<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu d-lg-none d-block">
    <button type="button" class="close-button"> <i class="las la-times"></i> </button>
    <div class="mobile-menu__inner">
        <a href="{{route('home')}}" class="mobile-menu__logo">
            <img src="{{asset($logo->mobile_logo)}}" alt="Logo" class="white-version">
            <img src="{{asset($logo->mobile_logo)}}" alt="Logo" class="dark-version">
        </a>
        <div class="mobile-menu__menu">

            <ul class="nav-menu flx-align nav-menu--mobile">
                @foreach($categories as $category)
                <li class="nav-menu__item has-submenu">
                    <a href="javascript:void(0)" class="nav-menu__link">{{$category->name}}</a>
                    <ul class="nav-submenu">
                        @foreach($category->subcategories as $subcategory)
                        <li class="nav-submenu__item">
                            <a href="{{ route('single-category', ['slug' => $subcategory->slug]) }}" class="nav-submenu__link">{{$subcategory->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
                <li class="nav-menu__item has-submenu">
                    <a href="javascript:void(0)" class="nav-menu__link">Products</a>
                    <ul class="nav-submenu">
                        <li class="nav-submenu__item">
                            <a href="all-product.html" class="nav-submenu__link"> All Products</a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="product-details.html" class="nav-submenu__link"> Product Details</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item has-submenu">
                    <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                    <ul class="nav-submenu">
                        <li class="nav-submenu__item">
                            <a href="profile.html" class="nav-submenu__link"> Profile</a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="" class="nav-submenu__link"> Shopping Cart</a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="cart-personal.html" class="nav-submenu__link"> Mailing Address</a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="cart-payment.html" class="nav-submenu__link"> Payment Method</a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="cart-thank-you.html" class="nav-submenu__link"> Preview Order</a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="dashboard.html" class="nav-submenu__link"> Dashboard</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item has-submenu">
                    <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
                    <ul class="nav-submenu">
                        <li class="nav-submenu__item">
                            <a href="blog.html" class="nav-submenu__link"> Blog</a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="blog-details.html" class="nav-submenu__link"> Blog Details</a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="blog-details-sidebar.html" class="nav-submenu__link"> Blog Details Sidebar</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item">
                    <a href="contact.html" class="nav-menu__link">Contact</a>
                </li>
            </ul>
            <div class="header-right__inner d-lg-none my-3 gap-1 d-flex flx-align">

                <a href="{{route('customer-register')}}" class="btn btn-main pill">
        <span class="icon-left icon">
            <img src="{{asset('/')}}front/assets/images/icons/user.svg" alt="">
        </span>Create Account
                </a>
                <a href="{{route('customer-login')}}" class="btn btn-main pill">
        <span class="icon-right icon">
            <img src="{{asset('/')}}front/assets/images/icons/user.svg" alt="">
        </span>Login
                </a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->

<main class="change-gradient">
    <!-- ============================ Sale Offer Start =========================== -->
{{--    <div class="sale-offer ">--}}
{{--        <div class="container container-full ">--}}
{{--            <div class="sale-offer__content flx-between position-relative">--}}
{{--                <div class="sale-offer__countdown">--}}

{{--                    <div class="countdown" data-date="14-10-2026" data-time="12:00">--}}
{{--                        <div class="day"><span class="num"></span><span class="word"></span></div>--}}
{{--                        <div class="hour"><span class="num"></span><span class="word"></span></div>--}}
{{--                        <div class="min"><span class="num"></span><span class="word"></span></div>--}}
{{--                        <div class="sec"><span class="num"></span><span class="word"></span></div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="sale-offer__discount flx-align gap-2">--}}
{{--                    <span class="sale-offer__text text-heading text-capitalize">New Year Flash Sale Offer</span>--}}
{{--                    <strong class="sale-offer__qty text-heading font-heading">45% OFF</strong>--}}
{{--                    <a href="#" class="btn btn-sm btn-white pill fw-500">Shop Now</a>--}}
{{--                </div>--}}
{{--                <div class="sale-offer__button">--}}
{{--                    <button type="submit" class="sale-offer__close text-heading"><i class="las la-times"></i></button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- ============================ Sale Offer End =========================== -->
    <!-- ==================== Header Start Here ==================== -->
    @include('front.include.header')
    <!-- ==================== Header End Here ==================== -->
    <!--========================== Banner Section Start ==========================-->
    @yield('body')
    <!-- ======================== Brand Section End ========================= -->

    <!-- ==================== Footer Start Here ==================== -->
@include('front.include.footer')
    <!-- ==================== Footer End Here ==================== -->

</main>

<!-- Jquery js -->
<script src="{{asset('/')}}front/assets/js/jquery-3.7.1.min.js"></script>
<!-- Bootstrap Bundle Js -->
<script src="{{asset('/')}}front/assets/js/boostrap.bundle.min.js"></script>
<!-- CountDown -->
<script src="{{asset('/')}}front/assets/js/countdown.js"></script>
<!-- counter up -->
<script src="{{asset('/')}}front/assets/js/counterup.min.js"></script>
<!-- Slick js -->
<script src="{{asset('/')}}front/assets/js/slick.min.js"></script>
<!-- magnific popup -->
<script src="{{asset('/')}}front/assets/js/jquery.magnific-popup.js"></script>
<!-- apex chart -->
<script src="{{asset('/')}}front/assets/js/apexchart.js"></script>

<!-- main js -->
<script src="{{asset('/')}}front/assets/js/main.js"></script>
@include('sweetalert::alert')
</body>

</html>


