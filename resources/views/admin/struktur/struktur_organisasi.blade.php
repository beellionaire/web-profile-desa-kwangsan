@extends('admin.components.layout')

@section('title', 'Struktur Organisasi')

@section('content')
<h1 class="text-2xl font-bold mb-6">Struktur Organisasi</h1>

<a href="{{ route('admin.struktur.create') }}"
    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-green-700 mb-4 inline-block">
    + Tambah Anggota
</a>

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
                <td class="px-4 py-2">
                    @if ($item->foto)
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}"
                        class="w-12 h-12 rounded-full object-cover">
                    @else
                    <span class="text-gray-500">-</span>
                    @endif
                </td>
                <td class="px-4 py-2">
                    <a href="{{ route('admin.struktur.edit', $item->id) }}"
                        class="text-blue-500 hover:underline">Edit</a> |
                    <form action="{{ route('admin.struktur.destroy', $item->id) }}" method="POST" class="inline"
                        onsubmit="return confirm('Yakin ingin menghapus?')">
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
