<!doctype html>
<html lang="zxx">

    <x-head/>

    <body>

        <!-- PreLoader Start -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="sk-cube-area">
                        <div class="sk-cube1 sk-cube"></div>
                        <div class="sk-cube2 sk-cube"></div>
                        <div class="sk-cube4 sk-cube"></div>
                        <div class="sk-cube3 sk-cube"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PreLoader End -->

        <!-- Start Navbar Area -->
        <x-header/>
        <!-- End Navbar Area -->

        {{ $slot }}

        <!-- Footer Area -->
        <x-footer/>
        <!-- Footer Area End -->


        <!-- Jquery Min JS -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Magnific Popup Min JS -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- Nice Select Min JS -->
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <!-- Wow Min JS -->
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <!-- Jquery Ui JS -->
        <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
        <!-- Meanmenu JS -->
        <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <!-- Form Validator Min JS -->
        <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
        <!-- Contact Form JS -->
        <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
        <!-- Custom JS -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>

    </body>
</html>
