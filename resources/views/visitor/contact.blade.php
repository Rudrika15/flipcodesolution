@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Contact</title>
@endsection
@section('meta')
    <meta name="description"
        content="Contact us for any inquiries or collaboration opportunities. We're here to help you bring your ideas to life.">
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
    </div>
    <!-- Get in Touch Section -->
    <div class="container text-center fs-4 mt-5" data-aos="zoom-in" data-aos-duration="1500">
        <span>Ready to bring your project ? Contact us today for on-time, bug-free solutions.<br><br>
            Let’s create something remarkable together!</span>

    </div>
    <div class="container ">

        <div class="row">
            <div class="col-md-5 ">
                <img src="img/contactus.png" class="w-100" height="600px" alt="contact" data-aos-duration="1000">

            </div>
            <div class="col-md-7 my-5 ps-5 d-flex justify-content-center" data-aos-duration="1000">

                <div class="card pt-5 px-3  shadow-sm" style=" width: 35rem;">
                    <form action="{{ route('contact_mail_send') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border-bottom" name="name"
                                id="floatingInputPassword" value="{{ old('name') }}" placeholder="Name">
                            <label for="floatingInputPassword">Name</label>
                            <span class="text-danger"></span>

                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control border-bottom" id="floatingInputEmail" placeholder="name@example.com"
                                autocomplete="email">
                            <label for="floatingInputEmail">Email address</label>
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" value="{{ old('contact') }}" class="form-control border-bottom"
                                id="floatingInputPhone" name="contact" placeholder="Phone Number">
                            <label for="floatingInputPhone">Contact Number</label>
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control border-bottom" name="message" id="floatingMessage" placeholder="Message">{{ old('message') }}</textarea>
                            <label for="floatingMessage">Message</label>
                            <span class="text-danger"></span>
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
    <div class="benefitscontainer container-fluid my-5 text-center" id="contactus" data-aos="flip-up"
        data-aos-duration="1000">
        <div class="section-head col-sm-12">
            <h4><span>Contact Us</span></h4>
        </div>
        <ul class="list-unstyled row ">
            <li class="col-md-4">
                <i class="bi bi-geo-alt" style="font-size:3rem; color: #ff6600;"></i>
                <h3 class="h5 text-uppercase">Our Location</h3>
                <p>Flipcode Solutions Private Limited <br>
                    Nr. Panama Sales, Dalmill road <br>
                    Surendranagar,<br>
                    Gujarat 363001 India</p>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle form submission via AJAX
            $('form').on('submit', function(event) {
                event.preventDefault();

                // Clear previous errors
                $('.text-danger').text('');

                // Disable the submit button and change its text
                var submitButton = $(this).find('button[type="submit"]');
                var originalButtonText = submitButton.html(); // Preserve the original button text

                submitButton.prop('disabled', true).html('Sending...');

                var formData = new FormData(this);

                $.ajax({
                    url: $(this).attr('action'), // Use the form's action attribute
                    type: $(this).attr('method'), // Use the form's method attribute
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Your message has been sent successfully!',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            $('form')[0].reset(); // Reset the form
                        });
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) { // Validation error
                            var errors = xhr.responseJSON.errors;

                            // Loop through each error and display it below the respective input field
                            $.each(errors, function(key, value) {
                                $('input[name="' + key + '"], textarea[name="' + key +
                                    '"]').siblings('.text-danger').text(value[0]);
                            });
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: 'An error occurred while submitting the form. Please try again.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    complete: function() {
                        // Re-enable the submit button and restore its original text
                        submitButton.prop('disabled', false).html(originalButtonText);
                    }
                });
            });
        });
    </script>
@endsection
