@extends('admin.components.layout')

@section('title', 'Tambah Profil Desa')

@section('content')
<h1 class="text-2xl font-bold mb-6">Tambah Profil Desa</h1>

@if ($errors->any())
<div class="mb-4 bg-red-100 text-red-700 p-3 rounded">
    <ul class="list-disc pl-5">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.profil_desa.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf

    <div>
        <label class="block font-semibold">Nama Kepala Desa</label>
        <input type="text" name="nama_desa" value="{{ old('nama_desa') }}" class="w-full border rounded px-3 py-2">
    </div>

    <div>
        <label class="block font-semibold">Kata Sambutan</label>
        <textarea name="kata_sambutan" rows="3"
            class="w-full border rounded px-3 py-2">{{ old('kata_sambutan') }}</textarea>
    </div>

    <div>
        <label class="block font-semibold">Visi</label>
        <textarea name="visi" rows="3" class="w-full border rounded px-3 py-2">{{ old('visi') }}</textarea>
    </div>

    <div>
        <label class="block font-semibold">Misi</label>
        <textarea name="misi" rows="3" class="w-full border rounded px-3 py-2">{{ old('misi') }}</textarea>
    </div>

    <div>
        <label class="block font-semibold">Foto</label>
        <input type="file" name="foto" class="w-full border rounded px-3 py-2">
    </div>

    <div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Simpan
        </button>
    </div>
</form>
@endsection