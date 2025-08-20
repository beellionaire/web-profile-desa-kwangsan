@extends('layouts.app')

@section('content')

<div class="bg-gray-100 min-h-screen mt-24 mb-24">
    <!-- Header -->
    {{-- <div class="bg-white shadow p-6">
        <h1 class="text-3xl font-bold text-blue-700">INFOGRAFIS <br> DESA KWANGSAN</h1>
    </div> --}}

    <!-- Tabs Navigasi -->
    {{-- <div class="bg-white shadow mt-2">
        <div class="flex justify-center space-x-6 py-4">
            <a href="#" class="text-gray-700 hover:text-blue-600 flex flex-col items-center">
                <i class="fas fa-users mb-1"></i>
                <span>Penduduk</span>
            </a>
            <a href="#" class="text-gray-700 hover:text-blue-600 flex flex-col items-center">
                <i class="fas fa-file-invoice-dollar mb-1"></i>
                <span>APBDes</span>
            </a>
            <a href="#" class="text-gray-700 hover:text-blue-600 flex flex-col items-center">
                <i class="fas fa-chart-bar mb-1"></i>
                <span>Statistik</span>
            </a>
            <a href="#" class="text-gray-700 hover:text-blue-600 flex flex-col items-center">
                <i class="fas fa-database mb-1"></i>
                <span>IDM</span>
            </a>
        </div>
    </div> --}}

    <!-- Ringkasan APBDes -->
    <div class="max-w-6xl mx-auto px-6 py-6">
        <h2 class="text-xl font-bold text-red-700 mb-2">APB Desa Kwangsan Tahun 2025</h2>
        <p class="text-gray-600">Desa Kwangsan, Kecamatan Jumapolo, Kabupaten Karanganyar, Provinsi Jawa Tengah </p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
            <div class="bg-green-100 p-4 rounded shadow">
                <p class="text-sm text-gray-600">Pendapatan</p>
                <p class="text-lg font-bold text-green-700">Rp5.418.875.296,00</p>
            </div>
            <div class="bg-red-100 p-4 rounded shadow">
                <p class="text-sm text-gray-600">Belanja</p>
                <p class="text-lg font-bold text-red-700">Rp5.027.268.136,00</p>
            </div>
            <div class="bg-blue-100 p-4 rounded shadow">
                <p class="text-sm text-gray-600">Pembiayaan</p>
                <p class="text-lg font-bold text-blue-700">Rp0,00</p>
            </div>
            <div class="bg-yellow-100 p-4 rounded shadow">
                <p class="text-sm text-gray-600">Surplus/Defisit</p>
                <p class="text-lg font-bold text-yellow-700">Rp391.607.160,00</p>
            </div>
        </div>
    </div>

    <!-- Grafik Pendapatan & Belanja -->
    <div class="max-w-6xl mx-auto px-6 py-6">
        <h3 class="text-lg font-bold mb-2">Pendapatan dan Belanja Desa dari Tahun ke Tahun</h3>
        <div class="bg-white shadow p-4 rounded">
            <canvas id="chartPendapatanBelanja"></canvas>
        </div>
    </div>

    <!-- Pendapatan Desa -->
    <div class="max-w-6xl mx-auto px-6 py-6">
        <h3 class="text-lg font-bold mb-2">Pendapatan Desa 2024</h3>
        <div class="bg-white shadow p-4 rounded">
            <canvas id="chartPendapatan"></canvas>
        </div>
    </div>

    <!-- Belanja Desa -->
    <div class="max-w-6xl mx-auto px-6 py-6">
        <h3 class="text-lg font-bold mb-2">Belanja Desa 2024</h3>
        <div class="bg-white shadow p-4 rounded">
            <canvas id="chartBelanja"></canvas>
        </div>
    </div>

    <!-- Pembiayaan Desa -->
    <div class="max-w-6xl mx-auto px-6 py-6">
        <h3 class="text-lg font-bold mb-2">Pembiayaan Desa 2024</h3>
        <div class="bg-white shadow p-4 rounded">
            <canvas id="chartPembiayaan"></canvas>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx1 = document.getElementById('chartPendapatanBelanja');
    new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['2023', '2024'],
            datasets: [
                { label: 'Pendapatan', data: [5418875296, 5527268160], backgroundColor: 'rgba(37, 99, 235, 0.8)' }
            ]
        }
    });

    const ctx2 = document.getElementById('chartPendapatan');
    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Pendapatan Asli Desa', 'Pendapatan Transfer', 'Pendapatan Lain-lain'],
            datasets: [{ label: 'Pendapatan 2024', data: [0, 5418875296, 0], backgroundColor: 'rgba(37, 99, 235, 0.8)' }]
        }
    });

    const ctx3 = document.getElementById('chartBelanja');
    new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: ['Penyelenggaraan Pemerintahan Desa', 'Pelaksanaan Pembangunan Desa'],
            datasets: [{ label: 'Belanja 2024', data: [3472632136, 1558646000], backgroundColor: 'rgba(59, 130, 246, 0.8)' }]
        }
    });

    const ctx4 = document.getElementById('chartPembiayaan');
    new Chart(ctx4, {
        type: 'bar',
        data: {
            labels: ['Penerimaan', 'Pengeluaran'],
            datasets: [{ label: 'Pembiayaan 2024', data: [0, 0], backgroundColor: 'rgba(239, 68, 68, 0.8)' }]
        }
    });
</script>
@endpush
