@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="space-y-6">
        <h3 class="text-xl font-semibold text-gray-800">Selamat Datang Kembali, Admin!</h3>

        {{-- Contoh Kartu Statistik --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h4 class="text-gray-500 font-medium">Total Berita</h4>
                <p class="text-3xl font-bold text-gray-800 mt-2">150</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h4 class="text-gray-500 font-medium">Pengguna Terdaftar</h4>
                <p class="text-3xl font-bold text-gray-800 mt-2">2,345</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h4 class="text-gray-500 font-medium">Pengumuman</h4>
                <p class="text-3xl font-bold text-gray-800 mt-2">28</p>
            </div>
             <div class="bg-white p-6 rounded-lg shadow-md">
                <h4 class="text-gray-500 font-medium">Kunjungan Hari Ini</h4>
                <p class="text-3xl font-bold text-gray-800 mt-2">1,024</p>
            </div>
        </div>

        {{-- Contoh Tabel --}}
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h4 class="text-lg font-semibold mb-4">Aktivitas Terbaru</h4>
            <table class="w-full">
                <thead>
                    <tr class="text-left text-gray-600 border-b">
                        <th class="py-2">Pengguna</th>
                        <th class="py-2">Aksi</th>
                        <th class="py-2">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-3">I Wayan Berita</td>
                        <td class="py-3">Membuat post baru: "Gotong Royong..."</td>
                        <td class="py-3 text-sm text-gray-500">2 menit yang lalu</td>
                    </tr>
                     <tr class="border-b">
                        <td class="py-3">Admin</td>
                        <td class="py-3">Menghapus komentar</td>
                        <td class="py-3 text-sm text-gray-500">1 jam yang lalu</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection