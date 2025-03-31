@extends('layouts.app_main')

@section('content')

<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12 d-flex justify-content-start">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Speakers</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Speakers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.speakers')


@include('includes.call_action')

@endsection