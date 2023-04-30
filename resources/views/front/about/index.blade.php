@extends('front.app')
@section('title')
About
@endsection
@section('content')

<main class="main-wrapper">
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">About Us</li>
                        </ul>
                        <h1 class="title">About Our Store</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->
    <!-- Start About Area  -->
    <div class="axil-about-area about-style-2">
        <div class="container">
            <div class="row align-items-center mb--80 mb_sm--60">
                <div class="col-lg-5">
                    <div class="about-thumbnail">
                        <img src="{{url('storage/cms/images/about')}}/{{$about->aboutImage}}" alt="about">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content content-right">
                        <span class="subtitle">Our Story</span>
                        <h4 class="title">{{$about->aboutTitle}}</h4>
                        <p>{{$about->aboutDescription}}</p>
                        <a href="{{route('frontContact')}}" class="axil-btn btn-outline">Get In Touch</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End About Area  -->
</main>


@endsection