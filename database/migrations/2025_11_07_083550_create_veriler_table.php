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
        Schema::create('veriler', function (Blueprint $table) {
            // Temel ID
            $table->id();

            // İstenen Alanlar
            $table->string('baslik', 255); // Başlık için limitli string
            $table->text('icerik');        // Uzun metinler için 'text' tipi
            $table->string('gorsel')->nullable(); // Görselin dosya yolu/adı. Nullable, yani boş bırakılabilir.

            // Laravel Standartları
            $table->timestamps(); // created_at ve updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Rollback istendiğinde tabloyu tamamen siler
        Schema::dropIfExists('veriler');
    }
};
