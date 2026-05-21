<?php
// database/seeders/CetakanSeeder.php

namespace Database\Seeders;

use App\Models\Cetakan;
use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class CetakanSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan data pelanggan sudah ada
        if (Pelanggan::count() === 0) {
            $this->command->warn('PelangganSeeder harus dijalankan lebih dulu!');
            return;
        }

        // Buat 30 cetakan dummy menggunakan Factory
        Cetakan::factory(30)->create();

        // Tambah 1 data cetakan manual untuk keperluan demo
        $pelanggan = Pelanggan::where('nama_pelanggan', 'John Doe')->first();
        Cetakan::create([
            'pelanggan_id' => $pelanggan->id,
            'jenis_cetakan' => 'Cetakan Demo',
            'jumlah' => 10,
            'tgl_cetak' => now(),
            'status' => 'Selesai',
        ]);

        $this->command->info('CetakanSeeder: ' . Cetakan::count() . ' cetakan berhasil dibuat.');
    }
}
