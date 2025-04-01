@extends('visitor.layouts.app')
@section('title')
<title>Flipcode Solutions | Expert IT & Digital Services</title>
@endsection
@section('meta')
<meta name="description"
    content="At Flipcode Solutions, we provide web & software development, e-commerce, digital marketing, and IT consulting to deliver innovative business solutions." />
<link rel="canonical" href="https://flipcodesolutions.com/service" />

@endsection
@section('content')
<div class="container-fluid ">
    <div class="image-fluid header-career">
        <div class="headercontent">
            <h1 class="display-4 fw-light">innovative It solutions</h1>
            <p class="lead">We offer a full spectrum of bespoke IT services designed to advance your business through
                enhanced efficiency, fortified security, and professional expertise. For exceptional service and to
                discuss how we can support your needs, please reach out to us at
                <span>contact@flipcodesolutions.com</span>

            </p>
            <a href="#service" class="btn btn-dark btn-lg">Services</a>
        </div>
    </div>

    <!-- breadcrumb end -->
    <div class="container py-3">
        {{-- <div class="section-head col-sm-12" id="service">
                <h4><span>Services</span></h4>
            </div> --}}
        <style>
            .fade-up-container {
                position: relative;
                overflow: hidden;
                /* Optional: Ensures the image doesn't overflow the container */
            }

            .fade-up-image {
                opacity: 1;
                transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
                /* Add smooth transitions for transform and box-shadow changes */
            }

            .fade-up-container:hover .fade-up-image {
                transform: translateY(-25px);
                /* Move the image slightly upward on hover */
                box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.3);
                /* Box shadow on right and bottom sides */

            }
        </style>


        <div class="row">
            <p>Welcome to Flipcode Solutions, where innovation meets expertise. Our IT services and solutions are
                designed
                to empower your business, enhance efficiency, and drive digital transformation. With a commitment to
                excellence, we deliver cutting-edge solutions tailored to meet the unique needs of your organization.
            </p>
            <div class="col-md-12">
                <div class="container">
                    <div class="row py-2 ">
                        <div class="col-md-6 mt-5">
                            <h3>Custom Software Development</h3>
                            <p class="text-align" style="text-align: justify; line-height: 30px;">Custom Software
                                Development is the process of designing, creating, deploying, and maintaining software
                                tailored to meet the unique needs and requirements of a specific business or
                                organization. Unlike off-the-shelf solutions, which are designed for mass markets,
                                custom software is built to address the precise challenges and goals of a company,
                                delivering a solution that fits seamlessly with its processes and objectives.

                            </p>

                            <h4>Advantagess</h4>
                            <ul class="mob ms-3">
                                <li>Targeted Solutions</li>
                                <li>Greater Scalability</li>
                                <li>Software Integration</li>
                                <li>Hardware Costs</li>
                                <li>Increased Reliability</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class=" w-100 p-5">
                                <img src="{{ asset('img/web.jpg') }}" class="img-fluid mt-5 fade-up-image"
                                    alt="service">

                            </div>

                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <div class=" w-100 p-5">
                                <img src="{{ asset('img/webdev.jpg') }}" class="img-fluid mt-5 fade-up-image"
                                    alt="service2">
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <h3> Web Application Development</h3>
                            <p class="text-align" style="text-align: justify; line-height: 30px;">
                                we specialize in delivering cutting-edge web development solutions that cater to
                                businesses of all sizes. Our team of expert developers builds dynamic, responsive, and
                                high-performing websites tailored to meet your business goals. Whether you need a simple
                                landing page or a complex web application, we provide robust solutions that are both
                                visually appealing and technically sound. </p>
                            <h4>Our web Application Development Services Include :</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="mob ms-3">
                                        <li>React </li>
                                        <li>Angular</li>
                                        <li>Vue js</li>
                                        <li>Next js</li>
                                        <li>PHP</li>
                                        <ol>
                                            <li>Laravel</li>
                                            <li>Codeigniter</li>
                                            <li>Cake php</li>
                                        </ol>

                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>CMS</li>
                                        <ol>
                                            <li>Wordpress</li>
                                            <li>Shopify</li>
                                            <li>Joomla</li>
                                            <li>Magento</li>
                                            <li>Drupal</li>
                                        </ol>
                                    </ul>
                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="row py-2 ">
                        <div class="col-md-6 mt-5">
                            <h3> Mobile App Development</h3>
                            <p class="text-align" style="text-align: justify; line-height: 30px;">
                                we excel in building powerful mobile applications tailored to businesses of all
                                sizes. Our top-rated mobile app development services are focused on driving results,
                                whether you need an Android, iOS, hybrid, or cross-platform solution. With expertise in
                                the latest technologies, we create apps that not only meet your business needs but also
                                engage your target audience. Trust flipcode solutions, a leading mobile app development
                                company, to transform your ideas into innovative, high-performing mobile applications.

                            </p>

                            <h4>Our Mobile App Development Services Include :</h4>
                            <ul class="mob ms-3">
                                <li>React Native</li>
                                <li>Flutter</li>
                                <li>Ionic </li>
                                <li>Android</li>
                                <ol>
                                    <li>Java</li>
                                    <li>Kotlin</li>
                                </ol>
                                <li>IOS</li>
                                <ol>
                                    <li>Swift</li>
                                    <li>Objective C</li>
                                </ol>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class=" w-100 p-5">
                                <img src="{{ asset('img/mob-app.jpg') }}" class="img-fluid mt-5 fade-up-image"
                                    alt="service3">
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <div class=" w-100 p-5">
                                <img src="{{ asset('img/ITconsultimg.jpg') }}" class="img-fluid mt-5 fade-up-image"
                                    alt="service4">
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <h3>UI/UX Designer</h3>
                            <p class="text-align" style="text-align: justify; line-height: 30px;">
                                we understand that exceptional user experience is at the heart of every successful
                                digital product. Our UI/UX design services are focused on creating intuitive, engaging,
                                and visually compelling designs that resonate with your users and elevate your brand. We
                                take a user-centric approach to design, ensuring that every interaction with your
                                digital product is seamless and delightful.


                            </p>

                            <h4>Our UI/UX Development Services Include :</h4>
                            <ul class="mob ms-3">
                                <li>Wireframes Designing</li>
                                <li>Strategic Design Consulting</li>
                                <li>High/Low fidelity Prototype</li>
                                <li>Mobile App Design</li>
                                <li>Responsive Web Design</li>
                                <li>Information Architecture</li>
                                <li>UX Analysis</li>
                                <li>UI Design</li>

                            </ul>
                        </div>
                    </div>

                    <div class="row py-2 ">
                        <div class="col-md-6 mt-5">
                            <h3>Backend Development</h3>
                            <p class="text-align" style="text-align: justify; line-height: 30px;">
                                At Flipcode Solutions, our backend development services are designed to provide the
                                robust and scalable infrastructure necessary to power your applications and websites. We
                                specialize in building secure, high-performance backend systems that ensure smooth
                                operations, fast data processing, and seamless integration of APIs and databases.
                                Whether you’re building an e-commerce platform, a mobile app, or a complex web
                                application, our backend solutions are tailored to meet your business needs.
                            </p>
                            <h4>Backend Development Services Include :</h4>
                            <li>PHP</li>
                            <li>Laravel</li>
                            <li>Node JS</li>
                            <li>Python</li>
                            <li>Java</li>
                            <li>.net</li>
                        </div>
                        <div class="col-md-6">
                            <div class=" w-100 p-5">
                                <img src="{{ asset('img/data-app.jpg') }}" class="img-fluid mt-5 fade-up-image"
                                    alt="service5">
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <div class=" w-100 p-5">
                                <img src="{{ asset('img/ecom.jpg') }}" class="img-fluid mt-5 fade-up-image"
                                    alt="service6">
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <h3>E-commerce Solutions</h3>
                            <p class="text-align" style="text-align: justify; line-height: 30px;">
                                Transform your business with Flicode solutions's comprehensive e-commerce solutions.
                                We specialize in developing high-performance, scalable e-commerce platforms that enable
                                businesses to sell their products and services online seamlessly. Whether you're a small
                                retailer or a large enterprise, our customized e-commerce solutions are designed to meet
                                your unique needs, driving growth and improving customer experience.
                            </p>
                            <h4>E-commerce Development Services Include :</h4>
                            <ul class="mob ms-3">

                                <li>Magento</li>
                                <li>Shopify</li>
                                <li>WooCommerce</li>
                                <li>BigCommerce</li>
                                <li>PrestaShop</li>
                                <li>Magento</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- our technology -->

    {{-- @include('visitor.commons.technology') --}}


    <!-- End our technology -->

    <?php
    $count = 0;
    ?>
    @foreach ($services as $service)
    <?php
    $count = $count + 1;

    ?>
    <div class="row py-5">
        <?php
        if ($count % 2 == 0) {
        ?>
            <div class="col-md-4">
                <img src="{{ asset('serviceImages') }}/{{ $service->photo }}" class="card-img-top"
                    alt="{{ $service->title }}">
            </div>
            <div class="col-md-8">
                <h1>{{ $service->title }} </h1>
                <p>{!! $service->detail !!}</p>
            </div>


        <?php } else { ?>

            <div class="col-md-8">
                <h1>{{ $service->title }}</h1>
                <p>{!! $service->detail !!}</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('serviceImages') }}/{{ $service->photo }}" class="card-img-top"
                    alt="{{ $service->title }}">
            </div>
        <?php } ?>
    </div>
    @endforeach
</div>
@endsection