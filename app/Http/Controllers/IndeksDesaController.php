<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndeksDesaController extends Controller
{
    public function index()
    {
        return view('IDM.index');
    }
}
