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
<div class="breadcrumbs_other_events">
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
                                        <h5 class="card-title fw-bold">Event Details</h5>
                                        <hr>
                                        <p class="card-text"><strong>📅 Date:</strong> Saturday, 6 June 2026</p>
                                        <p class="card-text"><strong>⏰Time:</strong> 10:00 AM - 03:30 PM | Registration starts at 09:00 AM</p>
                                        <p class="card-text"><strong>📍Location:</strong> IFZA HQ, Dubai Silicon Oasis <a href="https://maps.app.goo.gl/7JSackV9Zrw3DyVb8"> Google Map.</a> Please ensure the destination is set to “IFZA HQ” on the map </p>
                                        <p class="card-text"><strong>🅿️ Parking:</strong> Available on-site</p>
                                    </div>
                                </div>

                                <!-- Image Section -->
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="{{ asset('assets_main/assets/images/events/IFZA.png') }}" class="img-fluid rounded" alt="Event Image">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container__ mt-5">
                    <h1 class="text-center mb-4">Event Program</h1>

                    <div class="event-card" style="background-color:rgb(182, 171, 171);">
                        <div>
                            <div class="event-time">09:00 - 10:00</div>
                            <div class="event-title">Registration</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">10:00 - 10:15</div>
                            <div class="event-title">Opening Ceremony</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">10:15 - 10:30</div>
                            <div class="event-title">Opening Performance</div>

                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">10:30 - 10:45</div>
                            <div class="event-title">TEDx Talk | Dr. Saeed Aldhaheri</div>
                            <div class="event-description">What a Robot Taught Me About Being Human </div>

                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">10:45 - 11:00</div>
                            <div class="event-title">TEDx Talk | Dr. Mohanad Alwadiya</div>
                            <div class="event-description">Riding the Wealth Escalator: The Proven Path to Your Financial Freedom</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">11:00 - 11:15</div>
                            <div class="event-title">TEDx Talk | Reim El Houni</div>
                            <div class="event-description">Why the Most Experienced Voices Remain Invisible</div>
                        </div>
                    </div>

                    <div class="event-card" style="background-color:rgb(182, 171, 171);">
                        <div>
                            <div class="event-time">11:15 - 11:30</div>
                            <div class="event-title">Coffee Break</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">11:30 - 12:00</div>
                            <div class="event-title">The Force Behind the Stage Session</div>
                            <div class="event-description">TEDxJumeirahBeachPark Team</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">12:00 - 12:15</div>
                            <div class="event-title">TEDx Talk | Bernadette Abraham</div>
                            <div class="event-description">The Hidden Problem with “Once in a While”</div>
                        </div>
                    </div>


                    <div class="event-card">
                        <div>
                            <div class="event-time">12:15 - 12:30</div>
                            <div class="event-title">TEDx Talk | Maria Haggo</div>
                            <div class="event-description">The Most Powerful System You've Never Managed</div>
                        </div>
                    </div>

                    <div class="event-card" style="background-color:rgb(182, 171, 171);">
                        <div>
                            <div class="event-time">12:30 - 13:00</div>
                            <div class="event-title">Lunch Break</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">13:00 - 13:15</div>
                            <div class="event-title">Interactive Experience Session</div>
                            <div class="event-description">Dubai Drums</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">13:15 - 13:30</div>
                            <div class="event-title">TEDx Talk | Dr. Mona Carlos A. Zoughaib</div>
                            <div class="event-description">The Blind Spots in Your Leadership Experience</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">13:30 - 13:45</div>
                            <div class="event-title">TEDx Talk | Abdullah Alsalmani</div>
                            <div class="event-description">...</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">13:45 - 14:00</div>
                            <div class="event-title">TEDx Talk | Hadil Al-Khatib</div>
                            <div class="event-description">The Moment I Chose Myself</div>
                        </div>
                    </div>

                    <div class="event-card" style="background-color:rgb(182, 171, 171);">
                        <div>
                            <div class="event-time">14:00 - 14:15</div>
                            <div class="event-title">Cofee Break</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">14:15 - 14:30</div>
                            <div class="event-title">TEDx Talk | Aboud Khederchah</div>
                            <div class="event-description">From Consumption to Design: Using Tech to Transform Yourself</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">14:30 - 14:45</div>
                            <div class="event-title">TEDx Talk | Captain Sahar Al Rasti</div>
                            <div class="event-description">When There is No Map, Become The Captain</div>
                        </div>
                    </div>

                    <div class="event-card" style="background-color:rgb(182, 171, 171);">
                        <div>
                            <div class="event-time">14:45 - 15:00</div>
                            <div class="event-title">His Excellency’s Speech</div>
                            <div class="event-description">Sheikh Ali bin Abdullah Al Mualla</div>
                        </div>
                    </div>

                    <div class="event-card">
                        <div>
                            <div class="event-time">15:00 - 15:15</div>
                            <div class="event-title">Closing Ceremony</div>
                            <div class="event-description">Speakers , Partners & Team Appreciation</div>
                        </div>
                    </div>


                    <div class="event-card" style="background-color:rgb(182, 171, 171);">
                        <div>
                            <div class="event-time">15:15 - 15:45</div>
                            <div class="event-title">Networking</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('includes.call_action')

@endsection