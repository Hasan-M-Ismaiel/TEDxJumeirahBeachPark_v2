@extends('layouts.app_main')

@section('content')


@php
$isSalon = !$speaker->events->contains('type', 'Standard Event');
@endphp

<!-- Start Breadcrumbs -->
<div class="breadcrumbs_other_events">
    <div class="container d-flex justify-content-start">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    @if ($isSalon)
                    <h1 class="page-title">Expert</h1>
                    @else
                    <h1 class="page-title">Speaker</h1>
                    @endif
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        @if ($isSalon)
                        <li>Expert</li>
                        @else
                        <li>Speaker</li>
                        @endif

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
                    <p class="wow fadeInUp" data-wow-delay=".6s">
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
                                    @if ($isSalon)
                                    <h3>Expert Information</h3>
                                    @else
                                    <h3>Speaker Information</h3>
                                    @endif
                                    <ul>
                                        <li><strong>Name</strong>: {{ $speaker->name }}</li>
                                        <li><strong>Title</strong>: {{ $speaker->title }}</li>


                                        @if (!$isSalon)
                                        <li>
                                            <strong>Topic title </strong>: {{ $speaker->topic_title }}
                                        </li>
                                        @endif

                                        <li><strong>LinkedIn Account</strong>: <a href="{{ $speaker->linkedin }}" target="_blank">linkedin</a></li>
                                        @if(!empty($speaker->podcast))
                                        <li>
                                            <strong>Beyond the Stage Podcast Interview</strong>:
                                            <a href="{{ $speaker->podcast }}" target="_blank">Podcast</a>
                                        </li>
                                        @endif


                                        @if (!$isSalon)
                                        <li>
                                            <strong>TEDx Official Talk</strong>:
                                            <a href="{{ $speaker->talk }}" target="_blank">TEDx talk</a>
                                        </li>
                                        @endif


                                    </ul>
                                </div>
                                <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                                    <!-- <h2>Name and Background</h2> -->
                                    <p>
                                        {{ $speaker->background }}
                                    </p>
                                </div>

                                <!-- <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                                    <h2>Idea Introduction</h2>
                                    <p>
                                        
                                    </p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</section>

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection