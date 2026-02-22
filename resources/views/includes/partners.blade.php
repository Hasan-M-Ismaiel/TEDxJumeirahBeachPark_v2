<!-- main partners -->
<section class="ftco-section" id="partners">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">partners</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Meet Our partners</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Our TEDxJumeirahbeachpark partners are visionary thinkers, innovators, and storytellers who bring fresh perspectives and powerful ideas to the stage. Coming from diverse backgrounds and industries, they are united by a passion for sparking meaningful conversations and inspiring change.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    @foreach($event->partners as $partner)
                    @if($partner->type == "support")
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