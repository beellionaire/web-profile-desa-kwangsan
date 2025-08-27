@extends('admin.components.layout')

@section('title', 'Tambah Potensi')

@section('content')
<h1 class="text-2xl font-bold mb-6">Tambah Potensi</h1>

<form action="{{ route('admin.potensi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf

    <div>
        <label class="block font-semibold">Judul</label>
        <input type="text" name="judul" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label class="block font-semibold">Kategori</label>
        <input type="text" name="kategori" class="w-full border rounded p-2">
    </div>

    <div>
        <label class="block font-semibold">Deskripsi Singkat</label>
        <textarea name="deskripsi" class="w-full border rounded p-2"></textarea>
    </div>

    <div>
        <label class="block font-semibold">Konten Lengkap</label>
        <textarea name="konten" class="w-full border rounded p-2" rows="6"></textarea>
    </div>

    <div>
        <label class="block font-semibold">Gambar</label>
        <input type="file" name="gambar" class="w-full border rounded p-2">
    </div>

    <div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan</button>
        <a href="{{ route('admin.potensiAdmin') }}"
            class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Batal</a>
    </div>
</form>
@endsection