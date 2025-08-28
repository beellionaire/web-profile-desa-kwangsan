@extends('layouts.app')

@section('content')

<section class="bg-blue-50">
    <div class="mx-auto min-h-screen w-screen text-center py-36">
        <!-- Judul -->
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
            UMKM Desa
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">
            Kumpulan UMKM yang ada di Desa Kwangsan untuk mendukung perekonomian masyarakat.
        </p>

        <!-- Grid UMKM -->
        <div
            class="w-fit mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 justify-items-center gap-y-20 gap-x-14 mt-10 mb-5">
            @forelse($umkms as $umkm)
            <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                <a href="{{ route('belanja.show', $umkm->id) }}">
                    <!-- Gambar UMKM -->
                    <img src="{{ $umkm->foto ? asset('storage/' . $umkm->foto) : 'https://via.placeholder.com/300x400?text=No+Image' }}"
                        alt="{{ $umkm->nama }}" class="h-80 w-72 object-cover rounded-t-xl" />

                    <!-- Konten UMKM -->
                    <div class="px-4 py-3 w-72">
                        <p class="text-lg font-bold text-black capitalize">
                            {{ $umkm->nama }}
                        </p>
                    </div>
                </a>
            </div>
            @empty
            <p class="text-gray-500 col-span-full">Belum ada data UMKM.</p>
            @endforelse
        </div>
    </div>
</section>

@endsection
