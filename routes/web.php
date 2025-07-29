<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.beranda');
});
// TAMBAHKAN ROUTE INI UNTUK HALAMAN BERITA
Route::get('/berita', function () {
    return view('public.berita');
});

// ============== ROUTE UNTUK ADMIN ==============
Route::prefix('admin')->group(function () {
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard'); // Memberi nama route adalah praktik yang baik

    // Nanti route admin lainnya bisa ditambahkan di sini
    // Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita.index');

});