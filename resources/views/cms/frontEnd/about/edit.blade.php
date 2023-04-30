@extends('cms.app2')
@section('title')
About|Edit
@endsection
@section('content')

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1 class="d-inline">Edit</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit About Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="example-container">
                                <div class="example-content">
                                    <form action="{{route('about.update',$about)}}" method="post" enctype="multipart/form-data" class="row g-3">
                                        @method('PATCH')
                                        @csrf
                                        @include('cms.frontEnd.about.form')
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