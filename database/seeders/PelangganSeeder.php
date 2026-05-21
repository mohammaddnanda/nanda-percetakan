<?php
// database/seeders/PelangganSeeder.php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        // Data pelanggan yang pasti ada (data statis)
        $pelanggans = [
            ['nama_pelanggan' => 'John Doe','no_hp' => '081234567890'],
            ['nama_pelanggan' => 'Jane Smith','no_hp' => '081234567891'],
            ['nama_pelanggan' => 'Alice Johnson','no_hp' => '081234567892'],
            ['nama_pelanggan' => 'Bob Brown','no_hp' => '081234567893'],
            ['nama_pelanggan' => 'Charlie Davis','no_hp' => '081234567894'],
        ];

        foreach ($pelanggans as $pelanggan) {
            Pelanggan::create($pelanggan);
        }

        $this->command->info('PelangganSeeder: ' . count($pelanggans) . ' pelanggan berhasil dibuat.');
    }
}
