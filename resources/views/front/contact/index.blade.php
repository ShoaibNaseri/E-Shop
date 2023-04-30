@extends('front.app')
@section('title')
Contact
@endsection
@section('content')
<main class="main-wrapper">
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">Contact</li>
                        </ul>
                        <h1 class="title">Contact With Us</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->
    <!-- Start Contact Area  -->
    <div class="axil-contact-page-area axil-section-gap">
        <div class="container">
            <div class="axil-contact-page">
                <div class="row row--30">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h3 class="title mb--10">We would love to hear from you.</h3>
                            <p>If you’ve got great products your making or looking to work with us then drop us a line.</p>
                            <form id="contact-form" method="POST" action="https://new.axilthemes.com/demo/template/etrade/mail.php" class="axil-contact-form">
                                <div class="row row--10">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="contact-name">Name <span>*</span></label>
                                            <input type="text" name="contact-name" id="contact-name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone <span>*</span></label>
                                            <input type="text" name="contact-phone" id="contact-phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="contact-email">E-mail <span>*</span></label>
                                            <input type="email" name="contact-email" id="contact-email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-message">Your Message</label>
                                            <textarea name="contact-message" id="contact-message" cols="1" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb--0">
                                            <button name="submit" type="submit" id="submit" class="axil-btn btn-bg-primary">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-location mb--40">
                            <h4 class="title mb--20">Contact Us</h4>
                            <span class="address mb--20">{{$contact->adress}}</span>
                            <span class="phone">Phone: {{$contact->phone}}</span>
                            <span class="email">Email: {{$contact->email}}</span>
                        </div>


                    </div>
                </div>
            </div>
            <!-- Start Google Map Area  -->
            <div class="axil-google-map-wrap axil-section-gap pb--0">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=melbourne&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
            <!-- End Google Map Area  -->
        </div>
    </div>
    <!-- End Contact Area  -->
</main>



@endsection