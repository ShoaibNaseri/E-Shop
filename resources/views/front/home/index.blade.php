<!DOCTYPE html>
<html lang="en">

@extends('front.app')
@section('title')
Dyar.Shop
@endsection
@section('content')
<main class="main-wrapper">
    <div class="axil-main-slider-area main-slider-style-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-6">
                    <div class="main-slider-content">
                        <div class="slider-content-activation-one">
                            @foreach($sliders as $slider)
                            <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                                <span class="subtitle"><i class="fas fa-fire"></i> {{$slider->description}}</span>
                                <h1 class="title">{{$slider->title}}</h1>
                                <div class="slide-action">
                                    <div class="shop-btn">
                                        <a href="shop.html" class="axil-btn btn-bg-white"><i class="fal fa-shopping-cart"></i>Shop Now</a>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6">
                    <div class="main-slider-large-thumb">
                        <div class="slider-thumb-activation-one axil-slick-dots">
                            @foreach($sliders as $slider)
                            <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="600" data-sal-duration="1500">
                                <img src="{{url('storage/cms/images/slider')}}/{{$slider->image}}" alt="Product">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Start Categorie Area  -->
    <div class="axil-categorie-area bg-color-white axil-section-gapcommon">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-secondary"> <i class="far fa-tags"></i> Categories</span>
                <h2 class="title">Browse by Category</h2>
            </div>
            <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                @foreach($categories as $category)
                <div class="slick-single-layout">
                    <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                        <a href="{{route('searchByCategory', $category->id)}}">

                            <h6 class="cat-title">{{$category->name}}</h6>
                        </a>
                    </div>
                    <!-- End .categrie-product -->
                </div>
                @endforeach
                <!-- End .slick-single-layout -->
            </div>
        </div>
    </div>
    <!-- End Categorie Area  -->
    <!-- Start Expolre Product Area  -->
    <div class=" axil-product-area bg-color-white axil-section-gap">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Our Products</span>
                <h2 class="title">Explore our Products</h2>
            </div>
            <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                <div class="slick-single-layout">
                    <div class="row row--15">
                        @foreach($products as $product)
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy" class="main-img" src="{{url('storage/cms/images/products')}}/{{$product->image}}" alt="Product Images">
                                        <img class="hover-img" src="{{url('storage/cms/images/products')}}/{{$product->image}}" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">

                                        <h5 class="title"><a href="single-product.html">{{$product->name}}</a></h5>
                                        <div class="product-price-variant">
                                            @if($product->Price != null)
                                            <span class="price current-price">{{$product->Price}}$</span>
                                            @else
                                            <span class="price current-price">Click To See Price</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Single Product  -->


                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt--20 mt_sm--0">
                    <a href="{{route('frontProduct')}}" class="axil-btn btn-bg-lighter btn-load-more">View All Products</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Start Axil Newsletter Area  -->
    <div class=" main-slider-style-1 axil-newsletter-area axil-section-gap p-5">
        <div class="container">
            <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                <div class="newsletter-content">
                    <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                    <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                    <div class="input-group newsletter-form">
                        <div class="position-relative newsletter-inner mb--15">
                            <input placeholder="example@gmail.com" type="text">
                        </div>
                        <button type="submit" class="axil-btn mb--15">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .container -->
    </div>
    <!-- End Axil Newsletter Area  --
</main>



@endsection