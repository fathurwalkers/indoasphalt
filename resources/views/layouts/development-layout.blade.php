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
            background: url('assets/img/hero-1.jpg') no-repeat center center;
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
            .navbar-logo {
                max-height: 40px;
                /* Smaller logo on smaller screens */
            }
        }

        @media (max-width: 576px) {
            .navbar-logo {
                max-height: 30px;
                /* Even smaller logo on very small screens */
            }
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

        .navbar {
            background-color: #ffffff !important;
        }

        .section {
            padding: 40px;
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif !important;
            background-color: #4888c7;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 30px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light my-0 py-4">
        <div class="container">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <a class="navbar-brand" href="#">
                    <img class="navbar-logo" src="{{ asset('assets/img') }}/logo.png" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <ul class="navbar-nav d-flex justify-content-center">
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
                            <a class="dropdown-item py-3" href="#">PURE ASPHALT</a>
                            <a class="dropdown-item py-3" href="#">LIQUID ASPHALT</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SERVICES</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 d-flex justify-content-end">
                <form class="form-inline">
                    <button class="btn btn-info" type="submit"
                        style="background-color:rgb(24, 85, 155);font-weight:bold;">CONTACT</button>
                </form>
            </div>
        </div>
    </nav>
    <header id="header" class="hero">
        <div class="container">
            <h1 class="header">FULL-EXTRACTED ASPHALT BUTON</h1>
            <p class="header-text">
                Your excelent choice for Strong Resource
            </p>
        </div>
    </header>

    <main>
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
                        <img src="{{ asset('assets/img') }}/tentang1.jpg" alt="About Us" class="img-fluid"
                            width="450px">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
