<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Cetakan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPelanggan = Pelanggan::count();
        $totalCetakan = Cetakan::count();
        $totalPembayaran = Pembayaran::count();

        $cetakanTerbaru = Cetakan::with('pelanggan')
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalPelanggan',
            'totalCetakan',
            'totalPembayaran',
            'cetakanTerbaru'
        ));
    }
}

