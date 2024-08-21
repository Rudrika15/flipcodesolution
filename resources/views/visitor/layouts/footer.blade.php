<footer class=" bg-dark text-center text-white ">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-end mb-4 footer-social-link-icons ">
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/flipcodesolutions/"
                target="_blank" role="button">
                <i class="bi bi-instagram"></i>
            </a>

            <!-- Facebook -->

            <a class="btn btn-outline-light btn-floating m-1"
                href="https://www.facebook.com/profile.php?id=61553723550979" target="_blank" role="button">
                <i class="bi bi-facebook"></i>
            </a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1"
                href="https://www.linkedin.com/company/flipcode-solutions-private-limited/mycompany/" target="_blank"
                role="button">
                <i class="bi bi-linkedin"></i>
            </a>

        </section>
        <!-- Section: Social media -->


        <!-- Section: Links -->
        <section class="footer-links text-start">
            <!--Grid row-->
            <div class="row ">
                <!--Grid column-->
                {{-- <div class="col-lg-3 col-md-6 mb-4 mb-md-0  ">
                        <img src="img/fCodeFooter.png"  class="h-100 w-100" alt="logo ">
                    </div> --}}
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ps-5">
                    <h5 class="text-uppercase">Quick links</h5>

                    <ul class="list-unstyled mb-0 for-hover">
                        <li>
                            <a class="text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a class="text-white" href="{{ route('about') }}">About</a>
                        </li>
                        <li>
                            <a class="text-white" href="{{ route('service') }}">Services</a>
                        </li>
                        <li>
                            <a class="text-white" href="{{ route('contact') }}">Get in Touch</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Address</h5>
                    <p>
                        Flipcode Solution Private Limited <br>
                        Nr. Panama Sales, Dalmill road <br>
                        Surendranagar ,<br>
                        Gujarat 363001 India
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0 for-hover">
                    <h5 class="text-uppercase">Email</h5>
                    <a class="text-white" href="mailto:contact@flipcodesolutions.com">contact@flipcodesolutions.com</a>
                    <a class="text-white" href="mailto:career@flipcodesolutions.com">career@flipcodesolutions.com</a>
                    <h5 class="text-uppercase mt-4">Contact No</h5>
                    <a class="text-white" href="tel:9979404044">+91 997 940 4044</a>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>

    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">

        <span>&copy;</span><span id="demo"></span> <span>Copyright </span>
        <script>
            const d = new Date();
            let year = d.getFullYear();
            document.getElementById("demo").innerHTML = year;
        </script>
        <a class="text-white" href="#"> Flipcodesolution Private Limited</a>
    </div>
    <!-- Copyright -->
</footer>
