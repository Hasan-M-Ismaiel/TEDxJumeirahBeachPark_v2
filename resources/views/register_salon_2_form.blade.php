@extends('layouts.app_main')

@section('content')

<style>
    .required-label::before {
        content: "* ";
        color: red;
    }

    .required-label::before {
        content: "* ";
        color: red;
    }

    input[type=range] {
        -webkit-appearance: none;
        width: 100%;
        height: 6px;
        background: #ddd;
        border-radius: 3px;
        outline: none;
        margin: 0;
    }

    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 20px;
        height: 20px;
        background: red;
        cursor: pointer;
        border-radius: 50%;
        border: 2px solid #b30000;
        margin-top: -7px;
        transition: background 0.3s ease;
    }

    input[type=range]::-moz-range-thumb {
        width: 20px;
        height: 20px;
        background: red;
        cursor: pointer;
        border-radius: 50%;
        border: 2px solid #b30000;
        transition: background 0.3s ease;
    }
</style>

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12 d-flex justify-content-start">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Salon Event</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Attendance Registration Form</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<section id="speakers" class="speakers section">
    <div class="row">
        <div class="container">
            <div class="row mx-0 justify-content-center">
                <div class="col-md-10">

                    <!-- Validation Errors -->
                    @if ($errors->any())
                    <div class="mb-4 mt-4" id="signUpForm">
                        <span class="pe-4 font-medium text-danger border border-danger border-rounded rounded">
                            <span class="bg-danger py-2 px-2  text-white">Whoops!</span>{{ __(' something went wrong, please try again') }}
                        </span>

                        <ul class="mt-3 list-group list-group-flush text-danger">
                            @foreach ($errors->all() as $error)
                            <li class="list-group-item text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- The Form -->
                    <form id="signUpForm" class="w-100 rounded-1 p-4 border bg-white" action="{{ route('storeRegister_salon_2') }}" method="POST">
                        @csrf

                        <div style="display: block;">
                            <!-- first name -->
                            <label class="d-block mb-4" for="first_name">
                                <strong class="required-label">First Name </strong>
                                <input id="first_name" name="first_name" type="text" class="form-control" value="{{ old('first_name') }}" required />
                            </label>

                            <!-- last name -->
                            <label class="d-block mb-4" for="last_name">
                                <strong class="required-label">Last Name </strong>
                                <input id="last_name" name="last_name" type="text" class="form-control" value="{{ old('last_name') }}" required />
                            </label>

                            <!-- age -->
                            <!-- <label class="d-block mb-4" for="age">
                                <strong class="required-label">Age</strong>
                                <input id="age" name="age" type="range" class="form-range" min="10" max="100" step="1" value="{{ old('age', 25) }}" oninput="ageOutput.value = age.value" required />
                                <div class="mt-2">Selected Age: <output name="ageOutput" id="ageOutput">{{ old('age', 25) }}</output></div>
                            </label> -->

                            <!-- email  -->
                            <label class="d-block mb-4" for="email">
                                <strong class="required-label">Email </strong>
                                <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" required />
                            </label>

                            <!-- phone number -->
                            <label class="d-block mb-4" for="phone_number">
                                <strong class="required-label">Phone Number </strong>
                                <input id="phone_number" name="phone_number" type="text" class="form-control" value="{{ old('phone_number') }}" required />
                            </label>

                            <!-- Industry -->
                            <label class="d-block mb-4" for="industry">
                                <strong class="required-label">Industry </strong>
                                <input id="industry" name="industry" type="text" class="form-control" value="{{ old('industry') }}" required />
                            </label>

                            <!-- Job Title:  -->
                            <label class="d-block mb-4" for="job_title">
                                <strong class="required-label">Occupation / Job Title </strong>
                                <input id="job_title" name="job_title" type="text" class="form-control" value="{{ old('job_title') }}" required />
                            </label>

                            <!-- How did you hear about this TEDx salon event? (e.g., Social media, Word of mouth, Email, etc.) -->
                            <label class="d-block mb-4" for="how_did_you_hear">
                                <strong class="required-label">How did you hear about this TEDx salon event? (e.g., Social media, Word of mouth, Email, etc.)</strong>
                                <input id="how_did_you_hear" name="how_did_you_hear" type="text" class="form-control" value="{{ old('how_did_you_hear') }}" required />
                            </label>

                            <!-- <label class="d-block mb-4" for="country_of_residence">
                                <strong class="required-label">Country of Residence </strong>
                                <input id="country_of_residence" name="country_of_residence" type="text" class="form-control" value="{{ old('country_of_residence') }}" required />
                            </label> -->

                            <!-- <label class="d-block mb-4" for="city_of_residence">
                                <strong class="required-label">City of Residence </strong>
                                <input id="city_of_residence" name="city_of_residence" type="text" class="form-control" value="{{ old('city_of_residence') }}" required />
                            </label> -->

                            <!-- <label class="d-block mb-4" for="nationality">
                                <strong class="required-label">Nationality </strong>
                                <input id="nationality" name="nationality" type="text" class="form-control" value="{{ old('nationality') }}" required />
                            </label> -->

                            <!-- <label class="d-block mb-4" for="company_name">
                                <strong class="">Company / Organization Name - optional: </strong>
                                <input id="company_name" name="company_name" type="text" class="form-control" value="{{ old('company_name') }}" />
                            </label> -->

                            <!-- <label class="d-block mb-4" for="years_of_professional_experience">
                                <strong class="required-label">Years of Experience </strong>
                                <input id="years_of_professional_experience" name="years_of_professional_experience" type="number" class="form-control" value="{{ old('years_of_professional_experience') }}" min="0" required />
                            </label> -->


                            <!-- <label class="d-block mb-4" for="have_you_attend">
                                <strong class="required-label">Attended TEDx before? Where? </strong>
                                <textarea id="have_you_attend" name="have_you_attend" rows="3" class="form-control" required>{{ old('have_you_attend') }}</textarea>
                            </label> -->

                            <!-- <label class="d-block mb-4" for="why_attend">
                                <strong class="required-label">Why do you want to attend? </strong>
                                <textarea id="why_attend" name="why_attend" rows="3" class="form-control" required>{{ old('why_attend') }}</textarea>
                            </label> -->

                        </div>

                        <!-- Newsletter Checkbox -->
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="subscribed" name="subscribed" value="1" {{ old('subscribed') ? 'checked' : '' }}>
                            <label class="form-check-label" for="subscribed">
                                Sign-Up to subscribe to future updates about TEDx events or related content.
                            </label>
                        </div>

                        <button type="submit" class="btn-submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.call_action')

@section('scripts')
<script>
    const form = document.getElementById("signUpForm");
    form.addEventListener("submit", logSubmit);
</script>
@endsection

@endsection