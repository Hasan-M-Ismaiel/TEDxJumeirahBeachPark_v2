@extends('layouts.app_main')

@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12 d-flex justify-content-start ms-5">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">About</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>about</li>
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
            <div class="col-lg-4 col-md-12 col-12 d-flex  align-items-center justify-content-center">
                <!-- <img src="{{ asset('assets_main/assets/images/logo/logo-black.png') }}" alt="Logo"> -->
                <img src="{{ asset('assets_main/assets/images/122.png') }}" style="width:500px; height:auto" alt="Logo">
            </div>
            <div class="col-lg-8 col-md-12 col-12 d-flex justify-content-center align-items-center">
                <!-- <div class="section-title"> -->
                <!-- <h6 class="wow zoomIn" data-wow-delay=".2s">Our theme</h6> -->
                <div>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s"><span class="text-danger">TEDx</span> <span class="display-6">JumeirahBeachPark </span></h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">The UAE is a living canvas where threads of culture, language, and tradition intersect. TEDxJumeirahBeachPark celebrates this vibrant tapestry, inviting you to explore stories from Emiratis, expatriates, and global thinkers. Our speakers, like colorful threads, share their unique perspectives, weaving a narrative of unity and understanding. Let's unravel the beauty of diversity together. </p>
                    <br>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Dubai's skyline is a harmonious blend of innovation and heritage. These architectural marvels mirror the UAE's ethos—a fusion of tradition and modernity. Behind Dubai's architectural allure lies the golden ratio—a mathematical concept that defines beauty. At TEDxJumeirahBeachPark, we explore how mathematics and aesthetics intersect, creating a symphony of balance and allure. </p>
                    <br>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Feel the pulse of diversity, witness architectural wonders, and embrace the golden ratio.</p>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>
<!-- /End Features Area -->


<div style="background-color: #F4F7FA;" class="pt-3">
    <div class="">
        <video id="myvideo" width="100%" height="auto" controls poster="{{ asset('assets_main/assets/images/poster_video.png') }}">
            <source src="{{ asset('assets_main/assets/hero_video/promo.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="row mt-5">
    <div class="col-12">
        <div class="section-title row">
            <div class="col-lg-6  col-md-8 col-12 border-end">
                <a class="navbar-brand" href="{{ route('main') }}">
                    <img src="{{ asset('assets_main/assets/images/logo/logo-black.png') }}" loading="lazy" style="width:500px; height:auto" alt="Logo">
                </a>
            </div>
            <div class="col-lg-6  col-md-4 col-12 d-flex  align-items-center justify-content-center">
                <p class="wow fadeInUp" data-wow-delay=".6s">Is an Independently Organized
                    <span class="text-danger">TED</span> Event.
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Start Speakers Area -->
<!-- <section id="speakers" class="speakers section"> -->
@include('includes.about_ted_main')
<!-- </section> -->
<!-- /End Speakers Area -->

<!-- Start about Area -->
@include('includes.aboutEvent')
<!-- /End about Area -->

<!-- Start Features Area -->
@include('includes.features_area')
<!-- /End Features Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection