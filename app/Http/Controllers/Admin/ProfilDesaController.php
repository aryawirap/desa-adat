<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfilDesa;

class ProfilDesaController extends Controller
{
    /**
     * Menampilkan halaman Visi Misi
     */
    public function index()
    {
        // Cukup ambil data. Laravel akan otomatis mengubah 'misi' menjadi array.
        $profil = ProfilDesa::firstOrCreate([]);

        return view('admin.visi-misi', compact('profil'));
    }

    /**
     * Mengupdate data Visi Misi
     */
    public function update(Request $request)
    {
        $request->validate([
            'visi' => 'required|string',
            'misi' => 'sometimes|array', // Ganti ke 'sometimes' agar bisa menyimpan array kosong
            'misi.*' => 'nullable|string',
        ]);

        $profil = ProfilDesa::firstOrCreate([]);
        
        // Langsung berikan array dari request. Laravel akan otomatis mengubahnya ke JSON saat menyimpan.
        $profil->update([
            'visi' => $request->visi,
            'misi' => array_values(array_filter($request->misi ?? [])),
        ]);

        return redirect()->route('admin.visi-misi.index')
                         ->with('success', 'Data Visi dan Misi berhasil diperbarui!');
    }
}