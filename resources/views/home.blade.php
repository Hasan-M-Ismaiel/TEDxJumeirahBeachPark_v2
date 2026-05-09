@extends('layouts.app_main')

@section('content')

<style>
    .event-link {
        color: white;
        text-decoration: none;
        position: relative;
        /* ضروري لتموضع الخط */
        display: inline-block;
    }

    .event-link::after {
        content: '';
        position: absolute;
        width: 100%;
        transform: scaleX(0);
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: white;
        transform-origin: bottom left;
        transition: transform 0.3s ease-out;
    }

    .event-link:hover::after {
        transform: scaleX(1);
    }
</style>

<!-- Start Hero Area -->
<section class="hero-area" loading="lazy">
</section>


<!-- theme section -->
<div class="container-fluid mt-3">
    <div class="tedx-banner">
        <div class="logo-container">
            <img src="{{ asset('assets_main/assets/images/logo/logo-white-post-event.png') }}" loading="lazy" alt="TEDx Jumeirah Beach Park Logo" class="img-fluid" style="max-height: 100px;">
        </div>
        <div class="theme">
            <a href="{{ route('events.show', $event->slug) }}" class="text-white no-underline hover:underline">
                {{ $event->title }}
            </a>
        </div>
        <div>
            <p>{{ $event->short_description }}</p>
        </div>
        <div class="event-info">
            <div class="event-date">
                This event will occur
                <br>
                {{ \Carbon\Carbon::parse($event->date)->format('F Y') }}
            </div>
            <div class="event-location">
                <i class="bi bi-geo-alt-fill" style="color:red;"></i>
                <!-- <strong>To Be Confirmed</strong> -->
                <strong>IFZA HQ, Nadd Hessa - Dubai Silicon Oasis</strong>
                <br>
                United Arab Emirates
                <!-- event->location  -->
            </div>
        </div>
    </div>
</div>

<!-- team members section -->
<!-- if($event->teammembers()->exists()) -->
@include('includes.team')
<!-- endif -->

<!-- speakers section -->
@if($event->speakers()->exists())
@include('includes.speakers')
@endif


<!-- partners section -->
@if($eventPartners->count())
@include('includes.partners', [
'partners' => $eventPartners,
'title' => 'Our Partners'
])
@endif


@if($otherPartners->count())
@include('includes.partners', [
'partners' => $otherPartners,
'title' => 'Previous Partners'
])
@endif


<!-- performances -->
@include('includes.performance', ['performers' => $performers])

<!-- sponsors section -->
@if($event->partners()->where('type', 'sponsor')->exists())
@include('includes.sponsors')
@endif

<!-- testimonials section -->
@include('includes.testimonials', ['testimonials' => $testimonials])


@endsection