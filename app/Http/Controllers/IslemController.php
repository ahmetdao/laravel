<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IslemController extends Controller
{
    public function topla($sayi1, $sayi2)
    {
        $toplam = $sayi1 + $sayi2;

        return view('topla', [
            'toplam' => $toplam,
            'sayi1' => $sayi1,
            'sayi2' => $sayi2
        ]);
    }
}
