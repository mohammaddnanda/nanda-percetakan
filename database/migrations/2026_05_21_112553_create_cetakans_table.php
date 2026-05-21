<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cetakans', function (Blueprint $table) {
            $table->id();

            // Foreign Key ke tabel pelanggans
            $table->foreignId('plg_id')
                  ->constrained('pelanggans')      // referensi ke tabel pelanggans
                  ->onDelete('restrict');       // cegah hapus pelanggan jika masih ada cetakan

            $table->string('jenis_cetakan', 100);
            $table->string('jumlah', 100)->unique();
            $table->date('tgl_cetak');
            $table->enum('status', ['Belum Selesai', 'Sudah Selesai'])
                  ->default('Sudah Selesai');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cetakans');
    }
};
