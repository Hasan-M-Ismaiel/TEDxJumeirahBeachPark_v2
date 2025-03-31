<section id="members" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Supportive Team</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Meet Our Amazing Team</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">The TEDxJumeirahbeachpark experience is brought to life by a dedicated team of passionate individuals who believe in the power of ideas. Our team members come from diverse backgrounds and share a common drive to create a platform for inspiring conversations.</p>
                </div>
            </div>
        </div>

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-marketing">Marketing & Communication team</li>
                        <li data-filter=".filter-operation">Operations team</li>
                        <li data-filter=".filter-logistics">Logistics team</li>
                        <li data-filter=".filter-production">Production team</li>
                        <li data-filter=".filter-core-team">Core team</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        @foreach ($members as $member)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item {{$member->subteam}}">
                            <img src="{{ asset($member->image) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{$member->full_name}}</h4>
                                <p>{{$member->title}}</p>
                                <a href="{{ asset($member->image) }}" title="{{$member->caption}}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="{{ route('teammember', [$member->id]) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->
                        @endforeach

                        
                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->


    </div>
</section>