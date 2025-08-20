@extends('admin.components.layout')

@section('title', 'Struktur Organisasi')

@section('content')
<h1 class="text-2xl font-bold mb-6">Struktur Organisasi</h1>

<!-- Tombol Tambah Data -->
<div class="mb-4">
    <a href="" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        + Tambah Anggota
    </a>
</div>

<!-- Tabel Data -->
<div class="bg-white rounded shadow overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">Nama</th>
                <th class="px-4 py-2 text-left">Jabatan</th>
                <th class="px-4 py-2 text-left">Foto</th>
                <th class="px-4 py-2 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($struktur as $item)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $item->nama }}</td>
                <td class="px-4 py-2">{{ $item->jabatan }}</td>
                {{-- <td class="px-4 py-2">
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto {{ $item->nama }}"
                        class="w-12 h-12 object-cover rounded-full">
                </td> --}}
                <td class="px-4 py-2">
                    {{-- <a href="{{ route('admin.struktur.edit', $item->id) }}"
                        class="text-blue-500 hover:underline">Edit</a> --}}
                    |
                    {{-- <form action="{{ route('admin.struktur.destroy', $item->id) }}" method="POST" class="inline"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                    </form> --}}
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
