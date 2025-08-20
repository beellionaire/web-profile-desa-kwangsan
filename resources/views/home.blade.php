@extends('layouts.app')

@section('content')

<!-- Hero Section -->

<section id="hero" class="relative w-full h-screen m-0 p-0">
    <div class="h-screen w-full bg-center bg-cover bg-no-repeat bg-gray-700 bg-blend-multiply"
        style="background-image: url('{{ asset('images/hero.jpg') }}');">
        <div class="flex items-center justify-center h-screen text-center text-white px-4">
            <div>
                <h1 class="text-3xl md:text-5xl font-extrabold leading-tight">
                    Transparansi & Akuntabilitas
                </h1>
                <p class="mt-6 text-base md:text-lg font-medium">
                    Kami berkomitmen melayani masyarakat
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Hero Section -->


<!-- Sambutan Kepala Desa -->
<section class="bg-slate-100">

    <div class="mx-auto flex flex-col h-[900px] w-screen items-center justify-center py-9 px-6">

        <!-- Header -->
        <div class="text-center mb-12 max-w-3xl">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none
                       text-gray-900 md:text-5xl lg:text-6xl">
                Sambutan Kepala Desa
            </h1>
        </div>

        <!-- Konten (Foto + Teks) -->
        <div class="sm:flex items-center max-w-screen-xl">

            <!-- Foto Kepala Desa -->
            <div class="sm:w-1/2 p-10 flex justify-center">
                <div class="image text-center">
                    <img src="{{ asset('images/kades.jpg') }}"
                        class="rounded-full w-[400px] h-[400px] object-cover shadow-lg">
                </div>
            </div>

            <!-- Teks Sambutan -->
            <div class="sm:w-1/2 p-5 flex justify-center items-center">
                <div class="text text-center sm:text-left w-full">
                    <h2 class="my-4 font-bold text-3xl sm:text-4xl">
                        ADVENTUS EKO P. LENAMA
                    </h2>
                    <span class="text-gray-500 border-b-2 border-indigo-600 capitalize font-bold text-xl">
                        Kepala Desa Kwangsan
                    </span>
                    <p class="text-gray-700 mt-9 max-h-[250px] overflow-y-auto pr-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aliquid, commodi doloremque, fugiat illum magni minus nisi nulla
                        numquam obcaecati placeat quia, repellat tempore voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aliquid, commodi doloremque, fugiat illum magni minus nisi nulla
                        numquam obcaecati placeat quia, repellat tempore voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aliquid, commodi doloremque, fugiat illum magni minus nisi nulla
                        numquam obcaecati placeat quia, repellat tempore voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aliquid, commodi doloremque, fugiat illum magni minus nisi nulla
                        numquam obcaecati placeat quia, repellat tempore voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aliquid, commodi doloremque, fugiat illum magni minus nisi nulla
                        numquam obcaecati placeat quia, repellat tempore voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aliquid, commodi doloremque, fugiat illum magni minus nisi nulla
                        numquam obcaecati placeat quia, repellat tempore voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aliquid, commodi doloremque, fugiat illum magni minus nisi nulla
                        numquam obcaecati placeat quia, repellat tempore voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aliquid, commodi doloremque, fugiat illum magni minus nisi nulla
                        numquam obcaecati placeat quia, repellat tempore voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aliquid, commodi doloremque, fugiat illum magni minus nisi nulla
                        numquam obcaecati placeat quia, repellat tempore voluptatum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aliquid, commodi doloremque, fugiat illum magni minus nisi nulla
                        numquam obcaecati placeat quia, repellat tempore voluptatum.
                    </p>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- Sambutan Kepala Desa -->



<!-- Peta Desa -->
<section class="bg-white/10">
    <div class="mx-auto flex flex-col h-[900px] w-screen items-center justify-center py-9 px-6 lg:max-w-[1500px]">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
            Peta Desa
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
            Menampilkan Peta Desa dengan Interest Point
        </p>

        <div id="map" class="w-11/12 h-[500px] mx-auto rounded-lg shadow-lg z-0"></div>

    </div>
</section>

<!-- Peta Desa -->

<!-- Struktur Organisasi -->
<section class="bg-blue-50">
    <div class="mx-auto min-h-screen w-screen text-center py-24 lg:max-w-[1500px]">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
            Struktur Perangkat Desa
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">
            Susunan perangkat desa yang berperan dalam pembangunan dan pelayanan masyarakat.
        </p>

        <div class="container mx-auto max-w-7xl mt-16 mb-16">
            <!-- Team Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse($struktur as $item)
                <div class="group">
                    <div class="relative overflow-hidden rounded-xl mb-4">
                        @if($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}"
                            class="w-full aspect-[3/4] object-cover object-center transform group-hover:scale-105 transition duration-300 ease-in-out">
                        @else
                        <img src="https://via.placeholder.com/300x400?text=No+Image" alt="{{ $item->nama }}"
                            class="w-full aspect-[3/4] object-cover object-center">
                        @endif
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-gray-800">{{ $item->nama }}</h3>
                        <p class="text-indigo-600 font-medium">{{ $item->jabatan }}</p>
                    </div>
                </div>
                @empty
                <p class="text-gray-500 col-span-4">Belum ada data struktur perangkat desa.</p>
                @endforelse
            </div>
        </div>

        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="{{ route('struktur_organisasi.index') }}"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                Selengkapnya
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Struktur Organisasi -->

