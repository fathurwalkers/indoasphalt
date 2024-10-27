@extends('layouts.development-layout')

@push('css')
    <style>
        .hero {
            padding: 50px;
            text-align: start;
        }
    </style>
@endpush

@section('header-content')
    <h1 class="header ml-auto">FULLY-EXTRACTED {{ $produk->produk_nama }}</h1>
@endsection

@section('main-content')
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
                        <img src="{{ asset('assets/img/') }}/pg70.jpeg" class="card-img-top products-image" alt="Service 1"
                            width="250px">
                        <div class="card-body">
                            <h5 class="card-title">Fully-Extracted PG-70</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/') }}/pg76.jpeg" class="card-img-top products-image" alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">Fully-Extracted PG-76</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/') }}/pg82.jpeg" class="card-img-top products-image" alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">Fully-Extracted PG-82</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
