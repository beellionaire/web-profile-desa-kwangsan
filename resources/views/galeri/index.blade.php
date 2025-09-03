@extends('layouts.app')

@section('content')

<!-- Galeri Desa -->
<section class="bg-white/10">
    <div class="mx-auto min-h-screen w-full py-24 lg:max-w-[1500px]">
        <h1
            class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl text-center">
            Galeri Desa
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 text-center">
            Kumpulan dokumentasi kegiatan dan potret Desa Kwangsan.
        </p>

        <div class="px-8 py-10 mx-auto lg:max-w-screen-2xl sm:max-w-xl md:max-w-full sm:px-12 md:px-16">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @forelse ($galeris as $item)
                <!-- Gallery Item -->
                <div class="group relative overflow-hidden rounded-lg aspect-square">
                    <img src="{{ $item->foto ? asset('storage/' . $item->foto) : 'https://via.placeholder.com/400x400?text=No+Image' }}"
                        alt="{{ $item->judul }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300
                        flex items-end justify-start p-6">
                        <div
                            class="translate-y-4 group-hover:translate-y-0 transition-transform duration-300 text-left">
                            <h3 class="text-white text-xl font-bold">{{ $item->judul }}</h3>
                            <p class="text-white/80 mt-1">
                                {{ $item->tanggal ? \Carbon\Carbon::parse($item->tanggal)->translatedFormat('F Y') :
                                $item->created_at->translatedFormat('F Y') }}
                            </p>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-gray-500 col-span-full text-center">Belum ada foto di galeri.</p>
                @endforelse
            </div>


        </div>
    </div>
</section>
<!-- Galeri Desa -->

@endsection