<!-- main partners -->
<section class="ftco-section" id="partners">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        @if ($event->title == "Upcoming Standard Event: Look Within" && !Request::is('/'))
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Partners</h3>
                        @else
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Previous Partners</h3>
                        @endif

                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            Our partners from our first journey were visionary thinkers, innovators, and storytellers...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    @foreach($partners as $partner)
                    @if($partner->type == "support" or ($partner->type == "performance" && $partner->id=="8") )
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center rounded" loading="lazy" style="background-image: url('{{ asset($partner->logo) }}');">
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>{{ $partner->partnership }}</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


<!--logos for partners moving-->
<script>
    const cloneEl = document.querySelector(".logos-slide").cloneNode(true)
    document.querySelector('.logos').appendChild(cloneEl);
</script>