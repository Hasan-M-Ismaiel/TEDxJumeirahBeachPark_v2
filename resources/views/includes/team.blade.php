<section id="members" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Team</h3>
                    <!-- <h2 class="wow fadeInUp" data-wow-delay=".4s">Team Members</h2> -->
                    <p class="wow fadeInUp" data-wow-delay=".6s">TEDxJumeirahBeachPark event is brought to life by a dedicated team of passionate individuals who believe in the power of ideas. Our team members come from diverse backgrounds and share a common drive to create a platform for inspiring conversations.</p>
                </div>
            </div>
        </div>

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="isotope-layout" data-default-filter=".filter-core-team" data-layout="masonry" data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter=".filter-core-team" class="filter-active">Core team</li>
                        <li data-filter=".filter-marketing">Marketing & Communication team</li>
                        <li data-filter=".filter-production">Production team</li>
                        <li data-filter=".filter-operation-logistics">Operations & Logistics team</li>
                        <li data-filter=".filter-previous">Previous Team members</li>
                    </ul>

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($members as $member)
                        <div class="col-lg-3 col-md-6 portfolio-item isotope-item {{$member->subteam}}">
                            <img src="{{ asset($member->image) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{$member->full_name}}</h4>
                                <p>{{$member->title}}</p>

                                <a href="{{ asset($member->image) }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                </a>

                                <a href="{{ route('teammember', [$member->slug]) }}" target="_blank" title="More Details" class="details-link">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- team taps -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        var grid = document.querySelector('.isotope-container');

        var iso = new Isotope(grid, {
            itemSelector: '.isotope-item',
            layoutMode: 'masonry'
        });

        // تطبيق الفلتر الافتراضي
        var defaultFilter = document.querySelector('.isotope-layout')
            .getAttribute('data-default-filter');

        iso.arrange({
            filter: defaultFilter
        });

        var filtersElem = document.querySelector('.portfolio-filters');

        filtersElem.addEventListener('click', function(event) {
            if (!event.target.matches('li')) return;

            document.querySelector('.filter-active')
                .classList.remove('filter-active');

            event.target.classList.add('filter-active');

            var filterValue = event.target.getAttribute('data-filter');

            iso.arrange({
                filter: filterValue
            });
        });

    });
</script>