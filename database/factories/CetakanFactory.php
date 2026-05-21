<?php

namespace Database\Factories;

use App\Models\Cetakan;
use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

class CetakanFactory extends Factory
{
    public function definition(): array
    {

        // Ambil pelanggan_id secara acak dari data yang sudah ada di database
        $pelangganId = Pelanggan::inRandomOrder()->value('id');

        return [
            'pelanggan_id' => $pelangganId,
            'jenis_cetakan' => fake()->randomElement([
                'Kartu Nama',
                'Brosur',
                'Flyer',
                'Poster'
            ]),
            'jumlah' => fake()->numberBetween(100, 1000),
            'tgl_cetak' => fake()->date(),
            'status' => fake()->randomElement([
                'Belum Selesai',
                'Sudah Selesai'
            ]),
        ];
    }
}
