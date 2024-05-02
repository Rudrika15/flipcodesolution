@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Contact</title>
@endsection
@section('content')
    <div class="bg-image parallax">

        <div class="container">

            <div style="display: flex;justify-content: center;font-size:larger;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="/" style="color: #606060">Home</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <div class="container py-3">
        {{-- <div class="row py-3">
            <div class="section-head col-sm-12">
                <h4><span>Contact</span> Us</h4>
            </div>
        </div> --}}
        <!--contact form start  -->
        <div class="row py-2">
            <div class="col-md-4">
                <div>
                    <h3>Contact info</h3>
                    <p class="contact-p">Welcome to our Website.<br/>
                    We are glad to have you around.</p>
                </div>
                <div class="mt-2">
                    <h5> Phone </h5>
                    <p>+91 9979404044</p>
                </div>
                <div class="mt-2">
                    <h5> Email </h5>
                    <p>contact@flipcodesolutions.com</p>
                </div>
                <div class="mt-2">
                    <h5> Address </h5>
                    <p>FlipCode Solution Private Limited<br />
                        Nr. Panama Sales, Dalmill road <br />
                        Surendranagar,<br />
                        Gujrat 363001 India
                    </p>
                </div>

            </div>
            <div class="col-md-8">
                @include('visitor.commons.contactus')
            </div>
        </div>

        <!--contact form end  -->
    </div>

    <div class="mt-5 mb-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14719.771179798687!2d71.62868889842528!3d22.730367517749304!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959418fd76eccc1%3A0xd48553a8e44d7d92!2sflipcodesolutions!5e0!3m2!1sen!2sin!4v1704709171955!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
