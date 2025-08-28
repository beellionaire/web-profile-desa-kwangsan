@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-8 px-4 mt-24 mb-5">
    <div class="bg-white p-6 rounded-lg shadow">

        <!-- Judul -->
        <h1 class="text-3xl font-bold text-gray-900 mb-4">
            {{ $potensis->deskripsi }}
        </h1>

        <!-- Gambar -->
        @if($potensis->gambar)
        <img src="{{ asset('storage/' . $potensis->gambar) }}" alt="{{ $potensis->judul }}"
            class="w-full h-auto rounded-lg mb-6">
        @endif

        <!-- Konten -->
        <div class="prose max-w-none whitespace-pre-line">
            {!! $potensis->konten !!}
        </div>
    </div>
</div>
@endsection
