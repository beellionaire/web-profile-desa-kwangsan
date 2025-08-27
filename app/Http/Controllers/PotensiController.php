<?php

namespace App\Http\Controllers;

use App\Models\Potensi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PotensiController extends Controller
{
    // tampil di halaman user
    public function index()
    {
        $potensis = Potensi::latest()->paginate(6);
        return view('potensi.index', compact('potensis'));
    }

    // detail
    public function detail($slug)
    {
        $potensis = Potensi::where('slug', $slug)->firstOrFail();
        $potensi_terbaru = Potensi::latest()->take(5)->get();

        return view('potensi.detail', compact('potensis', 'potensi_terbaru'));
    }

    // === Halaman Admin ===
    public function potensiAdmin()
    {
        $potensis = Potensi::latest()->paginate(10);
        return view('admin.potensi.potensi', compact('potensis'));
    }

    public function potensiAdminCreate()
    {
        return view('admin.potensi.potensi_tambah');
    }

    public function potensiAdminStore(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
            'konten' => 'nullable|string',
            'kategori' => 'nullable|string|max:100',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('potensi', 'public');
        }

        Potensi::create($data);

        return redirect()->route('admin.potensiAdmin')->with('success', 'Potensi berhasil ditambahkan!');
    }

    public function potensiAdminEdit($id)
    {
        $potensis = Potensi::findOrFail($id);
        return view('admin.potensi.potensi_edit', compact('potensis'));
    }

    public function potensiAdminUpdate(Request $request, $id)
    {
        $potensis = Potensi::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
            'konten' => 'nullable|string',
            'kategori' => 'nullable|string|max:100',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('potensi', 'public');
        }

        $potensis->update($data);

        return redirect()->route('admin.potensiAdmin')->with('success', 'Potensi berhasil diupdate!');
    }

    public function potensiAdminDestroy($id)
    {
        $potensis = Potensi::findOrFail($id);
        $potensis->delete();

        return redirect()->route('admin.potensiAdmin')->with('success', 'Potensi berhasil dihapus!');
    }
}
