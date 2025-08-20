@extends('layouts.app')

@section('content')

<body class="bg-white">
    <section class="py-20 px-4">
        <div class="container mx-auto max-w-7xl mt-16">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                    Struktur Organisasi
                </h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">
                    Susunan kepengurusan desa yang bekerja sama untuk mencapai visi dan misi.
                </p>
            </div>

            <!-- Team Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse ($struktur as $item)
                <div class="group">
                    <div class="relative overflow-hidden rounded-xl mb-4">
                        <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('/images/default.jpg') }}"
                            alt="Foto {{ $item->nama }}"
                            class="w-full aspect-[3/4] object-cover object-center transform group-hover:scale-105 transition duration-300 ease-in-out">
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-gray-800">{{ $item->nama }}</h3>
                        <p class="text-indigo-600 font-medium">{{ $item->jabatan }}</p>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center text-gray-500">
                    Belum ada data struktur organisasi.
                </div>
                @endforelse
            </div>
        </div>
    </section>
</body>
@endsection
