@extends('layouts.app_main')

@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container d-flex justify-content-start">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Feedback Survey</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Speaker</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Features Area -->
<section class="features section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    
                    <br>
                     <!-- Responsive Iframe Wrapper -->
                    <div class="iframe-container">
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdbzA9_Cbwd5XpAOWVJmHt0-oLJy2ey9gZk3DyEsJU7rtdThg/viewform?embedded=true"
                            frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Features Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection