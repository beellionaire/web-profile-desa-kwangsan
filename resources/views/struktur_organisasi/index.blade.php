@extends('layouts.app')

@section('content')
<section class="bg-white/10">
    <div class="mx-auto w-full min-h-screen py-24 lg:max-w-[1500px] px-8 sm:px-12 md:px-16 text-center">
        <!-- Section Header -->
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
            Struktur Perangkat Desa
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">
            Susunan kepengurusan desa yang bekerja sama untuk mencapai visi dan misi.
        </p>

        <!-- Team Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-12 mb-16">
            @forelse ($struktur as $item)
            <div class="group">
                <div class="relative overflow-hidden rounded-xl mb-4">
                    <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('images/default.png') }}"
                        alt="Foto {{ $item->nama }}"
                        class="w-full aspect-[3/4] object-contain object-center rounded-lg shadow">
                </div>
                <div class="text-center">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-800">{{ $item->nama }}</h3>
                    <p class="text-indigo-600 font-medium text-sm sm:text-base">{{ $item->jabatan }}</p>
                </div>
            </div>
            @empty
            <p class="text-gray-500 col-span-full">Belum ada data struktur perangkat desa.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
