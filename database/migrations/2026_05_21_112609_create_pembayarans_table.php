<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();

            // Foreign Key ke tabel cetakans
            $table->foreignId('cetakan_id')
                  ->constrained('cetakans')
                  ->onDelete('cascade'); // jika cetakan dihapus, nilai ikut terhapus

            $table->string('kode_bayar', 10);
            $table->string('harga_bayar', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
