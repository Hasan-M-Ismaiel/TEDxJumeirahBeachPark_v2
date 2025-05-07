@extends('layouts.app_main')

@section('content')

<!-- Start Hero Area -->
<section class="hero-area" loading="lazy">
    <div class="main__circle"></div>
    <div class="main__circle2"></div>
    <div class="main__circle3"></div>
    <div class="main__circle4"></div>
    <div class="container d-flex justify-content-start"></div>
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

<div class="logos overflow-hidden position-relative d-flex mt-2">
    <div class="logos-slide d-flex" style="white-space:nowrap;">
        @foreach ($images as $image)
        <section class="card_ ml-1 mr-1 c1 text-bg-warning py-2 px-2 rounded-3 d-flex justify-content-center align-items-center flex-column">
            <div class="d-flex mt-5">
                <span class="s1">
                    <img width="150px" src="{{ asset($image->path)}}" loading="lazy" alt="">
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

<script src="" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script>
    const cloneEl = document.querySelector(".logos-slide").cloneNode(true)
    document.querySelector('.logos').appendChild(cloneEl);
</script>

<!-- Start testimonials Area -->
@include('includes.testimonials')
<!-- /End testimonials Area -->

@include('includes.speakers')

<section class="ftco-section" id="partners">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <!-- <h2 class="heading-section mb-5 pb-md-4">our Partners</h2> -->
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Our Partners</h3>
                </div>
                <div class="item mb-1">
                    <div class="work">
                        <img src="assets_main/assets/carosel/images/hero.png" />
                        <div class="text w-100 text-center">

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">

                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" loading="lazy" style="background-image: url(assets_main/assets/carosel/images/work-0.png);">
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Design partner</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" loading="lazy" style="background-image: url(assets_main/assets/carosel/images/work-2.png);">
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Speakers' Coaching Partner</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" loading="lazy" style="background-image: url(assets_main/assets/carosel/images/work-1.png);">
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Media partner</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" loading="lazy"style="background-image: url(assets_main/assets/carosel/images/work-5.png);">
                                <!-- <a href="#" class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-search"></span>
                                </a> -->
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <!-- <h3><a href="#">Creators Media</a></h3> -->
                                <span>Promotion Partner</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded"loading="lazy"  style="background-image: url(assets_main/assets/carosel/images/work-4.png);">
                                <!-- <a href="#" class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-search"></span>
                                </a> -->
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <!-- <h3><a href="#">Creators Media</a></h3> -->
                                <span>Podcast Partner</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" loading="lazy" style="background-image: url(assets_main/assets/carosel/images/work-3.png);">
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Community Partner</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" loading="lazy" style="background-image: url(assets_main/assets/carosel/images/work-9.png);">

                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Event Support Partner</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" loading="lazy" style="background-image: url(assets_main/assets/carosel/images/work-30.png);">

                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Innovation partner</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" loading="lazy" style="background-image: url(assets_main/assets/carosel/images/work-1000.png);">

                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Gift & Merchandies Partner</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" loading="lazy" style="background-image: url(assets_main/assets/carosel/images/work-10001.png);">

                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Volunteer Partner</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" loading="lazy" style="background-image: url(assets_main/assets/carosel/images/work-3300.png);">

                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>AV Partner</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" id="partners">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <!-- <h2 class="heading-section mb-5 pb-md-4">our Partners</h2> -->
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Performance Partners</h3>
                </div>

            </div>
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded"  loading="lazy" style="background-image: url(assets_main/assets/carosel/images/work-1012.png);">
                                <!-- <a href="#" class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-search"></span>
                                </a> -->
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <!-- <h3><a href="#">Creators Media</a></h3> -->
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" loading="lazy" style="background-image: url(assets_main/assets/carosel/images/work-550.png);">
                                <!-- <a href="#" class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-search"></span>
                                </a> -->
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <!-- <h3><a href="#">Creators Media</a></h3> -->
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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