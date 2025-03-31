@extends('layouts.app_main')

@section('content')

<!--[if lte IE 9]>
    <p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
    </p>
<![endif]-->


<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12 d-flex justify-content-start">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Event Program</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Event Timeline</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Speakers Area -->
<section id="speakers" class="speakers section">
    <div class="row">
        <div class="container">
            <div class="row mx-0 justify-content-center">
                <div class="">
                    <div class="container d-flex justify-content-center align-items-center ">
                        <div class="container d-flex flex-wrap justify-content-center align-items-center">
                            <div class="row w-100">
                                <!-- Text Section -->
                                <div class="col-lg-6 col-md-12 text-md-left text-center mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">🎉 Event Details</h5>
                                        <hr>
                                        <p class="card-text"><strong>📅 Date:</strong> Sunday, February 23, 2025</p>
                                        <p class="card-text"><strong>⏰ Time:</strong> 10:30 AM - 6:30 PM</p>
                                        <p class="card-text"><strong>📍 Location:</strong> Radisson Red Hotel, Dubai Silicon Oasis, Dubai</p>
                                    </div>
                                </div>

                                <!-- Image Section -->
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="{{ asset('assets_main/assets/images/Hotel.jpg') }}" class="img-fluid rounded" alt="Event Image">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container__ mt-5">
                    <h1 class="text-center mb-4">Event Program</h1>

                    <div class="event-card" style="background-color:rgb(182, 171, 171);">
                        <div>
                            <div class="event-time">10:30am - 11:30am</div>
                            <div class="event-title">📝 Registration</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">11:30am - 11:40am</div>
                            <div class="event-title">🚀 Opening</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">11:40am - 11:55am</div>
                            <div class="event-title">🥁 Opening Performance</div>
                            
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">11:55am - 12:30am</div>
                            <div class="event-title">🎤 Introduction </div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">12:30am - 12:45am</div>
                            <div class="event-title">🌟 Speaker talk: Maher Al Kaabi</div>
                            <div class="event-description">Educating for Tomorrow: Are We Ready?</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">12:45am - 01:00pm</div>
                            <div class="event-title">🌟 Speaker talk: Suaad Alshamsi</div>
                            <div class="event-description">Sky’s Not the Limit: Empowering the Next Generation for the Future</div>
                        </div>
                    </div>

                    <div class="event-card" style="background-color:rgb(182, 171, 171);">
                        <div>
                            <div class="event-time">01:00pm - 01:30pm</div>
                            <div class="event-title">Coffee Break & Networking</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">01:30pm - 01:45pm</div>
                            <div class="event-title">🥁 Performance</div>
                            <div class="event-description">Zarooni & Friends(Local & International songs)</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">01:45pm - 02:00pm</div>
                            <div class="event-title">🌟 Speaker talk: Shashi Shekhar Singh</div>
                            <div class="event-description">Human-Centric Smart Cities: Designing Cities for People, not Businesses</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">02:00pm - 02:15pm</div>
                            <div class="event-title">🌟 Speaker talk: Mark Skljarov</div>
                            <div class="event-description">AI-Driven Circularity in Smart Cities: Fibonacci's Blueprint in Action</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">02:15pm - 02:30pm</div>
                            <div class="event-title">🥁 Innovative Performance</div>
                            <div class="event-description"></div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">02:30pm - 02:45pm</div>
                            <div class="event-title">🌟 Speaker talk: Alaa Dalghan</div>
                            <div class="event-description">Art in the Age of AI</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">02:45pm - 03:00pm</div>
                            <div class="event-title">🌟 Speaker talk: Karen Holliday</div>
                            <div class="event-description">Common Ground in Uncommon Times: Building Inclusive Networks Across Social Fences</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">03:00pm - 03:15pm</div>
                            <div class="event-title">🥁 Performance</div>
                        </div>
                    </div>

                    <div class="event-card" style="background-color:rgb(182, 171, 171);">
                        <div>
                            <div class="event-time">03:15pm - 04:00pm</div>
                            <div class="event-title">Lunch Break & Networking</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">04:00pm - 04:30pm</div>
                            <div class="event-title">🥁 Performance</div>
                            <div class="event-description">Dubai Drums</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">04:30pm - 04:45pm</div>
                            <div class="event-title">🌟 Speaker talk: Enrico Gallorini</div>
                            <div class="event-description">The Secret Ingredients of In-Person Experiences</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">04:45pm - 05:00pm</div>
                            <div class="event-title">🌟 Speaker talk: Corrie Block</div>
                            <div class="event-description">From Phelps to Google: Redefining Executive Coaching</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">05:00pm - 05:15pm</div>
                            <div class="event-title">🌟 Speaker talk: Heba Alshehhi</div>
                            <div class="event-description">Kindness: the small act that changes everything</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">05:15pm - 05:45pm</div>
                            <div class="event-title">🎤 Closing</div>
                        </div>
                    </div>


                    <div class="event-card" style="background-color:rgb(182, 171, 171);">
                        <div>
                            <div class="event-time">05:45pm - 06:30pm</div>
                            <div class="event-title">Coffee Break & Networking</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('includes.call_action')

@endsection