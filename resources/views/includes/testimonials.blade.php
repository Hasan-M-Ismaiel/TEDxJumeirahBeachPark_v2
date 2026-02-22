<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />

<section id="testimonials" class="testimonials section">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title text-center">
                <h3>Testimonials</h3>
                <h2>What People Are Saying about TEDxJumeirahBeachPark</h2>
                <p>Real feedback from our TEDxJumeirahBeachPark attendees.</p>
            </div>
        </div>

        <div class="slider-head">
            <div class="testimonial-slider">
                @foreach($event->testimonials as $testimonial)
                <div class="single-testimonial mx-1">
                    <div class="top-section">
                        <img src="{{ asset($testimonial->image) }}" alt="portal production image">
                        <h3>
                            {{ $testimonial->name }}
                            <span>{{ $testimonial->role }}</span>
                            <span style="color: black;">{{ \Carbon\Carbon::parse($testimonial->created_at)->format('F Y') }}</span>
                        </h3>
                    </div>
                    <p class="testimonial-text">
                        <em>{{ $testimonial->message }}</em>
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>

<script>
    // Tiny slider init
    const slider = tns({
        container: '.testimonial-slider',
        items: 1,
        slideBy: 'page',
        autoplay: true,
        mouseDrag: true,
        nav: true,
        controls: false,
        responsive: {
            640: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 3
            }
        }
    });

    // Read more toggle
    document.addEventListener("DOMContentLoaded", function() {
        const maxLength = 200;

        document.querySelectorAll(".testimonial-text").forEach(p => {
            const fullText = p.innerHTML.trim();
            if (fullText.length <= maxLength) return;

            const parentCard = p.closest('.single-testimonial');
            const wrapper = document.createElement("div");
            wrapper.className = "testimonial-text-wrapper";

            const shortText = fullText.substring(0, maxLength) + "...";
            const shortSpan = document.createElement("span");
            shortSpan.className = "short-text";
            shortSpan.innerHTML = shortText;

            const fullSpan = document.createElement("span");
            fullSpan.className = "full-text";
            fullSpan.innerHTML = fullText;
            fullSpan.style.display = "none";

            const moreLink = document.createElement("a");
            moreLink.className = "read-more-link";
            moreLink.textContent = " Read more";
            moreLink.href = "#";

            wrapper.appendChild(shortSpan);
            wrapper.appendChild(fullSpan);
            p.innerHTML = "";
            p.appendChild(wrapper);
            p.appendChild(moreLink);

            moreLink.addEventListener("click", function(e) {
                e.preventDefault();
                const isExpanded = parentCard.classList.contains("expanded");

                if (!isExpanded) {
                    shortSpan.style.display = "none";
                    fullSpan.style.display = "inline";
                    parentCard.classList.add("expanded");
                    moreLink.textContent = " Show less";
                } else {
                    shortSpan.style.display = "inline";
                    fullSpan.style.display = "none";
                    parentCard.classList.remove("expanded");
                    moreLink.textContent = " Read more";
                }
            });
        });
    });
</script>

<script>
    function setEqualTestimonialHeights() {
        const slides = document.querySelectorAll('.single-testimonial');

        // Reset all heights
        slides.forEach(slide => {
            slide.style.height = 'auto';
        });

        // Find max height
        let maxHeight = 0;
        slides.forEach(slide => {
            maxHeight = Math.max(maxHeight, slide.offsetHeight);
        });

        // Apply max height
        slides.forEach(slide => {
            slide.style.height = maxHeight + 'px';
        });
    }

    window.addEventListener('load', setEqualTestimonialHeights);
    window.addEventListener('resize', setEqualTestimonialHeights);
</script>