<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function uyeKaydet(Request $request)
    {
        // 1. Form verilerini doğrula
        $validated = $request->validate([
            'isim' => 'required|string|max:255',
            'email' => 'required|email',
            'parola' => 'required|min:6',
        ]);

        // 2. Şifreyi hashle
        $hashedPassword = Hash::make($validated['parola']);

        // 3. Controller'da alt alta yazdır
        echo "<h2>Kayıt Verileri</h2>";
        echo "İsim: " . htmlspecialchars($validated['isim']) . "<br>";
        echo "Email: " . htmlspecialchars($validated['email']) . "<br>";
        echo "Şifre (Hashlenmiş): " . $hashedPassword . "<br>";

        // Eğer istersen scripti durdurabilirsin
        // exit;
    }
}
