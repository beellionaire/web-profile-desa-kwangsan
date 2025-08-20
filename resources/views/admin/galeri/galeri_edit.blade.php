@extends('admin.components.layout')

@section('title', 'Edit Galeri')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Galeri</h1>

@if ($errors->any())
<div class="mb-4 text-red-600">
    <ul>
        @foreach ($errors->all() as $error)
        <li>• {{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PUT')

    <div>
        <label for="judul" class="block font-medium">Judul</label>
        <input type="text" id="judul" name="judul" value="{{ old('judul', $galeri->judul) }}"
            class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
    </div>

    <div>
        <label for="deskripsi" class="block font-medium">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" rows="4"
            class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
    </div>

    <div>
        <label for="foto" class="block font-medium">Foto</label>
        @if($galeri->foto)
        <div class="mb-2">
            <img src="{{ asset('storage/' . $galeri->foto) }}" alt="Foto" class="w-32 h-32 object-cover rounded">
        </div>
        @endif
        <input type="file" id="foto" name="foto"
            class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">
        <p class="text-xs text-gray-500 mt-1">Kosongkan jika tidak ingin mengubah foto.</p>
    </div>

    <div class="flex space-x-3">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Perbarui
        </button>
        <a href="{{ route('galeriAdmin') }}" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">