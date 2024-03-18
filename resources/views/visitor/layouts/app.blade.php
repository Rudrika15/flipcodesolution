<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
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
<link rel="stylesheet" media="screen" href="{{asset('css/hoverableSlider.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img src=" {{ asset('img/logo.png') }}"  class="nav-logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="for-active-colored">
                        <a class="nav-link {{ Route::currentRouteNamed('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                    <li class="for-active-colored">
                        <a class="nav-link  {{ Route::currentRouteNamed('service') ? 'active' : '' }}"
                            href="{{ route('service') }}">Services</a>
                    </li>

                    <li class="for-active-colored">
                        <a class="nav-link {{ Route::currentRouteNamed('portfolio') ? 'active' : '' }}"
                            href="{{ route('portfolio') }}">Clients</a>
                    </li>

                    <li class="for-active-colored">
                        <a class="nav-link {{ Route::currentRouteNamed('career') ? 'active' : '' }}"
                            href="{{ route('career') }}">Career</a>
                    </li>

                    <li class="nav-item blog-title">
                        <a class="nav-link {{ Route::currentRouteNamed('blog') ? 'active' : '' }}"
                            href="{{ route('blog') }}">
                            Blog
                        </a>
                    </li>

                    <li class="pill-nav">
                        <a class=" {{ Route::currentRouteNamed('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Get In Touch</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    {{-- footer  start ---------------------------------------------------------------------------------------------------------------- --}}

    <footer class="backimage bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-end mb-4 footer-social-link-icons ">
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/flipcodesolutions/"
                    target="_blank" role="button">
                    <i class="bi bi-instagram"></i>
                </a>

                <!-- Facebook -->

                <a class="btn btn-outline-light btn-floating m-1"
                    href="https://www.facebook.com/profile.php?id=61553723550979" target="_blank" role="button">
                    <i class="bi bi-facebook"></i>
                </a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1"
                    href="https://www.linkedin.com/in/flipcode-solutions-8521252a0/" target="_blank" role="button">
                    <i class="bi bi-linkedin"></i>
                </a>

            </section>
            <!-- Section: Social media -->


            <!-- Section: Links -->
            <section class="footer-links">
                <!--Grid row-->
                <div class="row ">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ">
                        {{-- <img src="img/logo.png " style="width: 250px;" alt="logo"> --}}
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ps-5">
                        <h5 class="text-uppercase">Quick links</h5>

                        <ul class="list-unstyled mb-0 for-hover">
                            <li>
                                <a class="text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a class="text-white" href="{{ route('about') }}">About</a>
                            </li>
                            <li>
                                <a class="text-white" href="{{ route('service') }}">Services</a>
                            </li>
                            <li>
                                <a class="text-white" href="{{ route('contact') }}">Get in Touch</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Address</h5>
                        <p>
                            FlipCode Solution Private Limited <br>
                            Nr. Panama Sales, Dalmill road <br>
                            Surendranagar ,<br>
                            Gujrat 363001 India
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 for-hover">
                        <h5 class="text-uppercase">Email</h5>
                        <a class="text-white"
                            href="mailto:contact@flipcodesolutions.com">contact@flipcodesolutions.com</a>
                        <a class="text-white"
                            href="mailto:career@flipcodesolutions.com">career@flipcodesolutions.com</a>
                        <h5 class="text-uppercase mt-4">Contact No</h5>
                        <a class="text-white" href="tel:9979404044">+91 99 79 40 40 44</a>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>

        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">

            <span>&copy;</span><span id="demo"></span><span>Copyright</span>
            <script>
                const d = new Date();
                let year = d.getFullYear();
                document.getElementById("demo").innerHTML = year;
            </script>
            <a class="text-white" href="#">flipcodesolutions</a>
        </div>
        <!-- Copyright -->
    </footer>

    {{-- footer  start ---------------------------------------------------------------------------------------------------------------- --}}






    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script> --}}
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
     --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js">
    </script>  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script>
    <script>
        // Initialize CKEditor on the textarea element
        CKEDITOR.replace('editor', {
            // Optional configuration options can be added here
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
    <a id="free_quote_1" href="{{route('contact')}}"><i class="fa fa-envelope"></i> Get Help
        Now</a>
    <div class="wp-phone">
        <a href="https://api.whatsapp.com/send?phone=+919979404044" target="_blank"><i
                class="bi bi-whatsapp ps-3 pt-2"></i></a>
    </div>
    <div class="phone">
        <a href="tel:+919979404044" rel="nofollow">
            <i class="bi bi-telephone-fill ps-3 pt-2"></i>
        </a>
    </div>
</div>
{{-- mobile view footer icons --}}

<!-- freeze footer -->
