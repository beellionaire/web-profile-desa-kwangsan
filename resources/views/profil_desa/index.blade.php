@extends('layouts.app')

@section('content')

<!-- Profil Desa -->
<section class="bg-white">
    <div class="mx-auto min-h-screen w-screen text-center py-36">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
            Profil Desa
        </h1>

        <!-- VISI -->
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-12">
            <div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm md:text-3xl text-indigo-500 font-extrabold">Visi</div>
                    <p class="mt-2 text-black font-semibold">
                        {{ $profil ? ($profil->visi ?: 'Visi belum diisi.') : 'Visi belum tersedia.' }}
                    </p>
                </div>
            </div>
        </div>

        <!-- MISI -->
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-12">
            <div>
                <div class="p-8 text-left">
                    <div class="uppercase text-center tracking-wide text-sm md:text-3xl text-indigo-500 font-extrabold">
                        Misi
                    </div>
                    <p class="mt-2 text-black whitespace-pre-line font-semibold">
                        {{ $profil ? ($profil->misi ?: 'Misi belum diisi.') : 'Misi belum tersedia.' }}
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection