@extends('admin.components.layout')

@section('title', 'Tambah Anggota Struktur')

@section('content')
<h1 class="text-2xl font-bold mb-6">Tambah Anggota</h1>

<form action="{{ route('admin.struktur.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <div>
        <label class="block font-semibold">Nama</label>
        <input type="text" name="nama" class="w-full border p-2 rounded" value="{{ old('nama') }}">
    </div>
    <div>
        <label class="block font-semibold">Jabatan</label>
        <input type="text" name="jabatan" class="w-full border p-2 rounded" value="{{ old('jabatan') }}">
    </div>
    <div>
        <label class="block font-semibold">Foto</label>
        <input type="file" name="foto" class="w-full border p-2 rounded">
    </div>
    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded">Simpan</button>
</form>
@endsection
