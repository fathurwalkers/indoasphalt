@extends('layouts.test-layout')

@push('css')
    <style>
        .hero-bg {
            filter: brightness(25%) !important;
        }
    </style>
@endpush

@section('top-section')
    <img src="{{ asset('assets/img') }}/kpa2.jpg" alt="" class="hero-bg" data-aos="fade-in">

    <div class="container">
        <div class="row gy-2 d-flex justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up">
                    Processed Buton Asphalt with its Extraction which is known to be the Purest
                </h2>
                <p data-aos="fade-up" data-aos-delay="100">
                    Asphalt Buton is a natural asphalt that has been found on the island of Buton, Southeast Sulawesi since
                    1924. Asphalt Buton has been used in Indonesia with various technologies, with varying degrees of
                    success. Asphalt Buton, or commonly called Asbuton, is different from the oil asphalt that has been
                    known.
                </p>

                {{-- <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                    data-aos-delay="200">
                    <input type="text" class="form-control"
                        placeholder="Send us mail to get connect with us..">
                    <button type="submit" class="btn btn-primary">Send</button>
                </form> --}}

                <div class="row gy-2" data-aos="fade-up" data-aos-delay="300">

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0"
                                class="purecounter">232</span>
                            <p>Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="0"
                                class="purecounter">521</span>
                            <p>Products</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="0"
                                class="purecounter">1453</span>
                            <p>Sales Success</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="0"
                                class="purecounter">32</span>
                            <p>Company</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                <img src="{{ asset('assets/logis') }}/assets/img/banner-test2.png" class="img-fluid mb-3 mb-lg-0"
                    alt="">
                {{-- <img src="{{ asset('assets/logis') }}/assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0"
            alt=""> --}}
            </div>

        </div>
    </div>
@endsection

@section('featured-services')
    <div class="container">

        <div class="row gy-2">

            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                <div>
                    <h4 class="title">Guaranteed Quality</h4>
                    <p class="description">We ensure that every liquid asphalt product produced meets international
                        standards and provides maximum quality performance for long-lasting road asphalt use.
                    </p>
                    <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                <div>
                    <h4 class="title">Experience and Expertise</h4>
                    <p class="description">Processing raw natural asphalt from the original Buton Region is our expertise.
                        With a professional team and already having good experience standards, we are ready to support your
                        project, both Locally and Abroad
                    </p>
                    <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                <div>
                    <h4 class="title">Building Advanced Indonesia</h4>
                    <p class="description">Together with us, We are moving towards Better Infrastructure
                        Development, bringing Indonesia to the International Stage
                    </p>
                    <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

        </div>

    </div>
@endsection

@section('about-section')
    <div class="container">

        <div class="row gy-2">

            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                data-aos-delay="200">
                <img src="{{ asset('assets/img') }}/tentang1.jpg" class="img-fluid" alt="">
                {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> --}}
            </div>

            <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                <h3>About Us</h3>
                {{-- <p>
                    Located in the heart of Indonesia's natural asphalt resources, we operates in Suandala Village,
                    Lasalimu, Buton Regency, Southeast Sulawesi. We are proud to be part of this resource-rich region,
                    processing the best raw asphalt from nature into high-quality liquid asphalt ready for use in various
                    infrastructure projects.
                </p>
                <p>
                    The strategic location in Buton, the center of natural asphalt production in Indonesia, allows
                    us to provide a stable and quality supply. We are dedicated to supporting the construction of
                    highways and other infrastructure projects, both at the local and national levels, while maintaining our
                    commitment to international standards.
                </p>
                <p>
                    With a strong determination to drive Indonesia forward, Indoasphalt is ready to contribute to building a
                    better future through strong and sustainable infrastructure.
                </p> --}}
                <p>
                    INDOASPHALT is a Company that is the First and Only Company in the world that produces Pure Buton
                    Asphalt (Fully-Extracted) and is a leading company engaged in the asphalt industry located in Lawele,
                    Buton Regency, Southeast Sulawesi, Indonesia.
                </p>
                <p>
                    We are dedicated to providing superior asphalt products and services. With a proven track record and
                    forward-thinking approach while we ready to continue to grow then might be hope to succeed in the
                    asphalt industry.
                </p>
                <p>
                    With a strong determination to drive Indonesia forward, Indoasphalt is ready to contribute to building a
                    better future through strong and sustainable infrastructure.
                </p>
            </div>

        </div>

    </div>