<!-- Administrasi -->
<!-- <section class="bg-blue-500">
        <div class="mx-auto min-h-screen w-screen text-center py-12 lg:py-24">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                Administrasi</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Here at
                Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and
                drive economic growth.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Learn more
                </a>
            </div>
        </div>
    </section> -->
<!-- Administrasi -->


<!-- Berita Desa -->
<section class="bg-slate-100">
    <div class="mx-auto min-h-screen w-screen py-24 lg:max-w-[1500px]">
        <h1 class="mb-4 text-4xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl text-center">
            Berita Desa
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 text-center">
            Kumpulan berita terbaru dari Desa Kwangsan.
        </p>

        <div class="px-8 py-10 mx-auto lg:max-w-screen-2xl sm:max-w-xl md:max-w-full sm:px-12 md:px-16">
            <div class="grid gap-x-8 gap-y-12 sm:gap-y-16 md:grid-cols-2 lg:grid-cols-4">
                @foreach($beritas as $berita)
                <div class="relative">
                    <a href="{{ route('berita.detail', $berita->id) }}"
                        class="block overflow-hidden group rounded-xl shadow-lg">
                        <img src="{{ asset('storage/'.$berita->gambar) }}"
                            class="object-cover w-full h-56 transition-all duration-300 ease-out sm:h-64 group-hover:scale-110"
                            alt="{{ $berita->judul }}">
                    </a>
                    <div class="relative mt-5">
                        <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">
                            {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}
                        </p>
                        <a href="{{ route('berita.detail', $berita->id) }}" class="block mb-3">
                            <h2 class="text-2xl font-bold text-black leading-6 line-clamp-2">
                                {{ $berita->judul }}
                            </h2>
                        </a>
                        <p class="mb-4 text-gray-700 line-clamp-2">
                            {{ Str::limit(strip_tags($berita->deskripsi), 100, '...') }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="{{ route('berita.index') }}"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-white rounded-lg bg-blue-700 hover:bg-blue-800">
                Selengkapnya
                <svg class="w-3.5 h-3.5 ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Berita Desa -->

<!-- Potensi Desa -->

<section class="bg-blue-50">
    <div class="mx-auto h-[750px] w-full py-24 lg:max-w-[1500px]">

        <!-- Judul -->
        <div class="text-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                Potensi Desa
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">
                Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term
                value and drive economic growth.
            </p>
        </div>

        <!-- Konten Kartu -->
        <div
            class="flex flex-col sm:flex-row flex-wrap justify-center items-center gap-4 p-4 bg-slate-100 max-w-[1300px] mx-auto">

            <!-- Card 1 -->
            <a href="#" class="group relative block bg-black rounded-lg overflow-hidden">
                <img alt=""
                    src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                    class="absolute inset-0 h-full w-full rounded-lg object-cover opacity-75 transition-opacity group-hover:opacity-50" />
                <div class="relative p-4 sm:p-6 lg:p-8">
                    <p class="text-sm font-medium tracking-widest text-pink-500 uppercase">Developer</p>
                    <p class="text-xl font-bold text-white sm:text-2xl">Abdul Baset</p>
                    <div class="mt-32 sm:mt-48 lg:mt-64">
                        <div
                            class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                            <p class="text-sm text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="#" class="group relative block bg-black rounded-lg overflow-hidden">
                <img alt="" src="https://images.pexels.com/photos/14653174/pexels-photo-14653174.jpeg"
                    class="absolute inset-0 h-full w-full rounded-lg object-cover opacity-75 transition-opacity group-hover:opacity-50" />
                <div class="relative p-4 sm:p-6 lg:p-8">
                    <p class="text-sm font-medium tracking-widest text-pink-500 uppercase">Developer</p>
                    <p class="text-xl font-bold text-white sm:text-2xl">Tony Wayne</p>
                    <div class="mt-32 sm:mt-48 lg:mt-64">
                        <div
                            class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                            <p class="text-sm text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="#" class="group relative block bg-black rounded-lg overflow-hidden">
                <img alt="" src="https://images.unsplash.com/photo-1511367461989-f85a21fda167?fm=jpg&q=60&w=3000"
                    class="absolute inset-0 h-full w-full rounded-lg object-cover opacity-75 transition-opacity group-hover:opacity-50" />
                <div class="relative p-4 sm:p-6 lg:p-8">
                    <p class="text-sm font-medium tracking-widest text-pink-500 uppercase">Developer</p>
                    <p class="text-xl font-bold text-white sm:text-2xl">Billu Mao</p>
                    <div class="mt-32 sm:mt-48 lg:mt-64">
                        <div
                            class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                            <p class="text-sm text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Potensi Desa -->

<!-- Produk Desa -->
<section class="bg-blue-50">
    <div class="mx-auto w-full max-w-7xl text-center py-24 px-4">
        <!-- Judul -->
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
            UMKM Desa
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">
            Kumpulan UMKM yang ada di Desa Kwangsan untuk mendukung perekonomian masyarakat.
        </p>

        <!-- Grid UMKM -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center mt-10 mb-5">
            @forelse($umkms->take(4) as $umkm)
            <div
                class="w-72 bg-white shadow-md rounded-xl overflow-hidden duration-500 hover:scale-105 hover:shadow-xl">
                <a href="{{ route('belanja.show', $umkm->id) }}">
                    <img src="{{ $umkm->foto ? asset('storage/' . $umkm->foto) : 'https://via.placeholder.com/300x400?text=No+Image' }}"
                        alt="{{ $umkm->nama }}" class="h-80 w-72 object-cover" />
                    <div class="px-4 py-3">
                        <p class="text-lg font-bold text-black truncate capitalize">
                            {{ $umkm->nama }}
                        </p>
                        <p class="text-sm text-gray-600 mt-2 truncate">
                            {{ Str::limit(strip_tags($umkm->deskripsi), 60, '...') }}
                        </p>
                    </div>
                </a>
            </div>
            @empty
            <p class="text-gray-500 col-span-full">Belum ada data UMKM.</p>
            @endforelse
        </div>

        <!-- Tombol Lihat Semua -->
        <div class="mt-10">
            <a href="{{ route('belanja.index') }}"
                class="px-6 py-3 bg-purple-600 text-white rounded-lg shadow hover:bg-purple-700 transition">
                Lihat Semua UMKM
            </a>
        </div>
    </div>
</section>
<!-- Produk Desa -->

<!-- Galeri Desa -->
<section class="py-20 bg-white">
    <div class="mx-auto min-h-screen w-screen lg:max-w-[1500px] text-center p-24">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
            Galeri Desa
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">
            Kumpulan dokumentasi kegiatan dan potret Desa Kwangsan.
        </p>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @forelse ($galeris as $item)
            <!-- Gallery Item -->
            <div class="group relative overflow-hidden rounded-lg aspect-square">
                <img src="{{ $item->foto ? asset('storage/' . $item->foto) : 'https://via.placeholder.com/400x400?text=No+Image' }}"
                    alt="{{ $item->judul }}"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-white text-xl font-bold">{{ $item->judul }}</h3>
                        <p class="text-white/80 mt-1">
                            {{ $item->tanggal ? \Carbon\Carbon::parse($item->tanggal)->translatedFormat('F Y') :
                            $item->created_at->translatedFormat('F Y') }}
                        </p>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-gray-500 col-span-full">Belum ada foto di galeri.</p>
            @endforelse
        </div>

        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 mt-12">
            <a href="{{ route('galeri.index') }}"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                Selengkapnya
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Galeri Desa -->

@endsection



@push('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
@endpush

@push('scripts')
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    // Inisialisasi peta
    var map = L.map('map').setView([-7.6962377, 110.9715269], 15);

    // ----- Base Layers -----
    // OpenStreetMap (mirip Google Maps default)
    var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>'
    });

    // Google Street (jalan)
    var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        maxZoom: 20
    });

    // Google Satellite
    var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        maxZoom: 20
    });

    // Esri World Imagery (satelit resmi, aman)
    var esriSat = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles © Esri'
    });

    // Carto Light (tampilan modern putih bersih)
    var cartoLight = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/">OSM</a> &copy; <a href="https://carto.com/">CARTO</a>',
        subdomains: 'abcd',
        maxZoom: 20
    });

    // Default aktif: OSM
    osm.addTo(map);

    // ----- Layer Control -----
    var baseMaps = {
        "OpenStreetMap": osm,
        "Google Streets": googleStreets,
        "Google Satellite": googleSat,
        "Esri Satellite": esriSat,
        "Carto Light": cartoLight
    };

    L.control.layers(baseMaps).addTo(map);

    // // Tambahkan batas desa (contoh polygon sederhana)
    // var desaBoundary = L.polygon([
    //     [-7.6958, 110.9705],
    //     [-7.6959, 110.9732],
    //     [-7.6971, 110.9735],
    //     [-7.6975, 110.9710],
    //     [-7.6958, 110.9705] // titik terakhir sama dengan titik pertama agar tertutup
    // ], {
    //     color: "white",      // warna garis
    //     weight: 2,           // ketebalan garis
    //     fillColor: "#FF0000", // warna isi
    //     fillOpacity: 0.3     // transparansi isi
    // }).addTo(map);

    // desaBoundary.bindPopup("Batas Wilayah Desa");

    var redIcon = new L.Icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });

    L.marker([-7.250445, 112.768845], { icon: redIcon })
        .addTo(map)
        .bindPopup("Balai Desa");

</script>

@endpush
