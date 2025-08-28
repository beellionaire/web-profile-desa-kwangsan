@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow py-8 my-40">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div class="h-[460px] rounded-lg bg-gray-300 mb-4">
                    @if($umkm->foto)
                    <img class="w-full h-full object-cover" src="{{ asset('storage/' . $umkm->foto) }}"
                        alt="{{ $umkm->nama }}">
                    @else
                    <img class="w-full h-full object-cover" src="https://via.placeholder.com/600x400?text=No+Image"
                        alt="{{ $umkm->nama }}">
                    @endif
                </div>
            </div>

            <div class="md:flex-1 px-4">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $umkm->nama }}</h2>

                <div class="flex mb-4">
                    <div class="mr-6">
                        <span class="font-bold text-gray-700">Kontak:</span>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $umkm->nohp) }}" target="_blank"
                            class="text-green-600 hover:underline">
                            {{ $umkm->nohp }}
                        </a>
                    </div>
                    <div>
                        <span class="font-bold text-gray-700">Lokasi:</span>
                        @if($umkm->maps)
                        <a href="{{ $umkm->maps }}" target="_blank" class="text-blue-600 hover:underline">Lihat di
                            Maps</a>
                        @else
                        <span class="text-gray-500">-</span>
                        @endif
                    </div>
                </div>

                <div>
                    <span class="font-bold text-gray-700">Deskripsi UMKM:</span>
                    <p class="text-gray-600 text-sm mt-2 whitespace-pre-line text-justify">
                        {{ $umkm->deskripsi ?? 'Tidak ada deskripsi.' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
