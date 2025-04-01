@extends('layouts.app_main')

@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container d-flex justify-content-start">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Team member</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>team member</li>
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
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Ready to take the stage?</h3>
                    <!-- <h2 class="wow fadeInUp" data-wow-delay=".4s">If you want to be a speaker who will give a powerful talk that foster the love of learning in the audience, then don’t miss this opportunity!
                        A TEDx talk should center on an idea.
                    </h2> -->
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        some description realted to this page in general for all team members... 
                    </p>
                    <br>
                    <p class="wow fadeInUp" data-wow-delay=".6s">continue description...
                    </p>
                    <br>
                    <strong>continue description...</strong>
                </div>
            </div>
        </div>
        <div class="portfolio-details-page">
            <main class="main">

                <!-- Portfolio Details Section -->
                <section id="portfolio-details" class="portfolio-details">
                    <div class="container" data-aos="fade-up" data-aos-delay="100">
                        <div class="row gy-4">
                            <div class="col-lg-8">
                                <div class="portfolio-details-slider swiper init-swiper">
                                    <div class="swiper-wrapper align-items-center">
                                        <div class="swiper-slide">
                                            <img src="{{asset($member->image)}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                                    <h3>Team member information</h3>
                                    <ul>
                                        <li><strong>Name</strong>: {{ $member->full_name }}</li>
                                        <li><strong>Title</strong>: {{ $member->title }}</li>

                                        @if ($member->subteam == "filter-marketing")
                                        <li><strong>Team</strong>: Marketing team</li>
                                        @elseif ($member->subteam == "filter-core-team")
                                        <li><strong>Team</strong>: Core team</li>
                                        @elseif ($member->subteam == "filter-logistics")
                                        <li><strong>Team</strong>: Logistics team</li>
                                        @elseif ($member->subteam == "filter-operation")
                                        <li><strong>Team</strong>: Operations team</li>
                                        @elseif ($member->subteam == "filter-production")
                                        <li><strong>Team</strong>: Production team </li>
                                        @endif
                                        <li><strong>LinkedIn Account</strong>: <a href="#">linkedin</a></li>
                                    </ul>

                                </div>
                                <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                                    <h2>Short Bio</h2>
                                    <p>
                                        {{$member->bio}}
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