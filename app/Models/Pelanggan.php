<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggans';

    protected $fillable = [
        'nama_plg',
        'no_hp',
    ];

    // ===== RELASI =====

    /**
     * Satu Pelanggan memiliki BANYAK Cetakans
     * Relasi: hasMany
     */
    public function cetakans()
    {
        return $this->hasMany(Cetakan::class, 'pelanggan_id');
    }
}
