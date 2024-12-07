<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/faviconImg.png') }}">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet"> --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" media="screen" href="{{ asset('css/header.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    {{-- ----------flaticon---------- --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flaticon/flaticon@latest/css/flaticon.css">

    {{-- custom css for carrer page  --}}

    <link rel="stylesheet" href="{{ asset('css/career.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <!-- jQuery Validation Plugin CSS (optional, if needed) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Montserrat', sans-serif;
        }

        p {
            font-family: 'Montserrat', sans-serif;
        }
    </style>

</head>

<body>


    <nav class="navbar navbar-expand-lg bg-white navbar-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}" class="nav-logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto ">


                    <li class="for-active-colored">
                        <a class="nav-link text-warning {{ Route::is('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>



                    <li class="for-active-colored">
                        <a class="nav-link text-warning {{ Route::currentRouteNamed('service') ? 'active' : '' }}"
                            href="{{ route('service') }}">Services</a>
                    </li>
                    <li class="for-active-colored">
                        <a class="nav-link text-warning {{ Route::currentRouteNamed('portfolio') ? 'active' : '' }}"
                            href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="for-active-colored">
                        <a class="nav-link text-warning {{ Route::currentRouteNamed('career') ? 'active' : '' }}"
                            href="{{ route('career') }}">Career</a>
                    </li>
                    <li class="nav-item blog-title">
                        <a class="nav-link text-warning {{ Route::currentRouteNamed('blog') ? 'active' : '' }}"
                            href="{{ route('blog') }}">Blog</a>
                    </li>

                    <li class="pill-nav ms-3">
                        <a class="{{ Route::currentRouteNamed('contact') ? 'active' : '' }} fs-6"
                            style="font-weight: 500" href="{{ route('contact') }}">Get In Touch</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <button id="scrollToTop" title="Go to top">↑</button>
    @yield('content')

    {{-- footer  start ---------------------------------------------------------------------------------------------------------------- --}}

    @include('visitor.layouts.footer')
    {{-- footer  start ---------------------------------------------------------------------------------------------------------------- --}}






    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
     --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js">
    </script>  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <!-- jQuery Validation Plugin JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>


    <script>
        // Initialize CKEditor on the textarea element
        CKEDITOR.replace('editor', {
            // Optional configuration options can be added here
        });
    </script>
    <script>
        AOS.init();
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.documentElement.style.overflowX = 'hidden';
            document.body.style.overflowX = 'hidden';
        });
    </script>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollToTopButton = document.getElementById("scrollToTop");

            if (!scrollToTopButton) {
                console.error("Scroll to Top button not found in the DOM!");
                return;
            }

            // Function to toggle button visibility
            function toggleScrollToTopButton() {
                const viewportWidth = window.innerWidth;
                const scrollPosition = document.body.scrollTop || document.documentElement.scrollTop;

                console.log("Viewport Width:", viewportWidth);
                console.log("Scroll Position:", scrollPosition);

                if (viewportWidth >= 769 && scrollPosition > 20) {
                    scrollToTopButton.style.display = "block";
                    console.log("Scroll button shown.");
                } else {
                    scrollToTopButton.style.display = "none";
                    console.log("Scroll button hidden.");
                }
            }

            // Add scroll and resize event listeners
            window.onscroll = toggleScrollToTopButton;
            window.onresize = toggleScrollToTopButton;

            // Smooth scroll to top
            scrollToTopButton.onclick = function() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                });
            };

            // Initial check
            toggleScrollToTopButton();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.web-apps-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                arrows: false,
                centerMode: false,
                infinite: true,

                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2
                        }
                    },

                ]
            });
        });
    </script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollToTopButton = document.getElementById("scrollToTop");

            function toggleScrollToTopButton() {
                const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
                // console.log("Scroll Position:", scrollPosition);

                if (window.innerWidth >= 769 && scrollPosition > 20) {
                    scrollToTopButton.style.display = "block";
                } else {
                    scrollToTopButton.style.display = "none";
                }
            }

            // Smooth scroll to top
            scrollToTopButton.onclick = function() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                });
            };

            // Initialize slider and wait for it to complete
            $(document).ready(function() {
                $('.web-apps-slider').on('init', function() {
                    // console.log("Slick initialized. Rechecking scroll...");
                    toggleScrollToTopButton(); // Check scroll after slider initialization
                });

                $('.web-apps-slider').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    dots: true,
                    arrows: false,
                    centerMode: false,
                    infinite: true,
                    responsive: [{
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1
                            },
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2
                            },
                        },
                    ],
                });
            });

            // Add event listeners for scroll and resize
            window.addEventListener("scroll", toggleScrollToTopButton);
            window.addEventListener("resize", toggleScrollToTopButton);
        });
    </script>

</body>

</html>



<!-- freeze footer -->
<style>
    div#mobile-freez-icon {
        display: none;
    }

    .wp-freeze {
        position: fixed;
        bottom: 170px;
        right: 30px;
    }

    .wp-freeze i.fa.fa-whatsapp {
        font-size: 30px;
        background-color: #33ad6b;
        color: #fff;
        padding: 10px;
        border-radius: 50px;
    }

    @media(max-width: 767px) {
        .wp-freeze {
            display: none;
        }

        div#mobile-freez-icon {
            display: block;
            position: fixed;
            width: 100%;
            z-index: 999;
            bottom: 0;
        }

        div#mobile-freez-icon .phone,
        .wp-phone {
            width: 20%;
            font-size: 32px;
            color: #fff;
            border-radius: 0;
            background: #33AD6B;
            float: left;
            height: 60px;
        }

        div#mobile-freez-icon i.fa.fa-phone,
        .wp-phone i.fa.fa-whatsapp {
            position: relative;
            color: #fff;
            text-align: center;
            width: 100%;
            margin-top: 15px;
        }

        div.wp-phone {
            background-color: #4e5853;
        }

        div.phone {
            background-color: #EF7F1A !important;
        }

        a#free_quote_1 {
            width: 60%;
            height: 60px;
            background: darkorange;
            line-height: 64px;
            font-size: 21px;
            color: #fff;
            text-align: center;
            border-radius: 0;
            cursor: pointer;
            float: left;
        }
    }
</style>

{{-- mobile view footer icons --}}
<div id="mobile-freez-icon">
    <a id="free_quote_1" href="{{ route('contact') }}"><i class="fa fa-envelope"></i> Get Help
        Now</a>
    <div class="wp-phone text-center">
        <a href="https://api.whatsapp.com/send?phone=+919979404044" target="_blank"><i
                class="bi bi-whatsapp ps-3 pt-2"></i></a>
    </div>
    <div class="phone text-center">
        <a href="tel:+919979404044" rel="nofollow">
            <i class="bi bi-telephone-fill ps-3 pt-2"></i>
        </a>
    </div>
</div>

{{-- mobile view footer icons --}}

<!-- freeze footer -->

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');
        const navbarLogo = document.querySelector('.nav-logo');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                navbar.classList.remove('transparent');
                navbar.classList.add('sticky');
                navbarLogo.classList.add('filter');
            } else {
                navbar.classList.remove('sticky');
                navbar.classList.add('transparent');
                navbarLogo.classList.remove('filter');
            }
        });
    });
</script> --}}
