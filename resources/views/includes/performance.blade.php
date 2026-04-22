<style>
    .performance-card {
        background: #111;
        border-radius: 16px;
        overflow: hidden;
        transition: 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .performance-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    .performance-logo {
        padding: 20px;
        background: #000;
    }

    .performance-logo img {
        max-height: 60px;
        object-fit: contain;
    }

    .performance-hero img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .performance-footer {
        padding: 20px;
        margin-top: auto;
    }
</style>


<section id="performances" class="section py-5">
    <div class="container">

        <div class="section-title text-center mb-5">
            <h3>Previous Performance Partners</h3>
            <!-- <h2>Live Performances</h2> -->
        </div>

        <div class="row">
            @foreach($performers as $index => $performance)
            @if($performance->type == "performance")

            <div class="col-md-4 mb-4"
                data-aos="{{ $index % 2 == 0 ? 'fade-down' : 'fade-up' }}">

                <div class="performance-card">

                    <!-- Logo -->
                    <div class="performance-logo text-center">
                        <!-- <img src="{{ asset($performance->logo) }}" alt="logo"> -->
                    </div>

                    <!-- Hero Image -->
                    <div class="performance-hero">
                        <img src="{{ asset($performance->logo) }}" alt="performance">
                    </div>

                    <!-- Footer -->
                    <div class="performance-footer text-center">
                        <a href="{{ $performance->youtube }}"
                            target="_blank"
                            class="btn btn-danger btn-sm">
                            <i class="fa-brands fa-youtube"></i> Watch Performance
                        </a>
                    </div>

                </div>

            </div>
            @endif
            @endforeach
        </div>

    </div>
</section>

<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>
