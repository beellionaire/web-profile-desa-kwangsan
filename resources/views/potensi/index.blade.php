@extends('layouts.app')

@section('content')
<section class="bg-blue-50">
    <div class="mx-auto min-h-screen w-screen py-32">
        <div class="text-center">
            <h1
                class="mb-4 text-4xl font-extrabold text-center tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                Potensi Desa
            </h1>
            <p class="mb-8 text-lg text-gray-500">
                Informasi tentang potensi desa yang dapat mendukung pembangunan dan kesejahteraan masyarakat.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row flex-wrap justify-center items-center gap-6 p-6 bg-slate-100 rounded-lg">
            @forelse($potensis as $item)
            <a href="{{ route('potensi.detail', $item->slug) }}"
                class="group relative block bg-black rounded-lg overflow-hidden w-full sm:w-[300px]">
                <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('images/default.png') }}"
                    alt="{{ $item->judul }}"
                    class="absolute inset-0 h-full w-full object-cover opacity-75 transition group-hover:opacity-50 rounded-lg" />

                <div class="relative p-4 sm:p-6 lg:p-8">
                    <p class="text-sm font-extrabold tracking-widest text-blue-600 uppercase">
                        <span class="bg-yellow-300 text-gray-800 px-2 py-1 rounded">
                            {{ $item->kategori ?? 'Potensi Desa' }}
                        </span>
                    </p>
                    <p class="text-xl font-bold text-white sm:text-2xl">{{ $item->judul }}</p>

                    <div class="mt-32 sm:mt-40 lg:mt-52">
                        <div
                            class="translate-y-8 transform opacity-0 transition-all duration-300 group-hover:translate-y-0 group-hover:opacity-100">
                            <p class="text-sm text-white">
                                {{ Str::limit($item->deskripsi, 100, '...') }}
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            @empty
            <p class="text-gray-500 text-center w-full">Belum ada data potensi desa.</p>
            @endforelse
        </div>

        <div class="mt-8">{{ $potensis->links() }}</div>
    </div>
</section>
@endsection