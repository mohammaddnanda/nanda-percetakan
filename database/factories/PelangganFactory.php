<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PelangganFactory extends Factory
{
    public function definition(): array
    {
        $pelanggans = [
            ['nama'=> 'Budi Santoso', 'no_hp' => '081234567891'],
            ['nama'=> 'Siti Aminah', 'no_hp' => '081234567892'],
            ['nama'=> 'Ahmad Fauzi', 'no_hp' => '081234567893'],
            ['nama'=> 'Dewi Lestari', 'no_hp' => '081234567894'],
            ['nama'=> 'Rudi Hartono', 'no_hp' => '081234567895'],
            ['nama'=> 'Lina Marlina', 'no_hp' => '081234567896'],
            ['nama'=> 'Andi Wijaya', 'no_hp' => '081234567897'],
            ['nama'=> 'Sari Puspita', 'no_hp' => '081234567898'],
            ['nama'=> 'Tono Prasetyo', 'no_hp' => '081234567899'],
        ];

        $pelanggan = fake()->unique()->randomElement($pelanggans);

        return [
            'nama_plg' => $pelanggan['nama'],
            'no_hp' => $pelanggan['no_hp'] ?? fake()->phoneNumber(),
        ];
    }
}
