@extends('cms.app2')
@section('title')
Products
@endsection
@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">

                        <div class="text-center">
                            <h1 class="p-3">Product List</h1>

                            <a href="{{route('product.create')}}" class="btn btn-primary"><i class="material-icons-two-tone">add</i>Add Product</a>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Products Lists</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NUM</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Link</th>
                                        <th class="float-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$num++}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td><a href="{{$product->link}}">{{$product->link}}</a></td>

                                        <td class="float-end">
                                            <div class="d-flex">
                                                <div class="p-2">
                                                    <a href="{{route('product.edit', $product)}}" class="btn btn-success"><i class="material-icons-two-tone">edit</i></a>
                                                </div>
                                                <div class="p-2">
                                                    <form action="{{route('product.destroy', $product)}}" method="post" enctype="multipart/form-data"">
                                            @csrf
                                            @method('DELETE')
                                                 <button type=" submit" data-toggle="Delete" class="btn btn-warning"><i class="material-icons-two-tone">delete</i></button>
                                                    </form>
                                                </div>
                                            </div>

                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>NUM</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Link</th>
                                        <th class="float-end">Actions</th>


                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>












        @endsection