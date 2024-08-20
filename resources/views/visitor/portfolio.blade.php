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
            ],
            [
                'image' => asset('client-logo/brand-beans-logo.jpg'),
                'title' => 'Brand Beans',
            ],
            [
                'image' => asset('client-logo/cu-shah-logo.jpg'),
                'title' => 'C.U.SHAH Mahila College',
            ],
            [
                'image' => asset('client-logo/alkaviva-logo.jpg'),
                'title' => 'Alkaviva',
            ],
            [
                'image' => asset('client-logo/jd-infra-logo.jpg'),
                'title' => 'JD Infra',
            ],
            [
                'image' => asset('client-logo/smvs.jpg'),
                'title' => 'SMVS Swaminarayan Sanstha',
            ],
            [
                'image' => asset('client-logo/ConsultantLogo.jpg'),
                'title' => 'Consultant',
            ],

            [
                'image' => asset('client-logo/click-to-care.jpg'),
                'title' => 'Click To Care',
            ],
            [
                'image' => asset('client-logo/micro.png'),
                'title' => 'Micro Dimonds & CBN Wheels',
            ],
        ];
    @endphp
    <style>
        .container1 {
            position: relative;
            width: 90%;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
            padding-bottom: 50px
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            /* height: 100%; */
            height: auto;
            width: 100%;
            margin-bottom: 50px;
            opacity: 0;
            transition: .5s ease;
            background-color: #606060;
        }

        .container1:hover .overlay {
            opacity: 0.8;
        }

        .text {
            color: #ff6600;
            font-size: 20px;
            font-weight: 700;
            position: absolute;
            text-shadow: 2px 0 #fff, -2px 0 #fff, 0 2px #fff, 0 -2px #fff,
                1px 1px #fff, -1px -1px #fff, 1px -1px #fff, -1px 1px #fff;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
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

        <!-- breadcrumb end -->

        <!-- portfolio design  -->
        <div class="container-fluid py-3 bg-light">
            <div class="container py-3">
                <div class="row py-2 bg-light">
                    <div class="col-md-12">
                        <!-- Start portfolio Section  -->
                        <div class="mt-5">
                            <a class="anchor" id="portfolio-link"></a>
                            <div id="portfolio" class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        {{-- <div class="section-head col-sm-12 ">
                                        <h4><span>Our Clients</span></h4>
                                    </div> --}}
                                        <hr />
                                        <div class="container-fluid">
                                            <div class="row">

                                                @foreach ($jsonData as $data)
                                                    <div class="col-md-4">
                                                        <div class="container1">
                                                            <img src="{{ $data['image'] }}" alt="{{ $data['title'] }}"
                                                                class="image">
                                                            <div class="overlay">
                                                                <div class="text">{{ $data['title'] }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>


                                        {{-- start code --}}
                                        {{-- <div class="container-fluid">
                                        <div class="row">

                                            <div class="col-md-4  col-sm-12 mt-5">
                                                <div class="card p-3 h-100"
                                                    style="width: 18rem;box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                    <img src="{{ asset('client-logo/brand-beans-logo.png') }}"
                                                        class="img-fluid mt-5 pt-5"  alt="...">
                                                    <div class="card-body">
                                                        
                                                      </div>
                                                      <div class="card-footer bg-white">
                                                        <h5 class="card-text" style="color: #2c4964;">
                                                          Brand Beans</h5>
                                                      </div>
                                                       
                                                </div>

                                            </div>
                                            <div class="col-md-4  col-sm-12 mt-5">
                                              <div class="card p-3  h-100"
                                                    style="width: 18rem;box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                    <img src="{{ asset('client-logo/cu-shah-logo.jpg') }}"
                                                    class="img-fluid mt-5" style="height: 100px; width:100px; margin-left:70px;" alt="...">

                                                    <div class="card-body">
                                                     
                                                      </div>
                                                      <div class="card-footer bg-white">
                                                        <h5 class="card-text" style="color: #2c4964;">
                                                          C.U.SHAH Mahila College</h5>
                                                      </div>
                                                        

                                                </div>

                                            </div>
                                            <div class="col-md-4  col-sm-12 mt-5">
                                                <div class="card p-3  h-100"
                                                    style="width: 18rem;box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                    <img src="{{ asset('client-logo/alkaviva-logo.png') }}"
                                                    class="img-fluid"  style="margin-top: 90px;" alt="...">

                                                    <div class="card-body">
                                                        
                                                      </div>
                                                      <div class="card-footer bg-white">
                                                        <h5 class="card-text" style="color: #2c4964;">
                                                          Alka Viva</h5>
                                                      </div>

                                                       
                                                </div>

                                            </div>
                                           
                                          </div>
                                            <div class="row">
                                            <div class="col-md-4  col-sm-12 mt-5">
                                              <div class="card p-3 h-100"
                                                    style="width: 18rem;box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                    <img src="{{ asset('client-logo/jd-infra-logo.webp') }}"
                                                    class="img-fluid pt-5"  alt="...">

                                                    <div class="card-body">
                                                       
                                                          </div>
                                                            <div class="card-footer bg-white">
                                                              <h5 class="card-text" style="color: #2c4964;">
                                                                JD Infra Space</h5>
                                                            </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4  col-sm-12 mt-5">
                                              <div class="card p-3  h-100"
                                                  style="width: 18rem;box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                  <img src="{{ asset('client-logo/smvs.png') }}"
                                                  class="img-fluid  pt-5"  style="height: 200px; width:180px; margin-left:40px;" alt="...">
  
                                                  <div class="card-body">
                                                     
                                                    </div>
                                                    <div class="card-footer bg-white">
                                                      <h5 class="card-text" style="color: #2c4964;">
                                                        Swaminarayan Sanstha</h5>
                                                    </div>
  
                                                    
  
                                              </div>
                                          </div>
                                            <div class="col-md-4  col-sm-12 mt-5">
                                              <div class="card p-3  h-100"
                                                  style="width: 18rem;box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                  <img src="{{ asset('client-logo/ConsultantLogo.png') }}"
                                                  class="img-fluid pt-5 mt-5"  alt="...">

                                                  <div class="card-body">
                                                     

                                                    </div>
                                                    <div class="card-footer bg-white">
                                                      <h5 class="card-text" style="color: #2c4964;">
                                                        Consultant Cube</h5>
                                                    </div>
                                                     

                                              </div>

                                          </div>
              
                                        </div>

                                        <div class="row">
                                          <div class="col-md-4  col-sm-12 mt-5">
                                            <div class="card p-3  h-100"
                                                style="width: 18rem;box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                <img src="{{ asset('client-logo/Bitco_Finexpert.png') }}"
                                                class="img-fluid pt-5"  alt="...">

                                                <div class="card-body">
                                                   
                                                  </div>
                                                  <div class="card-footer bg-white">
                                                    <h5 class="card-text" style="color: #2c4964;">
                                                      Bitco Fine Expert   </h5>
                                                  </div>

                                                    
                                            </div>

                                        </div>
                                        <div class="col-md-4  col-sm-12 mt-5">
                                          <div class="card p-3 h-100 "
                                              style="width: 18rem;box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                              <img src="{{ asset('client-logo/argilgraygrp.png') }}"
                                              class="img-fluid pt-5 ps-5" style="height: 170px; width:200px;" alt="...">

                                              <div class="card-body">
                                                 
                                                </div>
                                                <div class="card-footer bg-white">
                                                  <h5 class="card-text" style="color: #2c4964;">
                                                   Argil Group </h5>
                                                </div>
                                                 
                                          </div>
                                      </div>
                                      <div class="col-md-4  col-sm-12 mt-5">
                                        <div class="card p-3  h-100"
                                            style="width: 18rem;box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                            <img src="{{ asset('client-logo/click-to-care.png') }}"
                                            class="img-fluid pt-3 mt-5 p" alt="...">

                                            <div class="card-body">
                                               
                                              </div>

                                              <div class="card-footer bg-white">
                                                <h5 class="card-text" style="color: #2c4964;">
                                                  Click To Care</h5>
                                              </div>
                                               

                                        </div>
                                    </div>

                                        </div>
                                    </div> --}}
                                        {{-- end old code --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
