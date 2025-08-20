@extends('admin.components.layout')

@section('title', 'Edit UMKM')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit UMKM</h1>

<form action="{{ route('admin.belanja.update', $belanja->id) }}" method="POST" enctype="multipart/form-data"
    class="space-y-4 bg-white p-6 rounded shadow">
    @csrf
    @method('PUT')

    <div>
        <label class="block font-semibold">Nama UMKM</label>
        <input type="text" name="nama" class="w-full border rounded p-2" value="{{ old('nama', $belanja->nama) }}"
            required>
        @error('nama') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block font-semibold">Foto</label>
        @if($belanja->foto)
        <img src="{{ asset('storage/' . $belanja->foto) }}" alt="{{ $belanja->nama }}"
            class="w-20 h-20 object-cover rounded mb-2">
        @endif
        <input type="file" name="foto" class="w-full border rounded p-2">
        @error('foto') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block font-semibold">No HP</label>
        <input type="text" name="nohp" class="w-full border rounded p-2" value="{{ old('nohp', $belanja->nohp) }}"
            required>
        @error('nohp') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block font-semibold">Link Google Maps</label>
        <input type="url" name="maps" class="w-full border rounded p-2" value="{{ old('maps', $belanja->maps) }}">
        @error('maps') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block font-semibold">Deskripsi</label>
        <textarea name="deskripsi" rows="4"
            class="w-full border rounded p-2">{{ old('deskripsi', $belanja->deskripsi) }}</textarea>
        @error('deskripsi') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>

    <div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        <a href="{{ route('admin.belanjaAdmin') }}"
            class="ml-2 px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Batal</a>
    </div>
</form>
@endsection