@extends('layouts.app')

@section('title', 'Data Percetakan')
@section('page-title', 'Data Percetakan')

@section('content')

    {{-- Baris Kartu Statistik --}}
    <div class="row">

        {{-- Kartu: Total Pelanggan --}}
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Pelanggan
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{-- {{ $totalPelanggan }} --}}0
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kartu: Total Cetakan --}}
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Cetakan
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{-- {{ $totalCetakan }} --}}0
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chart-bar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kartu: Total Pembayaran --}}
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Data Pembayaran
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{-- {{ $totalPembayaran }} --}}0
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Tabel Cetakan Terbaru --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-users mr-2"></i>Cetakan Terbaru
            </h6>
            {{-- <a href="{{ route('cetakan.index') }}" class="btn btn-sm btn-primary">
                Lihat Semua
            </a> --}}
            <a href="#" class="btn btn-sm btn-primary">
                Lihat Semua
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Jenis Cetakan</th>
                            <th>Jumlah Bayar</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($cetakanTerbaru as $ctk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ctk->pelanggan->nama ?? '-' }}</td>
                                <td>{{ $ctk->jenis_cetakan }}</td>
                                <td>Rp {{ number_format($ctk->jumlah_bayar, 0, ',', '.') }}</td>
                                <td>
                                    <span
                                        class="badge badge-{{ $ctk->status === 'aktif'
                                            ? 'success'
                                            : ($ctk->status === 'cuti'
                                                ? 'warning'
                                                : ($ctk->status === 'lulus'
                                                    ? 'info'
                                                    : 'danger')) }}">
                                        {{ ucfirst($ctk->status) }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">
                                    Belum ada data cetakan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
