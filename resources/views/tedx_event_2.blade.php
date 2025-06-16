@extends('layouts.app_main')

@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12 d-flex justify-content-start ms-5">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">TEDx - navigating space</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Events</li>
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
                                <h2 class="wow fadeInUp" data-wow-delay=".4s"> How Can Art Communicate Ideas ✨
                                </h2>
                                <br>
                                <h5 class="wow zoomIn" data-wow-delay=".2s"><i class="lni lni-map-marker"></i> Kanvas, Dubai - <a href="https://g.co/kgs/yBQ3b9h"><u>location</u></a>
                                </h5>
                                <br>
                                <div class="text pt-3 w-100 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                                        <path d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23" />
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                    </svg>
                                    <span> Sunday, June 29th</span>
                                    <br>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                    </svg>
                                    <span> 10:00 AM - 01:00 PM (registration time starting at 9:30 AM)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- label - Panellists -->
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Panellists</h3>
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
                                                <img src="{{ asset('assets_main/assets/images/speakers-salon-event-2/ayeh.png') }}" alt="#">
                                            </div>
                                            <ul class="social">
                                                <li class="linkedin"><a href="https://www.linkedin.com/in/ayehnaraghi/" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="name">
                                            <h3><a href="javascript:void(0)">Ayeh Naraghi</a></h3>
                                            <span>Artist</span>
                                        </div>
                                    </div>
                                    <!-- End Single Speaker -->
                                </div>
                                <!--Second speaker-->
                                <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".2s">
                                    <!-- Start Single Speaker -->
                                    <div class="single-speaker">
                                        <div class="top-content">
                                            <div class="image">
                                                <img src="{{ asset('assets_main/assets/images/speakers-salon-event-2/khawla.png') }}" alt="#">
                                            </div>
                                            <ul class="social">
                                                <li class="linkedin"><a href="https://www.linkedin.com/in/khawlaabousaleh/" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="name">
                                            <h3><a href="javascript:void(0)">Khawla Abu Saleh</a></h3>
                                            <span>visual artist and senior art director</span>
                                        </div>
                                    </div>
                                    <!-- End Single Speaker -->
                                </div>
                                <!--Third speaker-->
                                <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".8s">
                                    <!-- Start Single Speaker -->
                                    <div class="single-speaker">
                                        <div class="top-content">
                                            <div class="image">
                                                <img src="{{ asset('assets_main/assets/images/speakers-salon-event-2/kristel.png') }}" alt="#">
                                            </div>
                                            <ul class="social">
                                                <li class="linkedin"><a href="https://www.linkedin.com/in/kristel-bechara-1567b4150/" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="name">
                                            <h3><a href="javascript:void(0)">Kristel Bechara</a></h3>
                                            <span>contemporary visual artist</span>
                                        </div>
                                    </div>
                                    <!-- End Single Speaker -->
                                </div>
                                <!--Fourth speaker-->
                                <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".8s">
                                    <!-- Start Single Speaker -->
                                    <div class="single-speaker">
                                        <div class="top-content">
                                            <div class="image">
                                                <img src="{{ asset('assets_main/assets/images/speakers-salon-event-2/shehzad.png') }}" alt="#">
                                            </div>
                                            <ul class="social">
                                                <li class="linkedin"><a href="https://www.linkedin.com/in/shehzad-yunus-4a033712/" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="name">
                                            <h3><a href="javascript:void(0)">Shehzad Yunus</a></h3>
                                            <span>executive creative director</span>
                                        </div>
                                    </div>
                                    <!-- End Single Speaker -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- label - moderator -->
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="section-title">
                <h3 class="wow zoomIn" data-wow-delay=".2s">Moderator</h3>
            </div>
            <div class="container">
                <div class="all-speakers">
                    <div class="row align-items-center justify-content-center">
                        <!--moderator-->
                        <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".2s">
                            <!-- Start Single Speaker -->
                            <div class="single-speaker">
                                <div class="top-content">
                                    <div class="image">
                                        <img src="{{ asset('assets_main/assets/images/speakers-salon-event-2/alaa.png') }}" alt="#">
                                    </div>
                                    <ul class="social">
                                        <li class="linkedin"><a href="https://www.linkedin.com/in/alaadalghan/" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                                <div class="name">
                                    <h3><a href="javascript:void(0)">Alaa Dalghan</a></h3>
                                    <span>AI expert and the Managing Director of Cognit DX</span>
                                </div>
                            </div>
                            <!-- End Single Speaker -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-title mt-3">
        <p class="wow fadeInUp" data-wow-delay=".6s"> This event is one of the TEDx Salon gatherings, an intimate setting designed to spark thoughtful discussions on how art transcends aesthetics to communicate, challenge, and connect ideas. The event will explore the power of art in expressing complex messages, shifting perspectives, and raising awareness. We’ll also dive into how art fosters connection and shared experiences within communities, as well as the role of various mediums in creative expression. It’s a space to reflect, engage, and be inspired by the deeper impact of art in our lives.</p>
    </div>

    <div class="row align-items-center justify-content-center">
        <div class="col-12">
            <div class="section-title mb-0">
                <p class="wow fadeInUp mt-5" data-wow-delay=".4s"> Register Now ⬇️
                <div class="button mt-2 ms-0" style="float: center;">
                    <a href="#" class="btn" style="color: white;">Register</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call Action Area -->


<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection