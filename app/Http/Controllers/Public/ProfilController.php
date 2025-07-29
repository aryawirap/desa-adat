<?php


namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfilDesa; // <-- Import model

class ProfilController extends Controller
{
    /**
     * Menampilkan halaman Visi dan Misi publik.
     */
    public function visiMisi()
    {
        // Ambil data dari database
        $profil = ProfilDesa::first();

        // Kirim data ke view publik yang baru dibuat
        return view('public.profil.visi-misi', compact('profil'));
    }

    public function sejarah()
{
    $profil = ProfilDesa::first();
    return view('public.profil.sejarah', compact('profil'));
}
}
