@extends('public.layouts.app')

@section('title', 'Berita - Desa Adat Pererenan')

@section('content')

{{-- ============== HEADER HALAMAN ============== --}}
<div class="bg-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 text-center">
        <h1 class="text-4xl font-bold text-gray-800">Arsip Berita</h1>
        <p class="text-gray-600 mt-2">Kumpulan berita dan kegiatan terkini dari Desa Adat Pererenan.</p>
    </div>
</div>

{{-- ============== KONTEN BERITA ============== --}}
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">

    {{-- Grid untuk daftar berita --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        {{-- Contoh Kartu Berita 1 --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden group flex flex-col">
            <div class="overflow-hidden">
                <img class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1740&auto=format&fit=crop" alt="Gambar Berita 1">
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <p class="text-sm text-gray-500 mb-2">Selasa, 29 Juli 2025</p>
                <h3 class="text-xl font-semibold mb-2 text-gray-900 flex-grow">Gotong Royong Membersihkan Lingkungan Desa</h3>
                <p class="text-gray-700 mb-4 line-clamp-3">Warga desa antusias mengikuti kegiatan kerja bakti untuk menjaga kebersihan dan keindahan lingkungan menjelang perayaan hari kemerdekaan.</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline mt-auto">Baca Selengkapnya &rarr;</a>
            </div>
        </div>
        
        {{-- Contoh Kartu Berita 2 --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden group flex flex-col">
            <div class="overflow-hidden">
                <img class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1738&auto=format&fit=crop" alt="Gambar Berita 2">
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <p class="text-sm text-gray-500 mb-2">Senin, 28 Juli 2025</p>
                <h3 class="text-xl font-semibold mb-2 text-gray-900 flex-grow">Pelatihan UMKM untuk Ibu-Ibu PKK</h3>
                <p class="text-gray-700 mb-4 line-clamp-3">Pemerintah desa mengadakan pelatihan kewirausahaan untuk meningkatkan keterampilan dan pendapatan keluarga.</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline mt-auto">Baca Selengkapnya &rarr;</a>
            </div>
        </div>

        {{-- Contoh Kartu Berita 3 --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden group flex flex-col">
            <div class="overflow-hidden">
                <img class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" src="https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=1740&auto=format&fit=crop" alt="Gambar Berita 3">
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <p class="text-sm text-gray-500 mb-2">Jumat, 25 Juli 2025</p>
                <h3 class="text-xl font-semibold mb-2 text-gray-900 flex-grow">Sosialisasi Program Desa Digital</h3>
                <p class="text-gray-700 mb-4 line-clamp-3">Pengenalan sistem informasi dan layanan digital kepada masyarakat untuk transparansi dan kemudahan akses.</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline mt-auto">Baca Selengkapnya &rarr;</a>
            </div>
        </div>

        {{-- Contoh Kartu Berita 4 --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden group flex flex-col">
            <div class="overflow-hidden">
                <img class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1932&auto=format&fit=crop" alt="Gambar Berita 4">
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <p class="text-sm text-gray-500 mb-2">Rabu, 23 Juli 2025</p>
                <h3 class="text-xl font-semibold mb-2 text-gray-900 flex-grow">Rapat Koordinasi Aparatur Desa</h3>
                <p class="text-gray-700 mb-4 line-clamp-3">Rapat bulanan untuk evaluasi kinerja dan perencanaan program kerja desa untuk bulan berikutnya.</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline mt-auto">Baca Selengkapnya &rarr;</a>
            </div>
        </div>

        {{-- Contoh Kartu Berita 5 --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden group flex flex-col">
            <div class="overflow-hidden">
                <img class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" src="https://images.unsplash.com/photo-1543269865-cbf427effbad?q=80&w=1740&auto=format&fit=crop" alt="Gambar Berita 5">
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <p class="text-sm text-gray-500 mb-2">Senin, 21 Juli 2025</p>
                <h3 class="text-xl font-semibold mb-2 text-gray-900 flex-grow">Penyuluhan Kesehatan dan Gizi</h3>
                <p class="text-gray-700 mb-4 line-clamp-3">Kerja sama dengan puskesmas setempat untuk memberikan edukasi tentang pentingnya gizi seimbang bagi anak-anak.</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline mt-auto">Baca Selengkapnya &rarr;</a>
            </div>
        </div>

        {{-- Contoh Kartu Berita 6 --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden group flex flex-col">
            <div class="overflow-hidden">
                <img class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" src="https://images.unsplash.com/photo-1498677271762-3c35b8a0ab6e?q=80&w=1740&auto=format&fit=crop" alt="Gambar Berita 6">
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <p class="text-sm text-gray-500 mb-2">Sabtu, 19 Juli 2025</p>
                <h3 class="text-xl font-semibold mb-2 text-gray-900 flex-grow">Festival Budaya Desa 2025 Dibuka</h3>
                <p class="text-gray-700 mb-4 line-clamp-3">Pembukaan acara tahunan yang menampilkan berbagai kesenian dan tradisi lokal Desa Adat Pererenan.</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline mt-auto">Baca Selengkapnya &rarr;</a>
            </div>
        </div>

    </div>

    {{-- ============== PAGINASI (PEMBERIAN NOMOR HALAMAN) ============== --}}
    <div class="mt-16 flex justify-center items-center space-x-2">
        <a href="#" class="px-4 py-2 text-gray-500 bg-white rounded-lg hover:bg-blue-100 hover:text-blue-600">
            &laquo; Sebelumnya
        </a>
        <a href="#" class="px-4 py-2 text-white bg-blue-600 rounded-lg">1</a>
        <a href="#" class="px-4 py-2 text-gray-700 bg-white rounded-lg hover:bg-blue-100 hover:text-blue-600">2</a>
        <a href="#" class="px-4 py-2 text-gray-700 bg-white rounded-lg hover:bg-blue-100 hover:text-blue-600">3</a>
        <span class="px-4 py-2 text-gray-500">...</span>
        <a href="#" class="px-4 py-2 text-gray-700 bg-white rounded-lg hover:bg-blue-100 hover:text-blue-600">10</a>
        <a href="#" class="px-4 py-2 text-gray-700 bg-white rounded-lg hover:bg-blue-100 hover:text-blue-600">
            Selanjutnya &raquo;
        </a>
    </div>

</div>

@endsection