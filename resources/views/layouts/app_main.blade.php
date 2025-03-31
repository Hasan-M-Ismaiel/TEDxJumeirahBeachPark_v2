<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TEDx JumierahBeachPark</title>
    <meta name="description" content="JumierahBeachPark, TED, TEDx, talk, event, conference, UAE, dubai, jumeirah, park" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_main/assets/icons/16.png') }}" />
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/tiny-slider.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('assets_main/assets/css/glightbox.min.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/multistepsform.css') }}" />


    <!-- carousel -->
    <link rel="stylesheet" href="{{ asset('assets_main/assets/carosel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_main/assets/carosel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets_main/assets/carosel/css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

</head>

<style>
    /* Style the select component */
    #subSelect {
        background-color: #f03355 !important;
        /* Red background */
        border: 1px solid #f03355 !important;
        /* Red border */
        color: white !important;
        /* White text */
        font-weight: bold;
        padding: 10px;
        border-radius: 5px;
        outline: none;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        appearance: none;
        /* Remove default arrow (optional) */
    }
    /* Focus and hover effect */
    #subSelect:hover,
    #subSelect:focus {
        background-color: #d92b48 !important;
        /* Darker red */
        border-color: #d92b48 !important;
        color: white !important;
        box-shadow: 0 0 0 0.2rem rgba(240, 51, 85, 0.25) !important;
    }

    /* Style the dropdown options */
    #subSelect option {
        background-color: white !important;
        /* White background */
        color: black !important;
        /* Black text */
        font-weight: bold;
        padding: 10px;
    }

    /* Hover effect for dropdown options */
    #subSelect option:hover,
    #subSelect option:focus {
        background-color: #f03355 !important;
        /* Red background on hover */
        color: white !important;
        /* White text */
    }



    /* Style the select component */
    #mainSelect {
        background-color: #f03355 !important;
        /* Red background */
        border: 1px solid #f03355 !important;
        /* Red border */
        color: white !important;
        /* White text */
        font-weight: bold;
        padding: 10px;
        border-radius: 5px;
        outline: none;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        appearance: none;
        /* Remove default arrow (optional) */
    }

    /* Focus and hover effect */
    #mainSelect:hover,
    #mainSelect:focus {
        background-color: #d92b48 !important;
        /* Darker red */
        border-color: #d92b48 !important;
        color: white !important;
        box-shadow: 0 0 0 0.2rem rgba(240, 51, 85, 0.25) !important;
    }

    /* Style the dropdown options */
    #mainSelect option {
        background-color: white !important;
        /* White background */
        color: black !important;
        /* Black text */
        font-weight: bold;
        padding: 10px;
    }

    /* Hover effect for dropdown options */
    #mainSelect option:hover,
    #mainSelect option:focus {
        background-color: #f03355 !important;
        /* Red background on hover */
        color: white !important;
        /* White text */
    }




    .arrow-down {
        font-size: 2rem;
        color: #ff0024;
        /* Accent color */
    }

    .custom-border {
        border: 2px solid #ff0024;
        /* Red border */
        border-radius: 10px;
    }

    .btn-submit {
        background-color: rgb(235, 11, 41);
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: rgb(200, 10, 36);
        /* Slightly darker for hover effect */
    }

    .container__ {
        max-width: 800px;
    }

    .event-card {
        background: white;
        color: black;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    }

    .event-icon {
        font-size: 24px;
        margin-right: 15px;
    }

    .event-time {
        font-weight: bold;
        color: #ff0024;
    }

    .event-title {
        font-size: 18px;
        font-weight: bold;
    }

    .event-description {
        font-size: 14px;
    }
</style>

<body>
    <!-- Preloader -->
    <div id="preloaderted">

    </div>

    <div class="loading" id="loading" style="display: none;"></div>

    @include('includes.header')

    <!--content-->
    @yield('content')


    <!-- Start Footer Area -->
    @include('includes.footer')
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>
    <a href="https://wa.me/971507728672?text=Hello,%20I%20would%20like%20to%20connect." target="_blank" class="scroll-top me-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
        </svg>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('assets_main/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/js/tiny-slider.js') }}"></script>
    <!-- <script src="{{ asset('assets_main/assets/js/glightbox.min.js') }}"></script> -->
    <script src="{{ asset('assets_main/assets/js/count-up.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/js/main.js') }}"></script>
    <!-- <script src="js/ScrollMagic.min.js"></script> -->

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("step");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("step");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("signUpForm").submit();
                $('#loading').show();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("step");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = true; //this was false, i changed it
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("stepIndicator");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>


    <!--preloaderted-->
    <script>
        var loader = document.getElementById('preloaderted');
        window.addEventListener("load", function() {
            loader.style.display = 'none';
        });
    </script>

    <script>
        const startYear = 1900; // Adjust as needed
        const endYear = new Date().getFullYear(); // Current year
        const dropdownMenu = document.querySelector('.dropdown-menu');
        const dropdownButton = document.getElementById('yearDropdown');
        const hiddenInput = document.getElementById('selectedYearInput');

        // Populate dropdown with years
        for (let year = startYear; year <= endYear; year++) {
            const yearItem = document.createElement('div');
            yearItem.className = 'dropdown-item';
            yearItem.textContent = year;
            yearItem.style.cursor = 'pointer';

            yearItem.addEventListener('click', function() {
                dropdownButton.textContent = year; // Update button text
                hiddenInput.value = year; // Update hidden input value
            });

            dropdownMenu.appendChild(yearItem);
        }
    </script>


    <script>
        $(document).ready(function() {
            const options = {
                "Partner": ["104 Company", "Creators Media", "Dubai Technology Entrepreneur Campus", "Emerge Global", "Evans Media", "PMI UAE Chapter", "Portal Productions", "Rawnaq Team"],
                "Speaker Guest": ["Alaa Dalghan", "Corrie Block", "Enrico Gallorini", "Heba Alshehhi", "Karen Holliday", "Maher Al Kaabi", "Mark Skljarov", "Shashi Shekhar Singh", "Suaad Alshamsi"],
                "Partner Guest": ["104 Company", "Creators Media", "Dubai Technology Entrepreneur Campus", "Emerge Global", "Evans Media", "PMI UAE Chapter", "Portal Productions", "Rawnaq Team"]
            };

            $('#mainSelect').change(function() {
                let selectedValue = $(this).val();
                let subSelect = $('#subSelect');
                let secondaryDropdown = $('#secondaryDropdown');

                if (options[selectedValue]) {
                    subSelect.empty().append('<option value="">-- Select --</option>');
                    options[selectedValue].forEach(function(option) {
                        subSelect.append(`<option value="${option}">${option}</option>`);
                    });
                    secondaryDropdown.show();
                    subSelect.attr('required', true); // Make required when visible
                } else {
                    secondaryDropdown.hide();
                    subSelect.removeAttr('required'); // Remove required when hidden
                }
            });
        });
    </script>

    <script src="{{ asset('assets_main/assets/carosel/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/carosel/js/popper.js') }}"></script>
    <script src="{{ asset('assets_main/assets/carosel/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/carosel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/carosel/js/main.js') }}"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <!--for the sweet alert-->
    @include('sweetalert::alert')
    @yield('scripts')
</body>

</html>