@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Contact</title>
@endsection
@section('content')
    <div class="container-fluid ">
        <div class="image-fluid header-career">
            <div class="headercontent">
                <h1 class="display-4 fw-light">Let's discuss your next project</h1>
                <p class="lead">Are you ready to turn your idea into reality? At Flipcode Solutions, <br>
                    we specialize in delivering high-quality IT solutions tailored to your needs. Whether you
                    have a project in mind or need guidance on how to start, we’re here to help. reach out to us at
                    <span>contact@flipcodesolutions.com</span>
                </p>
                <a href="#contactus"class="btn btn-dark btn-lg">Contact Us</a>
            </div>
        </div>

        <!-- Get in Touch Section -->
        <div class="container text-center fs-4 mt-5">
            <span>Ready to bring your project ? Contact us today for on-time, bug-free solutions.<br><br>
                Let’s create something remarkable together!</span>

        </div>
        <div class="container ">

            <div class="row">
                <div class="col-md-5 ">
                    <img src="img/contactus.png" class="w-100" height="600px" alt="contact">

                </div>
                <div class="col-md-7 my-5 ps-5 d-flex justify-content-center">

                    <div class="card pt-5 px-3  shadow-sm" style=" width: 35rem;">
                        <form action="{{ route('contact_mail_send') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border-bottom" name="name"
                                    id="floatingInputPassword" value="{{ old('name') }}" placeholder="Name">
                                <label for="floatingInputPassword">Name</label>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control border-bottom" id="floatingInputEmail"
                                    placeholder="name@example.com" autocomplete="email">
                                <label for="floatingInputEmail">Email address</label>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="tel" value="{{ old('contact') }}" class="form-control border-bottom"
                                    id="floatingInputPhone" name="contact" placeholder="Phone Number">
                                <label for="floatingInputPhone">Contact Number</label>
                                @error('contact')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control border-bottom" name="message" id="floatingMessage" placeholder="Message">{{ old('message') }}</textarea>
                                <label for="floatingMessage">Message</label>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn text-white mt-5" style="background-color:#ff6600">
                                Get Started &nbsp;<i class="bi bi-rocket-takeoff text-white fs-5"></i>
                            </button>
                            <div class="form-text mt-3 text-muted">✓ 100% Guaranteed Security of Your Information</div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
        <!-- contact Section -->
        <div class="benefitscontainer container-fluid my-5 text-center" id="contactus">
            <h2 class="display-3">Contact Us</h2>
            <ul class="list-unstyled row ">
                <li class="col-md-4">
                    <i class="bi bi-geo-alt" style="font-size:3rem; color: #ff6600;"></i>
                    <h3 class="h5 text-uppercase">Our Location</h3>
                    <p>Flipcode Solution Private Limited <br>
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
                <div class="col-md-12 mb-5 col-lg-12 col-sm-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.94173047222!2d71.62444027508269!3d22.73040707937964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959418fd76eccc1%3A0xd48553a8e44d7d92!2sflipcodesolutions!5e0!3m2!1sen!2sin!4v1724140627112!5m2!1sen!2sin"
                        width="100%" height="450" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>

    <!-- portfolio design  -->
    <!-- SweetAlert2 CDN -->

    @if (Session::has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Thank You!',
                    text: '{{ Session::get('success') }}',
                    icon: 'success'
                });
            });
        </script>
    @endif
@endsection
