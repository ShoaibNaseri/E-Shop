@extends('cms.app2')
@section('title')
Product|ADD
@endsection
@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1 class="d-inline">Add Product</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Add Product</h5>
                        </div>
                        <div class="card-body">
                            <div class="example-container">
                                <div class="example-content">
                                    <form action="{{route('product.store')}}" class="row g-3" method="post" enctype="multipart/form-data">
                                        @include('cms.product.form')
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