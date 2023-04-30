@extends('cms.app2')
@section('title')
Category|ADD
@endsection
@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1 class="d-inline">Add Category</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Add Category</h5>
                        </div>
                        <div class="card-body">
                            <div class="example-container">
                                <div class="example-content">
                                    <form action="{{route('category.store')}}" class="row g-3" method="post" enctype="multipart/form-data">
                                        @include('cms.category.form')
                                        <div class="col-12">
                                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                            <button type="reset" class="btn btn-warning"> Reset</button>
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