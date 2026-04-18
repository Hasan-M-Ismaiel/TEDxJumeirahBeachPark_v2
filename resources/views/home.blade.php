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

    /* إنشاء الخط وتحديد حالته قبل التمرير */
    .event-link::after {
        content: '';
        position: absolute;
        width: 100%;
        transform: scaleX(0);
        /* يكون طول الخط 0 في البداية */
        height: 2px;
        /* سمك الخط */
        bottom: -2px;
        /* المسافة بين النص والخط */
        left: 0;
        background-color: white;
        /* لون الخط */
        transform-origin: bottom left;
        /* يبدأ النمو من اليسار */
        transition: transform 0.3s ease-out;
        /* سرعة ونعومة الحركة */
    }

    /* حالة الخط عند تمرير الماوس */
    .event-link:hover::after {
        transform: scaleX(1);
        /* يصبح طول الخط 100% */
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
                <strong>To Be Confirmed</strong>
                <!-- <strong>Dubai Silicon Oasis</strong> -->
                <br>
                Dubai, United Arab Emirates
                <!-- event->location  -->
            </div>
        </div>
    </div>
</div>

<!-- team members section -->
<!-- if($event->teammembers()->exists()) -->
@include('includes.team')
<!-- endif -->

<!-- partners section -->
@if($event->partners()->exists())
@include('includes.partners', ['partners' => $partners])
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