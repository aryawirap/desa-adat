<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Menampilkan daftar semua berita yang sudah dipublikasikan
    public function index()
    {
        $beritas = Berita::whereNotNull('published_at')
                         ->latest('published_at')
                         ->paginate(9); // 9 berita per halaman
        return view('public.berita.index', compact('beritas'));
    }

    // Menampilkan satu artikel berita secara detail
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->whereNotNull('published_at')->firstOrFail();
        return view('public.berita.show', compact('berita'));
    }
}