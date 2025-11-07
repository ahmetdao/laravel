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
        Schema::table('uyeler', function (Blueprint $table) {
           // "yetki" sütununu ekle. Varsayılan (default) değeri 0 olacak.
            // integer türü bu tür bir yetki seviyesi için idealdir.
            $table->integer('yetki')->default(0)->after('parola'); //->after('parola') parola alanından sonraya ekler
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('uyeler', function (Blueprint $table) {
            // Rollback yapıldığında, eklediğimiz "yetki" sütununu sil.
            $table->dropColumn('yetki');
        });
    }
};
