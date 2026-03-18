@extends('layouts.app_main')

@section('content')

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
            {{ $event->title }}<br>
        </div>
        <div>
            <p>{{ $event->short_description }}</p>
        </div>
        <div class="event-info">
            <div class="event-date">
                This event will occur soon
                <br>
                <!-- \Carbon\Carbon::parse($event->date)->format('F Y') - just add the brackteses  -->
            </div>
            <div class="event-location">
                <i class="bi bi-geo-alt-fill" style="color:red;"></i>
                <strong>To Be Confirmed</strong>
                <!-- <strong>Dubai Silicon Oasis</strong> -->
                <br>
                Dubai, |
                United Arab Emirates | {{ $event->location }}
            </div>
        </div>
    </div>
</div>

<!-- removed -->
<!-- team members section -->
<!-- if(event->teammembers()->exists())
include('includes.team')
endif -->

<!-- partners section -->
@if($event->partners()->exists())
@include('includes.partners', ['partners' => $partners])
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
@include('includes.testimonials', ['testimonials' => $testimonials])


@endsection