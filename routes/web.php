<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SehirController;
use App\Http\Controllers\IslemlerController;
use App\Http\Controllers\Auth\AuthController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');

});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// 🔹 Herkese açık sayfalar (guest şartı yok)
Route::get('/sehir', [SehirController::class, 'index'])->name('sehir.index');
Route::get('/sehir/{plaka}', [SehirController::class, 'show'])->name('sehir.show');

Route::get('/islemler', [IslemlerController::class, 'index'])->name('islemler.index');
Route::get('/islemler/topla/{sayi1?}/{sayi2?}', [IslemlerController::class, 'topla'])->name('islemler.topla');
Route::get('/islemler/cikar/{sayi1?}/{sayi2?}', [IslemlerController::class, 'cikar'])->name('islemler.cikar');
Route::get('/islemler/carp/{sayi1?}/{sayi2?}', [IslemlerController::class, 'carp'])->name('islemler.carp');
Route::get('/islemler/bol/{sayi1?}/{sayi2?}', [IslemlerController::class, 'bol'])->name('islemler.bol');
