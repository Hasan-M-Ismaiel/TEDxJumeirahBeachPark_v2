<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TEDx JumierahBeachPark</title>
    <meta name="description" content="JumierahBeachPark, TED, TEDx, talk, event, conference, UAE, dubai, jumeirah, park" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_main/assets/icons/16.png') }}" />
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_main/assets/carosel/css/style.css') }}">

    <!-- ========================= CSS new here ========================= -->

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/lightgallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <div id="preloaderted">
    </div>

    <div class="loading" id="loading" style="display: none;"></div>

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ route('main') }}">
                                <img src="{{ asset('assets_main/assets/images/logo/logo-white.png') }}" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item ">
                                        <a href="{{ route('main') }}" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Salons</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="{{ route('tedx_event_1') }}">TEDx - navigating space</a></li>
                                            <!-- <li class="nav-item"><a href="{{ route('tedx_event_2') }}">TEDx Event 2</a></li> -->
                                        </ul>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="{{ route('aboutTed') }}" aria-label="Toggle navigation">About</a>
                                    </li>

                                    <!--<li class="nav-item">
                                    <a href="{{ route('main') }}#speakers" aria-label="Toggle navigation">Speakers</a>
                                </li>-->
                                    <!--<li class="nav-item">
                                    <a href="{{ route('sponsers') }}" aria-label="Toggle navigation">Partners</a>
                                </li>-->
                                    <li class="nav-item">
                                        <a href="{{ route('members') }}" aria-label="Toggle navigation">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a a href="{{ route('main') }}#partners" aria-label="Toggle navigation">Partners</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Join Us</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="{{ route('register') }}">Speakers</a></li>
                                            <li class="nav-item"><a href="{{ route('volunteer') }}">Volunteers</a></li>
                                            <li class="nav-item"><a href="{{ route('partner') }}">Partners</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">More</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="{{ route('home') }}">Blog</a></li>
                                            <li class="nav-item"><a href="{{ route('podcasts') }}">Podcasts</a></li>
                                            <li class="nav-item"><a href="#footer">Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button">
                                <a href="https://www.ted.com/tedx/events/57896" class="btn" target="_blank">@TED.com
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right ms-2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                    </svg>
                                </a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12 d-flex justify-content-start">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Our Memories</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="{{ route('main') }}">Home</a></li>
                            <li>Beautiful moments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- added -->
    <div class="site-section" data-aos="fade">
        <div class="container-fluid">

            <div class="row justify-content-center">

                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h3 class="wow zoomIn" data-wow-delay=".2s">Memory photos</h3>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">See how wanderful the event was</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">The TEDxJumeirahbeachpark experience is brought to life by a dedicated team of passionate individuals who believe in the power of ideas. Our team members come from diverse backgrounds and share a common drive to create a platform for inspiring conversations.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" id="lightgallery">
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_1.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
                    <a href="#"><img src="images/nature_small_1.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_2.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis quaerat molestiae, praesentium. Ipsam, reiciendis. Aut molestiae animi earum laudantium.</p>">
                    <a href="#"><img src="images/nature_small_2.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_3.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reiciendis, dolorum illo temporibus culpa eaque dolore rerum quod voluptate doloribus.</p>">
                    <a href="#"><img src="images/nature_small_3.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_4.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim perferendis quae iusto omnis praesentium labore tempore eligendi quo corporis sapiente.</p>">
                    <a href="#"><img src="images/nature_small_4.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_5.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, voluptatum voluptate tempore aliquam, dolorem distinctio. In quas maiores tenetur sequi.</p>">
                    <a href="#"><img src="images/nature_small_5.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_6.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum cum culpa blanditiis illum, voluptatum iusto quisquam mollitia debitis quaerat maiores?</p>">
                    <a href="#"><img src="images/nature_small_6.jpg" alt="IMage" class="img-fluid"></a>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_7.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores similique impedit possimus, laboriosam enim at placeat nihil voluptatibus voluptate hic!</p>">
                    <a href="#"><img src="images/nature_small_7.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_8.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam vitae sed cum mollitia itaque soluta laboriosam eaque sit ratione, aliquid.</p>">
                    <a href="#"><img src="images/nature_small_8.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_9.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reiciendis debitis beatae facilis quos, enim quis nobis magnam architecto earum!</p>">
                    <a href="#"><img src="images/nature_small_9.jpg" alt="IMage" class="img-fluid"></a>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_9.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officiis magnam, facilis nam eos perspiciatis eligendi pariatur numquam debitis quos!</p>">
                    <a href="#"><img src="images/nature_small_9.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_8.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis consequatur quam et, delectus, cum iste ipsa animi eligendi obcaecati nemo.</p>">
                    <a href="#"><img src="images/nature_small_8.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_7.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quia illo voluptatibus numquam inventore, ab asperiores molestiae distinctio atque nihil.</p>">
                    <a href="#"><img src="images/nature_small_7.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_6.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt unde placeat obcaecati sapiente illum, fuga nostrum necessitatibus delectus maiores magnam.</p>">
                    <a href="#"><img src="images/nature_small_6.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_5.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dignissimos non consectetur. Facilis totam, explicabo nam iure! Veniam modi, molestiae.</p>">
                    <a href="#"><img src="images/nature_small_5.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_4.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias minus voluptatibus inventore odio. Iure amet nesciunt a, officia quo ex.</p>">
                    <a href="#"><img src="images/nature_small_4.jpg" alt="IMage" class="img-fluid"></a>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_3.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium illum consectetur dolorum consequuntur sint doloribus eveniet deleniti! Illo, quibusdam, earum.</p>">
                    <a href="#"><img src="images/nature_small_3.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_2.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto ad iure, inventore asperiores, cupiditate optio dignissimos labore quidem totam. Dignissimos.</p>">
                    <a href="#"><img src="images/nature_small_2.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_1.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam temporibus totam similique provident delectus quos fugiat officia earum nisi voluptatibus?</p>">
                    <a href="#"><img src="images/nature_small_1.jpg" alt="IMage" class="img-fluid"></a>
                </div>


                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_1.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe beatae qui aliquid nostrum unde ut officiis omnis delectus sequi deleniti!</p>">
                    <a href="#"><img src="images/nature_small_1.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_2.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi iusto vero, soluta porro dicta quaerat tempore magni perferendis aspernatur cupiditate.</p>">
                    <a href="#"><img src="images/nature_small_2.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_3.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, minus officiis modi ducimus reprehenderit at ea voluptatum consequuntur enim nulla.</p>">
                    <a href="#"><img src="images/nature_small_3.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_4.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eligendi hic sed, quidem illum ipsa, cum tempora quo reiciendis accusantium.</p>">
                    <a href="#"><img src="images/nature_small_4.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_5.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex blanditiis quaerat numquam repellendus pariatur commodi neque animi voluptatum illum dolore?</p>">
                    <a href="#"><img src="images/nature_small_5.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_6.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio praesentium maiores, veritatis illum voluptas alias aut unde esse aliquam itaque.</p>">
                    <a href="#"><img src="images/nature_small_6.jpg" alt="IMage" class="img-fluid"></a>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_7.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt fugit, non facilis dignissimos minima nostrum nesciunt adipisci, quibusdam cum reprehenderit.</p>">
                    <a href="#"><img src="images/nature_small_7.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_8.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos iure delectus obcaecati atque fugit enim quaerat suscipit tenetur in ratione?</p>">
                    <a href="#"><img src="images/nature_small_8.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_9.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa neque, eos quae eaque officia, repellendus dolore tempore cumque quibusdam? Maxime?</p>">
                    <a href="#"><img src="images/nature_small_9.jpg" alt="IMage" class="img-fluid"></a>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_9.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, unde quis minus ex impedit necessitatibus nostrum, neque veniam repellat officiis!</p>">
                    <a href="#"><img src="images/nature_small_9.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_8.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel eveniet sequi assumenda deserunt ab, tempora commodi autem debitis iusto sed.</p>">
                    <a href="#"><img src="images/nature_small_8.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_7.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, quasi, pariatur. Minima provident repellat cum, impedit, nemo exercitationem distinctio consequuntur.</p>">
                    <a href="#"><img src="images/nature_small_7.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_6.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus nostrum expedita consequatur rerum laboriosam tempore nisi autem animi eveniet perspiciatis.</p>">
                    <a href="#"><img src="images/nature_small_6.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_5.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque consectetur error deserunt facilis facere, consequatur at officia quae culpa voluptatibus!</p>">
                    <a href="#"><img src="images/nature_small_5.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_4.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti minima porro, hic dolores. Ab, doloremque facilis numquam, ipsa repellendus voluptas.</p>">
                    <a href="#"><img src="images/nature_small_4.jpg" alt="IMage" class="img-fluid"></a>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_3.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, dolor alias. Dignissimos hic voluptatibus dolorum expedita recusandae, consequatur distinctio est.</p>">
                    <a href="#"><img src="images/nature_small_3.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_2.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum similique, dolore esse quaerat incidunt ullam sit neque laboriosam velit quas.</p>">
                    <a href="#"><img src="images/nature_small_2.jpg" alt="IMage" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="images/big-images/nature_big_1.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem tempora deleniti, consectetur quisquam labore vitae quod quae debitis hic ab!</p>">
                    <a href="#"><img src="images/nature_small_1.jpg" alt="IMage" class="img-fluid"></a>
                </div>

            </div>
        </div>
    </div>

    <section class="call-action  style2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 col-12">
                    <div class="inner-content">
                        <div class="text">
                            <h2>What is TEDx?</h2>
                            <p>In the spirit of ideas worth spreading, <strong class="text-danger">TED</strong> has created a program called <strong class="text-danger">TEDx</strong>. <strong class="text-danger">TEDx</strong> is a program of local, self-organized events that bring people together to share a <strong class="text-danger">TED</strong>-like experience.</br></br> Our event is called <strong class="text-danger">TEDx</strong>JumeirahBeachPark, where x = independently organized <strong class="text-danger">TED</strong> event. At our <strong class="text-danger">TEDx</strong>JumeirahBeachPark event, <strong class="text-danger">TED</strong>Talks video and live speakers will combine to spark deep discussion and connection in a small group. <br><br>The <strong class="text-danger">TED</strong> Conference provides general guidance for the <strong class="text-danger">TEDx</strong> program, but individual <strong class="text-danger">TEDx</strong> events, including ours, are self-organized.</p>
                        </div>
                    </div>
                    <div class="button mt-4 ms-0" style="float: left;">
                        <a href="https://www.ted.com/about/programs-initiatives/tedx-program" target="_blank" class="btn">TEDx program</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer id="footer" class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-about">
                                <div class="logo">
                                    <a href="{{ route('main') }}">
                                        <img src="{{ asset('assets_main/assets/images/logo/logo-black.png') }}" alt="#">
                                    </a>
                                </div>
                                <p>This independent TEDx event is operated under a license from TED.</p>
                                <span class="social-title">
                                    Follow Us On:
                                </span>
                                <ul class="social">
                                    <li>
                                        <a href="https://www.facebook.com/TEDxJumeirahBeachPark" target="_blank"><i class="lni lni-facebook-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/tedx_jumeirahbeachpark/" target="_blank"><i class="lni lni-instagram-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/tedx-jumeirahbeachpark/" target="_blank"><i class="lni lni-linkedin-original"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Quick Links</h3>
                                <ul>
                                    <!--<li><a href="https://www.google.com/maps/search/Jumeirah+Beach+Park/@25.1489144,55.1750434,14z?entry=ttu" target="_blank">Get Direction</a></li>
                                    <li><a href="{{ route('sponsers') }}">Sponsors</a></li>
                                    <li><a href="{{ route('register') }}">join us as Speaker</a></li>
                                    <li><a href="{{ route('volunteer') }}">join us as Volunteer</a></li>-->
                                    <li><a href="{{ route('aboutTed') }}">About TED</a></li>
                                    <li><a href="{{ route('home') }}">Blog</a></li>
                                    <li><a href="{{ route('podcasts') }}">Podcasts</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Contact US</h3>
                                <ul>
                                    <!--<li><a href="{{ route('about') }}">About Us</a></li>-->
                                    <!--<li><a href="{{ route('faq') }}">Faq</a></li>-->
                                    <li> <strong>Mobile: </strong><u>+971-50-772-8672</u></li>
                                    <li><strong>Email: </strong><u><a href="mailto: support@tedxjumeirahbeachpark.com"> support@tedxjumeirahbeachpark.com </a></u></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <!--<div class="col-lg-4 col-md-6 col-12">-->
                        <!-- Single Widget -->

                        <!-- End Single Widget -->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Start Copyright Area -->
        <div class="copyright">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-12">
                            <p class="copyright-text"> <a href="https://linkedin.com/in/hasan-ismaiel"
                                    target="_blank"></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->
    </footer>

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
    <script src="{{ asset('assets_main/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets_main/assets/js/main.js') }}"></script>

    <!--preloaderted-->
    <script>
        var loader = document.getElementById('preloaderted');
        window.addEventListener("load", function() {
            loader.style.display = 'none';
        });
    </script>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/picturefill.min.js"></script>
    <script src="js/lightgallery-all.min.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>

    <script src="js/main.js"></script>



    <script>
        $(document).ready(function() {
            $('#lightgallery').lightGallery();
        });
    </script>
</body>

</html>