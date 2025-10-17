<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kullanici;
use App\Http\Controllers\IslemController;
use App\Http\Controllers\Sehir;

//hata almamak için tanımlama yapıyoruz

Route::get('/', function () {
    return view('welcome');
});
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
