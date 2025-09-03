<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $title = "Galeri Desa | Desa Kwangsan";
        $galeris = Galeri::latest()->get();
        return view('galeri.index', compact('galeris', 'title'));
    }

    public function galeriAdmin()
    {
        $galeri = Galeri::all();
        return view('admin.galeri.galeri', compact('galeri'));
    }

    public function galeriAdminCreate()
    {
        return view('admin.galeri.galeri_tambah');
    }

    public function galeriAdminStore(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->only(['judul', 'deskripsi']);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('galeri', 'public');
        }

        Galeri::create($data);

        return redirect()->route('admin.galeriAdmin')->with('success', 'Data galeri berhasil ditambahkan.');
    }

    public function galeriAdminEdit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.galeri_edit', compact('galeri'));
    }

    public function galeriAdminUpdate(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->only(['judul', 'deskripsi']);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('galeri', 'public');
        }

        $galeri->update($data);

        return redirect()->route('admin.galeriAdmin')->with('success', 'Data galeri berhasil diperbarui.');
    }

    public function galeriAdminDestroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();

        return redirect()->route('admin.galeriAdmin')->with('success', 'Data galeri berhasil dihapus.');
    }
}
