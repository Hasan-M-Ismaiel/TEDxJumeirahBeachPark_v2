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

<!-- photos -->
<section id="gallery" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Photos</h3>
                    <div class="section-title">
                        <p class="wow fadeInUp mt-1" data-wow-delay=".4s">View more photos on <strong>Flickr</strong>
                        <div class="button">
                            <a href="https://www.flickr.com/photos/201995414@N03/" class="btn" target="_blank">Flickr
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right ms-2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
                        </div>
                        </p>
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">See how wonderful the event was</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">The TEDxJumeirahBeachPark event is brought to life by a dedicated team of passionate individuals who believe in the power of ideas. Our team members come from diverse backgrounds and share a common drive to create a platform for inspiring conversations.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="all-speakers">
                    <div class="row align-items-center justify-content-center">

                        <div class="container-fluid" data-aos="fade" data-aos-delay="500">
                            <div class="row">

                                @foreach ($categories as $category)
                                <div class="col-lg-4">
                                    <div class="image-wrap-2">
                                        <div class="image-info">
                                            <h2 class="mb-3">{{$category->title}}</h2>
                                            <a href="{{ route('images', [$category->id]) }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                                        </div>
                                        <img src="{{ asset($category->path) }}" loading="lazy" alt="Image" class="img-fluid">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- call to action section -->
@include('includes.call_action')

<!-- footer -->
@include('includes.footer')


@endsection