<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilDesaController extends Controller
{
    public function index()
    {
        return view('profil_desa.index');
    }
}
