<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'isi'   => 'required|string',
        ]);

        // Simpan ke database (contoh, kalau sudah punya model Pengaduan)
        // Pengaduan::create($request->all());

        return back()->with('success', 'Pengaduan berhasil dikirim!');
    }
}
