<?php

namespace App\View\Components\Development;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Produk;

class Navbar extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        $produk = Produk::all();
        return view('components.development.navbar', [
            'produk' => $produk
        ]);
    }
}
