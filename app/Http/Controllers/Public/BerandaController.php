<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Berita; // Jangan lupa import model Berita
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Menampilkan halaman beranda dengan berita terbaru.
     */
    public function index()
    {
        // Ambil 5 berita terbaru yang sudah dipublikasikan
        $beritas = Berita::whereNotNull('published_at')
                         ->latest('published_at')
                         ->take(5)
                         ->get();

        // Kirim data berita ke view
        return view('public.beranda', compact('beritas'));
    }
}