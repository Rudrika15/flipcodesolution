@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Home</title>
@endsection
@section('content')
    <style>
        .carousel-indicators button {
            background-color: #ff6600 !important;
            /* Change color to orange */
        }
    </style>

    {{-- slider --}}
    @include('visitor.commons.homePageSlider')
    {{-- slider end --}}


    <!-- about us -->

    <div class="container py-3">
        <div class="row py-2">
            <div class="col-md-6 mt-3">
                <p class="text-align" style="text-align: justify; line-height: 30px;">
                    <span class="main-title">Flipcode Solutions Pvt. Ltd.</span> is a new version of a software development
                    company founded in the year 2010 in Surendranagar, Gujarat as ‘Perfetto Solutions’. The founder of the
                    Perfetto Solutions is Late Mr. Hemal Shukla. He and his allies successfully ventured into Web
                    Development, Software Application Designing, and Programming. Perfetto Solutions has progressed
                    exceptionally and has accomplished more than 100 designing and developing projects on time. The company
                    is a sister concern of Shiv Computers which was established by Mr. Shukla in the year 1998. At Shiv
                    Computers, A Computer Institute; We teach an array of languages such as C, JAVA, PHP, Asp.Net, Android,
                    Python, and many more. Filled with tremendous achievement, Shiv Computer jumped into the corporate field
                    as Perfetto Solutions in 2010.
                </p>
                <p class="text-align" style="text-align: justify; line-height: 30px;">
                    In the ever-evolving landscape of technology, Perfetto Solutions emerges as a trailblazer, marking a
                    significant milestone in its journey by transitioning into a private limited company in 2023...
                </p>
                <div><a type="button" href="{{ Route('about') }}" class=" btn submit-org-btn">Read More</a></div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/b7.jpg') }}" class="img-fluid mt-4" alt="b1">
            </div>
        </div>

    </div>
    </div>

    <!-- end about us -->

    <!-- usp Section -->
    @include('visitor.commons.usp')

    <!-- end usp section -->

    <!-- why choose us -->

    @include('visitor.commons.whychooseus')

    <!-- Enr why choose us -->


    <div class="container-fluid bg-light mb-3">
        <div class="container">
            <div class="section-head col-sm-12 pt-3">
                <h4><span>Services</span></h4>
                <p>Welcome to Flipcode Solutions, where innovation meets expertise. Our IT services and solutions are
                    designed to empower your business, enhance efficiency, and drive digital transformation. With a
                    commitment to excellence, we deliver cutting-edge solutions tailored to meet the unique needs of your
                    organization.</p>
            </div>
            <div class="row py-5">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body service-cards">
                            <h3 class="card-title py-2 text-center"><i class=" bi bi-lightbulb"></i></h3>
                            <h6 class="card-subtitle mb-2 text-body-secondary text-center">Custom Software Development</h6>
                           
                            <p class="card-text text-center">Leverage our expertise in developing bespoke software
                                solutions. From concept to deployment, our skilled team ensures that your software aligns
                                seamlessly with your business objectives.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body service-cards">
                            <h3 class="card-title py-2 text-center"><i class="bi bi-code-slash"></i></h3>
                            <h6 class="card-subtitle mb-2 text-body-secondary text-center">Web Application Development</h6>
                           
                            <p class="card-text text-center">Transform your online presence with dynamic and user-friendly
                                web applications. We specialize in creating scalable and responsive solutions that captivate
                                your audience.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body service-cards">
                            <h3 class="card-title py-2 text-center"><i class="bi bi-phone-flip"></i></h3>
                            <h6 class="card-subtitle mb-2 text-body-secondary text-center">Mobile App Development</h6>
                            
                            <p class="card-text text-center">Stay ahead in the mobile-first world with our innovative mobile
                                app development services. Whether it's iOS, Android, or cross-platform, we bring your app
                                ideas to life.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body service-cards">
                            <h3 class="card-title py-2 text-center"><i class="bi bi-tv-fill"></i></h3>
                            <h6 class="card-subtitle mb-2 text-body-secondary text-center">IT Consulting</h6>
                            <p class="card-text text-center">Rely on our experienced consultants to provide strategic
                                insights and recommendations. We collaborate with you to optimize your IT infrastructure,
                                aligning technology with your business goals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body service-cards">
                            <h3 class="card-title py-2 text-center"><i class="bi bi-graph-up-arrow"></i></h3>
                            <h6 class="card-subtitle mb-2 text-body-secondary text-center">Data Analytics and Business
                                Intelligence</h6>
                           
                            <p class="card-text text-center">Unlock the potential of your data with our advanced analytics
                                and business intelligence solutions. Make informed decisions and gain a competitive edge in
                                today's data-driven landscape.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body service-cards">
                            <h3 class="card-title py-2 text-center"><i class="bi bi-gear-wide-connected"></i></h3>
                            <h6 class="card-subtitle mb-2 text-body-secondary text-center">E-commerce Solutions</h6>
                            
                            <p class="card-text text-center">Boost your online presence and revenue with our tailored
                                e-commerce solutions. We create secure, user-friendly platforms that enhance the shopping
                                experience for your customers. </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--review form start  -->
    @include('visitor.commons.testi')
    <!--reiview form end  -->

    <!-- our technology -->
    @include('visitor.commons.technology')
    <!-- End our technology -->
@endsection
