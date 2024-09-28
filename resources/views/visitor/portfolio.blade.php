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
                'image' => url(
                    'https://play-lh.googleusercontent.com/4SbefFJmjELAPQRLzR-_2omzfV3GKiZaIEMZ7-a9sA1AdkmsuX1OMY0vcLesmpxKkg=w240-h480-rw',
                ),
                'title' => 'Brandbeans - Festival Poster',
                'technology' => 'Flutter',
                'industry' => 'Brandbeans - Festival Poster',
                'type' => 'app',
            ],
            [
                'image' => url(
                    'https://play-lh.googleusercontent.com/oBvaKAm3ZqDFEaw-lXni_ZrSqihb3W5UXHPLKXgNnvnLk8gE7o51m3BGwgE3WOkGqlA=w240-h480-rw',
                ),
                'title' => 'Consultant Cube',
                'technology' => 'Flutter',
                'industry' => 'Consultant Cube',
                'type' => 'app',
            ],
            [
                'image' => url(
                    'https://play-lh.googleusercontent.com/_mLsznL4LTsY7hadP5pXZfNWtZBDEKSizlODmFEEDtUYFDI2ypT9DoIRCfBQZepXT84=w240-h480-rw',
                ),
                'title' => 'BB - Influencer Marketing',
                'technology' => 'Flutter',
                'industry' => 'BB - Influencer Marketing',
                'type' => 'app',
            ],
           
            [
                'image' => url(
                    'https://play-lh.googleusercontent.com/pORULxwQsuyiQLnqe063_sbpqe3lg_WAJHWcN3EleMtP-zjMTQEr4jjkqdq-Oj8n7hj0=w240-h480-rw',
                ),
                'title' => 'UBN Community',
                'technology' => 'Flutter',
                'industry' => 'UBN Community',
                'type' => 'app',
            ],
        ];
    @endphp
    <div class="container-fluid">
        <div class="image-fluid header-career">
            <div class="headercontent">
                <h1 class="display-4 fw-light">Distinguished Clientele</h1>
                <p class="lead">We take pride in delivering a full spectrum of bespoke IT services...</p>
                <a href="#portfolio" class="btn btn-dark btn-lg">Portfolio</a>
            </div>
        </div>

        <div class="container-fluid pt-3 bg-light">
            <div class="container pt-3" id="clients">
                {{-- <div class="section-head col-sm-12" id="portfolio">
                    <h4><span>Portfolio</span></h4>
                </div> --}}
                <div class="row bg-light">
                    <div class="col-md-12 text-center">
                        <div>
                            <nav>
                                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                    <button class="nav-link active" style="color:  #FF6600 !important" id="nav-home-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true">All</button>
                                    <button class="nav-link" id="nav-profile-tab" style="color:  #FF6600 !important"
                                        data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Web App</button>
                                    <button class="nav-link" id="nav-contact-tab" style="color:  #FF6600 !important"
                                        data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">Mobile App</button>
                                </div>
                            </nav>
                            <div class="tab-content p-3  bg-light" id="nav-tabContent">
                                <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        @foreach ($jsonData as $item)
                                            <div class="col-md-4 mb-3 ">
                                                <div class="portfolio-item">
                                                    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}"
                                                        class="img-fluid">
                                                    <h5 class="pt-3">{{ $item['title'] }}</h5>
                                                    {{-- <p>{{ $item['technology'] }}</p>
                                                <p>{{ $item['industry'] }}</p> --}}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="row">
                                        @foreach ($jsonData as $item)
                                            @if (isset($item['type']) && $item['type'] === 'web')
                                                <div class="col-md-4 mb-3">
                                                    <div class="portfolio-item">
                                                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}"
                                                            class="img-fluid">
                                                        <h5 class="pt-3">{{ $item['title'] }}</h5>
                                                        {{-- <p>{{ $item['technology'] }}</p>
                                                    <p>{{ $item['industry'] }}</p> --}}
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <div class="row">
                                        @foreach ($jsonData as $item)
                                            @if (isset($item['type']) && $item['type'] === 'app')
                                                <div class="col-md-4 mb-3">
                                                    <div class="portfolio-item">
                                                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}"
                                                            class="img-fluid">
                                                        <h5 class="pt-3">{{ $item['title'] }}</h5>
                                                        {{-- <p>{{ $item['technology'] }}</p>
                                                    <p>{{ $item['industry'] }}</p> --}}
                                                    </div>
                                                </div>
                                            @endif
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
@endsection
