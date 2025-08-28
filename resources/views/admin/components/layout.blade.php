<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Kwangsan | Admin - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-blue-800 text-white">
                <div class="flex items-center justify-center h-16 px-4 bg-blue-900">
                    <span class="text-xl font-semibold">Admin</span>
                </div>
                <div class="flex flex-col flex-grow px-4 py-4 overflow-y-auto">
                    <nav class="flex-1 space-y-2">
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2 text-sm font-medium rounded-md
        {{ request()->routeIs('admin.dashboard') ? 'bg-blue-900 text-yellow-300' : 'hover:bg-blue-700 text-white' }}">
                            Dashboard
                        </a>
                        <a href="{{ route('admin.strukturAdmin') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-md
        {{ request()->routeIs('admin.strukturAdmin') ? 'bg-blue-900 text-yellow-300' : 'hover:bg-blue-700 text-white' }}">
                            Struktur Organisasi
                        </a>
                        <a href="{{ route('admin.berita.index') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-md
        {{ request()->routeIs('admin.berita.index') ? 'bg-blue-900 text-yellow-300' : 'hover:bg-blue-700 text-white' }}">
                            Berita
                        </a>
                        <a href="{{ route('admin.belanjaAdmin') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-md
        {{ request()->routeIs('admin.belanjaAdmin') ? 'bg-blue-900 text-yellow-300' : 'hover:bg-blue-700 text-white' }}">
                            UMKM
                        </a>
                        <a href="{{ route('admin.galeriAdmin') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-md
        {{ request()->routeIs('admin.galeriAdmin') ? 'bg-blue-900 text-yellow-300' : 'hover:bg-blue-700 text-white' }}">
                            Galeri
                        </a>
                        <a href="{{ route('admin.potensiAdmin') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-md
        {{ request()->routeIs('admin.potensiAdmin') ? 'bg-blue-900 text-yellow-300' : 'hover:bg-blue-700 text-white' }}">
                            Potensi
                        </a>
                        <a href="{{ route('admin.profilDesaAdmin') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-md
        {{ request()->routeIs('admin.profilDesaAdmin') ? 'bg-blue-900 text-yellow-300' : 'hover:bg-blue-700 text-white' }}">
                            Profil Desa
                        </a>
                        {{-- <a href="{{ route('admin.pengaduanAdmin') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-md
        {{ request()->routeIs('admin.pengaduanAdmin') ? 'bg-blue-900 text-yellow-300' : 'hover:bg-blue-700 text-white' }}">
                            Pengaduan
                        </a> --}}
                    </nav>

                    <!-- Logout Button -->
                    <div class="p-4 border-t border-blue-700">
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="flex items-center w-full px-4 py-2 text-sm font-medium rounded-md bg-red-600 hover:bg-red-700 text-white">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </button>
                        </form>
                    </div>


                </div>
                {{-- <div class="p-4 border-t border-blue-700">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/women/11.jpg"
                            alt="User">
                        <div class="ml-3">
                            <p class="text-sm font-medium">Sarah Johnson</p>
                            <p class="text-xs text-blue-200">Admin</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>