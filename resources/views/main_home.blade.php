@extends('layouts.app_main')

@section('content')

<!-- Start Hero Area -->
<section class="hero-area" loading="lazy">
</section>

<!-- End Hero Area -->
<div class="container-fluid mt-3">
    <div class="tedx-banner">
        <div class="logo-container">
            <img src="{{ asset('assets_main/assets/images/logo/logo-white-post-event.png') }}" loading="lazy" alt="TEDx Jumeirah Beach Park Logo" class="img-fluid" style="max-height: 100px;">
        </div>
        <div class="theme">
            Theme: Beauty of Diversity: The Golden<br>
            Ratio's Hidden Patterns
        </div>
        <div class="event-info">
            <div class="event-date">
                This event occurred on<br>
                February 23, 2025
            </div>
            <div class="event-location">
                <i class="bi bi-geo-alt-fill" style="color:red;"></i>
                <strong>Radisson RED Hotel</strong> |
                <strong>Dubai Silicon Oasis</strong>
                <br>
                Dubai, Dubayy |
                United Arab Emirates
            </div>
        </div>
    </div>
</div>

<!--Event images-->
<div class="logos overflow-hidden position-relative d-flex mt-2">
    <div class="logos-slide d-flex" style="white-space:nowrap;">
        @foreach ($images as $image)
        <section class="card_ ml-1 mr-1 c1 text-bg-warning py-2 px-2 rounded-3 d-flex justify-content-center align-items-center flex-column">
            <div class="d-flex mt-5">
                <span class="s1">
                    <img width="150px" src="{{ asset($image->path)}}" loading="lazy" alt="Event images">
                </span>
            </div>
        </section>
        @endforeach
    </div>
</div>

<!-- flicker button -->
<div class="section-title">
    <p class="wow fadeInUp mt-5" data-wow-delay=".4s">View more photos on <strong>Flickr</strong>
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


@include('includes.speakers')

@include('includes.partners')

@include('includes.performance')

@include('includes.testimonials')


<script src="" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


<!--logos for partners moving-->
<script>
    const cloneEl = document.querySelector(".logos-slide").cloneNode(true)
    document.querySelector('.logos').appendChild(cloneEl);
</script>

<!--about video script-->
<script>
    let video = document.querySelector('video');
    let isPaused = false;
    let observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.intersectionRatio != 1 && !video.paused) {
                video.pause();
                isPaused = true;
            } else if (isPaused) {
                video.play();
                isPaused = false
            }
        });
    }, {
        threshold: 1
    });
    observer.observe(video);
</script>

@endsection