<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Uye;

class Kullanici extends Controller
{
    public function girisYap()
    {
        return view('login');
    }

    public function uyeOl()
    {
        return view('register');
    }
    public function MagazaGoster()
    {
        return view('shop');
    }
    public function BilgilerimGoster()
    {
        return view('bilgilerim');
    }

    public function uyeKaydet(Request $request)
    {
        $request->validate([
            'isim' => 'required|string|max:255',
            'soyad' => 'required|string|max:255',
            'email' => 'required|email|unique:uyeler,e_posta',
            'parola' => [
                'required',
                'string',
                'min:8',             // Minimum 8 karakter
                'confirmed',         // parola_confirmation ile eşleşmeli
                'regex:/[A-Z]/',     // En az 1 büyük harf
                'regex:/[@$!%*#?&]/', // En az 1 özel karakter
            ],
        ]);

        $veriler = $request->all();

        $uye = new Uye();
        $uye->ad = $request->isim;
        $uye->soyad = $request->soyad;
        $uye->e_posta = $request->email;
        $uye->parola = Hash::make($request->parola);
        $uye->yetki = 0; // 0: Standart Üye
        $uye->save();

    }
}
