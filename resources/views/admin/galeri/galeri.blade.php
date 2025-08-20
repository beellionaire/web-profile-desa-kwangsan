@extends('admin.components.layout')

@section('title', 'Galeri')

@section('content')
<h1 class="text-2xl font-bold mb-6">Galeri</h1>

<!-- Tombol Tambah Data -->
<div class="mb-4">
    <a href="{{ route('admin.galeri.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        + Tambah Galeri
    </a>
</div>

<!-- Pesan Sukses -->
@if(session('success'))
<div class="mb-4 text-green-600">{{ session('success') }}</div>
@endif

<!-- Tabel Data -->
<div class="bg-white rounded shadow overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">Judul</th>
                <th class="px-4 py-2 text-left">Deskripsi</th>
                <th class="px-4 py-2 text-left">Foto</th>
                <th class="px-4 py-2 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($galeri as $item)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $item->judul }}</td>
                <td class="px-4 py-2">{{ Str::limit(strip_tags($item->deskripsi), 50) }}</td>
                <td class="px-4 py-2">
                    @if($item->foto)
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto" class="w-16 h-16 object-cover rounded">
                    @else
                    <span class="text-gray-400">Tidak ada</span>
                    @endif
                </td>
                <td class="px-4 py-2 flex space-x-2">
                    <a href="{{ route('admin.galeri.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST" class="inline"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="px-4 py-4 text-center text-gray-500">Belum ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection