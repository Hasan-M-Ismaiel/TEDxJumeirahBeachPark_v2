@extends('layouts.app_main')

@section('content')


<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container d-flex justify-content-start">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Join Us</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Partner</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Features Area -->
<section class="features section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Be our partner</h3>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        Let’s spread inspiring ideas and foster community engagement together. Whether you're a business, organization, or individual passionate about innovation and education, we welcome you to join us on this journey.
                    </p>
                    <br>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Let's collaborate to bring innovative ideas to life and make an impact in our community!
                    </p>
                    <br>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="section-title mb-0">
                    <div class="button mt-4 ms-0" style="float: center;">
                        <a href="{{ route('partner_form') }}" class="btn">Become a partner</a>
                    </div>
                    <!-- feedback servey -->
                    <!-- <div class="button mt-4 ms-0" style="float: center;">
                        <a href="partner_evaluation_form" class="btn">Feedback Survey</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Features Area -->

<!-- call to action -->
@include('includes.call_action')

@endsection