@extends('admin.components.layout')

@section('title', 'Edit Anggota Struktur')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Anggota</h1>

<form action="{{ route('admin.struktur.update', $struktur->id) }}" method="POST" enctype="multipart/form-data"
    class="space-y-4">
    @csrf
    @method('PUT')
    <div>
        <label class="block font-semibold">Nama</label>
        <input type="text" name="nama" class="w-full border p-2 rounded" value="{{ old('nama', $struktur->nama) }}">
    </div>
    <div>
        <label class="block font-semibold">Jabatan</label>
        <input type="text" name="jabatan" class="w-full border p-2 rounded"
            value="{{ old('jabatan', $struktur->jabatan) }}">
    </div>
    <div>
        <label class="block font-semibold">Foto</label>
        @if ($struktur->foto)
        <img src="{{ asset('storage/' . $struktur->foto) }}" alt="" class="w-20 h-20 object-cover mb-2">
        @endif
        <input type="file" name="foto" class="w-full border p-2 rounded">
    </div>
    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
</form>
@endsection