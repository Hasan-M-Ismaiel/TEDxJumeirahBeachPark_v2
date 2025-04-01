@extends('layouts.app_main')

@section('content')

<!-- Start Hero Area -->
<section class="hero-area">
    <div class="main__circle"></div>
    <div class="main__circle2"></div>
    <div class="main__circle3"></div>
    <div class="main__circle4"></div>
    <div class="container d-flex justify-content-start">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12">
                <div class="hero-content">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        Beauty of Diversity
                    </h2>
                    <p class="wow fadeInUp" style="font-size: 20px;" data-wow-delay=".6s">Golden Ratio’s Hidden Patterns
                    </p>
                    <h5 class="wow zoomIn" data-wow-delay=".2s"><i class="lni lni-map-marker"></i> Dubai,
                        UAE
                    </h5>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-12">
                            <div class="section-title mb-0">
                                <div class="button mt-4 ms-0" style="float: center;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->

<!-- Start Features Area -->
@include('includes.features_area')
<!-- /End Features Area -->

<div style="background-color: #F4F7FA;" class="pt-3">
    <div class="">
        <video id="myvideo" width="100%" height="auto" controls poster="{{ asset('assets_main/assets/images/poster_video.png') }}">
            <source src="{{ asset('assets_main/assets/hero_video/promo.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="row mt-5">
    <div class="col-12">
        <div class="section-title row">
            <div class="col-lg-6  col-md-8 col-12 border-end">
                <a class="navbar-brand" href="{{ route('main') }}">
                    <img src="{{ asset('assets_main/assets/images/logo/logo-black.png') }}" style="width:500px; height:auto" alt="Logo">
                </a>
            </div>
            <div class="col-lg-6  col-md-4 col-12 d-flex  align-items-center justify-content-center">
                <p class="wow fadeInUp" data-wow-delay=".6s">Is an Independently Organized
                    <span class="text-danger">TED</span> Event.
                </p>
            </div>
        </div>
    </div>
</div>

@include('includes.about_ted_main')


<!-- Start about Area -->
@include('includes.aboutEvent')
<!-- /End about Area -->

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
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-0.png);">
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Design partner</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-2.png);">
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Speakers' Coaching Partner</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-1.png);">
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Media partner</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-5.png);">
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
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-4.png);">
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
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-3.png);">
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Community Partner</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-9.png);">

                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Event Support Partner</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-30.png);">

                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Innovation partner</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-1000.png);">

                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Gift & Merchandies Partner</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-10001.png);">

                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>Volunteer Partner</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-3300.png);">

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
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-1012.png);">
                                <!-- <a href="#" class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-search"></span>
                                </a> -->
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <!-- <h3><a href="#">Creators Media</a></h3> -->
                                <span>Live Band</span>
                            </div>
                        </div>
                    </div>



                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(assets_main/assets/carosel/images/work-550.png);">
                                <!-- <a href="#" class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-search"></span>
                                </a> -->
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <!-- <h3><a href="#">Creators Media</a></h3> -->
                                <span>Live Band</span>
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