@endsection

@section('services-section')
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span>Our Services<br></span>
        <h2>Our ServiceS</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('assets/logis') }}/assets/img/service-1.jpg" alt="" class="img-fluid">
                    </div>
                    <h3>Storage</h3>
                    <p>
                        Our services provides asphalt products that are designed to be easily stored for long periods of
                        time without reducing their quality. With proper storage procedures, our asphalt is always ready to
                        use whenever needed.
                    </p>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('assets/logis') }}/assets/img/service-2.jpg" alt="" class="img-fluid">
                    </div>
                    <h3><a href="#" class="stretched-link">Logistics</a></h3>
                    <p>
                        We always ensures that every shipment of liquid asphalt and sack asphalt runs smoothly and on
                        time. With reliable logistics support, we are ready to send our products to various regions and
                        abroad.
                    </p>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('assets/logis') }}/assets/img/service-3.jpg" alt="" class="img-fluid">
                    </div>
                    <h3><a href="#" class="stretched-link">Cargo</a></h3>
                    <p>
                        Regardless of your project location, we ensure that every shipment is on time and in the best
                        condition, supporting the smooth running of infrastructure development wherever you are.
                    </p>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('assets/logis') }}/assets/img/service-4.jpg" alt="" class="img-fluid">
                    </div>
                    <h3><a href="#" class="stretched-link">Trucking</a></h3>
                    <p>
                        Ensuring that our asphalt distribution runs smoothly through reliable trucking services. With a
                        ready fleet, we deliver liquid asphalt and sack asphalt quickly and safely.
                    </p>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('assets/logis') }}/assets/img/service-5.jpg" alt="" class="img-fluid">
                    </div>
                    <h3>Packaging</h3>
                    <p>
                        Our asphalt is packed in quality sacks coated with heat-resistant plastic. This technology allows
                        the packaging to be destroyed automatically when exposed to temperatures above 100'C, facilitating
                        the application process in the field without the hassle of opening the packaging manually.
                    </p>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('assets/logis') }}/assets/img/service-6.jpg" alt="" class="img-fluid">
                    </div>
                    <h3><a href="#" class="stretched-link">Warehousing</a></h3>
                    <p>
                        We also has warehouses in Balikpapan, Semarang and Buton as the main centers. These strategic
                        locations allow us to store and distribute asphalt quickly and efficiently.
                    </p>
                </div>
            </div><!-- End Card Item -->

        </div>

    </div>
@endsection

