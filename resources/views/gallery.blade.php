@extends('layouts.app_main')

@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs_other_events">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12 d-flex justify-content-start">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Our beautiful memories</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Memories</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- gallery -->
@include('includes.gallery.gallery')

<!-- call to action -->
@include('includes.call_action')

@endsection