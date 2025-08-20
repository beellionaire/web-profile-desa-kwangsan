<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
        'tanggal',
        'author',
    ];

    protected $casts = [
        'tanggal' => 'datetime',
    ];
}
