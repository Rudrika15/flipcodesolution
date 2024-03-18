@extends('visitor.layouts.app')
@section('title')
<title>Flipcode solutions | About</title>
@endsection
@section('content')

<div class="bg-image" style="background: url({{ asset('img/banner3.jpg') }}) no-repeat center;
    padding: 30px 0px 30px;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    position: relative;
    display: grid;
    align-items: center;
    text-align: center;
    z-index: 0;
            height: 20vh">
    <div class="container">

        <div style="display: flex;justify-content: center;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" style="color: white" aria-current="page">About Us</li>
                </ol>
            </nav>

        </div>
    </div>
</div>
<!-- breadcrumb end -->
<div class="container py-5">
    <div class="row py-5">
        <div class="col-md-12 py-2">
            <h1>About us</h1>
            
        </div>
    </div>
    <div class="row py-3">
        <div class="col-md-12">
            <h4 class="">Why choice us</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-align" style="text-align: justify; line-height: 30px;">
                    Welcome to our new IT company! We understand that choosing the right IT partner is a crucial
                    decision for your business. Here's why you should choose us:

                    Expertise and Experience: Our team comprises highly skilled and experienced IT professionals
                    who have worked on a diverse range of projects. We have a proven track record of delivering
                    successful solutions to clients from various industries.

                    Cutting-edge Technology: We stay up-to-date with the latest technological advancements in
                    the IT industry. Our company's culture revolves around innovation and continuous learning,
                    ensuring that we offer the most modern and efficient solutions to our clients.

                    Customized Solutions: We believe that every business is unique, and so are its IT needs. We
                    take the time to understand your specific requirements and tailor our solutions accordingly.
                    Our goal is to provide personalized and scalable IT services that align perfectly with your
                    business goals.

                    Reliable Support: Our commitment to customer satisfaction is unwavering. We offer reliable
                    and responsive support to address any issues or concerns that may arise during or after the
                    implementation of our solutions.

                    Security and Privacy: We prioritize the security and confidentiality of your data. Our team
                    implements robust security measures to safeguard your sensitive information from potential
                    threats.

                    Cost-Effective Solutions: We understand the importance of cost-effectiveness in today's
                    competitive market. Our company strives to deliver high-quality solutions at reasonable
                    prices, maximizing the value you receive from our services.

                    Timely Delivery: We value your time and understand the significance of timely project
                    delivery. Our team adheres to strict timelines, ensuring that your IT projects are completed
                    on schedule.

                    Client-Centric Approach: Your success is our success. We work collaboratively with our
                    clients, keeping them involved throughout the project life cycle. We believe in transparent
                    communication and actively seek feedback to improve our services continually.

                    Scalability and Flexibility: As your business grows, your IT requirements may change. We
                    offer scalable solutions that can adapt to your evolving needs, providing you with the
                    flexibility to upgrade or modify services as necessary.

                    Long-Term Partnership: We aim to build long-term partnerships with our clients, assisting
                    them not only with their immediate IT needs but also as a strategic technology partner for
                    their future growth and success.

                    At Flipcode Solutions, we are dedicated to helping your business thrive in the digital
                    era. By choosing us, you gain a reliable, forward-thinking IT partner that is committed to
                    empowering your organization's success. Let's embark on this exciting journey together!
                </p>
            </div>
        </div>
    </div>

    <div class="row py-2">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2>Professional Services.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, nostrum aspernatur
                        veritatis
                        illo rerum quaerat excepturi accusantium ut temporibus, aliquid voluptatum doloribus
                        deleniti iure tenetur culpa incidunt explicabo, beatae et.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2>Advice and Guides.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, nostrum aspernatur
                        veritatis
                        illo rerum quaerat excepturi accusantium ut temporibus, aliquid voluptatum doloribus
                        deleniti iure tenetur culpa incidunt explicabo, beatae et.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2>Live Support.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, nostrum aspernatur
                        veritatis
                        illo rerum quaerat excepturi accusantium ut temporibus, aliquid voluptatum doloribus
                        deleniti iure tenetur culpa incidunt explicabo, beatae et.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2>Super Growth.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, nostrum aspernatur
                        veritatis
                        illo rerum quaerat excepturi accusantium ut temporibus, aliquid voluptatum doloribus
                        deleniti iure tenetur culpa incidunt explicabo, beatae et.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-md-6">
            <h3>About Us</h3>
           

        </div>
        <div class="col-md-6">
            <img src="{{asset('img/b7.jpg')}}" class="img-fluid" alt="b1">
        </div>
    </div>
</div>
<!-- team -->

<div style="width: 100%;background-color: #f9f9f9;">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-12 py-2">
                <h1>Meet Our Awesome Team</h1>
            </div>
        </div>
        <div class="row py-5">

            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('img/b1.jpg')}}" class="card-img-top" alt="b1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Name 1</h5>
                        <h6 class="card-title">Ceo</h6>
                        <p class="card-text">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-google"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('img/b2.jpg')}}" class="card-img-top" alt="b1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Name 2</h5>
                        <h6 class="card-title">CTO</h6>
                        <p class="card-text">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-google"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('img/b3.jpg')}}" class="card-img-top" alt="b1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Name 3</h5>
                        <h6 class="card-title">Co-Founder</h6>
                        <p class="card-text">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-google"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end team -->


@endsection