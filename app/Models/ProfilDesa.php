<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_desa',
        'foto',
        'kata_sambutan',
        'visi',
        'misi',
    ];
}
