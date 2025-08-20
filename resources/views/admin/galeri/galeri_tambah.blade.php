@extends('admin.components.layout')

@section('title', 'Tambah Galeri')

@section('content')
<h1 class="text-2xl font-bold mb-6">Tambah Galeri</h1>

@if ($errors->any())
<div class="mb-4 text-red-600">
    <ul>
        @foreach ($errors->all() as $error)
        <li>• {{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf

    <div>
        <label for="judul" class="block font-medium">Judul</label>
        <input type="text" id="judul" name="judul" value="{{ old('judul') }}"
            class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
    </div>

    <div>
        <label for="deskripsi" class="block font-medium">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" rows="4"
            class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('deskripsi') }}</textarea>
    </div>

    <div>
        <label for="foto" class="block font-medium">Foto</label>
        <input type="file" id="foto" name="foto"
            class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">
    </div>

    <div class="flex space-x-3">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Simpan
        </button>
        <a href="{{ route('admin.galeriAdmin') }}" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">
            Batal
        </a>
    </div>
</form>
@endsection
