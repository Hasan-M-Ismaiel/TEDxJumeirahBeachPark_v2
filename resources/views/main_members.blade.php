@extends('layouts.app_main')

@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12 d-flex justify-content-start">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Core team members</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>core team members</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

@include('includes.members')

<div class="row align-items-center justify-content-center">
    <div class="col-12 mb-5">
        <div class="section-title mb-0">
            <div class="button mt-4 ms-0" style="float: center;">
                <a href="{{ route('team') }}" class="btn">Full team members</a>
            </div>
        </div>
    </div>
</div>

@include('includes.call_action')
@endsection