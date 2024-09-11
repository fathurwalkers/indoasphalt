<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>INDOASPHALT.com</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img') }}/logo.png" rel="icon">
    <link href="{{ asset('assets/img') }}/logo.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/logis') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/logis') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/logis') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets/logis') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/logis') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets/logis') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/logis') }}/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    @stack('css')
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                {{-- <img src="{{ asset('assets/img') }}/logo.png" alt=""> --}}
                <h1 class="sitename">INDOASPHALT</h1>
            </a>

            <x-home.navbar />
            <a class="btn-getstarted" href="get-a-quote.html">Find Us</a>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            @yield('top-section')
        </section>
        <!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">
            @yield('featured-services')
        </section><!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            @yield('about-section')
        </section><!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services section">
            @yield('services-section')
        </section><!-- /Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="{{ asset('assets/logis') }}/assets/img/cta-bg.jpg" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Call To Action</h3>
                            <p>
                                This section is under construction, please wait any further information.
                            </p>
                            <a class="cta-btn" href="#">Call To Action</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /Call To Action Section -->

        <!-- Features Section -->
        <section id="features" class="features section">
            @yield('features-section')
        </section>
        <!-- /Features Section -->

        <!-- Pricing Section -->
        {{-- <section id="pricing" class="pricing section">
            @yield('pricing-section')
        </section> --}}
        <!-- /Pricing Section -->

        <!-- Testimonials Section -->
        {{-- <section id="testimonials" class="testimonials section dark-background">
            @yield('testimonials-section')
        </section> --}}
        <!-- /Testimonials Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section">
            @yield('faqs')
        </section>
        <!-- /Faq Section -->

    </main>

    <footer id="footer" class="footer dark-background">
        <x-home.footer />
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/logis') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/logis') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('assets/logis') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets/logis') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('assets/logis') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets/logis') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/logis') }}/assets/js/main.js"></script>
    @stack('js')

</body>

</html>
