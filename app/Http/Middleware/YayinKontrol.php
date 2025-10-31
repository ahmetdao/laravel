<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon; // Tarih işlemleri için Carbon'ı dahil et

class YayinKontrol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Hedef yayın tarihi: 1 Kasım 2025, saat 00:00:00
        // Carbon::create ile tam tarih ve saat nesnesi oluşturulur.
        $yayinTarihi = Carbon::create(2025, 11, 1, 0, 0, 0, 'UTC');

        // Mevcut Server Tarihi
        $simdi = Carbon::now('UTC');

        // Eğer mevcut tarih, yayın tarihinden önceyse
        if ($simdi->lessThan($yayinTarihi)) {

            $mesaj = "Ana sayfa henüz yayınlanmadı 01.11.2025 00.00'da Ana Sayfa kullanıma açılacaktır.";

            // /giris-yap sayfasına yönlendir ve "uyari" anahtarıyla mesajı ilet
            return redirect('/giris-yap')->with('uyari', $mesaj);
        }

        // Tarih geçtiyse, isteği sonraki adıma (anasayfaya) geçir
        return $next($request);
    }
}
