<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IslemlerController extends Controller
{
    public function index()
    {
        return view('islemler.index');
    }

    public function topla($sayi1 = null, $sayi2 = null)
    {
        $sonuc = ($sayi1 !== null && $sayi2 !== null) ? $sayi1 + $sayi2 : null;
        return view('islemler.sonuc', [
            'islem' => 'Toplama',
            'sayi1' => $sayi1,
            'sayi2' => $sayi2,
            'sonuc' => $sonuc
        ]);
    }

    public function cikar($sayi1 = null, $sayi2 = null)
    {
        $sonuc = ($sayi1 !== null && $sayi2 !== null) ? $sayi1 - $sayi2 : null;
        return view('islemler.sonuc', [
            'islem' => 'Çıkarma',
            'sayi1' => $sayi1,
            'sayi2' => $sayi2,
            'sonuc' => $sonuc
        ]);
    }

    public function carp($sayi1 = null, $sayi2 = null)
    {
        $sonuc = ($sayi1 !== null && $sayi2 !== null) ? $sayi1 * $sayi2 : null;
        return view('islemler.sonuc', [
            'islem' => 'Çarpma',
            'sayi1' => $sayi1,
            'sayi2' => $sayi2,
            'sonuc' => $sonuc
        ]);
    }

    public function bol($sayi1 = null, $sayi2 = null)
    {
        if ($sayi1 !== null && $sayi2 !== null) {
            $sonuc = ($sayi2 == 0) ? 'Tanımsız (0\'a bölünemez)' : $sayi1 / $sayi2;
        } else {
            $sonuc = null;
        }

        return view('islemler.sonuc', [
            'islem' => 'Bölme',
            'sayi1' => $sayi1,
            'sayi2' => $sayi2,
            'sonuc' => $sonuc
        ]);
    }
}
