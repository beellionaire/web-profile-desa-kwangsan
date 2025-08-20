@extends('admin.components.layout')

@section('title', 'UMKM')

@section('content')
<h1 class="text-2xl font-bold mb-6">UMKM</h1>

<!-- Tombol Tambah Data -->
<div class="mb-4">
    <a href="{{ route('admin.belanja.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        + Tambah UMKM
    </a>
</div>

<!-- Tabel Data -->
<div class="bg-white rounded shadow overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Foto</th>
                <th class="px-4 py-2">No HP</th>
                <th class="px-4 py-2">Maps</th>
                <th class="px-4 py-2">Deskripsi</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($umkms as $item)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $item->id }}</td>
                <td class="px-4 py-2">{{ $item->nama }}</td>
                <td class="px-4 py-2">
                    @if($item->foto)
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}"
                        class="w-12 h-12 object-cover rounded">
                    @else
                    -
                    @endif
                </td>
                <td class="px-4 py-2">{{ $item->nohp }}</td>
                <td class="px-4 py-2">
                    @if($item->maps)
                    <a href="{{ $item->maps }}" target="_blank" class="text-blue-500 underline">Lihat Maps</a>
                    @else
                    -
                    @endif
                </td>
                <td class="px-4 py-2">{{ Str::limit($item->deskripsi, 50) }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('admin.belanja.edit', $item->id) }}"
                        class="text-blue-500 hover:underline">Edit</a> |
                    <form action="{{ route('admin.belanja.destroy', $item->id) }}" method="POST" class="inline"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="px-4 py-4 text-center text-gray-500">Belum ada data UMKM</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection