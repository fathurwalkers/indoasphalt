@extends('layouts.development-layout')


@push('css')
    <style>
        .hero {
            position: relative;
            background: url('https://indoasphalt.com/public/assets/img/hero-1.jpg') no-repeat center center;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 30% 70%;
            color: #fff;
            padding: 160px 0;
            text-align: center;
        }

        /* Gambar akan mengisi kolom sepenuhnya */
        .gallery-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
            /* Gambar mengisi kolom tanpa distorsi */
            cursor: pointer;
            /* Cursor jadi pointer untuk menunjukkan gambar bisa di klik */
        }

        /* Jarak antar gambar */
        .gallery-item {
            margin-bottom: 10px;
        }

        .container {
            margin-top: 10px;
        }
    </style>
@endpush

@section('header-content')
    <h1 class="header">FULLY-EXTRACTED ASPHALT BUTON</h1>
    {{-- <p class="header-text">
        Your excelent choice for Strong Resource
    </p> --}}
@endsection

@section('main-content')
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
            <h2 class="text-center">Insight</h2>
            <p class="text-center">
                We are manages products made from authentic Buton Asphalt, renowned for its high level of extraction purity.
            </p>

            <div class="row">

                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border shadow">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <div class="card-bg"
                                    style="background-image: url('{{ asset('assets/img') }}/image.png'); height: 200px; background-size: cover; background-position: center;">
                                </div>
                            </div>
                            <div class="col-md-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Pure Buton Asphalt</h4>
                                    <p class="card-text">
                                        Fully-Extracted Natural Asphalt with a Purity Level at 99.99%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border shadow">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <div class="card-bg"
                                    style="background-image: url('https://www.ecoasphalt.id/assets/bahan/PT.%20Kartika%20Prima%20Abadi/spek2.jpg'); height: 200px; background-size: cover; background-position: center;">
                                </div>
                            </div>
                            <div class="col-md-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Processing</h4>
                                    <p class="card-text">
                                        Indoasphalt processes Buton asphalt raw materials through several extraction steps
                                        to ensure the resulting asphalt is of high quality.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border shadow">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <div class="card-bg"
                                    style="background-image: url('{{ asset('assets/img') }}/hikma.jpg'); height: 200px; background-size: cover; background-position: center;">
                                </div>
                            </div>
                            <div class="col-md-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Laboratory Testing</h4>
                                    <p class="card-text">
                                        Before distribution, the asphalt is tested in each Certified Labolatory Equipment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border shadow">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <div class="card-bg"
                                    style="background-image: url('https://www.ecoasphalt.id/assets/bahan/PT.%20Kartika%20Prima%20Abadi/spek4.jpg'); height: 200px; background-size: cover; background-position: center;">
                                </div>
                            </div>
                            <div class="col-md-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Environmentally Friendly</h4>
                                    <p class="card-text">
                                        The processing is clean; all filtration outputs are treated and disposed of in a
                                        clean state, without polluting the environment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <hr class="mt-4 my-2" />

    <!-- Gallery Section -->
    <section id="gallery-projects" class="section">
        <div class="container">
            <h2 class="d-flex justify-content-center">Projects</h2>
            <div class="row d-flex justify-content-center mx-auto mb-2">
                <!-- 5 Gambar dalam 1 Baris -->
                @for ($i = 1; $i <= 5; $i++)
                    <div class="col-sm-2 col-md-2 col-lg-2 gallery-item">
                        <img src="{{ asset('assets/slider') }}/foto{{ $i }}.jpeg"
                            alt="Image {{ $i }}">
                    </div>
                @endfor
            </div>

            <div class="row d-flex justify-content-center mx-auto">
                @for ($i = 6; $i <= 10; $i++)
                    <div class="col-sm-2 col-md-2 col-lg-2 gallery-item">
                        <img src="{{ asset('assets/slider') }}/foto{{ $i }}.jpeg"
                            alt="Image {{ $i }}">
                    </div>
                @endfor
            </div>

            <!-- Modal untuk gambar besar -->
            <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="imageModalLabel">Preview Gambar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img id="modalImage" src="" class="img-fluid" alt="Preview Gambar">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Gallery Section -->

    <!-- Call to Action Section -->
    {{-- <section id="call-to-action" class="call-to-action section dark-background">

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

    </section> --}}
    <!-- End Call to Action Section -->

    {{-- <section id="features" class="features section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mx-auto d-flex justify-content-center">
                    <h2>Products Specification</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mx-auto d-flex justify-content-center">
                    <p style="font-weight: 500">
                        (LP - 1409 - IDN)
                    </p>
                </div>
            </div>
        </div>
        <!-- End Section Title -->

        <div class="row d-flex justify-content-center mt-0 pt-0">
            <div class="col-sm-6 col-md-6 col-lg-6 mx-auto d-flex justify-content-center">
                <div class="row d-flex justify-content-center mt-0 pt-0">
                    <h5 class="text-center">
                        PG-70
                    </h5>
                    <br>
                    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto d-flex justify-content-center">
                        <img class="img pickimg img-fluid mx-auto d-flex justify-content-center"
                            src="{{ asset('assets/img') }}/PG-70-Specifications.PNG" alt="" width="750px">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 mx-auto d-flex justify-content-center">
                <div class="row d-flex justify-content-center mt-0 pt-0">
                    <h5 class="text-center">
                        PG-76
                    </h5>
                    <br>
                    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto d-flex justify-content-center">
                        <img class="img pickimg img-fluid mx-auto d-flex justify-content-center"
                            src="{{ asset('assets/img') }}/PG-76-Specifications.PNG" alt="" width="750px">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <hr class="mt-4 my-2" />

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
                            <div class="row">
                                <div class="col-sm-1 col-md-1 col-lg-1">
                                    &nbsp; &#8594;
                                </div>
                                <div class="col-sm-11 col-md-11 col-lg-11">
                                    <span>
                                        Durable: Our products is strong and durable, facing heavy loads and bad weather
                                        without being easily damaged.
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-sm-1 col-md-1 col-lg-1">
                                    &nbsp; &#8594;
                                </div>
                                <div class="col-sm-11 col-md-11 col-lg-11">
                                    <span>
                                        Eco-Friendly: Our asphalt is environmentally friendly, with a production process
                                        that reduces pollution and impact on the environment.
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-sm-1 col-md-1 col-lg-1">
                                    &nbsp; &#8594;
                                </div>
                                <div class="col-sm-11 col-md-11 col-lg-11">
                                    <span>
                                        Long-Lasting: With high durability, our asphalt lasts longer, reducing the need for
                                        repairs and replacements.
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-sm-1 col-md-1 col-lg-1">
                                    &nbsp; &#8594;
                                </div>
                                <div class="col-sm-11 col-md-11 col-lg-11">
                                    <span>
                                        Easy Mixing: Our asphalt pureness is easy to mix and apply, making the work process
                                        faster and more efficient.
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-3 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                    data-aos-delay="200">
                    <img src="{{ asset('assets/img') }}/features-2.JPG" class="img-fluid" alt="">
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
                    <img src="{{ asset('assets/img') }}/features-3.JPG" class="img-fluid" alt="">
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
                                &#8594; &nbsp; Contact us for consultation and price quote.
                            </span>
                        </li>
                        <li>
                            <span>
                                &#8594; &nbsp; Make an order contract agreement.
                            </span>
                        </li>
                        <li>
                            <span>
                                &#8594; &nbsp; Processing and packing process according to your project needs.
                            </span>
                        </li>
                        <li>
                            <span>
                                &#8594; &nbsp; On-time asphalt delivery to your project location.
                            </span>
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-3 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="{{ asset('assets/logis') }}/assets/img/features-4.jpg" class="img-fluid" alt="">
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
@endsection

@push('js')
    <script>
        // Ketika gambar di klik, tampilkan gambar besar di modal
        $('#imageModal').on('show.bs.modal', function(event) {
            var imgSrc = $(event.relatedTarget).data('img'); // Ambil src gambar besar dari data-img
            var modalImage = $(this).find('#modalImage'); // Temukan elemen gambar dalam modal
            modalImage.attr('src', imgSrc); // Ganti src gambar modal
        });
    </script>
@endpush
