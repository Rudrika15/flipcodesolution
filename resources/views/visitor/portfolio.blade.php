@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Portfolio</title>
   
@endsection
@section('content')
    <div class="bg-image parallax">
        <div class="container">
            <div style="display: flex;justify-content: center; font-size:larger;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="color: #606060;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Clients</li>
                    </ol>
                </nav>

            </div>
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
                                    <div class="section-head col-sm-12 ">
                                        <h4><span>Our Clients</span></h4>
                                    </div>
                                    <hr />
                                    <div class="container-fluid">
                                        <div class="row">

                                            <div class="col-md-4  col-sm-12 mt-5">
                                                <div class="card p-3 h-100"
                                                    style="width: 18rem;box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                    <img src="{{ asset('client-logo/brand-beans-logo.png') }}"
                                                        class="img-fluid mt-5 pt-5"  alt="...">
                                                    <div class="card-body">
                                                        {{-- <h5 class="card-title text-center d-none">Name</h5>
                                                        <hr class="w-100"> --}}
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
                                                        {{-- <h5 class="card-title text-center d-none">Name</h5>
                                                        <hr class="w-100"> --}}
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
                                                        {{-- <h5 class="card-title text-center d-none">Name</h5>
                                                        <hr class="w-100"> --}}
                                                      </div>
                                                      <div class="card-footer bg-white">
                                                        <h5 class="card-text" style="color: #2c4964;">
                                                          Alka Viva</h5>
                                                      </div>

                                                        {{-- <h4 class="card-text text-center" style="color: #2c4964;">
                                                         Alka Viva </h4> --}}
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
                                                        {{-- <h4 class="card-text text-center" style="color: #2c4964;">
                                                            JD Infra Space</h4> --}}
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
                                                      {{-- <h5 class="card-title text-center d-none">Name</h5>
                                                      <hr class="w-100"> --}}
                                                    </div>
                                                    <div class="card-footer bg-white">
                                                      <h5 class="card-text" style="color: #2c4964;">
                                                        Swaminarayan Sanstha</h5>
                                                    </div>
  
                                                      {{-- <h4 class="card-text text-center" style="color: #2c4964;">
                                                     Swaminarayan Sanstha</h4> --}}
  
                                              </div>
                                          </div>
                                            <div class="col-md-4  col-sm-12 mt-5">
                                              <div class="card p-3  h-100"
                                                  style="width: 18rem;box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                  <img src="{{ asset('client-logo/ConsultantLogo.png') }}"
                                                  class="img-fluid pt-5 mt-5"  alt="...">

                                                  <div class="card-body">
                                                      {{-- <h5 class="card-title text-center d-none">Name</h5>
                                                      <hr class="w-100"> --}}

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
                                                    {{-- <h5 class="card-title text-center d-none">Name</h5>
                                                    <hr class="w-100"> --}}
                                                  </div>
                                                  <div class="card-footer bg-white">
                                                    <h5 class="card-text" style="color: #2c4964;">
                                                      Bitco Fine Expert   </h5>
                                                  </div>

                                                    {{-- <h4 class="card-text text-center" style="color: #2c4964;">
                                                   Bitco Fine Expert </h4> --}}
                                            </div>

                                        </div>
                                        <div class="col-md-4  col-sm-12 mt-5">
                                          <div class="card p-3 h-100 "
                                              style="width: 18rem;box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                              <img src="{{ asset('client-logo/Caves-county-logo.png') }}"
                                              class="img-fluid pt-5" style="height: 170px; width:250px;" alt="...">

                                              <div class="card-body">
                                                  {{-- <h5 class="card-title text-center d-none">Name</h5>
                                                  <hr class="w-100"> --}}
                                                </div>
                                                <div class="card-footer bg-white">
                                                  <h5 class="card-text" style="color: #2c4964;">
                                                    Caves County Resort </h5>
                                                </div>
                                                  {{-- <h4 class="card-text text-center" style="color: #2c4964;">
                                                 </h4> --}}
                                          </div>
                                      </div>
                                      <div class="col-md-4  col-sm-12 mt-5">
                                        <div class="card p-3  h-100"
                                            style="width: 18rem;box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                            <img src="{{ asset('client-logo/click-to-care.png') }}"
                                            class="img-fluid pt-3 mt-5 p" alt="...">

                                            <div class="card-body">
                                                {{-- <h5 class="card-title text-center d-none">Name</h5>
                                                <hr class="w-100"> --}}
                                              </div>

                                              <div class="card-footer bg-white">
                                                <h5 class="card-text" style="color: #2c4964;">
                                                  Click To Care</h5>
                                              </div>
                                                {{-- <h4 class="card-text text-center" style="color: #2c4964;">
                                               </h4> --}}

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
        </div>
    </div>
    @endsection
