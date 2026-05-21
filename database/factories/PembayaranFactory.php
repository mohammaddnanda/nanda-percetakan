<?php

namespace Database\Factories;

use App\Models\Cetakan;
use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Factories\Factory;

class PembayaranFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cetakan_id' => Cetakan::inRandomOrder()->value('id'),
            'kode_bayar' => 'BYR-' . strtoupper(fake()->bothify('??###')),
            'harga_bayar' => fake()->randomFloat(2, 100000, 1000000),
        ];
    }
}
