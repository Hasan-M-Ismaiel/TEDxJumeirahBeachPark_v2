<!-- main partners -->
<section class="ftco-section" id="partners">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="section-title">

                    {{-- title comes from controller --}}
                    <h3 class="wow zoomIn" data-wow-delay=".2s">
                        {{ $title ?? 'Partners' }}
                    </h3>

                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        Our partners from our journey were visionary thinkers, innovators, and storytellers...
                    </p>

                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="featured-carousel owl-carousel">

                @foreach($partners as $partner)
                    <div class="item">
                        <div class="work">

                            <div class="img d-flex align-items-center justify-content-center rounded"
                                 style="background-image: url('{{ asset($partner->logo) }}');">
                            </div>

                            <div class="text pt-3 w-100 text-center">
                                <span>{{ $partner->partnership }}</span>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
</section>

<script>
    const cloneEl = document.querySelector(".logos-slide")?.cloneNode(true);
    if (cloneEl) {
        document.querySelector('.logos')?.appendChild(cloneEl);
    }
</script>