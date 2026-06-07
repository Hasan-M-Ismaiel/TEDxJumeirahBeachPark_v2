@extends('layouts.app_main')

@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs_other_events">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Reserve your Seat</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Registration Form - Look within</li>
                    </ul>
                    <!-- Event Meta Info -->
                    <div class="event-meta mt-3" style="font-size: large;">
                        <span class="me-4">
                            <i class="fa-solid fa-calendar-days" style="color: #ff0024;"></i>
                            <span style="color: white;">6 - June 2026</span>
                        </span>

                        <span>
                            <i class="fa-solid fa-location-dot" style="color: #ff0024;"></i>
                            <span style="color: white;">IFZA HQ, Dubai Silicon Oasis</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Speakers Area -->
<section id="speakers" class="speakers section">
    <div class="row">
        <div class="container">
            <div class="row mx-0 justify-content-center">
                <!-- Validation Errors -->
                @if ($errors->any())
                <div class="mb-4 mt-4" id="signUpForm">
                    <span class="pe-4 font-medium text-danger border border-danger border-rounded rounded">
                        <span class="bg-danger py-2 px-2  text-white">Whoops!</span>{{ __(' Something went wrong.') }}
                    </span>

                    <ul class="mt-3 list-group list-group-flush text-danger">
                        @foreach ($errors->all() as $error)
                        <li class="list-group-item text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="w-100 rounded-1 p-5 border bg-white text-center">
                    <i class="fa-solid fa-circle-check mb-4"
                        style="font-size: 70px; color: rgb(235, 11, 41);"></i>

                    <h2 style="color: rgb(235, 11, 41); font-weight: bold;">
                        Thank You for Attending
                    </h2>

                    <p class="mt-3" style="font-size: 20px;">
                        We sincerely appreciate your participation and support.
                    </p>

                    <p style="font-size: 18px; color: #666;">
                        Stay tuned for our upcoming events and exciting opportunities.
                    </p>

                    <a href="{{ route('main') }}" class="btn btn-danger mt-3">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- /End Speakers Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection