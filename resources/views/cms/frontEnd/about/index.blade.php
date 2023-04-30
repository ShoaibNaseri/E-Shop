@extends('cms.app2')
@section('title')
About|Show
@endsection
@section('content')

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1 class="d-inline">Abouts</h1>
                        <a href="{{route('about.create')}}" {{$button}} class="btn btn-primary float-end">Add about</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($abouts as $about)
                <div class="col-xl-12">
                    <div class="card widget widget-popular-product">
                        <div class="card-body">
                            <div class="widget-popular-product-container">
                                <div class="widget-popular-product-image">
                                    <img height="500px" width="600px" src="{{url('storage/cms/images/about')}}/{{$about->aboutImage}}" alt="">
                                </div>
                                <div class="widget-popular-product-content">
                                    <a href="#" class="widget-popular-product-title">{{$about->aboutTitle}}</a>
                                    <p class="widget-popular-product-text">{{$about->aboutDescription}}</p>
                                    <span class="widget-popular-product-rating">
                                    </span>
                                </div>
                            </div>
                            <div class="widget-payment-request-actions m-t-lg d-flex">
                                <a href="{{route('about.edit',$about->id)}}" class="btn btn-light flex-grow-1 m-r-xxs">Edit</a>
                                <form action="{{route('about.destroy',$about->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-primary flex-grow-1 m-l-xxs" {{$button}} type="submit">Delete</button>
                                </form>

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