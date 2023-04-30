@extends('cms.app2')
@section('title')
Slider|Show
@endsection
@section('content')

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1 class="d-inline">Sliders</h1>
                        <a href="{{route('slider.create')}}" class="btn btn-primary float-end">Add Slider</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($sliders as $slider)
                <div class="col-xl-4">
                    <div class="card widget widget-popular-product">
                        <div class="card-body">
                            <div class="widget-popular-product-container">
                                <div class="widget-popular-product-image">
                                    <img src="{{url('storage/cms/images')}}/slider/{{$slider->image}}" alt="">
                                </div>
                                <div class="widget-popular-product-content">
                                    <a href="#" class="widget-popular-product-title">{{$slider->title}}</a>
                                    <p class="widget-popular-product-text">{{$slider->description}}</p>
                                    <span class="widget-popular-product-rating">
                                    </span>
                                </div>
                            </div>
                            <div class="widget-payment-request-actions m-t-lg d-flex">
                                <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-light flex-grow-1 m-r-xxs">Edit</a>
                                <form action="{{route('slider.destroy',$slider->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-primary flex-grow-1 m-l-xxs" type="submit">Delete</button>
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