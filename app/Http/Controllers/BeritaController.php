<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Halaman daftar berita (untuk admin)
     */
    public function beritaAdmin()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('admin.berita.berita', compact('beritas'));
    }

    /**
     * Form tambah berita
     */
    public function beritaAdminCreate()
    {
        return view('admin.berita.berita_tambah');
    }

    /**
     * Simpan berita baru
     */
    public function beritaAdminStore(Request $request)
    {
        $request->validate([
            'judul'     => 'required|string',
            'deskripsi' => 'required|string',
            'tanggal'   => 'required|date',
            'gambar'    => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'author'    => 'nullable',
        ]);

        $data = [
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal'   => $request->tanggal,
            'author'   => $request->author,
        ];

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        Berita::create($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    /**
     * Detail berita (admin)
     */
    public function beritaAdminDetail($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.detail_berita', compact('berita'));
    }

    /**
     * Form edit berita
     */
    public function beritaAdminEdit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit_berita', compact('berita'));
    }

    /**
     * Update berita
     */
    public function beritaAdminUpdate(Request $request, $id)
    {
        $request->validate([
            'judul'     => 'required|string',
            'deskripsi' => 'required|string',
            'tanggal'   => 'required|date',
            'gambar'    => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul     = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        $berita->tanggal   = $request->tanggal;

        if ($request->hasFile('gambar')) {
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $berita->gambar = $request->file('gambar')->store('berita', 'public');
        }

        $berita->save();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Hapus berita
     */
    public function beritaAdminDestroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }

    /**
     * Halaman berita untuk publik
     */
    public function index()
    {
        $beritas = Berita::latest()->paginate(6);
        return view('berita.index', compact('beritas'));
    }

    /**
     * Detail berita untuk publik
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);

        // Ambil berita terbaru selain yang sedang dibuka
        $berita_terbaru = Berita::where('id', '!=', $id)
            ->latest()
            ->take(5)
            ->get();

        return view('berita.detail_berita', compact('berita', 'berita_terbaru'));
    }
}
