<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Homepage' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="bg-gray-50 min-h-screen w-screen flex flex-col overflow-x-hidden">

    <!-- Navbar -->
    <nav id="navbar" class="fixed w-full z-50 transition-colors duration-300 bg-blue-700">
        <div class="w-screen flex flex-wrap items-center justify-between mx-auto p-6">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo_kab_kra.png') }}" alt="Logo" class="h-10 w-auto">
                <span class="self-center text-2xl whitespace-nowrap text-white font-bold">Desa Kwangsan</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-blue-200 rounded-lg bg-transparent md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                    <li>
                        <a href="{{ route('home') }}" class="block py-2 px-3 text-white hover:text-gray-200"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('profilDesa.index') }}"
                            class="block py-2 px-3 text-white hover:text-gray-200">Profil Desa</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('infografis.index') }}"
                            class="block py-2 px-3 text-white hover:text-gray-200">Infografis</a>
                    </li> --}}
                    <li>
                        <a href="{{ route('berita.index') }}"
                            class="block py-2 px-3 text-white hover:text-gray-200">Berita</a>
                    </li>
                    <li>
                        <a href="{{ route('belanja.index') }}"
                            class="block py-2 px-3 text-white hover:text-gray-200">UMKM</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="mx-auto flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white">
        <div class="mx-auto max-w-[1700px] px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- Kolom 1: Logo & Alamat -->
            <div>
                <img src="{{ asset('images/logo_kab_kra.png') }}" alt="Logo" class="h-16 mb-4">
                <h2 class="font-bold text-xl">Pemerintah Desa Kwangsan</h2>
                <p class="text-sm mt-2">
                    Jl. Raya Jumapolo-Karanganyar No.KM. 4<br>
                    Sembuh, Kwangsan, Kec. Jumapolo <br>
                    Kabupaten Karanganyar <br>
                    Jawa Tengah 57783
                </p>
            </div>

            <!-- Kolom 2: Hubungi Kami -->
            <div>
                <h2 class="font-bold text-lg mb-4">Hubungi Kami</h2>
                <p class="flex items-center gap-2">(0812) 1234 1234</p>
                <p class="flex items-center gap-2 mt-2">
                    <a href="mailto:kersik.marangkay@kukarkab.go.id" class="hover:underline">
                        desa.kwangsan@gmail.com
                    </a>
                </p>
                <div class="flex gap-4 mt-4">
                    <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="{{ route('admin.login') }}"
                        class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Login Admin</span>
                    </a>
                </div>
            </div>

            <!-- Kolom 3: Nomor Penting -->
            <div>
                <h2 class="font-bold text-lg mb-4">Berita</h2>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:underline">Berita Terkini</a></li>
                    <li><a href="#" class="hover:underline">Daftar UMKM</a></li>
                </ul>
            </div>

            <!-- Kolom 4: Jelajahi -->
            <div>
                <h2 class="font-bold text-lg mb-4">Jelajahi</h2>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:underline">Profil Desa Kwangsan</a></li>
                    <li><a href="#" class="hover:underline">Visi Misi Desa Kwangsan</a></li>
                    <li><a href="#" class="hover:underline">Potensi Desa Kwangsan</a></li>
                    <li><a href="#" class="hover:underline">Galeri Desa Kwangsan</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center text-sm py-4 bg-blue-900">
            © 2025 KKN 28 Universitas Muhammadiyah Karanganyar™
        </div>
    </footer>


    <!-- Tombol Pengaduan -->
    <button id="btnPengaduan"
        class="fixed bottom-5 right-5 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-full shadow-lg flex items-center space-x-2 z-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2m6 4l4-4m0 0l-4-4m4 4H9" />
        </svg>
        <span>Pengaduan</span>
    </button>

    <!-- Modal Floating Bottom Right -->
    <div id="modalPengaduan" class="hidden fixed bottom-16 right-5 w-96 bg-white border rounded-lg shadow-xl z-50">
        <div class="flex justify-between items-center border-b px-4 py-2">
            <h2 class="font-bold">Form Pengaduan</h2>
            <button id="closePengaduan" class="text-gray-500 hover:text-gray-800">✕</button>
        </div>
        <div class="p-4">
            <form>
                <div class="mb-3">
                    <label class="block text-sm font-medium">Nama *</label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2" required>
                </div>
                <div class="mb-3">
                    <label class="block text-sm font-medium">Nomor Telepon/WA *</label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2" required>
                </div>
                <div class="mb-3">
                    <label class="block text-sm font-medium">Pengaduan *</label>
                    <textarea class="w-full border rounded-lg px-3 py-2" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="block text-sm font-medium">Lampiran</label>
                    <input type="file" class="w-full border rounded-lg px-3 py-2">
                </div>
                <div class="text-right">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('btnPengaduan').addEventListener('click', function () {
            document.getElementById('modalPengaduan').classList.toggle('hidden');
        });
        document.getElementById('closePengaduan').addEventListener('click', function () {
            document.getElementById('modalPengaduan').classList.add('hidden');
        });
    </script>


    @stack('scripts')
</body>

</html>