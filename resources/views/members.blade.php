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

<!-- core members -->
@include('includes.members', ['coreTeamMembers' => $coreTeamMembers ?? collect()])

<!-- call to action section -->
@include('includes.call_action')

@endsection