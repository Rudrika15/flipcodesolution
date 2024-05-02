@extends('visitor.layouts.app')
@section('title')
<title>Flipcode solutions | Home</title>
@endsection
@section('content')

<!-- slider -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($sliders as $key => $slider)
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}" @if($key===0)
            class="active" @endif></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($sliders as $key => $slider)
        <div class="carousel-item @if($key === 0) active @endif">
            <img src="{{ asset('sliderImages') }}/{{ $slider->photo }}" class="d-block"
                style="width: 100%; height: 90vh" alt="{{ $slider->key }}">
            <div class="carousel-caption d-none d-md-block align-middle">
                <h4 class='display-6'><b>Join Us</b></h4>
            </div>
        </div>
        @endforeach
    </div>

</div>
<!-- slider end -->
<div class="container">
    <div class="row py-5">
        <div class="col-md-12">
            <h1>Making Internet A Brand New Experience</h1>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title py-2"><i class="bi bi-display"></i></h3>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Online Business</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title py-2"><i class="bi bi-hand-thumbs-up"></i></h3>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Business Plan</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title py-2"><i class="bi bi-phone"></i></h3>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Mobile App</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title py-2"><i class="bi bi-globe2"></i></h3>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Web App</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="width: 100%;background-color: #f9f9f9;">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6">
                <h2>Progressive Percentage</h2>
                <p>
                    Mollitia placeat modi explicabo voluptatum corporis unde Dicta, provident Rem adipisci Mollitia
                    placeat modi.
                </p>
                <h2> Easy Documentation</h2>
                <p>
                    Mollitia placeat modi explicabo voluptatum corporis unde Dicta, provident Rem adipisci Mollitia
                    placeat modi.
                </p>
                <h2> Competitive Percentage</h2>
                <p>
                    Mollitia placeat modi explicabo voluptatum corporis unde Dicta, provident Rem adipisci Mollitia
                    placeat modi.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/b1.jpg')}}" class="img-fluid" alt="b1">

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row py-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title py-2 text-center"><i class=" bi bi-lightbulb"></i></h3>
                    <h6 class="card-subtitle mb-2 text-body-secondary text-center">Innovative Solutions</h6>
                    <p class="card-text text-center">Some quick example text to build on the card title and make up
                        the bulk of
                        the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title py-2 text-center"><i class=" bi bi-shield-shaded"></i></h3>
                    <h6 class="card-subtitle mb-2 text-body-secondary text-center">Best Support</h6>
                    <p class="card-text text-center">Some quick example text to build on the card title and make up
                        the bulk of
                        the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title py-2 text-center"><i class=" bi bi-clock-history"></i></h3>
                    <h6 class="card-subtitle mb-2 text-body-secondary text-center">On Time Services </h6>
                    <p class="card-text text-center">Some quick example text to build on the card title and make up
                        the bulk of
                        the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-center">Why choice us</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-align" style="text-align: justify; line-height: 30px;">
                    Welcome to our new IT company! We understand that choosing the right IT partner is a crucial
                    decision for your business. Here's why you should choose us:

                    Expertise and Experience: Our team comprises highly skilled and experienced IT professionals who
                    have worked on a diverse range of projects. We have a proven track record of delivering successful
                    solutions to clients from various industries.

                    Cutting-edge Technology: We stay up-to-date with the latest technological advancements in the IT
                    industry. Our company's culture revolves around innovation and continuous learning, ensuring that we
                    offer the most modern and efficient solutions to our clients.

                    Customized Solutions: We believe that every business is unique, and so are its IT needs. We take the
                    time to understand your specific requirements and tailor our solutions accordingly. Our goal is to
                    provide personalized and scalable IT services that align perfectly with your business goals.

                    Reliable Support: Our commitment to customer satisfaction is unwavering. We offer reliable and
                    responsive support to address any issues or concerns that may arise during or after the
                    implementation of our solutions.

                    Security and Privacy: We prioritize the security and confidentiality of your data. Our team
                    implements robust security measures to safeguard your sensitive information from potential threats.

                    Cost-Effective Solutions: We understand the importance of cost-effectiveness in today's competitive
                    market. Our company strives to deliver high-quality solutions at reasonable prices, maximizing the
                    value you receive from our services.

                    Timely Delivery: We value your time and understand the significance of timely project delivery. Our
                    team adheres to strict timelines, ensuring that your IT projects are completed on schedule.

                    Client-Centric Approach: Your success is our success. We work collaboratively with our clients,
                    keeping them involved throughout the project life cycle. We believe in transparent communication and
                    actively seek feedback to improve our services continually.

                    Scalability and Flexibility: As your business grows, your IT requirements may change. We offer
                    scalable solutions that can adapt to your evolving needs, providing you with the flexibility to
                    upgrade or modify services as necessary.

                    Long-Term Partnership: We aim to build long-term partnerships with our clients, assisting them not
                    only with their immediate IT needs but also as a strategic technology partner for their future
                    growth and success.

                    At [Your IT Company Name], we are dedicated to helping your business thrive in the digital era. By
                    choosing us, you gain a reliable, forward-thinking IT partner that is committed to empowering your
                    organization's success. Let's embark on this exciting journey together!
                </p>
            </div>
        </div>
    </div>
</div>
<div style="width: 100%;background-color: #ff6600;">
    <div class="container">

        <div class="row">

            <div class="four col-md-3">
                <div class="counter-box colored">
                    <i class="fa fa-thumbs-o-up"></i>
                    <span class="counter">50 </span> <span class="display-6 text-white "><b>+</b></span>
                    <p class="text-white fs-4 fw-bolder">Total project</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box">
                    <i class="fa fa-group"></i>
                    <span class="counter">20 </span> <span class="display-6 text-white "><b>+</b></span>
                    <p class="text-white fs-4 fw-bolder">Total staff</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box">
                    <i class="fa  fa-shopping-cart"></i>
                    <span class="counter">50 </span> <span class="display-6 text-white "><b>+</b></span>
                    <p class="text-white fs-4 fw-bolder">Total happy customer</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box">
                    <i class="fa  fa-user"></i>
                    <span class="counter">100 </span> <span class="display-6 text-white "><b>+</b></span>
                    <p class="text-white fs-4 fw-bolder">Total intern </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="width: 100%;background-color: #f9f9f9;">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-12">
                <h1 class="mt-5">Best way to grow your business</h1>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <img src="img/b1.jpg" class="card-img-top" alt="b1">
                        <h2 class="py-3">Money Protection</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt enim nulla dicta,
                            excepturi blanditiis consequuntur mollitia tempore nemo iste quidem illum natus officia
                            ea facere, libero, voluptatem corrupti dolor suscipit?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{asset('img/b1.jpg')}}" class="card-img-top" alt="b1">
                        <h2 class="py-3">Growth Guranteed</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt enim nulla dicta,
                            excepturi blanditiis consequuntur mollitia tempore nemo iste quidem illum natus officia
                            ea facere, libero, voluptatem corrupti dolor suscipit?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{asset('img/b1.jpg')}}" class="card-img-top" alt="b1">
                        <h2 class="py-3">Business Support</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt enim nulla dicta,
                            excepturi blanditiis consequuntur mollitia tempore nemo iste quidem illum natus officia
                            ea facere, libero, voluptatem corrupti dolor suscipit?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection