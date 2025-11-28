<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kullanici;
use App\Http\Controllers\IslemController;
use App\Http\Controllers\Sehir;
use App\Http\Controllers\HomeController;

//hata almamak için tanımlama yapıyoruz

//Route::get('/', [HomeController::class, 'AnasayfaGoster'])->name('home');
//Route::get('/giris-yap', function () {
//   return view('login');
//});
//Route::get('/uye-ol', function () {
//   return view('register');
//});
//aşağıdaki gibi yaparsak rotanın yükü hafiflemiş olur rota sadece aracı olur yükü kontrollerle paylaşmış oldu projenin ölçeklendirilebilir ve daha düzenli daha kontrol edilebilir olmasını sağlar
Route::get('/giris-yap', [Kullanici::class, 'girisYap'])->name('giris');
Route::get('/uye-ol', [Kullanici::class, 'uyeOl'])->name('uyeol');
Route::post('/uye-kaydet', [Kullanici::class, 'uyeKaydet'])->name('uyeKaydet');
Route::get('/magaza', [Kullanici::class, 'MagazaGoster'])->name('magaza');
Route::get('/bilgilerim', [Kullanici::class, 'BilgilerimGoster'])->middleware('OturumKontrol')->name('bilgilerim');
Route::get('/', [HomeController::class, 'AnasayfaGoster'])->middleware('yayinKontrol')->name('home');

//get ve post farkına dikkat et

//Route::get('/sehir/{id}', function ($id) {
//    return view('city', ['id' => $id]);
//});

Route::get('/sehir/{id}', [Sehir::class, 'goster'])->name('sehir.goster');

//Route::get('/topla/{sayi1}/{sayi2}', function ($sayi1, $sayi2) {
//  $toplam = $sayi1 + $sayi2;
// return view('topla', ['toplam' => $toplam, 'sayi1' => $sayi1, 'sayi2' => $sayi2]);
//});

Route::get('/topla/{sayi1}/{sayi2}', [IslemController::class, 'topla'])->name('topla');

use App\Http\Controllers\VeriController;
Route::get('/veri-ekle', [VeriController::class, 'create'])->name('veri.ekle');
Route::post('/veri-ekle', [VeriController::class, 'store'])->name('veri.kaydet');
