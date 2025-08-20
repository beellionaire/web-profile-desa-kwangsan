@extends('admin.components.layout')

@section('title', 'Dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-6">Dashboard</h1>

<div class="grid grid-cols-4 gap-4">
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-gray-500">Total Berita</h2>
        <p class="text-3xl font-bold">{{ $totalNews ?? 0 }}</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-gray-500">Total UMKM</h2>
        <p class="text-3xl font-bold">{{ $totalUmkm ?? 0 }}</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-gray-500">Total Potensi</h2>
        <p class="text-3xl font-bold">{{ $totalPotensi ?? 0 }}</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-gray-500">Total Galeri</h2>
        <p class="text-3xl font-bold">{{ $totalGaleri ?? 0 }}</p>
    </div>
</div>
@endsection