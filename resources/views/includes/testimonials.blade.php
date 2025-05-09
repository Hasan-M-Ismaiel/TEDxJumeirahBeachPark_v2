<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />

<section id="testimonials" class="testimonials section">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title text-center">
                <h3>Testimonials</h3>
                <h2>What People Are Saying about TEDxJumeirahBeachPark</h2>
                <!-- <p>Real feedback from our TEDxJumeirahBeachPark attendees.</p> -->
            </div>
        </div>

        <div class="slider-head">
            <div class="testimonial-slider">
                <!-- Slide 1 -->
                <div class="single-testimonial ms-1">
                    <div class="top-section">
                        <img src="{{ asset('assets_main/assets/images/image.png') }}" alt="person">
                        <h3>
                            Nabd Al Emarat
                            <span>News Website</span>
                            <span style="color: black;">February 25, 2025</span>
                        </h3>
                    </div>
                    <p class="testimonial-text">
                        <em>&ldquo;His Highness Sheikh Salem bin Sultan Al Qasimi attended the closing of the 'TEDx Jumeirah Beach Park' event in Dubai.&rdquo;</em>
                    </p>
                    <p class="">
                        <strong>Read the full article → </strong> <a href="https://nbdelemirate.ae/159868.html" target="_blank">link</a>
                    </p>
                </div>

                <!-- Slide 2 -->
                <div class="single-testimonial mx-1">
                    <div class="top-section">
                        <img src="{{ asset('assets_main/assets/images/portal.png') }}" alt="person">
                        <h3>
                            Zeena Zalamea & Thomas Smith
                            <span>Portal Production | Podcast Partner</span>
                            <span style="color: black;">March 19, 2025</span>
                        </h3>
                    </div>
                    <p class="testimonial-text">
                        <em>&ldquo;TEDx Jumeirah Beach Park in Dubai was an exceptional experience - well-organized, inspiring, and truly collaborative. As the podcast partner, Portal Productions had the privilege of capturing powerful conversations with the speakers, and the team went above and beyond to support us. Their generosity opened doors to incredible opportunities, and we’re grateful to have been part of something so special. It's a shining example of what a purpose-driven team can achieve with the intention of giving back to the community - and we’re proud to be part of it.&rdquo;</em>
                    </p>
                </div>

                <!-- Slide 3 -->
                <div class="single-testimonial">
                    <div class="top-section">
                        <img src="{{ asset('assets_main/assets/images/iaora.png') }}" alt="person">
                        <h3>
                            Sunil Padmanabhan
                            <span>IAORA | Innovation Partner</span>
                            <span style="color: black;">March 20, 2025</span>
                        </h3>
                    </div>
                    <p class="testimonial-text">
                        <em>&ldquo;We at IAORA Technologies are truly honored to have been the Technology Partner for the TEDxJumeirahBeachPark event, bringing the magic of holograms to an event that celebrates ideas, innovation, and inspiration. It was an incredible moment to see the opening introduction delivered through our hologram, blending cutting-edge technology with the spirit of storytelling that TEDx embodies.
                            At IAORA, our mission is to redefine the way people experience digital content, and this collaboration with TEDxJumeirahBeachPark perfectly aligns with our vision of immersive and impactful communication. Seeing the audience reaction of a lifelike, futuristic introduction reinforced our belief in the power of holograms to enhance human connection and storytelling.
                            We extend our deepest gratitude to the TEDxJumeirahBeachPark team, and Amal & Joelle in particular for trusting IAORA Technologies to be a part of this remarkable event. It’s partnerships like these that inspire us to push the boundaries of what’s possible in holographic technology and experiential storytelling.
                            We look forward to many more opportunities to bring innovation to the TEDx stage and beyond!&rdquo;</em>
                    </p>
                </div>

                <!-- Add more .single-testimonial divs if needed -->
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