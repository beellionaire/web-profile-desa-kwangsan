@extends('admin.components.layout')

@section('title', 'Profil Desa')

@section('content')
<h1 class="text-2xl font-bold mb-6">Profil Desa</h1>

<!-- Tombol Edit -->
<div class="mb-4">
    @if($profil)
    <a href="{{ route('admin.profil_desa.edit', $profil->id) }}"
        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        Edit Profil
    </a>
    @else
    <a href="{{ route('admin.profil_desa.create') }}"
        class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
        Tambah Profil
    </a>
    @endif
</div>

<!-- Tabel Data -->
<div class="bg-white rounded shadow overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">Nama Kepala Desa</th>
                <th class="px-4 py-2 text-left">Foto</th>
                <th class="px-4 py-2 text-left">Kata Sambutan</th>
                <th class="px-4 py-2 text-left">Visi</th>
                <th class="px-4 py-2 text-left">Misi</th>
            </tr>
        </thead>
        <tbody>
            @if($profil)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $profil->nama_desa }}</td>
                <td class="px-4 py-2">
                    @if($profil->foto)
                    <img src="{{ asset('storage/' . $profil->foto) }}" alt="Foto Desa"
                        class="w-16 h-16 object-cover rounded">
                    @else
                    <span class="text-gray-400">Tidak ada</span>
                    @endif
                </td>
                <td class="px-4 py-2">{{ Str::limit($profil->kata_sambutan, 50) }}</td>
                <td class="px-4 py-2">{{ Str::limit($profil->visi, 50) }}</td>
                <td class="px-4 py-2">{{ Str::limit($profil->misi, 50) }}</td>
            </tr>
            @else
            <tr>
                <td colspan="5" class="px-4 py-4 text-center text-gray-500">Belum ada data profil desa</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
