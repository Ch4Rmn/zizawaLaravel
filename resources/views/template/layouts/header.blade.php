<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <!-- <meta property="og:title" content="Aries" />
    <meta property="og:description" content="Aries is the best zodiac sign." />
    <meta property="og:image" content="http://localhost/mm-cupid/assets/post_images/2/202405260820326652d4b0a297f_aries.jpg" />
    <meta property="og:url" content="http://localhost/mm-cupid/knowledge.php" />
    <meta property="og:type" content="website" /> -->

    <title>@yield('title')</title>
    <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/jquery-ui.css') }}">
    <script src="{{ asset('assets/front/js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/front/js/angular.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/error_messages.js') }}"></script>
    <script src="{{ asset('assets/front/js/success_messages.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/font-awesome.min.css') }}">
    <!-- Pnotify -->
    <link href="{{ asset('assets/css/pnotify/pnotify.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/cupid.jpg') }}">
    <style>
        .btn-outline-secondary {
            --bs-btn-hover-bg: #6c757d32;
        }

        .pnotify-center {
            right: calc(50% - 200px) !important;
        }
    </style>
    <script></script>

</head>

<body style="background-color: #ffffff">

    {{-- <div class="loading" style="display: none; z-index: 1060;">Loading&#8230;</div> --}}
    {{-- <h1 class="">ZiZaWa</h1> --}}
    <div class="fixed-top bg-white">
        <div class="row">
            <div class="me-3 col-9">
                <img src="{{ asset('assets/default_images/logo.png') }}" alt="">
            </div>
            <div class="ms-3 col">
                <h1 class="" style="font-style: italic;color:grey">Your Reliable Partner</h1>
            </div>
        </div>
        {{-- <div class="d-flex">
        <div class="col">
            <img src="{{ asset('assets/default_images/logo.png') }}" alt="">
        </div>
        <div class="col">
            <h1>Your Reliable Partner</h1>
        </div>
    </div> --}}
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="margin:66px 0px;background: #5052a4">
            {{-- <nav class="navbar navbar-expand-lg navbar-light " style="background: #5052a4"> --}}
            <div class="container">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <button class="btn btn-hover-active" style="cursor: pointer"><a
                                class="nav-link active text-white" href="/"><span
                                    style="text-shadow: 2px 2px rgb(0, 0, 0)">Home</span></a></button>

                    </li>
                    <li class="nav-item">
                        <button class="btn btn-hover-active" style="cursor: pointer"><a class="nav-link text-white"
                                href=""><span style="text-shadow: 2px 2px rgb(0, 0, 0)">About
                                    Us</span></a></button></a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-hover-active" style="cursor: pointer"><a class="nav-link text-white"
                                href=""><span style="text-shadow: 2px 2px rgb(0, 0, 0)">Product
                                    Us</span></a></button>
                        </a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-hover-active" style="cursor: pointer"><a class="nav-link text-white"
                                href=""><span
                                    style="text-shadow: 2px 2px rgb(0, 0, 0)">Service</span></a></button>
                        </a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-hover-active" style="cursor: pointer"><a class="nav-link text-white"
                                href=""><span style="text-shadow: 2px 2px rgb(0, 0, 0)">News</span></a></button>
                        </a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-hover-active" style="cursor: pointer"><a class="nav-link text-white"
                                href=""><span
                                    style="text-shadow: 2px 2px rgb(0, 0, 0)">Carrers</span></a></button>
                        </a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-hover-active" style="cursor: pointer"><a class="nav-link text-white"
                                href=""><span
                                    style="text-shadow: 2px 2px rgb(0, 0, 0)">Content</span></a></button>
                        </a>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    {{--  --}}
    <!-- Container for the image gallery -->

    <div class="container" style="margin-top: 135px">
        <div>
            <marquee direction="left" scrollamount="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique laudantium nemo debitis culpa excepturi, modi placeat exercitationem aspernatur minus delectus error sit iusto? Impedit possimus dolore perspiciatis eaque enim? Dolor!</marquee>
        </div>
        <!-- Full-width images with number text -->
        <div class="mySlides">
            {{-- <div class="numbertext text-dark">1 / 6</div> --}}
            <img src="{{ asset('assets/default_images/shwedagon.jpg') }}" style="width:100%">
        </div>

        <div class="mySlides">
            {{-- <div class="numbertext text-dark">2 / 6</div> --}}
            <img src="{{ asset('assets/default_images/doctor.jpeg') }}" style="width:100%">
        </div>

        <div class="mySlides">
            {{-- <div class="numbertext text-dark">3 / 6</div> --}}
            <img src="{{ asset('assets/default_images/family.jpeg') }}" style="width:100%">
        </div>

        <div class="mySlides">
            {{-- <div class="numbertext text-dark">4 / 6</div> --}}
            <img src="{{ asset('assets/default_images/nurse.jpeg') }}" style="width:100%">
        </div>

        <div class="mySlides">
            {{-- <div class="numbertext text-dark">5 / 6</div> --}}
            <img src="{{ asset('assets/default_images/sciencesits.jpeg') }}" style="width:100%">
        </div>



        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->
        {{-- <div class="caption-container">
            <p id="caption"></p>
        </div> --}}

        <!-- Thumbnail images -->
        {{-- <div class="row">
            <div class="column">
                <img class="demo cursor" src="img_woods.jpg" style="width:50%" onclick="currentSlide(1)"
                    alt="shwedagon">
            </div>
            <div class="column">
                <img class="demo cursor" src="img_5terre.jpg" style="width:50%" onclick="currentSlide(2)"
                    alt="doctor">
            </div>
            <div class="column">
                <img class="demo cursor" src="img_mountains.jpg" style="width:50%" onclick="currentSlide(3)"
                    alt="family">
            </div>
            <div class="column">
                <img class="demo cursor" src="img_lights.jpg" style="width:50%" onclick="currentSlide(4)"
                    alt="nurse">
            </div>
            <div class="column">
                <img class="demo cursor" src="img_nature.jpg" style="width:50%" onclick="currentSlide(5)"
                    alt="sciencesits">
            </div>

        </div> --}}
    </div>
