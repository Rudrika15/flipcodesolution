@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | About</title>
    <style>
        div.p {
            word-wrap: break-word;
        }
    </style>
@endsection
@section('content')
    <div class="bg-image parallax">
        <div class="container">
            <div style="display: flex; justify-content: center;font-size:larger;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="/" style="color: #606060" >Home</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->




    <div class="container pt-4">
        <div class="row">
            <div class="col-md-7">
                <h4 class="text-uppercase">Our Story</h4>
                <p class="text-align" style="text-align: justify; ">
                    <span class="main-title">Flipcode Solutions Pvt. Ltd.</span> is a new version of a software development
                    company founded in the year 2010 in Surendranagar, Gujarat as ‘Perfetto Solutions’. The founder of the
                    Perfetto Solutions is Late Mr. Hemal Shukla. He and his allies successfully ventured into Web
                    Development, Software Application Designing and Programming. Perfetto Solutions has progressed
                    exceptionally and has accomplished more than 100 designing and developing projects on time. The company
                    is a sister concern of Shiv Computers which was established by Mr. Shukla in the year 1998. At Shiv
                    Computers, A Computer Institute; We teach an array of languages such as C, JAVA, PHP, Asp.Net, Android,
                    Python, and many more. Filled with tremendous achievement, Shiv Computer jumped into the corporate field
                    as Perfetto Solutions in 2010.
                </p>

                <p class="text-align" style="text-align: justify; ">
                    In the ever-evolving landscape of technology, Perfetto Solutions emerges as a trailblazer, marking a
                    significant milestone in its journey by transitioning into a private limited company in 2023. With a
                    rich history rooted in innovation and a commitment to excellence, FLIPCODE SOLUTIONS PVT. LTD. has
                    consistently pushed the boundaries of what is possible in the realm of Information Technology (IT).

                    As a private limited company, FLIPCODE SOLUTIONS now stands poised to reach new heights, fortified by a
                    strengthened foundation and an unwavering dedication to delivering cutting-edge solutions. This
                    transformation reflects not only the company's growth but also its strategic vision for the future.
                </p>
                <p class="text-align" style="text-align: justify;">
                    We choose to execute what is best for our clients. Our primary goal is to offer end-to-end digital
                    solutions to help businesses achieve their goals. Our technical enthusiasts include analysts,
                    developers, designers, and testers who believe in offering optimal custom software development services
                    to all businesses.

                    The transformation signals a new chapter in Flipcode Solutions's story. As a private limited company,
                    the company is well-positioned to embrace the future, navigate challenges, and seize opportunities with
                    agility and resilience.
                </p>
                <p class="text-align" style="text-align: justify;">
                    At Flipcode Solutions, the future is not just a destination; it's a shared adventure.
                </p>
            </div>
            <div class="col-md-5 align-self-center">
                <img src="{{ asset('img/b7.svg') }}" class="img-fluid mt-2" style="max-height: 500" alt="b1">
            </div>
        </div>
    </div>

    <!-- usp start -->
    @include('visitor.commons.usp')
    <!-- usp end  -->


    <div class="container-fluid py-3 mt-5 bg-light">
        <div class="container py-3">
            <div class="row py-2">
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="section-head col-sm-12">
                            <h4><span>Vision</span></h4>
                        </div>
                        <p class="text-center">Our vision is to be a catalyst for a connected and technologically advanced
                            future. We aspire to be a driving force behind the digital transformation of businesses,
                            fostering a world where technology empowers organizations to achieve unparalleled success.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <!-- why choose us -->

    @include('visitor.commons.whychooseus')

    <!-- why choose End -->

    <!-- our technology -->

    @include('visitor.commons.technology')

    <!-- End our technology -->

    <!--review form start  -->
    @include('visitor.commons.testi')
    <!--reiview form end  -->
@endsection
