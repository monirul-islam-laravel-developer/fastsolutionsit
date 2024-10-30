@extends('front.master.master')
@section('title')
    All Blog

@endsection
@section('body')
    <section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1">

        <div class="breadcrumb-two">
            <img src="{{asset('/')}}front/assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">
            <div class="container container-two">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="breadcrumb-two-content text-center">

                            <ul class="breadcrumb-list flx-align gap-2 mb-2 justify-content-center">
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a href="{{route('home')}}" class="breadcrumb-list__link text-body hover-text-main">Home</a>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__text">Blog</span>
                                </li>
                            </ul>

                            <h3 class="breadcrumb-two-content__title mb-0 text-capitalize">Latest Blogs And Articles</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== Breadcrumb Two Section End ===================== -->

    <!-- =========================== Blog Section Start ========================== -->
    <section class="blog padding-y-120 section-bg position-relative z-index-1 overflow-hidden">
        <img src="{{asset('/')}}front/assets/images/shapes/pattern-five.png" class="position-absolute end-0 top-0 z-index--1" alt="">
        <div class="container container-two">
            <div class="row gy-4">
                @foreach($allblogs as $blogs)
                <div class="col-lg-4 col-sm-6">
                    <div class="blog-item">
                        <div class="blog-item__thumb">
                            <a href="{{route('blogs-detail',['id'=>$blogs->id])}}" class="link">
                                <img src="{{asset($blogs->image)}}" class="cover-img" alt="Blog Image" style="height: 300px; width: 500px;">
                            </a>
                        </div>
                        <div class="blog-item__content">
                            <div class="blog-item__top flx-align">
{{--                                <a href="blog.html" class="blog-item__tag pill font-14 text-heading fw-500 hover-text-main">Hiring</a>--}}
                                <div class="blog-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                    <span class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/calendar.svg" alt="" class="white-version">
                        <img src="{{asset('/')}}front/assets/images/icons/calendar-white.svg" alt="" class="dark-version">
                    </span>
                                    <span class="text">{{$blogs->created_at->format('F j, Y') }}</span>
                                </div>
                            </div>
                            <h5 class="title">
                                <a href="{{route('blogs-detail',['id'=>$blogs->id])}}" class="link">{{$blogs->title}}</a>
                            </h5>
                            <a href="{{route('blogs-detail',['id'=>$blogs->id])}}" class="btn btn-outline-light pill fw-600">Read More </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <!-- Pagination Start -->
            <nav aria-label="Page navigation">
                <ul class="pagination common-pagination">
                    <li class="page-item">  {{ $allblogs->links() }}</a></li>
                </ul>
            </nav>
            <!-- Pagination End -->


        </div>
    </section>
@endsection
