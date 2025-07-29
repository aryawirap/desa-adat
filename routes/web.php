<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProfilDesaController;
use App\Http\Controllers\Public\ProfilController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Public\BeritaController as PublicBeritaController;
use App\Http\Controllers\Public\BerandaController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ============== ROUTE UNTUK HALAMAN PUBLIK ==============
Route::get('/', [BerandaController::class, 'index'])->name('public.beranda');
// Route Profil Publik
Route::get('/profil/visi-misi', [ProfilController::class, 'visiMisi'])->name('public.visi-misi');
Route::get('/profil/sejarah', [ProfilController::class, 'sejarah'])->name('public.sejarah');

// Route Berita Publik
Route::get('/berita', [PublicBeritaController::class, 'index'])->name('public.berita.index');
Route::get('/berita/{slug}', [PublicBeritaController::class, 'show'])->name('public.berita.show');


// ============== ROUTE OTENTIKASI (LOGIN, REGISTER, DLL) ==============
Auth::routes();


// ============== SEMUA ROUTE ADMIN DIJADIKAN SATU & DILINDUNGI ==============
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // Route Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Route Profil Desa (Visi Misi & Sejarah)
    Route::get('/visi-misi', [ProfilDesaController::class, 'index'])->name('visi-misi.index');
    Route::put('/visi-misi', [ProfilDesaController::class, 'update'])->name('visi-misi.update');
    Route::get('/sejarah', [ProfilDesaController::class, 'sejarahIndex'])->name('sejarah.index');
    Route::put('/sejarah', [ProfilDesaController::class, 'sejarahUpdate'])->name('sejarah.update');
    
    // Route Resource Berita (mencakup create, store, edit, update, destroy)
    Route::resource('berita', BeritaController::class);

    // Tambahkan route admin lainnya di sini di masa depan
    
});

// Route /home bawaan Laravel setelah login, bisa diarahkan ke dashboard admin.
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');