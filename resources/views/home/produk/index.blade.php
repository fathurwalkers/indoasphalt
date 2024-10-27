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
            {{-- <p class="text-center">
                We do Partnership with others company, doing projects together.
            </p> --}}
            <div class="row">
                <div class="col-sm-12s col-md-12s col-lg-12s">
                    {!! $produk->produk_keterangan !!}
                </div>
                {{-- <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="card">
                            <img src="{{ asset('assets/img/') }}/pg70.jpeg" class="card-img-top products-image" alt="Service 1"
                                width="250px">
                            <div class="card-body">
                                <h5 class="card-title">Fully-Extracted {{ $produk->produk_nama }}</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
