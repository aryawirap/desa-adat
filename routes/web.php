<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfilDesaController;
use App\Http\Controllers\Public\ProfilController; 

Route::get('/', function () {
    return view('public.beranda');
});
// TAMBAHKAN ROUTE INI UNTUK HALAMAN BERITA
Route::get('/berita', function () {
    return view('public.berita');
});
// TAMBAHKAN ROUTE BARU INI
Route::get('/profil/visi-misi', [ProfilController::class, 'visiMisi'])->name('public.visi-misi');
Route::get('/profil/sejarah', [ProfilController::class, 'sejarah'])->name('public.sejarah');

// ============== ROUTE UNTUK ADMIN ==============
Route::prefix('admin')->group(function () {
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard'); // Memberi nama route adalah praktik yang baik

    // Nanti route admin lainnya bisa ditambahkan di sini
    // Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
});
// Dengan route baru yang menggunakan controller:
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/visi-misi', [ProfilDesaController::class, 'index'])->name('visi-misi.index');
    Route::put('/visi-misi', [ProfilDesaController::class, 'update'])->name('visi-misi.update');
    // Tambahkan route admin lainnya di sini
});

Route::prefix('admin')->name('admin.')->group(function () {
    // ... (route visi-misi biarkan saja)

    // Route untuk Sejarah
    Route::get('/sejarah', [ProfilDesaController::class, 'sejarahIndex'])->name('sejarah.index');
    Route::put('/sejarah', [ProfilDesaController::class, 'sejarahUpdate'])->name('sejarah.update');
});