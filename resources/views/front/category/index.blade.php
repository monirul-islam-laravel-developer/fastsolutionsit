@extends('front.master.master')
@section('title')
    Theme Page
@endsection
@section('body')
    <section class="breadcrumb breadcrumb-one padding-y-60 section-bg position-relative z-index-1 overflow-hidden">

        <img src="{{asset('/')}}front/assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">

        <img src="{{asset('/')}}front/assets/images/shapes/element-moon3.png" alt="" class="element one">
        <img src="{{asset('/')}}front/assets/images/shapes/element-moon1.png" alt="" class="element three">

        <div class="container container-two">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="breadcrumb-one-content">
                        <h3 class="breadcrumb-one-content__title text-center mb-3 text-capitalize">58,000+ products available for purchase</h3>
                        <p class="breadcrumb-one-content__desc text-center text-black-three">Explore the best premium themes and plugins available for sale. Our unique collection is hand-curated by experts. Find and buy the perfect premium theme.</p>

                        <form action="#" class="search-box">
                            <input type="text" class="common-input common-input--lg pill shadow-sm" placeholder="Search theme, plugins &amp; more...">
                            <button type="submit" class="btn btn-main btn-icon icon border-0">
                                <img src="{{asset('/')}}front/assets/images/icons/search.svg" alt="">
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== Breadcrumb one Section End ===================== -->
    <!-- ======================== All Product Section Start ====================== -->
    <section class="all-product padding-y-120">
        <div class="container container-two">
            <div class="row">

                <div class="col-xl-12 col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab" tabindex="0">
                            <div class="row gy-4 list-grid-wrapper">
                                @foreach($themess as $theme)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="{{route('detail',['categorySlug'=>$theme->sub_category->slug,'postSlug'=>$theme->slug]) }}" class="link w-100">
                                                <img src="{{asset($theme->image)}}" alt="" class="cover-img">
                                            </a>
{{--                                            <button type="button" class="product-card__wishlist"></button>--}}
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="{{route('detail',['categorySlug'=>$theme->sub_category->slug,'postSlug'=>$theme->slug]) }}" class="link">{{$theme->name}}</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">Tk.{{$theme->selling_price}}</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$theme->regular_price}}</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
{{--                                                    <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
                                                    <div class="d-flex align-items-center gap-1">
                                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
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
                                                      <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- Pagination Start -->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination common-pagination">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                            <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Pagination End -->

                        </div>
                        <div class="tab-pane fade" id="pills-bestMatch" role="tabpanel" aria-labelledby="pills-bestMatch-tab" tabindex="0">
                            <div class="row gy-4 list-grid-wrapper">
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$120</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$259</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1200 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$236</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">900 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$59</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$129</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1225 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$99</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$129</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1300 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$256</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">200 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$259</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">500 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img9.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img10.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img11.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Pagination Start -->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination common-pagination">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                            <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Pagination End -->

                        </div>
                        <div class="tab-pane fade" id="pills-bestRating" role="tabpanel" aria-labelledby="pills-bestRating-tab" tabindex="0">
                            <div class="row gy-4 list-grid-wrapper">
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$120</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$259</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1200 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$236</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">900 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$59</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$129</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1225 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$99</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$129</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1300 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$256</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">200 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$259</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">500 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img9.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img10.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img11.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Pagination Start -->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination common-pagination">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                            <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Pagination End -->

                        </div>
                        <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab" tabindex="0">
                            <div class="row gy-4 list-grid-wrapper">
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$120</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$259</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1200 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$236</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">900 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$59</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$129</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1225 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$99</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$129</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1300 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$256</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">200 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$259</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">500 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img9.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img10.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img11.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Pagination Start -->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination common-pagination">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                            <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Pagination End -->

                        </div>
                        <div class="tab-pane fade" id="pills-bestOffers" role="tabpanel" aria-labelledby="pills-bestOffers-tab" tabindex="0">
                            <div class="row gy-4 list-grid-wrapper">
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$120</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$259</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1200 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$236</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">900 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$59</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$129</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1225 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$99</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$129</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1300 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$256</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">200 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$259</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">500 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img9.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img10.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img11.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Pagination Start -->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination common-pagination">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                            <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Pagination End -->

                        </div>
                        <div class="tab-pane fade" id="pills-bestSelling" role="tabpanel" aria-labelledby="pills-bestSelling-tab" tabindex="0">
                            <div class="row gy-4 list-grid-wrapper">
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$120</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$259</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1200 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$236</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">900 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$59</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$129</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1225 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$99</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$129</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">1300 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$256</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">200 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$129</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$259</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">500 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img9.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img10.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img11.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-card section-bg">
                                        <div class="product-card__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="{{asset('/')}}front/assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                                            </a>
                                            <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-card__content">
                                            <h6 class="product-card__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                                            </h6>
                                            <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
                by
                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
            </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-card__price mb-0">$79</h6>
                                                    <span class="product-card__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-card__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-card__sales font-14 mb-2">2100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Pagination Start -->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination common-pagination">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                            <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                        </a>
                                    </li>
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
