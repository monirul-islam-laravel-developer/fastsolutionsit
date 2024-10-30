@extends('front.master.master')
@section('title')
    Blog Detail Page
@endsection
@section('body')
    <div class="product-details mt-32 padding-b-120">
        <div class="container container-two">
            <div class="row gy-4">
                <!-- Left Column with Image (6 Columns on large screens) -->
                <div class="col-lg-6 col-md-12">
                    <div class="product-details__thumb">
                        <img src="{{ asset($blog->image) }}" alt="" class="img-fluid">
                    </div>
                </div>

                <!-- Right Column with Title and Body (6 Columns on large screens) -->
                <div class="col-lg-6 col-md-12">
                    <h3 class="breadcrumb-two-content__title mb-3 text-capitalize">{{ $blog->title }}</h3>
                    <p class="product-details__desc">
                        {!! $blog->body !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================== Breadcrumb one Section End ===================== -->
    <!-- ======================== All Product Section Start ====================== -->
    <div class="col-md-12">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab" tabindex="0">
                <div class="row gy-4 list-grid-wrapper">
                    @foreach($themes12 as $theme12)
                    <div class="col-xl-3 col-sm-6">
                        <div class="product-card section-bg">
                            <div class="product-card__thumb d-flex">
                                <a href="{{route('detail',['categorySlug'=>$theme12->sub_category->slug,'postSlug'=>$theme12->slug])}}" class="link w-100">
                                    <img src="{{asset($theme12->image)}}" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-card__content">
                                <h6 class="product-card__title">
                                    <a href="{{route('detail',['categorySlug'=>$theme12->sub_category->slug,'postSlug'=>$theme12->slug])}}" class="link">{{$theme12->name}}</a>
                                </h6>
                                <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
            </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-card__price mb-0">Tk.{{$theme12->selling_price}}</h6>
                                        <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$theme12->regular_price}}</span>
                                    </div>
                                </div>
                                <div class="product-card__bottom flx-between gap-2">
                                    <div>
{{--                                        <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
                                        <div class="d-flex align-items-center gap-1">
{{--                                            <ul class="star-rating">--}}
{{--                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                            </ul>--}}
{{--                                            <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
                                        </div>
                                    </div>
                                    <a target="_blank" href="{{$theme12->link}}" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                    <a href="{{route('detail',['categorySlug'=>$theme12->sub_category->slug,'postSlug'=>$theme12->slug])}}" class="btn btn-success btn-sm pill">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>




@endsection
