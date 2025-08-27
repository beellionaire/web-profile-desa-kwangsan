<?php

namespace App\Http\Controllers;

use App\Models\Belanja;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Potensi;
use App\Models\ProfilDesa;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $beritas = Berita::orderByDesc('tanggal')->take(8)->get();
        $struktur = StrukturOrganisasi::take(8)->get();
        $umkms = Belanja::latest()->get();
        $galeris = Galeri::latest()->take(8)->get();
        $potensi = Potensi::latest()->get();
        $profil = ProfilDesa::first();

        return view('home', compact('beritas', 'struktur', 'umkms', 'galeris', 'potensi', 'profil'));
    }
}
