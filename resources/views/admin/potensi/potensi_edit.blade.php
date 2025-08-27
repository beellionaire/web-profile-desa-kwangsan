@extends('admin.components.layout')

@section('title', 'Edit Potensi')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Potensi</h1>

<form action="{{ route('admin.potensi.update', $potensis->id) }}" method="POST" enctype="multipart/form-data"
    class="space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="block font-semibold">Judul</label>
        <input type="text" name="judul" class="w-full border rounded p-2" value="{{ old('judul', $potensis->judul) }}"
            required>
    </div>

    <div>
        <label class="block font-semibold">Kategori</label>
        <input type="text" name="kategori" class="w-full border rounded p-2"
            value="{{ old('kategori', $potensis->kategori) }}">
    </div>

    <div>
        <label class="block font-semibold">Deskripsi Singkat</label>
        <textarea name="deskripsi"
            class="w-full border rounded p-2">{{ old('deskripsi', $potensis->deskripsi) }}</textarea>
    </div>

    <div>
        <label class="block font-semibold">Konten Lengkap</label>
        <textarea name="konten" class="w-full border rounded p-2"
            rows="6">{{ old('konten', $potensis->konten) }}</textarea>
    </div>

    <div>
        <label class="block font-semibold">Gambar</label>
        @if($potensis->gambar)
        <img src="{{ asset('storage/' . $potensis->gambar) }}" class="w-32 h-32 object-cover rounded mb-2">
        @endif
        <input type="file" name="gambar" class="w-full border rounded p-2">
    </div>

    <div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update</button>
        <a href="{{ route('admin.potensiAdmin') }}"
            class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Batal</a>
    </div>
</form>
@endsection
