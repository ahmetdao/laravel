<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Kontrol;
use App\Http\Middleware\YayinKontrol;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        /// ÖZEL ROUTE MIDDLEWARE ALIAS KAYDI
        $middleware->alias([
            'OturumKontrol' => Kontrol::class,
        ]);
        // YENİ MIDDLEWARE ALIAS KAYDI (YayinKontrol)
        $middleware->alias([
            'yayinKontrol' => YayinKontrol::class, // 'yayinKontrol' takma adıyla kaydettik
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
