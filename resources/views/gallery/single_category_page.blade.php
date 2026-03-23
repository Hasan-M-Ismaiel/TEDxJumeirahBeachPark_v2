@extends('layouts.gallery_layout')

@section('content')

<!-- header -->
@include('includes.header')

<!-- breadcrumbs -->
<div class="breadcrumbs_other_events">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12 d-flex justify-content-start">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Our Memories</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Beautiful moments</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- images -->
<div class="site-section" data-aos="fade">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Photos</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">See how wonderful the event was</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">TEDxJumeirahBeachPark event is brought to life by a dedicated team of passionate individuals who believe in the power of ideas. Our team members come from diverse backgrounds and share a common drive to create a platform for inspiring conversations.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- images -->
        <div class="row mt-5" id="lightgallery">
            @foreach ($images as $image)
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="{{ asset($image->path)}}" data-sub-html="<h4></h4><p></p>">
                <a href="#"><img src="{{ asset($image->path)}}" loading="lazy" alt="IMage" class="img-fluid"></a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- call to action  -->
@include('includes.call_action')

<!-- footer -->
@include('includes.footer')

@endsection