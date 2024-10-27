<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.development');
    }

    public function projects()
    {
        return view('home.gallery');
    }

    public function getproduk($produk_nama)
    {
        $produk = Produk::where('produk_nama', $produk_nama)->first();
        return view('home.produk.index', [
            'produk' => $produk
        ]);
    }

    public function testpage()
    {
        return view('home.testpage');
    }
}
