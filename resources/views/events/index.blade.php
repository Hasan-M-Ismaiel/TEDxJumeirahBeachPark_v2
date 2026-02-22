@extends('layouts.app_main')

@section('content')
<style>
    .event-card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .event-image {
        height: 220px;
        object-fit: cover;
    }

    .event-description {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* عدد الأسطر */
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 72px;
        /* يحافظ على تساوي الارتفاع */
    }
</style>

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container d-flex justify-content-start">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Events</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- main content -->
<div class="container mt-5">

    <!-- فلترة -->
    <form method="GET" class="row mb-4">
        <div class="col-md-4">
            <select name="year" class="form-control">
                <option value="">Filter by Year</option>
                @foreach($years as $year)
                <option value="{{ $year }}"
                    {{ request('year') == $year ? 'selected' : '' }}>
                    {{ $year }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <select name="type" class="form-control">
                <option value="">Event Type</option>
                <option value="main" {{ request('type')=='main'?'selected':'' }}>Main Event</option>
                <option value="salon" {{ request('type')=='salon'?'selected':'' }}>Salon</option>
            </select>
        </div>

        <div class="col-md-4">
            <button class="btn btn-danger w-100">Filter</button>
        </div>
    </form>

    <div class="row">
        @foreach($events as $event)
        <div class="col-md-4 mb-4 d-flex">
            <div class="card event-card w-100">

                @if($event->cover_image)
                <img src="{{ asset($event->cover_image) }}"
                    class="card-img-top event-image">
                @endif

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title">{{ $event->title }}</h5>

                    <p class="card-text event-description">
                        {{ $event->short_description }}
                    </p>

                    <small class="mb-3 text-muted">
                        {{ \Carbon\Carbon::parse($event->date)->format('F Y') }}
                    </small>

                    <div class="mt-auto">
                        <a href="{{ route('events.show', $event->slug) }}"
                            class="btn btn-outline-danger btn-sm w-100">
                            View more
                        </a>
                    </div>

                </div>
            </div>
        </div>

        @endforeach
    </div>

</div>

<!-- call to action -->
@include('includes.call_action')


@endsection