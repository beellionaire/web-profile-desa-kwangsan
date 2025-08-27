@extends('layouts.app')

@section('content')

<!-- Galeri Desa -->
<section class="py-20 bg-white">
    <div class="mx-auto min-h-screen w-screen text-center p-24">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
            Galeri Desa
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">
            Kumpulan dokumentasi kegiatan dan potret Desa Kwangsan.
        </p>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @forelse ($galeris as $galeri)
            <!-- Gallery Item -->
            <div class="group relative overflow-hidden rounded-lg aspect-square">
                <img src="{{ $galeri->foto ? asset('storage/' . $galeri->foto) : 'https://via.placeholder.com/400x400?text=No+Image' }}"
                    alt="{{ $galeri->judul }}"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-300 text-left">
                        <h3 class="text-white text-xl font-bold">{{ $galeri->judul }}</h3>
                        <p class="text-white/80 mt-1">{{ $galeri->tanggal ?? $galeri->created_at->format('F Y') }}</p>
                    </div>
                </div>

            </div>
            @empty
            <p class="text-gray-500 col-span-full">Belum ada foto di galeri.</p>
            @endforelse
        </div>
    </div>
</section>
<!-- Galeri Desa -->

@endsection