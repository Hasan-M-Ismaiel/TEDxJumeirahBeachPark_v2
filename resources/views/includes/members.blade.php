<section id="members" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Team</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Meet Our Team</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">The TEDxJumeirahbeachpark experience is brought to life by a dedicated team of passionate individuals who believe in the power of ideas. Our team members come from diverse backgrounds and share a common drive to create a platform for inspiring conversations.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="all-speakers">
                    <div class="row align-items-center justify-content-center">

                        @foreach ($members as $member)
                        <!-- if ($member->department == "Core team") -->
                        <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".4s">
                            <div class="single-speaker">
                                <div class="top-content">
                                    <div class="image">
                                        <img src="{{ asset($member->image) }}" alt="#">
                                    </div>
                                    <ul class="social">
                                        <li class="linkedin"><a href="{{ $member->linkedin }}" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                                <div class="name">
                                    <h3><a href="{{ route('teammember', [$member->slug]) }}">{{ $member->full_name }}</a></h3>
                                    <span>{{ $member->title }}</span>
                                </div>
                            </div>
                        </div>
                        <!-- endif -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>