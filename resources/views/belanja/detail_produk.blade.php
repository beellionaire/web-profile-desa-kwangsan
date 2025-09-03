@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-8 px-4 mt-24 mb-5">
    <div class="bg-white p-6 rounded-lg shadow">
        <!-- Judul -->
        <h1 class="text-3xl font-bold text-gray-900 mb-4">
            {{ $umkm->nama }}
        </h1>

        <!-- Gambar -->
        @if($umkm->foto)
        <img src="{{ asset('storage/' . $umkm->foto) }}" alt="{{ $umkm->nama }}" class="w-full h-auto rounded-lg mb-6">
        @else
        <img src="https://via.placeholder.com/600x400?text=No+Image" alt="{{ $umkm->nama }}"
            class="w-full h-auto rounded-lg mb-6">
        @endif

        <!-- Kontak & Lokasi -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between text-sm text-gray-600 mb-6">
            <div class="mb-2 sm:mb-0">
                <span class="font-semibold text-gray-700">Kontak: </span>
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $umkm->nohp) }}" target="_blank"
                    class="text-green-600 hover:underline">
                    {{ $umkm->nohp }}
                </a>
            </div>
            <div>
                <span class="font-semibold text-gray-700">Lokasi: </span>
                @if($umkm->maps)
                <a href="{{ $umkm->maps }}" target="_blank" class="text-blue-600 hover:underline">Lihat di Maps</a>
                @else
                <span class="text-gray-500">-</span>
                @endif
            </div>
        </div>

        <!-- Deskripsi -->
        <div>
            <h2 class="font-semibold text-gray-700 mb-2">Deskripsi UMKM:</h2>
            <p class="text-gray-600 text-base whitespace-pre-line text-justify">
                {{ $umkm->deskripsi ?? 'Tidak ada deskripsi.' }}
            </p>
        </div>
    </div>
</div>
@endsection