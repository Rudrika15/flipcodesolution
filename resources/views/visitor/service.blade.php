@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Services</title>
@endsection
@section('content')
    <div class="bg-image parallax">
        <div class="container">
            <div style="display: flex;justify-content: center;font-size:larger;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="color: #606060">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <div class="container py-3">
        <div class="section-head col-sm-12">
            <h4><span>Services</span></h4>
        </div>
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
                box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.3); /* Box shadow on right and bottom sides */

            }
        </style>


        <div class="row">
            <p>Welcome to Flipcode Solutions, where innovation meets expertise. Our IT services and solutions are designed
                to empower your business, enhance efficiency, and drive digital transformation. With a commitment to
                excellence, we deliver cutting-edge solutions tailored to meet the unique needs of your organization.</p>
            <div class="col-md-12">
                <div class="container">
                    <div class="row py-2 img-Sec">
                        <div class="col-md-6 mt-5">
                            <h3>Custom Software Development</h3>
                            <p class="text-align" style="text-align: justify; line-height: 30px;">	Crafting bespoke software solutions tailored to your unique business needs, ensuring efficiency, scalability, and seamless integration for optimal performance and growth.																								</p>
                            {{-- <p class="text-align" style="text-align: justify; line-height: 30px;">
                                Leverage our expertise in developing bespoke software solutions. From concept to deployment,
                                our skilled team ensures that your software aligns seamlessly with your business objectives.
                            </p>
                            <p>Custom software development is the process of designing software applications that meet the
                                specific needs of an individual or a company. Unlike commercial off-the-shelf (COTS)
                                software, custom options are usually targeting specific problems. They are also meant for
                                in-house use, not resale.</p> --}}
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
                            <div class="fade-up-container w-100 p-5">
                                <img src="{{ asset('img/web.jpg') }}" class="img-fluid mt-5 fade-up-image" alt="b1">

                            </div>

                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <div class="fade-up-container w-100 p-5">
                            <img src="{{ asset('img/webdev.jpg') }}" class="img-fluid mt-5 fade-up-image" alt="b1">
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <h3> Web Application Development</h3>
                            <p class="text-align" style="text-align: justify; line-height: 30px;">
                            	Engineering user-centric web applications to redefine interactions, optimize workflows, and propel business expansion. Amplify your digital footprint with our customized offerings.																							</p>
                            {{-- <p class="text-align" style="text-align: justify; line-height: 30px;">
                                Transform your online presence with dynamic and user-friendly web applications. We
                                specialize in creating scalable and responsive solutions that captivate your audience.
                            </p>
                            <p>Front-end of the web or application is the part that users can interact and see. If your
                                website looks great, loads quickly, and work well without any glitches, then you can assume
                                the front-end development of your site works well.</p>
                            <p>If you look behind website development, there is a clean code in the back-end that powers up
                                all the mighty functionality. However, smooth and intuitive navigation only supports the
                                back-end code. With front-end development, you can craft a look and feel that compliments
                                the code and creates an impact on your users.</p>
                            <p>At Flipcode Solutions, we provide front-end development services that guarantee better
                                usability with intuitive UI that reflects the business data well and support smooth
                                functionality deployment. Keeping your core business requirement in mind, we strategize
                                precisely and add life to your design with each element that we augment to the UI structure
                                and design.</p> --}}
                        </div>
                    </div>

                    <div class="row py-2 img-Sec">
                        <div class="col-md-6 mt-5">
                            <h3> Mobile App Development</h3>
                            <p class="text-align" style="text-align: justify; line-height: 30px;">	Turning your ideas into innovative mobile solutions, enhancing user engagement and expanding your reach on every device.																								</p>
                            {{-- <p class="text-align" style="text-align: justify; line-height: 30px;">
                                Stay ahead in the mobile-first world with our innovative mobile app development services.
                                Whether it's iOS, Android, or cross-platform, we bring your app ideas to life.
                            </p>
                            <p>Mobile technology has changed everybody’s life to a great extent. For companies, it
                                facilitates wider and unparalleled reach to the target audience, enhances the service
                                standards, better cooperation and communication among employees.
                                Enterprise Mobility adds liquidity to stationary enterprise processes, thus enhancing the
                                global reach. Developing enterprise mobile apps is now an essential component of every
                                enterprise strategy.</p> --}}
                            <h4>Our Mobile Api Development Services Include :</h4>
                            <ul class="mob ms-3">
                                <li>Android App Development</li>
                                <li>App Prototype Development</li>
                                <li>iPad App Development</li>
                                <li>iphone App Development</li>
                                <li>IOS App Development</li>
                                <li>Smart Watch App Development</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="fade-up-container w-100 p-5">
                            <img src="{{ asset('img/mob-app.jpg') }}" class="img-fluid mt-5 fade-up-image" alt="b1">
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <div class="fade-up-container w-100 p-5">
                            <img src="{{ asset('img/ITconsultimg.jpg') }}" class="img-fluid mt-5 fade-up-image" alt="b1">
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <h3>IT Consulting</h3>
                            <p class="text-align" style="text-align: justify; line-height: 30px;">
                                Navigating digital landscapes, we provide expert guidance and tailored strategies to optimize your IT infrastructure and drive sustainable growth.																							
                            </p>
                            {{-- <p class="text-align" style="text-align: justify; line-height: 30px;">
                                Rely on our experienced consultants to provide strategic insights and recommendations. We
                                collaborate with you to optimize your IT infrastructure, aligning technology with your
                                business goals.
                            </p>
                            <p>An IT consultant is a technology professional who supports clients during technological
                                projects. Many IT consultants work for companies or businesses that need guidance when
                                making decisions about the technology they use.</p>
                            <p>An IT consultant might also perform repairs on IT systems and technological devices that
                                companies need to conduct business.</p>
                            <h4>How to become an IT consultant</h4> --}}
                            <p>Here's how you can start your career as an IT consultant:</p>
                            <ul class="mob ms-3">
                                <li>Earn a degree</li>
                                <li>Gain professional experience</li>
                                <li>Obtain certification</li>
                                <li>Apply for work as an IT consultant</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row py-2 img-Sec">
                        <div class="col-md-6 mt-5">
                            <h3>Data Analytics and Business Intelligence</h3>
                            <p class="text-align" style="text-align: justify; line-height: 30px;">
                            	Empower your organization with actionable insights derived from raw data. Our data analytics and business intelligence solutions drive informed decision-making, foster innovation, and fuel sustainable growth in today's data-driven landscape.																							
                            </p>
                            {{-- <p class="text-align" style="text-align: justify; line-height: 30px;">
                                Unlock the potential of your data with our advanced analytics and business intelligence
                                solutions. Make informed decisions and gain a competitive edge in today's data-driven
                                landscape.
                            </p>
                            <p>Data-driven organizations often use the terms "business intelligence" (BI) and "data
                                analytics" interchangeably. They're not the same thing, but if someone asked you to explain
                                the difference, what would you say?</p>
                            <p>Some people distinguish between the two by saying that business intelligence looks backward
                                at historical data to describe things that have happened, while data analytics uses data
                                science techniques to predict what will or should happen in the future. We think that's
                                close, but there's more to it.</p>
                            <p>Business intelligence involves the use of data to help make business decisions, or as
                                OLAP.com puts it, BI "refers to technologies, applications, and practices for the
                                collection, integration, analysis, and presentation of business information. The purpose of
                                business intelligence is to support better business decision-making." However, one could say
                                the same about data analytics.</p>
                            <p>To draw the line between business intelligence and data analytics, we think it's more useful
                                to talk about what we want to accomplish. We can divide analytics into three categories:
                                descriptive, predictive, and prescriptive.</p> --}}
                        </div>
                        <div class="col-md-6">
                            <div class="fade-up-container w-100 p-5">
                            <img src="{{ asset('img/data-app.jpg') }}" class="img-fluid mt-5 fade-up-image" alt="b1">
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <div class="fade-up-container w-100 p-5">
                            <img src="{{ asset('img/ecom.jpg') }}" class="img-fluid mt-5 fade-up-image" alt="b1">
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <h3>E-commerce Solutions</h3>
                            <p class="text-align" style="text-align: justify; line-height: 30px;">
                                Empowering businesses to thrive in the digital marketplace, our comprehensive e-commerce solutions offer seamless integration, user-friendly interfaces, and robust features tailored to maximize sales and customer satisfaction.																							
                            </p>
                            {{-- <p class="text-align" style="text-align: justify; line-height: 30px;">
                                Boost your online presence and revenue with our tailored e-commerce solutions. We create
                                secure, user-friendly platforms that enhance the shopping experience for your customers.
                            </p>
                            <h4>Drive meaningful connections with powerful mobile applications :</h4>
                            <p>We have employed bright and passionate individuals that are pros in making complex eCommerce
                                projects technically and aesthetically impeccable. We cater our eCommerce web development
                                services to both B2B and B2C ventures and focus on ROI for our clients as our ultimate
                                success metric.</p>
                            <p>New IT technologies have completely changed the way people shop in the 21st century. Internet
                                and mobile devices have made it possible to purchase products or services at any time and in
                                any location As a result, a tremendous number of e-commerce websites appeared on the world
                                wide web and continue to compete with each other.</p>
                            <p>Today, the eCommerce market is growing infinitely. The yearly growth for the eCommerce
                                industry is approximately 23% according to BigCommerce. eMarketer forecasted that global
                                eCommerce sales are expected to cross $4 trillion in 2020 and these are just the statistics
                                for the retail sector.</p> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- our technology -->

    @include('visitor.commons.technology')


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
        if($count%2 == 0){
        ?>
            <div class="col-md-4">
                <img src="{{ asset('serviceImages') }}/{{ $service->photo }}" class="card-img-top"
                    alt="{{ $service->title }}">
            </div>
            <div class="col-md-8">
                <h1>{{ $service->title }} </h1>
                <p>{!! $service->detail !!}</p>
            </div>


            <?php } else {?>

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
