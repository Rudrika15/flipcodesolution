@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Contact</title>
@endsection
@section('content')
    <div class="container-fluid ">
        <div class="image-fluid header-career">
            <div class="headercontent">
                <h1 class="display-4 fw-light">Do What You Love Everyday</h1>
                <p class="lead">Want to join the Flipcode team? If you have a passion & want to work for a rapidly growing
                    IT company, check out the listings below or send your resume to
                    <span>career@flipcodesolutions.com</span>
                </p>
                <a href="#joblistings" class="btn btn-success btn-lg">View Job Openings</a>
            </div>
        </div>

        <!-- Get in Touch Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 my-5">
                    <img src="img/contactus.png" class="w-100" height="600px" alt="contact">

                </div>
                <div class="col-md-5 my-5 text-center mx-5">
                    <h2 class="display-6 fw-900">Get In Touch</h2>
                    <div class="container mt-5">
                        <div class="card p-4 shadow-sm">
                            <form action="#" method="POST">
                                @csrf
                                <div class="mb-3">

                                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter your email">
                                </div>
                                <div class="mb-3">

                                    <div class="input-group">
                                        <input type="text" class="form-control" id="phone"
                                            placeholder="Enter your phone number">
                                    </div>
                                </div>
                                <div class="mb-3">

                                    <textarea class="form-control" id="project" rows="3" placeholder="Describe your project"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Get Started
                                </button>
                                <div class="form-text mt-3">✓ 100% Guaranteed Security of Your Information</div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- contact Section -->
        <div class="benefitscontainer container-fluid my-5 text-center">
            <h2 class="display-3">Contact Us</h2>
            <ul class="list-unstyled row ">
                <li class="col-md-4">
                    <i class="bi bi-geo-alt" style="font-size:3rem; color: #ff6600;"></i>
                    <h3 class="h5 text-uppercase">Our Location</h3>
                    <p>FlipCode Solution Private Limited <br>
                        Nr. Panama Sales, Dalmill road <br>
                        Surendranagar,<br>
                        Gujrat 363001 India</p>
                </li>
                <li class="col-md-4">
                    <i class="bi bi-telephone-plus" style="font-size:3rem; color: #ff6600;"></i>
                    <h3 class="h5 text-uppercase">Phone Number</h3>
                    <p>+91 9979404044</p>
                </li>
                <li class="col-md-4">
                    <i class="bi bi-envelope-at" style="font-size:3rem; color: #ff6600;"></i>
                    <h3 class="h5 text-uppercase">Email Address</h3>
                    <p>contact@flipcodesolutions.com</p>
                </li>

            </ul>
        </div>

        <!-- map Section -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.94173047222!2d71.62444027508269!3d22.73040707937964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959418fd76eccc1%3A0xd48553a8e44d7d92!2sflipcodesolutions!5e0!3m2!1sen!2sin!4v1724140627112!5m2!1sen!2sin"
                        width="1530" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>

    <!-- portfolio design  -->
@endsection
