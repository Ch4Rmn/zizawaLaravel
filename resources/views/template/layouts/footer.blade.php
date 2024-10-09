{{-- <script src="{{ url('assets/front/js/bootstrap.bundle.min.js') }}"></script>
 --}}
{{-- <div class="container bg-danger">
    <h1>Meet Our Team</h1>
</div>
<div class="row-50"></div>
<div class="row text-center justify-content-center">
    <div class="col-sm-3 m-sm-auto">
        <img alt="image" class="img-fluid rounded-circle" src="{{ asset('assets/default_images/default_male.jpg') }}">
        <h2>Sara Doe</h2>
        <p>Founder</p>
    </div>
    <div class="col-sm-3 m-sm-auto">
        <img alt="image" class="img-fluid rounded-circle" src="{{ asset('assets/default_images/default_male.jpg') }}">
        <h2>Sara Doe</h2>
        <p>Founder</p>
    </div>
    <div class="col-sm-3 m-sm-auto">
        <img alt="image" class="img-fluid rounded-circle"
            src="{{ asset('assets/default_images/default_male.jpg') }}">
        <h2>Sara Doe</h2>
        <p>Founder</p>
    </div>
</div>
</div> --}}

<div class="container">
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>

            <!-- Left -->


            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fa fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fa fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fa fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fa fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fa fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fa fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fa fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fa fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">DpsMap</a>
        </div>
        <!-- Copyright -->
    </footer>
</div>
<!-- Footer -->

</section>
</div>
<script>
    $(document).ready(function() {
        $('.btn-hover-active').click(function() {
            $(this).toggleClass('active');
        });
    });
    //
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<!-- Sweet Alert -->
<script src="{{ url('assets/js/sweetalert/sweetalert.js') }}"></script>
<!-- PNotify -->
<script src="{{ url('assets/js/pnotify/pnotify.js') }}"></script>
</body>

</html>
