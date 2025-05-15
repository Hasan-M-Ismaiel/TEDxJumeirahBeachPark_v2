@extends('layouts.app_main')

@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container d-flex justify-content-start">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Speaker</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Speaker</li>
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
                    <!-- <h3 class="wow zoomIn" data-wow-delay=".2s">Ready to take the stage?</h3> -->
                    <!-- <h2 class="wow fadeInUp" data-wow-delay=".4s">If you want to be a speaker who will give a powerful talk that foster the love of learning in the audience, then don’t miss this opportunity!
                        A TEDx talk should center on an idea.
                    </h2> -->
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        <!-- some description realted to this page in general for all team speakers... -->
                    </p>
                </div>
            </div>
        </div>
        <div class="portfolio-details-page">
            <main class="main">

                <!-- Portfolio Details Section -->
                <section id="portfolio-details" class="portfolio-details">
                    <div class="container" data-aos="fade-up" data-aos-delay="100">
                        <div class="row gy-4">
                            <div class="col-lg-4">
                                <div class="portfolio-details-slider swiper init-swiper">
                                    <div class="swiper-wrapper align-items-center">
                                        <div class="swiper-slide">
                                            <img src="{{asset($speaker->image)}}" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                                    <h3>Speaker Information</h3>
                                    <ul>
                                        <li><strong>Name</strong>: {{ $speaker->name }}</li>
                                        <li><strong>Title</strong>: {{ $speaker->title }}</li>
                                        <li><strong>Topic title </strong>: {{ $speaker->topic_title }} </li>
                                        <li><strong>LinkedIn Account</strong>: <a href="{{ $speaker->linkedin }}" target="_blank">linkedin</a></li>
                                        <li><strong>Beayond the Stage Podcast Interview </strong>: <a href="{{ $speaker->podcast }}" target="_blank">podcast</a> </li>
                                        <li><strong>TEDx Officia Talk </strong>: <a href="{{ $speaker->talk }}" target="_blank">TEDx talk</a> </li>
                                    </ul>
                                </div>
                                <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                                    <h2>Name and Background</h2>
                                    <p>
                                        {{ $speaker->background }}
                                    </p>
                                </div>

                                <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                                    <h2>Idea Introduction</h2>
                                    <p>
                                        {{ $speaker->idea }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- /Portfolio Details Section -->
            </main>
        </div>
    </div>
</section>
<!-- /End Features Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection