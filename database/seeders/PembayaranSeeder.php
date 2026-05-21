<?php
// database/seeders/NilaiSeeder.php

namespace Database\Seeders;

use App\Models\Cetakan;
use App\Models\Pembayaran;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    public function run(): void
    {
        if (Cetakan::count() === 0) {
            $this->command->warn('CetakanSeeder harus dijalankan lebih dulu!');
            return;
        }

        $this->command->info('PembayaranSeeder: ' . Pembayaran::count() . ' data pembayaran berhasil dibuat.');
    }
}
