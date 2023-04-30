@extends('cms.app')
@section('title')
Admin|Register
@endsection
@section('content')
<div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">




    <div class="app-auth-container">
        <div class="logo">
            <a href="index-2.html">Company Name</a>
        </div>
        <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Already have an account? <a href="{{route('adminLoginPage')}}">Sign in</a></p>
        <form action="{{route('adminStore')}}" method="POST" enctype="multipart/form-data">
            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" placeholder="example@neptune.com">

                <label for="signName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control m-b-md" id="signName" aria-describedby="signInPassword" placeholder="Shoaib Hasib">

                <label for="signInPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control m-b-md" id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">


            </div>

            <div class="auth-submit">
                <button class="btn btn-primary" type="submit">Register</button>
                <a href="#" class="auth-forgot-password float-end">Forgot password?</a>
            </div>
            <div class="divider"></div>
            <div class="auth-alts">
                <a href="#" class="auth-alts-google"></a>
                <a href="#" class="auth-alts-facebook"></a>
                <a href="#" class="auth-alts-twitter"></a>
            </div>
            @csrf
        </form>

    </div>


</div>
@endsection