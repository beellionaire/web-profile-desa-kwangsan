<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturOrganisasiController extends Controller
{

    /**
     * Halaman daftar struktur organisasi (admin)
     */
    public function strukturAdmin()
    {
        $struktur = StrukturOrganisasi::latest()->paginate(10);
        return view('admin.struktur.struktur_organisasi', compact('struktur'));
    }

    /**
     * Form tambah anggota struktur
     */
    public function strukturAdminCreate()
    {
        return view('admin.struktur.struktur_tambah');
    }

    /**
     * Simpan anggota baru
     */
    public function strukturAdminStore(Request $request)
    {
        $request->validate([
            'nama'    => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = [
            'nama'    => $request->nama,
            'jabatan' => $request->jabatan,
        ];

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('struktur', 'public');
        }

        StrukturOrganisasi::create($data);

        return redirect()->route('admin.strukturAdmin')->with('success', 'Anggota berhasil ditambahkan.');
    }

    /**
     * Detail anggota struktur (admin)
     */

    // public function strukturAdminDetail($id)
    // {
    //     $struktur = StrukturOrganisasi::findOrFail($id);
    //     return view('admin.struktur.detail', compact('struktur'));
    // }

    /**
     * Form edit anggota struktur
     */
    public function strukturAdminEdit($id)
    {
        $struktur = StrukturOrganisasi::findOrFail($id);
        return view('admin.struktur.struktur_edit', compact('struktur'));
    }

    /**
     * Update anggota struktur
     */
    public function strukturAdminUpdate(Request $request, $id)
    {
        $request->validate([
            'nama'    => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $struktur = StrukturOrganisasi::findOrFail($id);
        $struktur->nama    = $request->nama;
        $struktur->jabatan = $request->jabatan;

        if ($request->hasFile('foto')) {
            if ($struktur->foto && Storage::disk('public')->exists($struktur->foto)) {
                Storage::disk('public')->delete($struktur->foto);
            }
            $struktur->foto = $request->file('foto')->store('struktur', 'public');
        }

        $struktur->save();

        return redirect()->route('admin.strukturAdmin')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Hapus anggota struktur
     */
    public function strukturAdminDestroy($id)
    {
        $struktur = StrukturOrganisasi::findOrFail($id);

        if ($struktur->foto && Storage::disk('public')->exists($struktur->foto)) {
            Storage::disk('public')->delete($struktur->foto);
        }

        $struktur->delete();

        return redirect()->route('admin.strukturAdmin')->with('success', 'Data berhasil dihapus.');
    }

    /**
     * Halaman struktur organisasi publik
     */
    public function index()
    {
        $struktur = StrukturOrganisasi::all();
        return view('struktur_organisasi.index', compact('struktur'));
    }
}
