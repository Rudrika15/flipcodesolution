@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Portfolio</title>
@endsection
@section('content')
    @php
        $jsonData = [
            [
                'image' => asset('client-logo/argilgraygrp.jpg'),
                'title' => 'Argil Gray Group',
                'technology' => 'React js',
                'industry' => 'Manufacturing Industry',
                'type' => 'web',
            ],
           
            [
                'image' => asset('client-logo/brand-beans-logo.jpg'),
                'title' => 'Brand Beans',
                'technology' => 'Laravel',
                'industry' => 'Marketing & advertising Industry',
                'type' => 'web',
            ],
            [
                'image' => asset('client-logo/cu-shah-logo.jpg'),
                'title' => 'C.U.SHAH Mahila College',
                'technology' => 'Laravel',
                'industry' => 'Education Industry',
            ],
            [
                'image' => asset('client-logo/alkaviva-logo.jpg'),
                'title' => 'Alkaviva',
                'technology' => 'PHP',
                'industry' => 'Manufacturing Industry',
                'type' => 'web',
            ],
            [
                'image' => asset('client-logo/jd-infra-logo.jpg'),
                'title' => 'JD Infra',
                'technology' => 'Laravel',
                'industry' => 'Construction',
                'type' => 'web',
            ],
            [
                'image' => asset('client-logo/smvs.jpg'),
                'title' => 'SMVS Swaminarayan Sanstha',
                'technology' => 'Laravel',
                'industry' => 'Religious and Spiritual Industry',
            ],
            [
                'image' => asset('client-logo/ConsultantLogo.jpg'),
                'title' => 'Consultant',
                'technology' => 'Laravel',
                'industry' => 'Consultancy',
                'type' => 'web',
            ],
            [
                'image' => asset('client-logo/click-to-care.jpg'),
                'title' => 'Click To Care',
                'technology' => 'Laravel',
                'industry' => 'HealthCare Industry',
                'type' => 'web',
            ],
            [
                'image' => asset('client-logo/micro.png'),
                'title' => 'Micro Dimonds & CBN Wheels',
                'technology' => 'Laravel',
                'industry' => ' Abrasives Industry',
                'type' => 'web',
            ],
            [
                'image' => asset('client-logo/smvs.jpg'),
                'title' => 'SMVS Swaminarayan Sanstha mobile app',
                'technology' => 'Native',
                'industry' => 'Religious and Spiritual Industry',
                'type' => 'app',
            ],
            [
                'image' => url('https://play-lh.googleusercontent.com/4SbefFJmjELAPQRLzR-_2omzfV3GKiZaIEMZ7-a9sA1AdkmsuX1OMY0vcLesmpxKkg=w240-h480-rw'),
                'title' => 'Brandbeans - Festival Poster',
                'technology' => 'Flutter',
                'industry' => 'Brandbeans - Festival Poster',
                'type' => 'app',
            ],
            [
                'image' => url('https://play-lh.googleusercontent.com/_mLsznL4LTsY7hadP5pXZfNWtZBDEKSizlODmFEEDtUYFDI2ypT9DoIRCfBQZepXT84=w240-h480-rw'),
                'title' => 'BB - Influencer Marketing',
                'technology' => 'Flutter',
                'industry' => 'BB - Influencer Marketing',
                'type' => 'app',
            ],
            [
                'image' => url('https://play-lh.googleusercontent.com/pORULxwQsuyiQLnqe063_sbpqe3lg_WAJHWcN3EleMtP-zjMTQEr4jjkqdq-Oj8n7hj0=w240-h480-rw'),
                'title' => 'UBN Community',
                'technology' => 'Flutter',
                'industry' => 'UBN Community',
                'type' => 'app',
            ],
            [
                'image' => url('https://play-lh.googleusercontent.com/oBvaKAm3ZqDFEaw-lXni_ZrSqihb3W5UXHPLKXgNnvnLk8gE7o51m3BGwgE3WOkGqlA=w240-h480-rw'),
                'title' => 'Consultant Cube',
                'technology' => 'Flutter',
                'industry' => 'Consultant Cube',
                'type' => 'app',
            ],
        ];
    @endphp
    <div class="container-fluid ">
        <div class="image-fluid header-career">
            <div class="headercontent">
                <h1 class="display-4 fw-light">Distinguished Clientele</h1>
                <p class="lead">We take pride in delivering a full spectrum of bespoke IT services, enhancing efficiency,
                    security, and expertise for our diverse clientele. Our commitment to excellence drives business success
                    and client satisfaction.
                    Discover how we can support your business success—reach out to us at
                    <span>contact@flipcodesolutions.com</span>
                </p>
                <a href="#porfolio" class="btn btn-dark btn-lg">Portfolio</a>
            </div>
        </div>
        <!-- breadcrumb end -->
        <!-- portfolio design  -->
        <div class="container-fluid py-3 bg-light">
            <div class="container py-3" id="clients">
                <!-- <div class="section-head col-sm-12" id="porfolio">
                    <h4><span>Portfolio</span></h4>
                </div> -->
                <div class="row py-2 bg-light">
                    <div class="col-md-12">
                        <!-- Start portfolio Section  -->
                        <div class="mt-5">
                            <a class="anchor" id="portfolio-link"></a>
                            <div id="portfolio" class="container-fluid">
                                <div class="row" id="portfolioItems">
                                    <div class="col-lg-12 text-center">
                                        <div class="search-container justify-content-center">
                                            <div>
                                                <input type="text" id="searchTechnology" class="search-input"
                                                    placeholder="Search technology..." />
                                            </div>
                                            <div>
                                                <input type="text" id="searchIndustry" class="search-input"
                                                    placeholder="Search industry..." />
                                            </div>
                                            <button class="reset-button" id="resetButton">
                                                <i class="fa fa-refresh"></i>
                                            </button>
                                        </div>
                                        <hr />
                                        <div class="container-fluid">
                                            <div class="row">
                                                @foreach ($jsonData as $data)
                                                    <div class="col-md-4 py-4 " data-aos="zoom-in" data-aos-duration="1000">
                                                        <div class=" card " style="width: 25rem">
                                                            <img src="{{ $data['image'] }}" alt="{{ $data['title'] }}"
                                                                class="card-img-top" />
                                                            <div class="card-body">
                                                                <h5 class="card-title fs-6 fw-bold">{{ $data['title'] }}
                                                                </h5>
                                                                <div class="container mt-3">
                                                                    <div class="d-flex justify-content-between mb-3">
                                                                        <div class="pe-1 fs-6">{{ $data['technology'] }}
                                                                        </div>
                                                                        <div class=" fs-6"> {{ $data['industry'] }}</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection