<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>INDOASPHALT.com</title>

    <style>
        html {
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
        }

        .nav-link,
        .navbar,
        .navbar-brand {
            font-family: 'Segoe UI', Tahoma, Verdana, sans-serif !important;
            antialiased -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
            subpixel-antialiased -webkit-font-smoothing: auto !important;
            -moz-osx-font-smoothing: auto !important;
        }

        .hero {
            position: relative;
            background: url('assets/img/hero-1.JPG') no-repeat center center;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 30% 70%;
            color: #fff;
            padding: 160px 0;
            text-align: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Black with 50% opacity */
            z-index: 1;
        }

        .hero .container {
            position: relative;
            z-index: 2;
            /* Ensure text is above the overlay */
        }

        .hero h1,
        .hero p {
            color: #fff;
            /* Ensure text color is white for visibility */
        }

        .navbar-logo {
            max-height: 50px;
            width: auto;
        }

        @media (max-width: 768px) {
            .navbar-brand {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
            }

            .navbar-toggler {
                z-index: 1;
                /* Supaya toggler tidak tertutup elemen lain */
            }

            .navbar-logo {
                width: 120px;
                /* Ukuran logo lebih kecil di mobile */
            }
        }

        /* Menghilangkan background penuh dari toggler */
        .navbar-toggler {
            border: none;
            /* Hilangkan border */
            padding: 0.25rem 0.5rem;
            /* Atur padding agar lebih rapih */
        }

        /* Custom untuk icon toggler menjadi hamburger style */
        .navbar-toggler .navbar-toggler-icon {
            display: inline-block;
            width: 24px;
            height: 2px;
            background-color: black;
            position: relative;
            transition: all 0.3s ease-in-out;
        }

        /* Membuat tiga garis untuk hamburger */
        .navbar-toggler .navbar-toggler-icon::before,
        .navbar-toggler .navbar-toggler-icon::after {
            content: '';
            width: 24px;
            height: 2px;
            background-color: black;
            position: absolute;
            left: 0;
            transition: all 0.3s ease-in-out;
        }

        .navbar-toggler .navbar-toggler-icon::before {
            top: -6px;
            /* Garis atas */
        }

        .navbar-toggler .navbar-toggler-icon::after {
            top: 6px;
            /* Garis bawah */
        }

        /* Toggler saat aktif */
        .navbar-toggler.collapsed .navbar-toggler-icon {
            background-color: transparent;
            /* Hilangkan garis tengah saat dibuka */
        }

        .navbar-toggler.collapsed .navbar-toggler-icon::before {
            top: 0;
            transform: rotate(45deg);
            /* Garis atas berubah menjadi diagonal */
        }

        .navbar-toggler.collapsed .navbar-toggler-icon::after {
            top: 0;
            transform: rotate(-45deg);
            /* Garis bawah berubah menjadi diagonal */
        }

        @media (max-width: 576px) {
            .navbar-logo {
                max-height: 30px;
                /* Even smaller logo on very small screens */
            }
        }

        .navbar {
            background-color: #ffffff !important;
        }

        .ml-auto .dropdown-menu {
            left: auto !important;
            right: 0px !important;
        }

        .navbar-brand,
        .nav-link,
        .dropdown-item {
            color: rgb(11, 12, 12) !important;
            font-weight: bold;
        }

        .navbar-brand:hover,
        .nav-link:hover,
        .dropdown-item:hover {
            color: rgb(131, 131, 131) !important;
            font-weight: bold;
        }

        .header-text {
            color: #ffffff !important;
            /* text-shadow: -1px -1px 1px white, 1px -1px 1px white, -1px 1px 1px white, 1px 1px 1px white !important; */
            font-weight: 500;
        }

        .header {
            color: #ffffff !important;
            text-shadow: -1px -1px 1px black, 1px -1px 1px black, -1px 1px 1px black, 1px 1px 1px black !important;
            font-weight: 700;
        }

        .section {
            padding: 40px;
            color: rgb(0, 0, 0);
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif !important;
            background-color: #ffffff;
        }

        #about {
            background-color: #6d94ff !important;
            color: #fff !important;
        }

        .about-image {
            /* -webkit-filter: drop-shadow(2px 2px 0 white) drop-shadow(-2px 2px 0 white) drop-shadow(2px -2px 0 white) drop-shadow(-2px -2px 0 rgb(65, 65, 65));

            filter:
                drop-shadow(20px 0px 0px white) drop-shadow(-20px 0px 0px white) drop-shadow(0px 20px 0px white) drop-shadow(0px -80px 0px white); */
        }

        .footer {
            background-color: #f8f9fa;
            padding: 30px 0;
            text-align: center;
        }

        /*--------------------------------------------------------------
        # Call to Action Section
        --------------------------------------------------------------*/
        .call-to-action {
            padding: 80px 0;
            position: relative;
            clip-path: inset(0);
        }

        .call-to-action img {
            position: fixed;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .call-to-action:before {
            content: "";
            background: color-mix(in srgb, var(--background-color), transparent 20%);
            position: absolute;
            inset: 0;
            z-index: 2;
        }

        .call-to-action .container {
            position: relative;
            z-index: 3;
        }

        .call-to-action h3 {
            font-size: 28px;
            font-weight: 700;
            color: #fff;
        }

        .call-to-action p {
            color: #fff;
        }

        .call-to-action .cta-btn {
            font-family: var(--heading-font);
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 12px 40px;
            border-radius: 5px;
            transition: 0.5s;
            margin: 10px;
            border: 2px solid var(--contrast-color);
            color: var(--contrast-color);
        }

        .call-to-action .cta-btn:hover {
            background: var(--accent-color);
            border: 2px solid var(--accent-color);
        }

        /*--------------------------------------------------------------
        # Features Section
        --------------------------------------------------------------*/
        .features .features-item {
            color: color-mix(in srgb, var(--default-color), transparent 20%);
        }

        .features .features-item+.features-item {
            margin-top: 50px;
        }

        @media (max-width: 640px) {
            .features .features-item+.features-item {
                margin-top: 50px;
            }
        }

        .features .features-item h3 {
            font-weight: 700;
            font-size: 26px;
        }

        .features .features-item ul {
            list-style: none;
            padding: 0;
        }

        .features .features-item ul li {
            padding-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .features .features-item ul li:last-child {
            padding-bottom: 0;
        }

        .features .features-item ul i {
            font-size: 20px;
            padding-right: 4px;
            color: var(--accent-color);
        }

        .features .features-item p:last-child {
            margin-bottom: 0;
        }

        /*--------------------------------------------------------------
        # Global Footer
        --------------------------------------------------------------*/
        .footer {
            color: #fff;
            background-color: #08203f;
            font-size: 14px;
            position: relative;
        }

        .footer .footer-top {
            padding-top: 50px;
            border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
        }

        .footer .footer-about .logo {
            line-height: 1;
            margin-bottom: 30px;
        }

        .footer .footer-about .logo img {
            max-height: 40px;
            margin-right: 6px;
            -webkit-filter: drop-shadow(2px 2px 0 white) drop-shadow(-2px 2px 0 white) drop-shadow(2px -2px 0 white) drop-shadow(-2px -2px 0 rgb(65, 65, 65));

            filter: drop-shadow(2px 2px 0 white) drop-shadow(-2px 2px 0 white) drop-shadow(2px -2px 0 white) drop-shadow(-2px -2px 0 rgb(82, 82, 82));
        }

        .footer .footer-about .logo span {
            color: var(--heading-color);
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 1px;
            font-family: var(--heading-font);
        }

        .footer .footer-about p {
            font-size: 14px;
            font-family: var(--heading-font);
        }

        .footer .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid color-mix(in srgb, var(--default-color), transparent 50%);
            font-size: 16px;
            color: color-mix(in srgb, var(--default-color), transparent 50%);
            margin-right: 10px;
            transition: 0.3s;
        }

        .footer .social-links a:hover {
            color: var(--default-color);
            border-color: var(--default-color);
        }

        .footer h4 {
            font-size: 16px;
            font-weight: bold;
            position: relative;
            padding-bottom: 12px;
        }

        .footer .footer-links {
            margin-bottom: 30px;
        }

        .footer .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer .footer-links ul i {
            padding-right: 2px;
            font-size: 12px;
            line-height: 0;
        }

        .footer .footer-links ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        .footer .footer-links ul li:first-child {
            padding-top: 0;
        }

        .footer .footer-links ul a {
            color: color-mix(in srgb, var(--default-color), transparent 40%);
            display: inline-block;
            line-height: 1;
        }

        .footer .footer-links ul a:hover {
            color: var(--default-color);
        }

        .footer .footer-contact p {
            margin-bottom: 5px;
        }

        .footer .copyright {
            padding-top: 30px;
            padding-bottom: 30px;
            border-top: 1px solid color-mix(in srgb, var(--heading-color), transparent 90%);
        }

        .footer .copyright p {
            margin-bottom: 0;
        }

        .footer .credits {
            margin-top: 4px;
            font-size: 13px;
        }

        .footer .credits a {
            color: var(--default-color);
        }
    </style>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-light my-0 py-4">
        <div class="container">
            <!-- Navbar Toggler (warna hitam) -->
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse"
                data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Logo Navbar (posisi di tengah pada mobile) -->
            <a class="navbar-brand mx-auto" href="#">
                <img class="navbar-logo" src="{{ asset('assets/img') }}/logo.png" alt="Logo" style="width: 165px;">
            </a>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="#">FEATURES</a>
                    </li>
                    <li class="nav-item pr-3 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            PRODUCTS
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item py-3" href="#">Fully Extracted PG-70</a>
                            <a class="dropdown-item py-3" href="#">Fully Extracted PG-76</a>
                            <a class="dropdown-item py-3" href="#">Fully Extracted PG-82</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PROJECTS</a>
                    </li>
                </ul>

                <!-- Contact Button -->
                <form class="form-inline">
                    <button class="btn btn-info" type="submit"
                        style="background-color:rgb(24, 85, 155); font-weight:bold;">
                        CONTACT
                    </button>
                </form>
            </div>
        </div>
    </nav>


    <header id="header" class="hero">
        <div class="container">
            <h1 class="header">FULLY-EXTRACTED ASPHALT BUTON</h1>
            <p class="header-text">
                Your excelent choice for Strong Resource
            </p>
        </div>
    </header>

    <main>

        <!-- About Section -->
        <section id="about" class="section">
            <div class="container">
                <div class="row d-flex justify-content-center bgsection">
                    <div class="col-lg-6 my-auto">
                        <h2>INDOASPHALT</h2>
                        <p class="text-justify">
                            Founded by 2015, Indoasphalt is a Company that is the First and Only Company in the
                            world
                            that produces Pure Buton Asphalt (Fully-Extracted) and is a leading company engaged
                            in
                            the
                            asphalt industry located in Lawele, Buton Regency, Southeast Sulawesi, Indonesia.
                        </p>
                        <p class="text-justify">
                            We are dedicated to providing superior asphalt products and services. With a proven
                            track
                            record and forward-thinking approach while we ready to continue to grow then might
                            be
                            hope
                            to succeed in the asphalt industry.
                        </p>
                        <p class="text-justify">
                            With a strong determination to drive Indonesia forward, Indoasphalt is ready to
                            contribute
                            to building a better future through strong and sustainable infrastructure.
                        </p>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <img src="{{ asset('assets/img') }}/tentang1.jpg" alt="About Us" id="about-image"
                            class="img-fluid about-image" width="450px">
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Services Section -->
        <section id="services" class="section">
            <div class="container">
                <h2 class="text-center">Products</h2>
                {{-- <p class="text-center">
                    We do Partnership with others company, doing projects together.
                </p> --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Service 1">
                            <div class="card-body">
                                <h5 class="card-title">Fully-Extracted PG-70</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Service 2">
                            <div class="card-body">
                                <h5 class="card-title">Fully-Extracted PG-76</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Service 3">
                            <div class="card-body">
                                <h5 class="card-title">Fully-Extracted PG-82</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- Call to Action Section -->
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
        <!-- End Call to Action Section -->

        <section id="features" class="features section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto d-flex justify-content-center">
                        <h2>Features</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto d-flex justify-content-center">
                        <p style="font-weight: 500">
                            Our products is designed to support the development of solid and sustainable infrastructure,
                            with
                            features that
                            ensure maximum fatigue.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Section Title -->

            <div class="container">

                <div class="row gy-3 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('assets/img') }}/features-1.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                        <h3>Durable and Environmentally Friendly Asphalt</h3>
                        <p class="fst-italic">
                            With proven quality, our products offer optimal durability for your infrastructure.
                        </p>
                        <ul>
                            <li>
                                <span>
                                    &#8594; Durable: Our products is strong and durable, facing heavy loads and bad
                                    weather
                                    without
                                    being easily damaged.
                                </span>
                            </li>
                            <li>
                                <span>
                                    &#8594; Eco-Friendly: Our asphalt is environmentally friendly, with a production
                                    process
                                    that reduces
                                    pollution and impact on the environment.
                                </span>
                            </li>
                            <li>
                                <span>
                                    &#8594; Long-Lasting: With high durability, our asphalt lasts longer, reducing the
                                    need for
                                    repairs and
                                    replacements.
                                </span>
                            </li>
                            <li>
                                <span>
                                    &#8594; Easy Mixing: Our asphalt pureness is easy to mix and apply, making the work
                                    process
                                    faster and
                                    more efficient.
                                </span>
                            </li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-3 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="200">
                        <img src="{{ asset('assets/img') }}/features-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>Technology & Innovation</h3>
                        <p class="fst-italic">
                            We also uses environmentally friendly technology to minimize carbon emissions.
                        </p>
                        <p>
                            In the asphalt processing process, ensuring that each product meets the highest standards.
                            With the
                            latest environmentally friendly innovations, we present high-quality asphalt that is more
                            durable,
                            efficient and supports sustainable development. With us, you get a modern and reliable
                            asphalt solution.
                        </p>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-3 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                        <img src="{{ asset('assets/img') }}/features-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7" data-aos="fade-up">
                        <h3>Easy Ordering Process</h3>
                        <p>
                            Our ordering process is like a toll road: Fast, Easy and Hassle-free. From consultation to
                            delivery, we
                            ensure your journey to quality asphalt is hassle-free.
                        </p>
                        <ul>
                            <li>
                                <span>
                                    &#8594; Contact us for consultation and price quote.
                                </span>
                            </li>
                            <li>
                                <span>
                                    &#8594; Make an order contract agreement.
                                </span>
                            </li>
                            <li>
                                <span>
                                    &#8594; Processing and packing process according to your project needs.
                                </span>
                            </li>
                            <li>
                                <span>
                                    &#8594; On-time asphalt delivery to your project location.
                                </span>
                            </li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-3 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                        <img src="{{ asset('assets/logis') }}/assets/img/features-4.jpg" class="img-fluid"
                            alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                        <h3>Our Fully-Extracted asphalt products is always in Present Wherever You Need It.</h3>
                        <p>
                            We are ready to reach various regions, from city corners to other countries. With strong
                            land and sea
                            logistics support, we ensures of our quality asphalt reaches your project location, anytime
                            and
                            anywhere, quickly and safely. Trust your shipping needs to us, for optimal infrastructure
                            results in
                            every field.
                        </p>
                    </div>
                </div>
                <!-- Features Item -->

            </div>
        </section>

    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        {{-- <span class="sitename">INDOASPHALT</span> --}}
                        <img src="{{ asset('assets/img') }}/logo.png" alt="" class="sitename">
                    </a>
                    <p>
                        Indoasphalt is a trusted company engaged in the processing of raw natural asphalt into
                        high-quality
                        liquid asphalt. With modern packaging technology, efficient logistics services and a commitment
                        to
                        quality. We are determined to become a strategic partner in advancing Indonesia in the
                        international arena.
                    </p>
                    {{-- <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4 class="text-left">Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#features">Featured</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#footer">Contacs</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4 class="text-left">Products</h4>
                    <ul>
                        <li><a href="#">Fully-Extracted PG-70</a></li>
                        <li><a href="#">Fully-Extracted PG-76</a></li>
                        <li><a href="#">Fully-Extracted PG-82</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4 class="text-left">Contact Us</h4>
                    <p class="text-left">
                        <b>Head Office :</b>
                    </p>
                    <p class="text-left">Soho Capital Lt.39 Unit 06, Jl.Let.Jend S.Parman KV 28</p>
                    <p class="text-left">Grogol Petamburan, Jakarta Barat</p>
                    <p class="text-left" class="mt-2"><strong>Phone:</strong> <span>021-30003615</span></p>
                    <p class="text-left"><strong>Email:</strong> <span>kpa@indoasphalt.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-2">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">INDOASPHALT</strong> <span>All Rights
                    Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://github.com/fathurwalkers">FathurWalkers / IT Indoasphalt</a>
                <br />
                Credits To : <a href="">INDOASPHALT</a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
