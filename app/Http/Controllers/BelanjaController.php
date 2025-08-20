<?php

namespace App\Http\Controllers;

use App\Models\Belanja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BelanjaController extends Controller
{
    /**
     * Halaman daftar UMKM publik
     */
    public function index()
    {
        $umkms = Belanja::all();
        return view('belanja.index', compact('umkms'));
    }

    /**
     * Halaman daftar UMKM (admin)
     */
    public function belanjaAdmin()
    {
        $umkms = Belanja::latest()->paginate(10);
        return view('admin.belanja.belanja', compact('umkms'));
    }

    /**
     * Form tambah UMKM
     */
    public function belanjaAdminCreate()
    {
        return view('admin.belanja.belanja_tambah');
    }

    /**
     * Simpan UMKM baru
     */
    public function belanjaAdminStore(Request $request)
    {
        $request->validate([
            'nama'       => 'required|string|max:255',
            'nohp'       => 'required|string|max:20',
            'maps'       => 'nullable|string|max:500',
            'deskripsi'  => 'nullable|string',
            'foto'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nama', 'nohp', 'maps', 'deskripsi']);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('umkm', 'public');
        }

        Belanja::create($data);

        return redirect()->route('admin.belanjaAdmin')->with('success', 'Data UMKM berhasil ditambahkan.');
    }

    public function show($id)
    {
        $umkm = Belanja::findOrFail($id);
        return view('belanja.detail_produk', compact('umkm'));
    }


    /**
     * Form edit UMKM
     */
    public function belanjaAdminEdit($id)
    {
        $belanja = Belanja::findOrFail($id);
        return view('admin.belanja.belanja_edit', compact('belanja'));
    }

    /**
     * Update UMKM
     */
    public function belanjaAdminUpdate(Request $request, $id)
    {
        $request->validate([
            'nama'       => 'required|string|max:255',
            'nohp'       => 'required|string|max:20',
            'maps'       => 'nullable|string|max:500',
            'deskripsi'  => 'nullable|string',
            'foto'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $belanja = Belanja::findOrFail($id);
        $belanja->nama      = $request->nama;
        $belanja->nohp      = $request->nohp;
        $belanja->maps      = $request->maps;
        $belanja->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            if ($belanja->foto && Storage::disk('public')->exists($belanja->foto)) {
                Storage::disk('public')->delete($belanja->foto);
            }
            $belanja->foto = $request->file('foto')->store('umkm', 'public');
        }

        $belanja->save();

        return redirect()->route('admin.belanjaAdmin')->with('success', 'Data UMKM berhasil diperbarui.');
    }

    /**
     * Hapus UMKM
     */
    public function belanjaAdminDestroy($id)
    {
        $belanja = Belanja::findOrFail($id);

        if ($belanja->foto && Storage::disk('public')->exists($belanja->foto)) {
            Storage::disk('public')->delete($belanja->foto);
        }

        $belanja->delete();

        return redirect()->route('admin.belanjaAdmin')->with('success', 'Data UMKM berhasil dihapus.');
    }
}
