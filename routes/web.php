<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/projects', [HomeController::class, 'projects'])->name('projects');

    Route::group(['prefix' => '/products'], function () {
        Route::get('/asphalt/{produk_nama}', [HomeController::class, 'getproduk'])->name('get-produk');
    });
});
