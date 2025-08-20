@extends('admin.components.layout')

@section('title', 'Berita')

@section('content')
<h1 class="text-2xl font-bold mb-6">Berita</h1>

<!-- Tombol Tambah Data -->
<div class="mb-4">
    <a href="{{ route('admin.berita.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        + Tambah Berita
    </a>
</div>

<!-- Tabel Data -->
<div class="bg-white rounded shadow overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">Judul</th>
                <th class="px-4 py-2 text-left">Tanggal</th>
                <th class="px-4 py-2 text-left">Author</th>
                <th class="px-4 py-2 text-left">Gambar</th>
                <th class="px-4 py-2 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($beritas as $item)
            <tr class="border-t">
                <td class="px-4 py-2">{{ Str::limit(strip_tags($item->judul), 200, '...') }}</td>
                <td class="px-4 py-2">{{ $item->tanggal }}</td>
                <td class="px-4 py-2">{{ $item->author }}</td>
                <td class="px-4 py-2">
                    @if ($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                        class="w-12 h-12 object-cover rounded">
                    @else
                    <span class="text-gray-500">Tidak ada gambar</span>
                    @endif
                </td>
                <td class="px-4 py-2 space-x-2">
                    <a href="{{ route('admin.berita.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" class="inline"
                        onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-4 py-4 text-center text-gray-500">Belum ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
