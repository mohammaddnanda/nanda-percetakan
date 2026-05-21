<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Urutan ini WAJIB diikuti karena adanya foreign key:
        // 1. Pelanggan dulu (tidak bergantung pada tabel lain)
        // 2. Cetakan (bergantung pada pelanggans)
        // 3. Pembayaran (bergantung pada cetakans)
        $this->call([
            PelangganSeeder::class,
            CetakanSeeder::class,
            PembayaranSeeder::class,
        ]);
    }
}
