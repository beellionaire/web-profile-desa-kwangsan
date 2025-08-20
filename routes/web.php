<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndeksDesaController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\StrukturOrganisasiController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil-desa', [ProfilDesaController::class, 'index'])->name('profil_desa.index');

Route::get('/infografis', [InfografisController::class, 'index'])->name('infografis.index');

Route::get('/listing', [ListingController::class, 'index'])->name('listing.index');

Route::get('/idm', [IndeksDesaController::class, 'index'])->name('idm.index');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.detail');


Route::get('/belanja', [BelanjaController::class, 'index'])->name('belanja.index');
Route::get('/belanja/{id}', [BelanjaController::class, 'show'])->name('belanja.show');


Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('struktur_organisasi.index');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Struktur Organisasi Admin
    Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'strukturAdmin'])->name('strukturAdmin');
    Route::get('/struktur-organisasi/create', [StrukturOrganisasiController::class, 'strukturAdminCreate'])->name('struktur.create');
    Route::post('/struktur-organisasi', [StrukturOrganisasiController::class, 'strukturAdminStore'])->name('struktur.store');
    Route::get('/struktur-organisasi/{id}', [StrukturOrganisasiController::class, 'strukturAdminDetail'])->name('struktur.detail');
    Route::get('/struktur-organisasi/{id}/edit', [StrukturOrganisasiController::class, 'strukturAdminEdit'])->name('struktur.edit');
    Route::put('/struktur-organisasi/{id}', [StrukturOrganisasiController::class, 'strukturAdminUpdate'])->name('struktur.update');
    Route::delete('/struktur-organisasi/{id}', [StrukturOrganisasiController::class, 'strukturAdminDestroy'])->name('struktur.destroy');

    // Galeri Admin
    Route::get('/galeri', [GaleriController::class, 'galeriAdmin'])->name('galeriAdmin');
    Route::get('/galeri/create', [GaleriController::class, 'galeriAdminCreate'])->name('galeri.create');
    Route::post('/galeri', [GaleriController::class, 'galeriAdminStore'])->name('galeri.store');
    Route::get('/galeri/{id}', [GaleriController::class, 'galeriAdminDetail'])->name('galeri.detail');
    Route::get('/galeri/{id}/edit', [GaleriController::class, 'galeriAdminEdit'])->name('galeri.edit');
    Route::put('/galeri/{id}', [GaleriController::class, 'galeriAdminUpdate'])->name('galeri.update');
    Route::delete('/galeri/{id}', [GaleriController::class, 'galeriAdminDestroy'])->name('galeri.destroy');

    // Berita Admin
    Route::get('/berita', [BeritaController::class, 'beritaAdmin'])->name('berita.index');
    Route::get('/berita/create', [BeritaController::class, 'beritaAdminCreate'])->name('berita.create');
    Route::post('/berita', [BeritaController::class, 'beritaAdminStore'])->name('berita.store');
    Route::get('/berita/{id}', [BeritaController::class, 'beritaAdminDetail'])->name('berita.detail');
    Route::get('/berita/{id}/edit', [BeritaController::class, 'beritaAdminEdit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'beritaAdminUpdate'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'beritaAdminDestroy'])->name('berita.destroy');

    // Belanja Admin
    Route::get('/belanja', [BelanjaController::class, 'belanjaAdmin'])->name('belanjaAdmin');
    Route::get('/belanja/create', [BelanjaController::class, 'belanjaAdminCreate'])->name('belanja.create');
    Route::post('/belanja', [BelanjaController::class, 'belanjaAdminStore'])->name('belanja.store');
    Route::get('/belanja/{id}/edit', [BelanjaController::class, 'belanjaAdminEdit'])->name('belanja.edit');
    Route::put('/belanja/{id}', [BelanjaController::class, 'belanjaAdminUpdate'])->name('belanja.update');
    Route::get('/belanja/{id}', [BelanjaController::class, 'belanjaAdminDetail'])->name('belanja.detail');
    Route::delete('/belanja/{id}', [BelanjaController::class, 'belanjaAdminDestroy'])->name('belanja.destroy');

    // Potensi


});
