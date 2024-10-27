@extends('layouts.development-layout')

@push('css')
    <style>
        .hero {
            padding: 50px;
            text-align: start;
        }

        .gallery img {
            width: 100%;
            height: 200px; /* Sesuaikan tinggi gambar */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
            border-radius: 5px; /* Sudut gambar yang sedikit melengkung */
        }
    </style>
@endpush

@section('header-content')
    <h1 class="header ml-auto">PROJECTS</h1>
@endsection

@section('main-content')
<div class="container my-5">
    <h1 class="text-center mb-4">Galeri Foto</h1>
    <div class="row gallery">
        <div class="col-md-3 mb-4">
            <img src="https://via.placeholder.com/300" alt="Gambar 1" class="img-fluid">
        </div>
        <div class="col-md-3 mb-4">
            <img src="https://via.placeholder.com/300" alt="Gambar 2" class="img-fluid">
        </div>
        <div class="col-md-3 mb-4">
            <img src="https://via.placeholder.com/300" alt="Gambar 3" class="img-fluid">
        </div>
        <div class="col-md-3 mb-4">
            <img src="https://via.placeholder.com/300" alt="Gambar 4" class="img-fluid">
        </div>
        <div class="col-md-3 mb-4">
            <img src="https://via.placeholder.com/300" alt="Gambar 5" class="img-fluid">
        </div>
        <div class="col-md-3 mb-4">
            <img src="https://via.placeholder.com/300" alt="Gambar 6" class="img-fluid">
        </div>
        <div class="col-md-3 mb-4">
            <img src="https://via.placeholder.com/300" alt="Gambar 7" class="img-fluid">
        </div>
        <div class="col-md-3 mb-4">
            <img src="https://via.placeholder.com/300" alt="Gambar 8" class="img-fluid">
        </div>
    </div>
</div>
@endsection
