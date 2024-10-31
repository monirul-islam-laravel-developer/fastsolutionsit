@extends('front.master.master')
@section('title')
    Theme Page
@endsection
@section('body')
    <section class="all-product padding-y-120">
        <div class="container container-two">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-tab gap-3 flx-between">
                        <button type="button" class="filter-tab__button btn btn-outline-light pill d-flex align-items-center">
                            <span class="icon icon-left"><img src="{{ asset('/') }}front/assets/images/icons/filter.svg" alt=""></span>
                            <span class="font-18 fw-500">Filters</span>
                        </button>

                        <div class="list-grid d-flex align-items-center gap-2">
                            <button class="list-grid__button list-button d-sm-flex d-none text-body"><i class="las la-list"></i></button>
                            <button class="list-grid__button grid-button d-sm-flex d-none active text-body"><i class="las la-border-all"></i></button>
                            <button class="list-grid__button sidebar-btn text-body d-lg-none d-flex"><i class="las la-bars"></i></button>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-4">
                    <!-- ===================== Filter Sidebar Start ============================= -->
                    <div class="filter-sidebar">
                        <button type="button" class="filter-sidebar__close p-2 position-absolute end-0 top-0 z-index-1 text-body hover-text-main font-20 d-lg-none d-block"><i class="las la-times"></i></button>
                        @foreach($categories as $category)
                            <div class="filter-sidebar__item">
                                <button type="button" class="filter-sidebar__button font-16 text-capitalize fw-500">{{$category->name}}</button>
                                <div class="filter-sidebar__content">
                                    @php
                                        // Load subcategories with product count for the given category
                                        $subcategories = $category->subcategories()->withCount('themes')->get();
                                    @endphp

                                    <ul class="filter-sidebar-list">
                                        @foreach($subcategories as $subcategory)
                                            <li class="filter-sidebar-list__item">
                                                <a href="{{ route('single-category', ['slug' => $subcategory->slug]) }}" class="filter-sidebar-list__text">
                                                    {{ $subcategory->name }}<span class="qty">{{ $subcategory->themes_count }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- ===================== Filter Sidebar End ============================= -->
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab" tabindex="0">
                            <div class="row gy-4 list-grid-wrapper">

                                @if($themess->isEmpty())
                                    <div class="no-projects-message d-flex justify-content-center align-items-center my-5 p-4">
                                        <p class="text-muted m-0">No available Website in this category right now.</p>
                                    </div>
                                @else
                                @foreach($themess as $themes)
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="product-card section-bg">
                                            <div class="product-card__thumb d-flex">
                                                <a href="{{route('detail',['categorySlug'=>$themes->sub_category->slug,'postSlug'=>$themes->slug])}}" class="link w-100">
                                                    <img src="{{ asset($themes->image) }}" alt="" class="cover-img">
                                                </a>
                                                <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                            </div>
                                            <div class="product-card__content">
                                                <h6 class="product-card__title">
                                                    <a href="{{route('detail',['categorySlug'=>$themes->sub_category->slug,'postSlug'=>$themes->slug])}}" class="link">{{$themes->name}}</a>
                                                </h6>
                                                <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
{{--                by--}}
                {{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
            </span>
                                                    <div class="flx-align gap-2">
                                                        <h6 class="product-card__price mb-0">Tk.{{$themes->selling_price}}</h6>
                                                        <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$themes->regular_price}}</span>
                                                    </div>
                                                </div>
                                                <div class="product-card__bottom flx-between gap-2">
                                                    <div>
                                                        {{--                                                    <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
                                                        <div class="d-flex align-items-center gap-1">
                                                            {{--                                                        <ul class="star-rating">--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                        </ul>--}}
                                                            {{--                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
                                                        </div>
                                                    </div>
                                                    <a target="_blank" href="{{$themes->link}}" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                                    <a href="{{route('detail',['categorySlug'=>$themes->sub_category->slug,'postSlug'=>$themes->slug])}}" class="btn btn-success btn-sm pill">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                    @endif

                            </div>
                            <!-- Pagination Start -->
                            <nav aria-label="Page navigation">
                                <ul class="pagination common-pagination">
                                    <li class="page-item">  {{ $themess->links() }}</a></li>
                                </ul>
                            </nav>
                            <!-- Pagination End -->

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
