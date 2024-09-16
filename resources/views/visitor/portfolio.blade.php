@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode Solutions | Portfolio</title>
@endsection

@section('content')
    @php
        $jsonData = [
            [
                'image' => asset('client-logo/smvs.jpg'),
                'title' => 'SMVS Swaminarayan Sanstha',
                'technology' => 'Laravel',
                'industry' => 'Religious and Spiritual Industry',
            ],
            [
                'image' => asset('client-logo/argilgraygrp.jpg'),
                'title' => 'Argil Gray Group',
                'technology' => 'React js',
                'industry' => 'Manufacturing Industry',
            ],
            [
                'image' => asset('client-logo/smvs.jpg'),
                'title' => 'SMVS Swaminarayan Sanstha mobile app',
                'technology' => 'Native',
                'industry' => 'Religious and Spiritual Industry',
            ],
            [
                'image' => asset('client-logo/brand-beans-logo.jpg'),
                'title' => 'Brand Beans',
                'technology' => 'Laravel',
                'industry' => 'Marketing & Advertising Industry',
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
            ],
            [
                'image' => asset('client-logo/jd-infra-logo.jpg'),
                'title' => 'JD Infra',
                'technology' => 'Laravel',
                'industry' => 'Construction',
            ],
           
            [
                'image' => asset('client-logo/ConsultantLogo.jpg'),
                'title' => 'Consultant',
                'technology' => 'Laravel',
                'industry' => 'Consultancy',
            ],
            [
                'image' => asset('client-logo/click-to-care.jpg'),
                'title' => 'Click To Care',
                'technology' => 'Laravel',
                'industry' => 'Healthcare Industry',
            ],
            [
                'image' => asset('client-logo/micro.png'),
                'title' => 'Micro Dimonds & CBN Wheels',
                'technology' => 'Laravel',
                'industry' => 'Abrasives Industry',
            ],
        ];
        $technologies = array_unique(array_column($jsonData, 'technology'));
    @endphp

    <div class="container-fluid">
        <div class="image-fluid header-career">
            <div class="headercontent">
                <h1 class="display-4 fw-light">Distinguished Clientele</h1>
                <p class="lead">We take pride in delivering a full spectrum of bespoke IT services, enhancing efficiency,
                    security, and expertise for our diverse clientele. Our commitment to excellence drives business success
                    and client satisfaction.
                    Discover how we can support your business success—reach out to us at
                    <span>contact@flipcodesolutions.com</span>
                </p>
                <a href="#portfolio" class="btn btn-dark btn-lg">Portfolio</a>
            </div>
        </div>

        <!-- breadcrumb end -->

        <!-- portfolio design -->
        <div class="container-fluid py-3 bg-light">
            <div class="container py-3" id="clients">
                <div class="section-head col-sm-12" id="portfolio">
                    <h4><span>Portfolio</span></h4>
                </div>

                <!-- Tab navigation -->
                <ul class="nav nav-tabs" id="portfolioTabs" role="tablist">
                    @foreach ($technologies as $technology)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link @if($loop->first) active @endif" id="{{ Str::slug($technology) }}-tab" data-bs-toggle="tab" href="#{{ Str::slug($technology) }}" role="tab">{{ $technology }}</a>
                        </li>
                    @endforeach
                </ul>

                <!-- Tab content -->
                <div class="tab-content" id="portfolioTabContent">
                    @foreach ($technologies as $technology)
                        <div class="tab-pane fade @if($loop->first) show active @endif" id="{{ Str::slug($technology) }}" role="tabpanel" aria-labelledby="{{ Str::slug($technology) }}-tab">
                            <div class="row py-2 bg-light">
                                <div class="col-md-12">
                                    <div class="mt-5">
                                        <div id="portfolio" class="container-fluid">
                                            <div class="row" id="portfolioItems">
                                                @foreach ($jsonData as $data)
                                                    @if ($data['technology'] == $technology)
                                                        <div class="col-md-4 py-4" data-aos="zoom-in" data-aos-duration="1000">
                                                            <div class="card">
                                                                <img src="{{ $data['image'] }}" alt="{{ $data['title'] }}" class="card-img-top" />
                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-6 fw-bold">{{ $data['title'] }}</h5>
                                                                    <div class="container mt-3">
                                                                        <div class="d-flex justify-content-between mb-3">
                                                                            <div class="pe-1 fs-6">{{ $data['technology'] }}</div>
                                                                            <div class="fs-6">{{ $data['industry'] }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <!-- Include Bootstrap JavaScript if not already included -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @endpush
@endsection
