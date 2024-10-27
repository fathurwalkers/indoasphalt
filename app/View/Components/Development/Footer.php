<?php

namespace App\View\Components\Development;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Produk;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $produk = Produk::all();
        return view('components.development.footer', [
            'produk' => $produk
        ]);
    }
}
