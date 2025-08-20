@extends('admin.components.layout')

@section('title', 'Tambah UMKM')

@section('content')
<h1 class="text-2xl font-bold mb-6">Tambah UMKM</h1>

<form action="{{ route('admin.belanja.store') }}" method="POST" enctype="multipart/form-data"
    class="space-y-4 bg-white p-6 rounded shadow">
    @csrf

    <div>
        <label class="block font-semibold">Nama UMKM</label>
        <input type="text" name="nama" class="w-full border rounded p-2" value="{{ old('nama') }}" required>
        @error('nama') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block font-semibold">Foto</label>
        <input type="file" name="foto" class="w-full border rounded p-2">
        @error('foto') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block font-semibold">No HP</label>
        <input type="text" name="nohp" class="w-full border rounded p-2" value="{{ old('nohp') }}" required>
        @error('nohp') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block font-semibold">Link Google Maps</label>
        <input type="url" name="maps" class="w-full border rounded p-2" value="{{ old('maps') }}">
        @error('maps') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block font-semibold">Deskripsi</label>
        <textarea name="deskripsi" rows="4" class="w-full border rounded p-2">{{ old('deskripsi') }}</textarea>
        @error('deskripsi') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
        <a href="{{ route('admin.belanjaAdmin') }}"
            class="ml-2 px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Batal</a>
    </div>
</form>
@endsection