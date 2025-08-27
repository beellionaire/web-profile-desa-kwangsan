@extends('layouts.app')

@section('content')
<section class="bg-white">
    <div class="mx-auto min-h-screen w-screen py-36">
        <h1 class="mb-4 text-4xl font-extrabold text-center tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
            Berita Desa
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-500 text-center">
            Kumpulan berita terbaru dari Desa Kwangsan.
        </p>

        <div class="px-8 py-10 mx-auto lg:max-w-screen-2xl sm:max-w-xl md:max-w-full">
            <div class="grid gap-x-8 gap-y-12 md:grid-cols-2 lg:grid-cols-4">
                @foreach($beritas as $berita)
                <div class="relative">
                    <a href="{{ route('berita.detail', $berita->id) }}"
                        class="block overflow-hidden group rounded-xl shadow-lg">
                        <img src="{{ asset('storage/'.$berita->gambar) }}"
                            class="object-cover w-full h-56 transition-all duration-300 group-hover:scale-110"
                            alt="{{ $berita->judul }}">
                    </a>
                    <div class="relative mt-5">
                        <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">
                            {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}
                        </p>
                        <a href="{{ route('berita.detail', $berita->id) }}" class="block mb-3">
                            <h2 class="text-2xl font-bold leading-6 line-clamp-2">
                                {{ Str::limit(strip_tags($berita->judul), 70, '...') }}
                            </h2>
                        </a>
                        <p class="mb-4 text-gray-700">
                            {{ Str::limit(strip_tags($berita->deskripsi), 150, '...') }}
                        </p>
                        <a href="{{ route('berita.detail', $berita->id) }}"
                            class="font-medium underline text-purple-600">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
