@extends('layouts.app_main')

@section('content')

<!-- css styles -->
<style>
    .event-meta {
        font-size: 18px;
        color: #ffffff;
    }

    .event-meta i {
        color: #e62b1e;
        /* TEDx red */
        margin-right: 6px;
    }

    .media-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: #111;
        color: white;
        padding: 30px 20px;
        border-radius: 12px;
        text-decoration: none;
        transition: 0.3s ease;
        height: 150px;
    }

    .media-card i {
        font-size: 40px;
        margin-bottom: 10px;
        color: #e62b1e;
    }

    .media-card:hover {
        background: #e62b1e;
        color: white;
        transform: translateY(-5px);
    }

    .media-card:hover i {
        color: white;
    }

    .media-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: #111;
        color: white;
        padding: 30px 20px;
        border-radius: 12px;
        text-decoration: none;
        transition: 0.3s ease;
        height: 150px;
    }

    .media-card i {
        font-size: 40px;
        margin-bottom: 10px;
        color: #e62b1e;
    }

    .media-card:hover {
        background: #e62b1e;
        color: white;
        transform: translateY(-5px);
    }

    .media-card:hover i {
        color: white;
    }
</style>

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container d-flex justify-content-start">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">{{ $event->title }}</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Events</li>
                    </ul>
                    <!-- Event Meta Info -->
                    <div class="event-meta mt-3">
                        <span class="me-4">
                            <i class="fa-solid fa-calendar-days"></i>
                            {{ \Carbon\Carbon::parse($event->date)->format('F Y') }}
                        </span>

                        <span>
                            <i class="fa-solid fa-location-dot"></i>
                            {{ $event->location }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- main content -->
<div class="container mt-5">

    <!-- header title -->
    <section id="speakers" class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h1>{{ $event->title }}</h1>
                        <p>{{ $event->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- theme meanning -->
    @if($event->id=="3")
    @include('includes.features_area')

    <!-- TEDxJumeiarhBeachPark video -->
    <div style="background-color: #F4F7FA;" class="pt-3">
        <div class="">
            <video id="myvideo" width="100%" height="auto" controls poster="{{ asset('assets_main/assets/images/poster/poster_video.webp') }}">
                <source src="{{ asset('assets_main/assets/hero_video/promo.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    @endif

    <!-- media section -->
    @if( $event->youtube_link || $event->podcast_link || $event->gallery_link)
    <section class="event-media mt-5">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Explore The Event</h2>
                <p>Watch, listen and relive the experience.</p>
            </div>

            <div class="row justify-content-center">

                @if($event->youtube_link)
                <div class="col-md-3 col-6 mb-4">
                    <a href="{{ $event->youtube_link }}" target="_blank" class="media-card">
                        <i class="fa-brands fa-youtube"></i>
                        <span>Watch on YouTube</span>
                    </a>
                </div>
                @endif

                @if($event->podcast_link)
                <div class="col-md-3 col-6 mb-4">
                    <a href="{{ $event->podcast_link }}" target="_blank" class="media-card">
                        <i class="fa-solid fa-podcast"></i>
                        <span>Podcast</span>
                    </a>
                </div>
                @endif

                @if($event->gallery_link)
                <div class="col-md-3 col-6 mb-4">
                    <a href="{{ $event->gallery_link }}" target="_blank" class="media-card">
                        <i class="fa-solid fa-image"></i>
                        <span>Photo Gallery</span>
                    </a>
                </div>
                @endif

                @if($event->program)
                <div class="col-md-3 col-6 mb-4">
                    <a href="{{ $event->program }}" target="_blank" class="media-card">
                        <i class="fa-solid fa-newspaper"></i>
                        <span>Program</span>
                    </a>
                </div>
                @endif

            </div>
        </div>
    </section>
    @endif

    <!-- speakers section -->
    @if($event->speakers()->exists())
    @include('includes.speakers')
    @endif

    <!-- team members section -->
    <!-- include('includes.team') -->

    <!-- partners section -->
    @if($event->partners()->exists())
    @include('includes.partners', ['partners' => $event->partners])
    @endif

    <!-- performances -->
    @if($event->partners()->where('type', 'performance')->exists())
    @include('includes.performance')
    @endif

    <!-- sponsors section -->
    @if($event->partners()->where('type', 'sponsor')->exists())
    @include('includes.sponsors')
    @endif


    <!-- testimonials section -->
    <!-- removed to the home page -->


</div>

@include('includes.call_action')

@endsection

