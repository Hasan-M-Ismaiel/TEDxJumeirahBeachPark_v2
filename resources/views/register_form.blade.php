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
    <div class="container d-flex justify-content-start">
        <div class="row ">
            <div class="col-lg-12 offset-lg-12 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Become a speaker</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>speaker form</li>
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
                            <span class="bg-danger py-2 px-2  text-white">Whoops!</span>{{ __(' something went wrong, please try again') }}
                        </span>

                        <ul class="mt-3 list-group list-group-flush text-danger">
                            @foreach ($errors->all() as $error)
                            <li class="list-group-item text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

<!--the form-->
                    <form id="signUpForm" class="w-100 rounded-1 p-4 border bg-white" action='{{ route("storeRegister") }}' method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Personal Info Section -->
                        <h2 class="mb-3" style="text-align: center; margin: 0px; padding: 12px; background-color: rgb(235, 11, 41); color: white;">Personal Info </h2>
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Full name</strong></span>
                            <input name="full_name" type="text" class="form-control" placeholder="full name" value="{{ old('full_name') }}" required />
                        </label>

                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Email address</strong></span>
                            <input name="email" type="email" class="form-control" placeholder="me@example.com" value="{{ old('email') }}" />
                        </label>

                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Phone number</strong></span>
                            <input name="phone_number" type="text" class="form-control" placeholder="+971-55-555-5555" value="{{ old('phone_number') }}" />
                        </label>

                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Nationality</strong></span>
                            <input name="nationality" type="text" class="form-control"  value="{{ old('nationality') }}" />
                        </label>

                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Residence country</strong></span>
                            <input name="residence_country" type="text" class="form-control"  value="{{ old('residence_country') }}" />
                        </label>

                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Birthday</strong></span>
                            <input name="birthday" type="date" class="form-control" value="{{ old('birthday') }}" />
                        </label>

                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Education</strong></span>
                            <input name="education" type="text" class="form-control"  value="{{ old('education') }}" />
                        </label>

                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Work</strong></span>
                            <input name="work" type="text" class="form-control"  value="{{ old('work') }}" />
                        </label>

                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Linkedin account</strong></span>
                            <input name="linkedin_account" type="text" class="form-control" placeholder="" value="{{ old('linkedin_account') }}" />
                        </label>

                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Other social media account</strong></span>
                            <input name="other_account" type="text" class="form-control" placeholder="" value="{{ old('other_account') }}" />
                        </label>

                        <!-- Other Info Section -->
                        <h2 class="mb-3" style="text-align: center; margin: 0px; padding: 12px; background-color:rgb(235, 11, 41); color: white;">Event-Related Info </h2>

                        <label class="d-block mb-4">
                            <div class="form-group">
                                <label for="question_1"><span class="me-2 text-danger h6">*</span><strong>Have you heard about TED & TEDx events?</strong></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question_1" id="question_1_yes" value="yes" checked>
                                    <label class="form-check-label" for="question_1_yes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question_1" id="question_1_no" value="no">
                                    <label class="form-check-label" for="question_1_no">No</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question_1" id="question_1_not_sure" value="not sure">
                                    <label class="form-check-label" for="question_1_not_sure">Not sure</label>
                                </div>
                            </div>
                        </label>


                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Introduce yourself.</strong></span>
                            <textarea rows="4" cols="50" name="question_2" class="form-control" placeholder="I'm ...">{{ old('question_2') }}</textarea>
                        </label>

                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>What is your talk idea?</strong></span>
                            <textarea rows="4" cols="50" name="question_3" class="form-control" placeholder="It's about ...">{{ old('question_3') }}</textarea>
                        </label>

                        <!--idea details-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Speak in detail about your talk's idea and why you feel it is important?</strong></span>
                            <textarea rows="4" cols="50" name="question_4" type="text" class="form-control" placeholder="">{{ old('question_4') }}</textarea>
                        </label>


                        <!--video-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>It is better to record a video answering the previous questions - 3 min at max & 50 MB max size</strong> </span>
                            <div class="mt-4">
                                <input type="file" name="avatar" id="avatar">
                            </div>
                        </label>

                        <!--idea message-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>What is the message you want to share through your talk?</strong></span>
                            <textarea rows="4" cols="50" name="question_5" type="text" class="form-control" placeholder="My message is ..." value="{{ old('question_5') }}">{{ old('question_5') }}</textarea>
                        </label>

                        <!--choosing_your_idea-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Why should we choose your idea? </strong></span>
                            <textarea rows="4" cols="50" name="question_6" type="text" class="form-control" placeholder="Because ..." value="{{ old('question_6') }}">{{ old('question_6') }}</textarea>
                        </label>

                        <!--choosing_your_as_speaker-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Why should we choose you as a speaker?</strong></span>
                            <textarea rows="4" cols="50" name="question_7" type="text" class="form-control" placeholder="Because ..." value="{{ old('question_7') }}">{{ old('question_7') }}</textarea>
                        </label>

                        <!--reason-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Why do you want to be a speaker in TEDxJumeirahbeachpark?</strong></span>
                            <textarea rows="4" cols="50" name="question_8" type="text" class="form-control" placeholder="Because ..." value="{{ old('question_8') }}">{{ old('question_8') }}</textarea>
                        </label>

                        <!--favourit speaker-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><span class="me-2 text-danger h6">*</span><strong>Please mention your favorite TED or TEDx talk?</strong></span>
                            <input name="question_9" type="text" class="form-control" placeholder="Because ..." value="{{ old('question_9') }}">
                        </label>

                        <h2 class="mb-3" style="text-align: center; margin: 0px; padding: 12px; background-color: rgb(235, 11, 41); color: white;">Your Comments</h2>

                        <!--notes-->
                        <label class="d-block mb-4">
                            <span class="form-label d-block"><strong>Please add any notes or comments?</strong></span>
                            <textarea rows="4" cols="50" name="question_10" type="text" class="form-control" placeholder="Because ..." value="{{ old('question_10') }}">{{ old('question_10') }}</textarea>
                        </label>

                        <!-- Submit Button -->
                        <!-- <button type="submit" class="btn" style="background-color: rgb(235, 11, 41); color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px;">Submit</button> -->
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

@section('scripts')
<script>
    const inputElement = document.querySelector('input[id="avatar"]');
    const pond = FilePond.create(inputElement);
    FilePond.setOptions({
        server: {
            url: '/upload', //this would be the route url we can add it to the web.php 
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        },
    });
</script>
<script>
    const form = document.getElementById("signUpForm");
    form.addEventListener("submit", logSubmit);
</script>

@endsection


@endsection