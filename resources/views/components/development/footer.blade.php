<div>
    <div class="container footer-top">
        <div class="row gy-1">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    {{-- <span class="sitename">INDOASPHALT</span> --}}
                    <img src="{{ asset('assets/img') }}/logo.png" alt="" class="sitename">
                </a>
                <p class="text-start text-wrap">
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
                <h4 class="text-left">Navigation</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="{{ route('projects') }}"></a>Projects</li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4 class="text-left">Products</h4>
                <ul>
                    @foreach ($produk as $props)
                        <li><a href="{{ route('get-produk', $props->produk_nama) }}">Fully-Extracted {{ $props->produk_nama }}</a></li>
                    @endforeach
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

    <div class="container copyright text-center mt-1">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">INDOASPHALT</strong> <span>All Rights
                Reserved</span>
        </p>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://github.com/fathurwalkers">Muh. Fathur / IT Indoasphalt</a>
            <br />
            Credits To : <a href="">INDOASPHALT</a>
        </div>
    </div>
</div>
