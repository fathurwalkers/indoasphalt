<div>
    <nav class="navbar sticky-top navbar-expand-lg bg-light my-0 py-4">
        <div class="container">
            <!-- Navbar Toggler (warna hitam) -->
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Logo Navbar (posisi di tengah pada mobile) -->
            <a class="navbar-brand mx-auto" href="{{ route('home') }}">
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
                            @foreach ($produk as $props)
                                <a class="dropdown-item py-3"
                                    href="{{ route('get-produk', $props->produk_nama) }}">Fully Extracted
                                    {{ $props->produk_nama }}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects') }}">PROJECTS</a>
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
</div>
