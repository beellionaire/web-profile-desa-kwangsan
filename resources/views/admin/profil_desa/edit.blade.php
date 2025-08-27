@extends('admin.components.layout')

@section('title', 'Edit Profil Desa')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Profil Desa</h1>

@if ($errors->any())
<div class="bg-red-100 text-red-700 p-3 rounded mb-4">
    <ul class="list-disc pl-5">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.profil_desa.update', $profil->id) }}" method="POST" enctype="multipart/form-data"
    class="space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="block text-sm font-medium text-gray-700">Nama Kepala Desa</label>
        <input type="text" name="nama_desa" value="{{ old('nama_desa', $profil->nama_desa) }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Foto Desa</label>
        @if($profil->foto)
        <img src="{{ asset('storage/' . $profil->foto) }}" class="w-32 h-32 object-cover mb-2 rounded">
        @endif
        <input type="file" name="foto" class="block w-full text-sm text-gray-700">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Kata Sambutan</label>
        <textarea name="kata_sambutan" rows="4"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ old('kata_sambutan', $profil->kata_sambutan) }}</textarea>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Visi</label>
        <textarea name="visi" rows="3"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ old('visi', $profil->visi) }}</textarea>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Misi</label>
        <textarea name="misi" rows="3"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ old('misi', $profil->misi) }}</textarea>
    </div>

    <div class="flex justify-end">
        <a href="{{ route('admin.profilDesaAdmin') }}" class="px-4 py-2 bg-gray-300 rounded mr-2">Batal</a>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Simpan Perubahan</button>
    </div>
</form>
@endsection
