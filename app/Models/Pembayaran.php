<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';

    protected $fillable = [
        'cetakan_id',
        'kode_bayar',
        'harga_bayar',
    ];

    protected $casts = [
        'harga_bayar' => 'float',
    ];

    // ===== RELASI =====

    /**
     * Pembayaran MILIK satu Cetakan
     * Relasi: belongsTo
     * Akses: $pembayaran->cetakan->jenis_cetakan
     */
    public function cetakan()
    {
        return $this->belongsTo(Cetakan::class, 'cetakan_id');
    }

        // ===== HELPER METHOD =====

        /**
        * Format harga_bayar ke format mata uang Indonesia
        */
        public function getHargaBayarFormattedAttribute(): string
        {
            return 'Rp ' . number_format($this->harga_bayar, 0, ',', '.');
        }
}
