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
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Become a volunteer</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>volunteer form</li>
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

                    <form id="signUpForm" class="w-100 rounded-1 p-4 border bg-white" action='{{ route("storeVolunteer") }}' method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Personal Info Section -->
                        <h2 class="mb-3" style="text-align: center; margin: 0px; padding: 12px; background-color: rgb(235, 11, 41); color: white;">Personal Info </h2>

                        <!--first name-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Full name</strong></span>
                            <input name="full_name" type="text" class="form-control" placeholder="full name" value="{{ old('full_name') }}" />
                        </label>

                        <!--email-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Email address</strong></span>
                            <input name="email" type="email" class="form-control"  value="{{ old('email') }}" />
                        </label>

                        <!--phone-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Phone number</strong></span>
                            <input name="phone_number" type="text" class="form-control"  value="{{ old('phone_number') }}" />
                        </label>

                        <!--nationality-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Nationality</strong></span>
                            <input name="nationality" type="text" class="form-control" value="{{ old('nationality') }}" />
                        </label>

                        <!--residence country-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Residence country</strong></span>
                            <input name="residence_country" type="text" class="form-control" value="{{ old('residence_country') }}" />
                        </label>

                        <!--birthday-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Birthday</strong></span>
                            <input name="birthday" type="date" class="form-control" value="{{ old('birthday') }}" />
                        </label>

                        <!--Education-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Education</strong></span>
                            <input name="education" type="text" class="form-control" value="{{ old('education') }}">
                        </label>

                        <!--Work-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Work</strong></span>
                            <input name="work" type="text" class="form-control" value="{{ old('work') }}">
                        </label>

                        <!--linkedin account-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Linkedin account</strong></span>
                            <input name="linkedin_account" type="text" class="form-control" placeholder="" value="{{ old('linkedin_account') }}">
                        </label>

                        <!--other social media account-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Other social media account</strong></span>
                            <input name="other_account" type="text" class="form-control" placeholder="" value="{{ old('other_account') }}">
                        </label>

                        <!--have you heard about ted-->
                        <label class="d-block mb-4">
                            <div class="form-group">
                                <label for="question_1"><span class="me-2 text-danger h6">*</span><strong>Have you heard about what TED & TEDx events are?</strong></label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question_1" id="question_1_yes" value="yes" checked>
                                    <label class="form-check-label" for="question_1_yes">
                                        yes
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question_1" id="question_1_no" value="no">
                                    <label class="form-check-label" for="question_1_no">
                                        no
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question_1" id="question_1_not_sure" value="not sure">
                                    <label class="form-check-label" for="question_1_not_sure">
                                        not sure
                                    </label>
                                </div>
                            </div>
                        </label>

                        <!-- Personal Info Section -->
                        <h2 class="mb-3" style="text-align: center; margin: 0px; padding: 12px; background-color: rgb(235, 11, 41); color: white;">Volunteering Info </h2>

                        <!--why do you want to be a volunteer-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Why do you want to be a volunteer in TEDxJumeirahbeachpark?</strong></span>
                            <textarea rows="4" cols="50" name="question_2" type="text" class="form-control" placeholder="Because ...">{{ old('question_2') }}</textarea>
                        </label>

                        <!--hours-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>How many hours can you contribute per week?</strong></span>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="question_3" id="question_1_2" value="2" checked>
                                <label class="form-check-label" for="question_1_2">
                                    2h
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="question_3" id="question_1_4" value="4">
                                <label class="form-check-label" for="question_1_4">
                                    4h
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="question_3" id="question_1_6" value="6">
                                <label class="form-check-label" for="question_1_6">
                                    6h
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="question_3" id="question_1_8" value="8">
                                <label class="form-check-label" for="question_1_8">
                                    8h
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="question_3" id="question_1_10" value="10">
                                <label class="form-check-label" for="question_1_10">
                                    10h
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="question_3" id="question_1_more" value="more">
                                <label class="form-check-label" for="question_1_more">
                                    more
                                </label>
                            </div>
                        </label>

                        <!--what is your skills -->
                        <label class="d-block mb-4">
                            <div class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>What is your skills?</strong></div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_1" name="selected_skills[]" value="Digital Marketing">
                                <label class="form-check-label" for="skill_1">
                                    Digital Marketing
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_2" name="selected_skills[]" value="Social Media Management">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Social Media Management
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_3" name="selected_skills[]" value="Content Creation">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Content Creation
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_4" name="selected_skills[]" value="Voice Over">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Voice Over
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_5" name="selected_skills[]" value="Translation from and to Arabic">

                                <label class="form-check-label" for="flexCheckDefault">
                                    Translation from and to Arabic
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_6" name="selected_skills[]" value="Graphic Design">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Graphic Design
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_7" name="selected_skills[]" value="Web Development">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Web Development
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_8" name="selected_skills[]" value="Photograph">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Photograph
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_9" name="selected_skills[]" value="Videograph">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Videograph
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_10" name="selected_skills[]" value="Video Editing">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Video Editing
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_11" name="selected_skills[]" value="Presentation Design">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Presentation Design
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_12" name="selected_skills[]" value="Speakers Training">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Speakers Training
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_13" name="selected_skills[]" value="Public Relations">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Public Relations
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_14" name="selected_skills[]" value="Event Planning">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Event Planning
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_14" name="selected_skills[]" value="Social Games & Activities Design">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Social Games & Activities Design
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_15" name="selected_skills[]" value="Audio & Lightning Technical Support">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Audio & Lightning Technical Support
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_16" name="selected_skills[]" value="IT Technical Support">
                                <label class="form-check-label" for="flexCheckDefault">
                                    IT Technical Support
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_17" name="selected_skills[]" value="Venue & Stage Design">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Venue & Stage Design
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="skill_18" name="selected_skills[]" value="other">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Other:
                                </label>
                                <input name="question_5" type="text" class="form-control" placeholder="" value="{{ old('question_5') }}">
                            </div>
                        </label>

                        <!--Describe yourself to the team -->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Descripe yourself and what you will add to our team?</strong></span>
                            <textarea rows="4" cols="50" name="question_6" type="text" class="form-control" placeholder="...">{{ old('question_6') }}</textarea>
                        </label>

                        <!--video-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><strong>It is better to record a video answering the previous questions (2 min) max.</strong> </span>
                            <input name="video" type="file" class="form-control" value="{{ old('video') }}">
                        </label>


                        <!-- Personal Info Section -->
                        <h2 class="mb-3" style="text-align: center; margin: 0px; padding: 12px; background-color: rgb(235, 11, 41); color: white;">Your Comments </h2>

                        <!--favourit speaker-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Please mention your favorite TED or TEDx talk?</strong></span>
                            <input name="question_7" type="text" class="form-control" placeholder="Because ..." value="{{ old('question_7') }}">
                        </label>

                        <!--notes-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><strong>Please add any notes or comments?</strong></span>
                            <textarea rows="4" cols="50" name="question_8" type="text" class="form-control" placeholder="Because ...">{{ old('question_8') }}</textarea>
                        </label>
                        <button type="submit" class="btn-submit">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Speakers Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection