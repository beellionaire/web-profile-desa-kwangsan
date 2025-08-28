<?php

namespace App\Http\Controllers;

use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilDesaController extends Controller
{
    public function index()
    {
        $profil = ProfilDesa::first();
        return view('profil_desa.index', compact('profil'));
    }

    public function profilAdmin()
    {
        $profil = ProfilDesa::first(); // ambil 1 data saja
        return view('admin.profil_desa.index', compact('profil'));
    }

    public function create()
    {
        return view('admin.profil_desa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_desa' => 'nullable|string|max:255',
            'kata_sambutan' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('profil_desa', 'public');
        }

        ProfilDesa::create($validated);

        return redirect()->route('admin.profilDesaAdmin')->with('success', 'Profil Desa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $profil = ProfilDesa::findOrFail($id);
        return view('admin.profil_desa.edit', compact('profil'));
    }

    public function update(Request $request, $id)
    {
        $profil = ProfilDesa::findOrFail($id);

        $request->validate([
            'nama_desa' => 'required|string|max:255',
            'kata_sambutan' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nama_desa', 'kata_sambutan', 'visi', 'misi']);

        // upload foto jika ada
        if ($request->hasFile('foto')) {
            // hapus foto lama
            if ($profil->foto && Storage::exists('public/' . $profil->foto)) {
                Storage::delete('public/' . $profil->foto);
            }
            $data['foto'] = $request->file('foto')->store('profil_desa', 'public');
        }

        $profil->update($data);

        return redirect()->route('admin.profilDesaAdmin')->with('success', 'Profil desa berhasil diperbarui!');
    }
}
