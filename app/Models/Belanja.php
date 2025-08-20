<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Belanja extends Model
{
    protected $table = 'belanja';

    protected $fillable = [
        'nama',
        'foto',
        'nohp',
        'maps',
        'deskripsi'
    ];
}
