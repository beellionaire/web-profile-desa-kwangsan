@extends('admin.components.layout')

@section('title', 'Edit Berita')

@section('content')

<div class="container mx-auto p-4">
    <!-- Page Title -->
    <h1 class="text-3xl font-bold text-black mb-6">Edit Berita</h1>

    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data"
        class="grid grid-cols-1 gap-6">
        @csrf
        @method('PUT')

        <!-- Judul -->
        <div class="p-2">
            <label class="block font-semibold mb-2">Judul Berita</label>
            <input type="text" name="judul" placeholder="Judul Berita" value="{{ old('judul', $berita->judul) }}"
                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] p-2 bg-[#f6f6f6]">
            @error('judul')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Deskripsi -->
        <div class="p-2">
            <label class="block font-semibold mb-2">Isi Berita</label>
            <textarea name="deskripsi" rows="6" placeholder="Tulis isi berita..."
                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] p-2 bg-[#f6f6f6]">{{ old('deskripsi', $berita->deskripsi) }}</textarea>
            @error('deskripsi')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tanggal -->
        <div class="p-2">
            <label class="block font-semibold mb-2">Tanggal</label>
            <input type="date" name="tanggal" value="{{ old('tanggal', $berita->tanggal) }}"
                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] p-2 bg-[#f6f6f6]">
            @error('tanggal')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Author -->
        <div class="p-2">
            <label class="block font-semibold mb-2">Author</label>
            <input type="text" name="author" placeholder="Nama Penulis" value="{{ old('author', $berita->author) }}"
                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] p-2 bg-[#f6f6f6]">
            @error('author')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Gambar -->
        <div class="p-2">
            <label class="block mb-2 font-semibold">Gambar (opsional)</label>
            @if($berita->gambar)
            <div class="mb-3">
                <img src="{{ asset('storage/'.$berita->gambar) }}" alt="Gambar Berita" class="w-40 rounded">
            </div>
            @endif
            <input type="file" name="gambar" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                       file:rounded-full file:border-0 file:text-sm file:font-semibold
                       file:bg-[#8c0327] file:text-white hover:file:bg-[#6b0220]">
            @error('gambar')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tombol Submit -->
        <div class="col-span-full mt-6 p-2">
            <button type="submit"
                class="block w-full bg-[#8c0327] hover:bg-[#6b0220] text-white font-bold py-3 px-4 rounded-full">
                Update Berita
            </button>
        </div>
    </form>
</div>

@endsection