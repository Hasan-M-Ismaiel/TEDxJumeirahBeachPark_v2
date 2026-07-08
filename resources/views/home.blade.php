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
                This event occurred
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

<!-- Image Marquee -->
<section class="image-marquee-section py-5 mt-4">
    <div class="image-marquee">
        <div class="image-track">

            {{-- المجموعة الأولى --}}
            <img src="{{ asset('assets_main/assets/images/slider/1.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/2.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/3.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/4.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/5.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/6.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/7.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/8.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/9.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/10.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/11.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/12.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/13.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/14.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/15.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/16.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/17.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/18.webp') }}" alt="">

            {{-- تكرار الصور للحصول على حركة لا نهائية --}}
            <img src="{{ asset('assets_main/assets/images/slider/1.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/2.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/3.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/4.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/5.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/6.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/7.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/8.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/9.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/10.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/11.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/12.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/13.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/14.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/15.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/16.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/17.webp') }}" alt="">
            <img src="{{ asset('assets_main/assets/images/slider/18.webp') }}" alt="">

        </div>
    </div>
</section>

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