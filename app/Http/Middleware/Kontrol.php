<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Kontrol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kullanıcı oturum açmış mı diye kontrol et
        if (! Auth::check()) {
            // Oturum açmamışsa, kullanıcıyı login sayfasına yönlendir
            return redirect("/giris-yap")->with('hata', 'Bilgilerim Sayfasını görüntüleyebilmek için oturum açmalısınız.');
        }

        // Oturum açıksa, isteği sonraki adıma (Controller'a) geçir
        return $next($request);
    }
}
