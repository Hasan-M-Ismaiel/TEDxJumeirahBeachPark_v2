@extends('layouts.app_main')

@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs_other_events">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Reserve your Seat</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Registration Form - Look within</li>
                    </ul>
                    <!-- Event Meta Info -->
                    <div class="event-meta mt-3" style="font-size: large;">
                        <span class="me-4">
                            <i class="fa-solid fa-calendar-days" style="color: #ff0024;"></i>
                            <span style="color: white;">6 - June 2026</span>
                        </span>

                        <span>
                            <i class="fa-solid fa-location-dot" style="color: #ff0024;"></i>
                            <span style="color: white;">IFZA HQ, Dubai Silicon Oasis</span>
                        </span>
                    </div>
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
                <!-- Validation Errors -->
                @if ($errors->any())
                <div class="mb-4 mt-4" id="signUpForm">
                    <span class="pe-4 font-medium text-danger border border-danger border-rounded rounded">
                        <span class="bg-danger py-2 px-2  text-white">Whoops!</span>{{ __(' Something went wrong.') }}
                    </span>

                    <ul class="mt-3 list-group list-group-flush text-danger">
                        @foreach ($errors->all() as $error)
                        <li class="list-group-item text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form id="signUpForm" class="w-100 rounded-1 p-4 border bg-white" action='{{ route("storeRegistration") }}' method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Personal Info Section -->
                    <h2 class="mb-4" style="text-align: center; margin: 0px; padding: 12px; background-color: rgb(235, 11, 41); color: white;">Registration </h2>

                    <!--first name-->
                    <label class="d-block mb-4">
                        <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Full name</strong></span>
                        <input name="full_name" type="text" class="form-control" placeholder="full name" value="{{ old('full_name') }}" required/>
                    </label>

                    <!--email-->
                    <label class="d-block mb-4">
                        <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Email address</strong></span>
                        <input name="email" type="email" class="form-control" value="{{ old('email') }}" required />
                    </label>

                    <!--phone-->
                    <label class="d-block mb-4">
                        <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Phone number</strong></span>
                        <input name="phone_number" type="text" class="form-control" value="{{ old('phone_number') }}" required />
                    </label>

                    <!--country-->
                    <label class="d-block mb-4">
                        <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Country</strong></span>
                        <input name="country" type="text" class="form-control" value="{{ old('country') }}" required />
                    </label>

                    <!--City-->
                    <label class="d-block mb-4">
                        <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>City</strong></span>
                        <input name="city" type="text" class="form-control" value="{{ old('city') }}" required />
                    </label>

                    <!--birthday-->
                    <label class="d-block mb-4">
                        <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Birthday</strong></span>
                        <input name="birthday" type="date" class="form-control" value="{{ old('birthday') }}" required />
                    </label>

                    <!--Education-->
                    <label class="d-block mb-4">
                        <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Education</strong></span>
                        <input name="education" type="text" class="form-control" value="{{ old('education') }}" required>
                    </label>

                    <!--Work-->
                    <label class="d-block mb-4">
                        <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Work</strong></span>
                        <input name="work" type="text" class="form-control" value="{{ old('work') }}" required>
                    </label>

                    <!--industry-->
                    <label class="d-block mb-4">
                        <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Industry</strong></span>
                        <input name="industry" type="text" class="form-control" value="{{ old('industry') }}" required>
                    </label>

                    <!--How did you heard about us-->
                    <label class="d-block mb-4">
                        <span class="form-label d-block">
                            <span class="me-2 text-danger h6">*</span>
                            <strong>How did you hear about us?</strong>
                        </span>

                        <select name="heard_about_us" class="form-control" required>
                            <option value="">-- Select --</option>
                            <option value="linkedin" {{ old('heard_about_us') == 'linkedin' ? 'selected' : '' }}>LinkedIn</option>
                            <option value="instagram" {{ old('heard_about_us') == 'instagram' ? 'selected' : '' }}>Instagram</option>
                            <option value="facebook" {{ old('heard_about_us') == 'facebook' ? 'selected' : '' }}>Facebook</option>
                            <option value="friends" {{ old('heard_about_us') == 'friends' ? 'selected' : '' }}>Friends</option>
                            <option value="other" {{ old('heard_about_us') == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </label>

                    <!--Attending as-->
                    <label class="d-block mb-4">
                        <span class="form-label d-block">
                            <span class="me-2 text-danger h6">*</span>
                            <strong>Attending as?</strong>
                        </span>

                        <select name="attending_as" class="form-control" required>
                            <option value="">-- Select --</option>
                            <option value="speaker_guest" {{ old('attending_as') == 'speaker_guest' ? 'selected' : '' }}>Speaker's Guest</option>
                            <option value="partner_guest" {{ old('attending_as') == 'partner_guest' ? 'selected' : '' }}>Partner's Guest</option>
                            <option value="team_guest" {{ old('attending_as') == 'team_guest' ? 'selected' : '' }}>Team's Guest</option>
                            <option value="general_admission" {{ old('attending_as') == 'general_admission' ? 'selected' : '' }}>General Admission</option>
                        </select>
                    </label>

                    <!--Why would you attend-->
                    <label class="d-block mb-4">
                        <span class="form-label d-block"><strong>Why would you attend?</strong></span>
                        <textarea rows="4" cols="50" name="why_attend" type="text" class="form-control" placeholder="...">{{ old('why_attend') }}</textarea>
                    </label>

                    <button type="submit" class="btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /End Speakers Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection