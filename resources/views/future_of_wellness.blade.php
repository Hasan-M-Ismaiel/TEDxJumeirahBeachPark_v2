@extends('layouts.app_main')

@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12 d-flex justify-content-start ms-5">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">TEDx - The Future of wellness</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Salons</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Call Action Area -->
<section id="about" class="call-action_main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="inner-content">
                    <div class="text">
                        <div class="row">
                            <div class="section-title">
                                <h2 class="wow fadeInUp" data-wow-delay=".4s"> <span style="background-color: #f03355; color: white; padding-left: 15px; padding-right: 15px">The Future of wellness </span> Nourishing the body, mind and purpose
                                </h2>
                                <br>
                                <h5 class="wow zoomIn" data-wow-delay=".2s"><i class="lni lni-map-marker"></i> JW Marriott Hotel Marina, Dubai - <a href="https://maps.app.goo.gl/kxzE3XCb4XEaEpTB6" target="_blank"><u>location</u></a>
                                </h5>
                                <br>
                                <div class="text pt-3 w-100 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                                        <path d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23" />
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                    </svg>
                                    <span> Saturday, Septemper 13th</span>
                                    <br>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                    </svg>
                                    <span> 07:00 PM - 10:00 PM (registration time starting at 6:30 PM)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- label - Experts -->
    <div class="container mt-5 ">
        <div class="col-md-12 text-center">
            <div class="section-title">
                <h3 class="wow zoomIn" data-wow-delay=".2s">Experts</h3>
            </div>
            <div class="container">
                <div class="all-speakers">
                    <div class="row align-items-center justify-content-center">
                        <!--First speaker-->
                        <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".2s">
                            <!-- Start Single Speaker -->
                            <div class="single-speaker">
                                <div class="top-content">
                                    <div class="image">
                                        <img src="{{ asset('assets_main/assets/images/speakers-salon-event-3/lucas.png') }}" loading="lazy" alt="#">
                                    </div>
                                    <ul class="social">
                                        <li class="instagram"><a href="https://www.instagram.com/ergogenic_health/" target="_blank"><i class="lni lni-instagram-original"></i></a></li>
                                    </ul>
                                </div>
                                <div class="name mb-4">
                                    <h3><a href="javascript:void(0)">Lucas Aoun</a></h3>
                                    <span>Naturopath & Health Coach</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Speaker -->

                        <!-- Start Single Speaker -->
                        <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-speaker">
                                <div class="top-content">
                                    <div class="image">
                                        <img src="{{ asset('assets_main/assets/images/speakers-salon-event-3/letizia.png') }}" loading="lazy" alt="#">
                                    </div>
                                    <ul class="social">
                                        <li class="instagram"><a href="https://www.instagram.com/althahealing/" target="_blank"><i class="lni lni-instagram-original"></i></a></li>
                                    </ul>
                                </div>
                                <div class="name px-0">
                                    <h3><a href="javascript:void(0)">Letizia Silvestri</a></h3>
                                    <span>Board Certified Clinical Hypnotherapist & Sound Healing Expert</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- desc -->
    <div class="section-title mt-3">
        <p class="wow fadeInUp" data-wow-delay=".6s"> This TEDx Salon is an intimate gathering designed to spark thoughtful discussions on health and wellness. 
The evening begins with a Sound Healing Session to create calm, clarity and emotional balance. 
A Super Energy session will follow, offering practical, science-backed strategies to enhance sleep, energy, immunity, hormone balance and recovery, so we can perform at our best every day.</p>
    </div>

    <!-- register -->
    <div class="row align-items-center justify-content-center mt-5">
        <div class="col-lg-8 col-md-10 col-12">
            <div class="section-title mb-0 text-center">

                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-4">

                    <!-- Payment Info -->
                    <div class="register-info text-md-end text-center pe-md-4">
                        <p class="mb-1" style="font-weight: 600;">Reserve your spot now, pay at the venue!</p>
                        <span style="font-size: 1.2rem; font-weight: bold;">🎟 200 AED</span>
                    </div>

                    <!-- Vertical Divider -->
                    <div class="d-none d-md-block"
                        style="border-left: 1px solid #ddd; height: 50px;">
                    </div>

                    <!-- Register Section -->
                    <div class="text-center ps-md-4">
                        <!-- <p class="wow fadeInUp mt-5" data-wow-delay=".4s"> Register Now ⬇️</p> -->
                        <div class="button mt-2 ms-0" style="float: center;">
                            <a href="#" class="btn" style="color: white;"> Registration is closed</a>
                            <!-- <a href="https://www.rotary.ae/events/rotary-club-of-jumeirah-and-tedx-jumeirah-beach-park-the-future-of-wellness-nourishing-the-body-mind-and-purpose/form" target="_blank" class="btn" style="color: white;"> register now</a> -->
                            <!-- <a target="_blank" href="https://www.flickr.com/photos/201995414@N03/albums/72177720327542593/" class="btn" style="color: white;">View Photos on Flickr</a> -->
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



    <!-- main partners -->
    <section class="ftco-section" id="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <div class="section-title">
                        <!-- <h3 class="wow zoomIn" data-wow-delay=".2s">Our Partners</h3> -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="featured-carousel owl-carousel">
                        
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center rounded"
                                    loading="lazy"
                                    style="
                                    background-image: url('assets_main/assets/carosel/images/Rotary-Club-Jumeirah.jpeg');
                                    background-size: contain;
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    width: 100%;
                                    height: 150px;
                                ">
                                </div>
                                <div class="text pt-3 w-100 text-center">
                                    <!-- <span>Community partner</span> -->
                                </div>
                            </div>
                        </div>
                        <!-- Add more items here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- End Call Action Area -->


<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection