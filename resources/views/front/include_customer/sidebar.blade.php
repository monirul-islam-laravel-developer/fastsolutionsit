<div class="dashboard-sidebar">
    <button type="button" class="dashboard-sidebar__close d-lg-none d-flex"><i class="las la-times"></i></button>
    <div class="dashboard-sidebar__inner">
    {{--                         <a href="index.html" class="logo mb-48">--}}
    {{--                              <img src="{{asset($logo->mobile_logo)}}" alt="" class="white-version">--}}
    {{--                              <img src="{{asset($logo->mobile_logo)}}" alt="" class="dark-version">--}}
    {{--                         </a>--}}
    {{--                         <a href="index.html" class="logo favicon mb-48">--}}
    {{--                              <img src="{{asset($logo->fav_icon)}}" alt="">--}}
    {{--                         </a>--}}

    <!-- Sidebar List Start -->
        <ul class="sidebar-list">
            <li class="sidebar-list__item">
                <a href="{{route('customer-dashboard')}}" class="sidebar-list__link">
                    <span class="sidebar-list__icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon1.svg" alt="" class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon-active1.svg" alt="" class="icon icon-active">
                    </span>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-list__item">
                <a href="{{route('customer-profile')}}" class="sidebar-list__link">
                    <span class="sidebar-list__icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon2.svg" alt="" class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon-active2.svg" alt="" class="icon icon-active">
                    </span>
                    <span class="text">Profile</span>
                </a>
            </li>
            <li class="sidebar-list__item">
                <a href="follower.html" class="sidebar-list__link">
                    <span class="sidebar-list__icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon4.svg" alt="" class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon-active4.svg" alt="" class="icon icon-active">
                    </span>
                    <span class="text">Followers</span>
                </a>
            </li>
            <li class="sidebar-list__item">
                <a href="following.html" class="sidebar-list__link">
                    <span class="sidebar-list__icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon5.svg" alt="" class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon-active5.svg" alt="" class="icon icon-active">
                    </span>
                    <span class="text">Followings</span>
                </a>
            </li>
            <li class="sidebar-list__item">
                <a href="setting.html" class="sidebar-list__link">
                    <span class="sidebar-list__icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon10.svg" alt="" class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon-active10.svg" alt="" class="icon icon-active">
                    </span>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li class="sidebar-list__item">
                <a href="statement.html" class="sidebar-list__link">
                    <span class="sidebar-list__icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon12.svg" alt="" class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon-active12.svg" alt="" class="icon icon-active">
                    </span>
                    <span class="text">Statements</span>
                </a>
            </li>
            <li class="sidebar-list__item">
                <a href="earning.html" class="sidebar-list__link">
                    <span class="sidebar-list__icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon11.svg" alt="" class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon-active11.svg" alt="" class="icon icon-active">
                    </span>
                    <span class="text">Earnings</span>
                </a>
            </li>
            <li class="sidebar-list__item">
                <a href="review.html" class="sidebar-list__link">
                    <span class="sidebar-list__icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon7.svg" alt="" class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon-active7.svg" alt="" class="icon icon-active">
                    </span>
                    <span class="text">Reviews</span>
                </a>
            </li>

            <li class="sidebar-list__item">
                <a href="download.html" class="sidebar-list__link">
                    <span class="sidebar-list__icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon6.svg" alt="" class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon-active6.svg" alt="" class="icon icon-active">
                    </span>
                    <span class="text">Downloads</span>
                </a>
            </li>
            <li class="sidebar-list__item">
                <a href="refund.html" class="sidebar-list__link">
                    <span class="sidebar-list__icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon8.svg" alt="" class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon-active8.svg" alt="" class="icon icon-active">
                    </span>
                    <span class="text">Refunds</span>
                </a>
            </li>
            <li class="sidebar-list__item">
                <a href="login.html" class="sidebar-list__link">
                    <span class="sidebar-list__icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon13.svg" alt="" class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/sidebar-icon-active13.svg" alt="" class="icon icon-active">
                    </span>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
        <!-- Sidebar List End -->

    </div>
</div>
