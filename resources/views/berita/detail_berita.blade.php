@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto py-8 px-4 lg:flex lg:gap-8 mt-20">
    <!-- Konten Utama -->
    <div class="lg:w-2/3 bg-white p-6 rounded-lg shadow">
        <!-- Judul -->
        <h1 class="text-2xl font-bold text-gray-900 mb-7">{{ $berita->judul }}</h1>
        <div class="flex items-center text-sm text-gray-500 space-x-4 mb-4 justify-between">
            <span><i class="fa-regular fa-calendar"></i> {{ $berita->tanggal->translatedFormat('d M Y') }}</span>
            <span>Ditulis oleh <strong>{{ $berita->author }}</strong></span>
        </div>

        <!-- Gambar -->
        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
            class="w-full h-auto rounded-lg mb-6">

        <!-- Konten -->
        <div class="prose max-w-none">
            {!! $berita->konten !!}
        </div>

        <!-- Deskripsi Singkat -->
        @if(!empty($berita->deskripsi))
        <p class="text-gray-600 text-base mb-4 whitespace-pre-line text-justify">
            {{ $berita->deskripsi }}
        </p>
        @endif

        <!-- Bagikan -->
        <!-- <div class="mt-6 border-t pt-4">
            <span class="font-semibold">Bagikan:</span>
            <div class="flex space-x-3 mt-2">
                <a href="#" class="text-blue-600 hover:text-blue-800"><img src="{{ asset('images/facebook.png') }}"
                        class="w-8 h-8" alt="1"></a>
                <a href="#" class="text-sky-500 hover:text-sky-700"><img src="{{ asset('images/instagram.png') }}"
                        class="w-8 h-8" alt="1"></a>
                <a href="#" class="text-green-500 hover:text-green-700"><img src="{{ asset('images/whatsapp.png') }}"
                        class="w-8 h-8" alt="1"></a>
                <a href="#" class="text-gray-700 hover:text-gray-900"><i class="fas fa-link"></i></a>
            </div>
        </div> -->
    </div>

    <!-- Sidebar -->
    <aside class="lg:w-1/3 mt-8 lg:mt-0">
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold mb-4">Berita Terbaru</h2>
            <ul class="space-y-4">
                @foreach($berita_terbaru as $item)
                <li class="flex space-x-3">
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="w-16 h-16 object-cover rounded"
                        alt="{{ $item->judul }}">
                    <div>
                        <a href="{{ route('berita.detail', $item->id) }}"
                            class="text-sm font-medium hover:text-blue-700">
                            {{ Str::limit(strip_tags($item->judul), 55, '...') }}
                        </a>
                        <p class="text-xs text-gray-500">{{ $item->tanggal->translatedFormat('d M Y') }}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </aside>
</div>

@endsection
