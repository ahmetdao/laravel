<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veri;

class VeriController extends Controller
{
    public function create()
    {
        return view('veri_ekle');
    }

    public function store(Request $request)
    {
        $request->validate([
            'baslik' => 'required|string|max:255',
            'icerik' => 'required|string',
            'gorsel' => 'nullable|string', // Basitlik için şimdilik string olarak alıyoruz
        ]);

        $veri = new Veri();
        $veri->baslik = $request->baslik;
        $veri->icerik = $request->icerik;
        $veri->gorsel = $request->gorsel;
        $veri->save();

        return "Veri başarıyla kaydedildi!";
    }
}
