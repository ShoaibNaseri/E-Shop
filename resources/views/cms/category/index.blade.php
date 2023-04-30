@extends('cms.app2')
@section('title')
Categories
@endsection
@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">

                        <div class="text-center">
                            <h1 class="p-3">Category List</h1>

                            <a href="{{route('category.create')}}" class="btn btn-primary"><i class="material-icons-two-tone">add</i>Add Category</a>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">University Lists</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NUM</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th class="float-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $Category)
                                    <tr>
                                        <td>{{$num++}}</td>
                                        <td>{{$Category->name}}</td>
                                        <td>{{$Category->description}}</td>

                                        <td class="float-end">
                                            <div class="d-flex">
                                                <div class="p-2">
                                                    <a href="{{route('category.edit', $Category)}}" class="btn btn-success"><i class="material-icons-two-tone">edit</i></a>
                                                </div>
                                                <div class="p-2">
                                                    <form action="{{route('category.destroy', $Category)}}" method="post" enctype="multipart/form-data"">
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
                                        <th>Description</th>
                                        <th class="float-end">Actions</th>


                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>












        @endsection