@section('features-section')
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span>Features</span>
        <h2>Features</h2>
        <p>
            Our products is designed to support the development of solid and sustainable infrastructure, with features that
            ensure maximum fatigue.
        </p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4 align-items-center features-item">
            <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <img src="{{ asset('assets/img') }}/features-1.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                <h3>Durable and Environmentally Friendly Asphalt</h3>
                <p class="fst-italic">
                    With proven quality, our products offer optimal durability for your infrastructure.
                </p>
                <ul>
                    <li><i class="bi bi-check"></i>
                        <span>
                            Durable: Our products is strong and durable, facing heavy loads and bad weather without
                            being easily damaged.
                        </span>
                    </li>
                    <li><i class="bi bi-check"></i>
                        <span>
                            Eco-Friendly: Our asphalt is environmentally friendly, with a production process that reduces
                            pollution and impact on the environment.
                        </span>
                    </li>
                    <li><i class="bi bi-check"></i>
                        <span>
                            Long-Lasting: With high durability, our asphalt lasts longer, reducing the need for repairs and
                            replacements.
                        </span>
                    </li>
                    <li><i class="bi bi-check"></i>
                        <span>
                            Easy Mixing: Our asphalt pureness is easy to mix and apply, making the work process faster and
                            more efficient.
                        </span>
                    </li>
                </ul>
            </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
            <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('assets/img') }}/features-2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                <h3>Technology & Innovation</h3>
                <p class="fst-italic">
                    We also uses environmentally friendly technology to minimize carbon emissions.
                </p>
                <p>
                    In the asphalt processing process, ensuring that each product meets the highest standards. With the
                    latest environmentally friendly innovations, we present high-quality asphalt that is more durable,
                    efficient and supports sustainable development. With us, you get a modern and reliable asphalt solution.
                </p>
            </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
            <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                <img src="{{ asset('assets/img') }}/features-3.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-7" data-aos="fade-up">
                <h3>Easy Ordering Process</h3>
                <p>
                    Our ordering process is like a toll road: Fast, Easy and Hassle-free. From consultation to delivery, we
                    ensure your journey to quality asphalt is hassle-free.
                </p>
                <ul>
                    <li><i class="bi bi-check"></i>
                        <span>
                            Contact us for consultation and price quote.
                        </span>
                    </li>
                    <li><i class="bi bi-check"></i>
                        <span>
                            Make an order contract agreement.
                        </span>
                    </li>
                    <li><i class="bi bi-check"></i>
                        <span>
                            Processing and packing process according to your project needs.
                        </span>
                    </li>
                    <li><i class="bi bi-check"></i>
                        <span>
                            On-time asphalt delivery to your project location.
                        </span>
                    </li>
                </ul>
            </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
            <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                <img src="{{ asset('assets/logis') }}/assets/img/features-4.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                <h3>Our Fully-Extracted asphalt products is always in Present Wherever You Need It.</h3>
                <p>
                    We are ready to reach various regions, from city corners to other countries. With strong land and sea
                    logistics support, we ensures of our quality asphalt reaches your project location, anytime and
                    anywhere, quickly and safely. Trust your shipping needs to us, for optimal infrastructure results in
                    every field.
                </p>
            </div>
        </div>
        <!-- Features Item -->

    </div>
@endsection

@section('faqs')
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span>Frequently Asked Questions</span>
        <h2>Frequently Asked Questions</h2>
        <p>Need Help? Here are some frequently asked questions. If you are still confused, do not hesitate to contact us!
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="faq-container">

                    <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>What are the main products offered by Indoasphalt?</h3>
                        <div class="faq-content">
                            <p>
                                Indoasphalt offers high-quality asphalt grades, including PG-70, PG-76, and PG-82. Each
                                grade is designed to meet different performance needs based on climate and application.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>How to order Indoasphalt asphalt?</h3>
                        <div class="faq-content">
                            <p>
                                You can contact our sales team through the contact available on the website.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>Does Indoasphalt serve international shipping?</h3>
                        <div class="faq-content">
                            <p>
                                Yes, we serve asphalt shipping throughout Indonesia and to other countries.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>How long does it take for asphalt to be delivered to my project location?</h3>
                        <div class="faq-content">
                            <p>
                                Delivery times may vary based on the destination city or country. We strive to provide
                                timely service and will work with you to ensure your asphalt arrives as quickly as possible.
                            </p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                </div>

            </div>

        </div>

    </div>
@endsection

@section('pricing-section')
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span>Pricing</span>
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-item">
                    <h3>Free Plan</h3>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                        </li>
                        <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis
                                hendrerit</span></li>
                    </ul>
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="pricing-item featured">
                    <h3>Business Plan</h3>
                    <h4><sup>$</sup>29<span> / month</span></h4>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                        <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                    </ul>
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="pricing-item">
                    <h3>Developer Plan</h3>
                    <h4><sup>$</sup>49<span> / month</span></h4>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                        <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                    </ul>
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
            </div><!-- End Pricing Item -->

        </div>

    </div>
@endsection

@section('testimonials-section')
    <img src="{{ asset('assets/logis') }}/assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                    }
                }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/logis') }}/assets/img/testimonials/testimonials-1.jpg"
                            class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                Maecen aliquam, risus at semper.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/logis') }}/assets/img/testimonials/testimonials-2.jpg"
                            class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                irure amet legam anim culpa.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/logis') }}/assets/img/testimonials/testimonials-3.jpg"
                            class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                quis sint minim.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/logis') }}/assets/img/testimonials/testimonials-4.jpg"
                            class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                quem dolore labore illum veniam.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/logis') }}/assets/img/testimonials/testimonials-5.jpg"
                            class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                esse veniam culpa fore nisi cillum quid.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
@endsection

@push('js')
    <script></script>
@endpush
