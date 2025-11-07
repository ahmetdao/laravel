<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Yapılması istenen işlemler buraya
        Schema::create('uyeler', function (Blueprint $table) {

            // Temel Alanlar
            $table->id(); // Otomatik artan ID (unsignedBigInteger)

            // İstenen Alanlar
            $table->string('ad');
            $table->string('soyad');
            $table->string('e_posta')->unique(); // e-posta benzersiz olmalı
            $table->string('parola'); // Parola şifrelenmiş olarak saklanacağı için string

            // Laravel Standartları
            $table->timestamps(); // created_at ve updated_at alanlarını ekler

            // Ek faydalı alan (Opsiyonel ama önerilir):
            // $table->timestamp('email_verified_at')->nullable(); // E-posta doğrulama zamanı
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Bir şeyler ters giderse geri alınmayı sağlayacak kodlar buraya
        Schema::dropIfExists('uyeler');
    }
};
