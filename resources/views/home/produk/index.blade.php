@extends('layouts.development-layout')

@push('css')
    <style>
        .hero {
            padding: 50px;
            text-align: start;
        }

        .hero {
            position: relative;
            background: url('https://indoasphalt.com/public/assets/img/hero-1.jpg') no-repeat center center;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 30% 70%;
            color: #fff;
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
            <div class="row d-flex justify-content-center mt-0 pt-0 mb-4">
                <div class="col-sm-12 col-md-12 col-lg-12 mx-auto d-flex justify-content-center">
                    <img class="img pickimg img-fluid mx-auto d-flex justify-content-center"
                        src="{{ asset('assets/img') }}/{{ $produk->produk_nama }}-Specifications.PNG" alt=""
                        width="750px">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    {!! $produk->produk_keterangan !!}
                </div>
            </div>
        </div>
    </section>
@endsection
