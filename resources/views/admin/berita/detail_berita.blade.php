@extends('components.layout')

@section('title', $berita->judul)

@section('content')
<div class="container mx-auto py-8 px-4 lg:flex lg:gap-8">
    <!-- Konten Utama -->
    <div class="lg:w-2/3 bg-white p-6 rounded-lg shadow">
        <!-- Judul -->
        <h1 class="text-2xl font-bold text-gray-900 mb-2">{{ $berita->judul }}</h1>
        <div class="flex items-center text-sm text-gray-500 space-x-4 mb-4">
            <span><i class="fa-regular fa-calendar"></i> {{ $berita->tanggal->translatedFormat('d M Y') }}</span>
            <span>Ditulis oleh <strong>{{ $berita->penulis }}</strong></span>
            <span><i class="fa-regular fa-eye"></i> Dilihat {{ number_format($berita->views) }} kali</span>
        </div>

        <!-- Gambar -->
        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
            class="w-full h-auto rounded-lg mb-6">

        <!-- Konten -->
        <div class="prose max-w-none">
            {!! $berita->konten !!}
        </div>

        <!-- Bagikan -->
        <div class="mt-6 border-t pt-4">
            <span class="font-semibold">Bagikan:</span>
            <div class="flex space-x-3 mt-2">
                <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-sky-500 hover:text-sky-700"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-green-500 hover:text-green-700"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="text-gray-700 hover:text-gray-900"><i class="fas fa-link"></i></a>
            </div>
        </div>
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
                        <a href="{{ route('berita.show', $item->slug) }}"
                            class="text-sm font-medium hover:text-blue-700">
                            {{ $item->judul }}
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
