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
                            Sheikh Salem bin Sultan Al Qasimi
                            <span>Chairman of the Department of Civil Aviation in Ras Al Khaimah</span>
                            <span style="color: black;">February 25, 2025</span>
                        </h3>
                        <ul class="rating">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                        </ul>
                    </div>
                    <p class="testimonial-text">
                        His Highness Sheikh Salem bin Sultan Al Qasimi attended the closing of the 'TEDx Jumeirah Beach Park' event in Dubai.
                    </p>
                    <p class="testimonial-text">
                        <strong>Read the full article → </strong> <a href="https://nbdelemirate.ae/159868.html">link</a>
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
                        <ul class="rating">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                        </ul>
                    </div>
                    <p class="testimonial-text">
                        TEDx Jumeirah Beach Park in Dubai was an exceptional experience - well-organized, inspiring, and truly collaborative. As the podcast partner, Portal Productions had the privilege of capturing powerful conversations with the speakers, and the team went above and beyond to support us. Their generosity opened doors to incredible opportunities, and we’re grateful to have been part of something so special. It's a shining example of what a purpose-driven team can achieve with the intention of giving back to the community - and we’re proud to be part of it.
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
                        <ul class="rating">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                        </ul>
                    </div>
                    <p class="testimonial-text">
                        We at IAORA Technologies are truly honored to have been the Technology Partner for the TEDxJumeirahBeachPark event, bringing the magic of holograms to an event that celebrates ideas, innovation, and inspiration. It was an incredible moment to see the opening introduction delivered through our hologram, blending cutting-edge technology with the spirit of storytelling that TEDx embodies.
                        At IAORA, our mission is to redefine the way people experience digital content, and this collaboration with TEDxJumeirahBeachPark perfectly aligns with our vision of immersive and impactful communication. Seeing the audience reaction of a lifelike, futuristic introduction reinforced our belief in the power of holograms to enhance human connection and storytelling.
                        We extend our deepest gratitude to the TEDxJumeirahBeachPark team, and Amal & Joelle in particular for trusting IAORA Technologies to be a part of this remarkable event. It’s partnerships like these that inspire us to push the boundaries of what’s possible in holographic technology and experiential storytelling.
                        We look forward to many more opportunities to bring innovation to the TEDx stage and beyond!
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

            const shortText = fullText.substring(0, maxLength) + "...";
            const moreLink = document.createElement("a");
            moreLink.className = "read-more-link";
            moreLink.textContent = " Read more";
            moreLink.href = "#";

            const fullSpan = document.createElement("span");
            fullSpan.style.display = "none";
            fullSpan.textContent = fullText;

            const shortSpan = document.createElement("span");
            shortSpan.className = "short-text";
            shortSpan.textContent = shortText;

            p.innerHTML = "";
            p.appendChild(shortSpan);
            p.appendChild(fullSpan);
            p.appendChild(moreLink);

            moreLink.addEventListener("click", function(e) {
                e.preventDefault();
                if (fullSpan.style.display === "none") {
                    fullSpan.style.display = "inline";
                    shortSpan.style.display = "none";
                    moreLink.textContent = " Show less";
                } else {
                    fullSpan.style.display = "none";
                    shortSpan.style.display = "inline";
                    moreLink.textContent = " Read more";
                }
            });
        });
    });
</script>