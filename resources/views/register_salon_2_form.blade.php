@extends('layouts.app_main')

@section('content')


<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12 d-flex justify-content-start">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">TEDx - How Can Art Communicate Ideas</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Attendance Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Message Area -->
<section id="message" class="message section">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4 bg-white rounded text-center" style="max-width: 500px;">
            <h1 class="text-danger">Oops! You missed it!</h1>
            <p>Stay updated on our upcoming events by subscribing to our newsletter and following us on social media.</p>
            <div class="social-links mt-3">
                <a href="https://www.facebook.com/TEDxJumeirahBeachPark" target="_blank"><i class="lni lni-facebook-filled"></i></a>
                <a href="https://www.instagram.com/tedx_jumeirahbeachpark/" target="_blank"><i class="lni lni-instagram-filled"></i></a>
                <a href="https://www.linkedin.com/company/tedx-jumeirahbeachpark/" target="_blank"><i class="lni lni-linkedin-original"></i></a>
                <a href="https://www.tedxjumeirahbeachpark.com/blog#newsletter" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3381ca" class="bi bi-mailbox2-flag" viewBox="0 0 16 16">
                        <path d="M10.5 8.5V3.707l.854-.853A.5.5 0 0 0 11.5 2.5v-2A.5.5 0 0 0 11 0H9.5a.5.5 0 0 0-.5.5v8z" />
                        <path d="M4 3h4v1H6.646A4 4 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3V3a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4m.585 4.157C4.836 7.264 5 7.334 5 7a1 1 0 0 0-2 0c0 .334.164.264.415.157C3.58 7.087 3.782 7 4 7s.42.086.585.157" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Message Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection