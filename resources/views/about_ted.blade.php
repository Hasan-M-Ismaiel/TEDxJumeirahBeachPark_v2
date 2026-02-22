@extends('layouts.app_main')

@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12 d-flex justify-content-start ms-5">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">About</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>about</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->


@include('includes.about_ted')

@include('includes.aboutEvent')

<div class="row mt-5 mb-5">
    <div class="col-12">
        <div class="section-title row">
            <div class="col-lg-6  col-md-8 col-12 border-end">
                <a class="navbar-brand" href="{{ route('main') }}">
                    <img src="{{ asset('assets_main/assets/images/logo/logo-black.png') }}" loading="lazy" style="width:500px; height:auto" alt="Logo">
                </a>
            </div>
            <div class="col-lg-6  col-md-4 col-12 d-flex  align-items-center justify-content-center">
                <p class="wow fadeInUp" data-wow-delay=".6s">Is an Independently Organized
                    <span class="text-danger">TED</span> Event.
                </p>
            </div>
        </div>
    </div>
</div>

@include('includes.call_action')

@endsection

