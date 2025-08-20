<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasi extends Model
{
    protected $table = 'struktur_organisasi';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'nama',
        'jabatan',
        'foto',
    ];
}
