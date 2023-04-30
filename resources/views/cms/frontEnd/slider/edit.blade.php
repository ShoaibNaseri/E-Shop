@extends('cms.app2')
@section('title')
Slider|Edit
@endsection
@section('content')

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1 class="d-inline">Edit a slider</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Add Slider</h5>
                        </div>
                        <div class="card-body">
                            <div class="example-container">
                                <div class="example-content">
                                    <form action="{{route('slider.update',$slider)}}" method="post" enctype="multipart/form-data" class="row g-3">
                                        @method('PATCH')
                                        @csrf
                                        @include('cms.frontEnd.slider.form')
                                        <div class="col-12">
                                            <button type="submit" name="submit" class="btn btn-primary">Upadate</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection