<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cetakan extends Model
{
    use HasFactory;

    protected $table = 'cetakans';

    protected $fillable = [
        'pelanggan_id',
        'jenis_cetakan',
        'jumlah',
        'tgl_cetak',
        'status',
    ];

    // ===== RELASI =====

    /**
     * Cetakan MILIK satu Pelanggan
     * Relasi: belongsTo
     * Akses: $cetakan->pelanggan->nama_plg
     */
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }

    /**
     * Satu Cetakan memiliki BANYAK Pembayarans
     * Relasi: hasMany
     * Akses: $cetakan->pembayarans
     */
    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'cetakan_id');
    }

    // ===== HELPER METHOD =====

    /**
     * Hitung IPK dari rata-rata nilai angka
     */
    public function getIpkAttribute(): float
    {
        if ($this->pembayarans->isEmpty()) return 0;
        return round($this->pembayarans->avg('jumlah_bayar') / 25, 2); // konversi ke skala 4
    }
}
