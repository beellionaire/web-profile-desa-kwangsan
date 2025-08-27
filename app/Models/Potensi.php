<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Potensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'gambar',
        'deskripsi',
        'konten',
        'kategori',
    ];

    // otomatis bikin slug dari judul
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($potensi) {
            if (empty($potensi->slug)) {
                $potensi->slug = Str::slug($potensi->judul, '-');
            }
        });
    }
}
