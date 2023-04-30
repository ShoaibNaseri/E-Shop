@extends('cms.app2')
@section('title')
Contact|Show
@endsection
@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1 class="d-inline">Contact Details</h1>
                        <a href="{{route('contact.create')}}" class="btn btn-primary float-end">Create Contact</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($contacts as $contact)
                <div class="col-xl-4">
                    <div class="card widget widget-list">

                        <div class="card-body">
                            <span class="text-muted m-b-xs d-block">showing Contact details</span>
                            <ul class="widget-list-content list-unstyled">
                                <li class="widget-list-item widget-list-item-blue">
                                    <span class="widget-list-item-icon"><i class="material-icons-outlined">room</i></span>
                                    <span class="widget-list-item-description">
                                        <a href="#" class="widget-list-item-description-title">
                                            Address
                                        </a>
                                        <span class="widget-list-item-description-subtitle">
                                            {{$contact->adress}}
                                        </span>
                                    </span>
                                </li>
                                <li class="widget-list-item widget-list-item-blue">
                                    <span class="widget-list-item-icon"><i class="material-icons-outlined">call</i></span>
                                    <span class="widget-list-item-description">
                                        <a href="#" class="widget-list-item-description-title">
                                            Phone
                                        </a>
                                        <span class="widget-list-item-description-subtitle">
                                            {{$contact->phone}}
                                        </span>
                                    </span>
                                </li>
                                <li class="widget-list-item widget-list-item-purple">
                                    <span class="widget-list-item-icon"><i class="material-icons-outlined">mail</i></span>
                                    <span class="widget-list-item-description">
                                        <a href="#" class="widget-list-item-description-title">
                                            Email
                                        </a>
                                        <span class="widget-list-item-description-subtitle">
                                            {{$contact->email}}
                                        </span>
                                    </span>
                                </li>

                            </ul>
                            <div class="border-top mt-4">
                                <a href="{{route('contact.edit', $contact->id)}}" class="btn btn-primary mt-3"><span class="widget-list-item-icon"><i class="material-icons-outlined">edit</i></span>Edit</a>
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