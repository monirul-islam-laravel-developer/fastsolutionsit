<header class="header">
    <div class="container container-full">
        <nav class="header-inner flx-between">
            <!-- Logo Start -->
            <div class="logo">
                <a href="{{route('home')}}" class="link white-version">
                    <img src="{{asset($logo->mobile_logo)}}" alt="Logo">
                </a>
                <a href="{{route('home')}}" class="link dark-version">
                    <img src="{{asset($logo->mobile_logo)}}" alt="Logo">
                </a>
            </div>
            <!-- Logo End  -->

            <!-- Menu Start  -->
            <div class="header-menu d-lg-block d-none">

                <ul class="nav-menu flx-align ">
                    @foreach($categories as $category)
                        <li class="nav-menu__item has-submenu">
                            <a href="javascript:void(0)" class="nav-menu__link">{{$category->name}}</a>
                            <ul class="nav-submenu">
                                @foreach($category->subcategories as $subcategory)
                                    @if(!empty($subcategory))
                                        <li class="nav-submenu__item">
                                            <a href="{{ route('single-category',['slug' => $subcategory->slug]) }}" class="nav-submenu__link">{{$subcategory->name}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="profile.html" class="nav-submenu__link"> Profile</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="{{route('add-to-cart')}}" class="nav-submenu__link"> Shopping Cart</a>
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
            </div>
            <!-- Menu End  -->

            <!-- Header Right start -->
            <div class="header-right flx-align">

                <!-- Cart Button (commented out) -->
            {{-- <a href="{{ route('add-to-cart') }}" class="header-right__button cart-btn position-relative">
                <img src="{{ asset('/') }}front/assets/images/icons/cart.svg" alt="" class="white-version">
                <img src="{{ asset('/') }}front/assets/images/icons/cart-white.svg" alt="" class="dark-version">
                <span class="qty-badge font-12">0</span>
            </a> --}}

            <!-- Light/Dark Mode Switch -->
                <div class="theme-switch-wrapper position-relative">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" class="d-none" id="checkbox">
                        <span class="slider text-black header-right__button white-version">
                <img src="{{ asset('/') }}front/assets/images/icons/sun.svg" alt="">
            </span>
                        <span class="slider text-black header-right__button dark-version">
                <img src="{{ asset('/') }}front/assets/images/icons/moon.svg" alt="">
            </span>
                    </label>
                </div>


                @if(Session::get('custommer_id'))
                <div>
                    {{ Session::get('custommer_name') }}
                </div>
                    <div class="user-profile">

                        <button class="user-profile__button flex-align">
                <span class="user-profile__thumb">
                    <img src="{{ asset('/') }}front/assets/images/thumbs/user-profile.png" class="cover-img" alt="">
                </span>
                        </button>
                        <ul class="user-profile-dropdown">
                            <li class="sidebar-list__item">
                                <a href="{{route('customer-profile')}}" class="sidebar-list__link">
                        <span class="sidebar-list__icon">
                            <img src="{{ asset('/') }}front/assets/images/icons/sidebar-icon2.svg" alt="" class="icon">
                            <img src="{{ asset('/') }}front/assets/images/icons/sidebar-icon-active2.svg" alt="" class="icon icon-active">
                        </span>
                                    <span class="text">Profile</span>
                                </a>
                            </li>
                            <li class="sidebar-list__item">
                                <a href="setting.html" class="sidebar-list__link">
                        <span class="sidebar-list__icon">
                            <img src="{{ asset('/') }}front/assets/images/icons/sidebar-icon10.svg" alt="" class="icon">
                            <img src="{{ asset('/') }}front/assets/images/icons/sidebar-icon-active10.svg" alt="" class="icon icon-active">
                        </span>
                                    <span class="text">Settings</span>
                                </a>
                            </li>
                            <li class="sidebar-list__item">
                                <a href="{{route('customer-logout')}}" class="sidebar-list__link">
                        <span class="sidebar-list__icon">
                            <img src="{{ asset('/') }}front/assets/images/icons/sidebar-icon13.svg" alt="" class="icon">
                            <img src="{{ asset('/') }}front/assets/images/icons/sidebar-icon-active13.svg" alt="" class="icon icon-active">
                        </span>
                                    <span class="text">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="header-right__inner gap-3 flx-align d-lg-flex d-none">
                        <a href="{{ route('customer-register') }}" class="btn btn-main pill">
                <span class="icon-left icon">
                    <img src="{{ asset('/') }}front/assets/images/icons/user.svg" alt="">
                </span>Create Account
                        </a>
                        <a href="{{ route('customer-login') }}" class="btn btn-main pill">
                <span class="icon-left icon">
                    <img src="{{ asset('/') }}front/assets/images/icons/user.svg" alt="">
                </span>Login
                        </a>
                    </div>
                @endif

                <button type="button" class="toggle-mobileMenu d-lg-none">
                    <i class="las la-bars"></i>
                </button>
            </div>

            <!-- Header Right End  -->
        </nav>
    </div>
</header>
