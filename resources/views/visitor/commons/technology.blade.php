
<style>
    .tech .carousel-control-prev-icon,
    .tech .carousel-control-next-icon {
        background-color: gray;
        color: black !important;
      
    }
    @media (max-width: 768px) {
     .tech .carousel-control-prev-icon,
    .tech .carousel-control-next-icon {
       display: none;
    }

}
   

</style>
<!-- Carousel -->
<div class="container-fluid">
    <div class="section-head col-sm-12 mb-5 mt-5">
        <h4><span>Our Technology</span></h4>
    </div>

    <div id="demoForCarosel" class="carousel slide mb-5 mt-5" data-bs-ride="carousel">

        <!-- Indicators/dots -->

        <!-- The slideshow/carousel -->
        <div class="carousel-inner ps-lg-5 pe-lg-5 tech">

            <div class="carousel-item active">
                <div class="row">
                    <div class="col ms-lg-5">
                        <div class="item-for-technology d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/react.png') }}" alt="react-img" class="d-block">
                        </div>
                    </div>
                    <div class="col">
                        <div class="item-for-technology d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/android.png') }}" alt="android-img" class="d-block">
                        </div>
                    </div>
                    <div class="col">
                        <div class="item-for-technology d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/cake.png') }}" alt="cake-img" class="d-block">
                        </div>
                    </div>
                    <div class="col">
                        <div class="item-for-technology d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/iosapp.png') }}" alt="ios-img" class="d-block">
                        </div>
                    </div>
                    <div class="col">
                        <div class="item-for-technology d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/java-logo.png') }}" alt="java-logo" class="d-block ">
                        </div>
                    </div>
                    <div class="col me-lg-5">
                        <div class="item-for-technology d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/magento.png') }}" alt="magento-img" class="d-block">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col ms-lg-5">
                        <div class="item-for-technology d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/net.png') }}" alt="net-img" class="d-block ">
                        </div>
                    </div>
                    <div class="col">
                        <div class="item-for-technology d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/php.png') }}" alt="php-img" class="d-block ">
                        </div>
                    </div>
                   
                    <div class="col">
                        <div class="item-for-technology d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/react.png') }}" alt="react-img" class="d-block">
                        </div>
                    </div>

                    <div class="col">
                        <div class="item-for-technology d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/android.png') }}" alt="android-img" class="d-block">
                        </div>
                    </div>
                    <div class="col">
                        <div class="item-for-technology d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/cake.png') }}" alt="cake-img" class="d-block">
                        </div>
                    </div>
                    <div class="col me-lg-5">
                        <div class="item-for-technology d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/iosapp.png') }}" alt="ios-img" class="d-block">
                        </div>
                    </div>
                </div>
            </div>
                {{-- <button class="carousel-control-prev to-change-icon-clr" type="button" data-bs-target="#demoForCarosel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden ">Previous</span>
                </button>
                <button class="carousel-control-next to-change-icon-clr" type="button" data-bs-target="#demoForCarosel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> --}}

            
        </div>

        <!-- Left and right controls/icons -->

    </div>
    
    

</div>
