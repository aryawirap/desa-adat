@extends('public.layouts.app')

@section('title', 'Beranda - Selamat Datang di Desa Kami')

@section('content')

{{-- ============== BAGIAN HERO & SAMBUTAN ============== --}}
{{-- PERBAIKAN: Menghapus margin-bottom karena spasi diatur oleh padding di section berikutnya --}}
<div class="relative h-[70vh] md:h-[80vh] w-full">
    {{-- Background Image --}}
    <div class="absolute inset-0">
        <img src="https://pererenan.desa.id/storage/pererenan/image/WhatsApp%20Image%202024-12-11%20at%209.26.01%20AM.jpeg" 
             alt="Pemandangan Desa" 
             class="w-full h-full object-cover">
        {{-- Gradasi: atas ke tengah hitam, tengah ke bawah putih --}}
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-transparent to-white/80"></div>
    </div>

    {{-- Kalimat tentang sistem informasi desa adat --}}
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Sistem Informasi Desa Adat Pererenan</h1>
        <p class="text-lg md:text-xl max-w-2xl drop-shadow-md">
            Portal resmi untuk informasi, layanan, dan transparansi kegiatan Desa Adat Pererenan. Dapatkan berita terbaru, pengumuman, serta akses berbagai layanan desa secara mudah dan cepat.
        </p>
    </div>

    {{-- Kartu Sambutan yang Overlap --}}
    {{-- PERBAIKAN: Posisi bottom dibuat responsif. Lebih rendah di mobile (agar tidak menabrak teks) dan lebih pas di desktop. --}}
    <div class="absolute bottom-[-14rem] md:bottom-[-8rem] left-1/2 -translate-x-1/2 w-[90%] max-w-4xl">
        <div class="bg-white p-6 md:p-8 rounded-2xl shadow-2xl border border-gray-100">
            <div class="flex flex-col md:flex-row items-center gap-6 text-center md:text-left">
                <div class="flex-shrink-0">
                    <img src="{{ asset('bendesa.png') }}" alt="Foto Bendesa" class="w-28 h-28 md:w-36 md:h-36 rounded-full object-cover border-4 border-gray-200 shadow-md">
                </div>
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Om Swastyastu</h2> 
                    <p class="text-gray-600 leading-relaxed">
                        Selamat datang di website Desa Adat Kesiman. Dengan adanya website ini diharapkan dapat memberdayakan Desa Adat yang Profesional, efisien, efektif, terbuka dan bertanggung jawab. Serta dapat meningkatkan pelayanan Desa Adat kepada Krama Desa Adat Kesiman.
                    </p>
                    <p class="text-right font-semibold text-gray-800 mt-4">- I Gusti Ngurah Rai Suara</p>
                    <p class="text-right text-sm text-gray-500">Bendesa Adat Pererenan</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ============== KONTEN HALAMAN LAINNYA ============== --}}
{{-- PERBAIKAN: Padding atas (pt) dibuat responsif untuk menyesuaikan dengan posisi kartu sambutan yang baru --}}
<div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-64 md:pt-40 pb-16">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

        {{-- ============== KONTEN UTAMA (KIRI) - COL-SPAN-2 ============== --}}
        <div class="lg:col-span-2">
            
            <section id="berita">
                {{-- PERBAIKAN: Judul section diseragamkan --}}
                <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-3">Berita Terkini</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    {{-- PERBAIKAN: Struktur kartu disempurnakan dengan Flexbox untuk alignment yang lebih baik dan menghilangkan tinggi tetap (h-16/h-20) --}}
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden group flex flex-col">
                        <div class="overflow-hidden">
                            <img class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1740&auto=format&fit=crop" alt="Gambar Berita">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <p class="text-sm text-gray-500 mb-2">Selasa, 29 Juli 2025</p>
                            <h3 class="text-xl font-semibold mb-2 text-gray-900 flex-grow">Gotong Royong Membersihkan Lingkungan Desa</h3>
                            <p class="text-gray-700 mb-4 line-clamp-3">Warga desa antusias mengikuti kegiatan kerja bakti untuk menjaga kebersihan dan keindahan lingkungan menjelang perayaan hari kemerdekaan.</p>
                            <a href="#" class="text-blue-600 font-semibold hover:underline mt-auto">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden group flex flex-col">
                        <div class="overflow-hidden">
                            <img class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1738&auto=format&fit=crop" alt="Gambar Berita">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <p class="text-sm text-gray-500 mb-2">Senin, 28 Juli 2025</p>
                            <h3 class="text-xl font-semibold mb-2 text-gray-900 flex-grow">Pelatihan UMKM untuk Ibu-Ibu PKK</h3>
                            <p class="text-gray-700 mb-4 line-clamp-3">Pemerintah desa mengadakan pelatihan kewirausahaan untuk meningkatkan keterampilan dan pendapatan keluarga melalui produk lokal.</p>
                            <a href="#" class="text-blue-600 font-semibold hover:underline mt-auto">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>

                </div>
                 <div class="text-center mt-10">
                    <a href="#" class="bg-blue-600 text-white font-semibold py-3 px-8 rounded-lg hover:bg-blue-700 transition duration-300">Lihat Semua Berita</a>
                </div>
            </section>
        </div>

        {{-- ============== SIDEBAR (KANAN) - COL-SPAN-1 ============== --}}
        {{-- PERBAIKAN: Jarak antar kartu di sidebar dikurangi agar lebih rapat --}}
        <aside class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-3">Pengumuman</h3>
                <ul class="space-y-4">
                    <li class="flex items-start space-x-3">
                        <div class="flex-shrink-0 mt-1">
                             <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-700">Jadwal Posyandu Bulan Agustus</p>
                            <p class="text-sm text-gray-600">Akan dilaksanakan pada 9 Agustus 2025 di Balai Banjar.</p>
                        </div>
                    </li>
                    <li class="flex items-start space-x-3">
                        <div class="flex-shrink-0 mt-1">
                             <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-700">Pawai Ogoh-ogoh Malam Pengerupukan</p>
                            <p class="text-sm text-gray-600">Rute pawai akan dimulai dari Catus Pata Desa.</p>
                        </div>
                    </li>
                </ul>
                <a href="#" class="text-blue-600 font-semibold hover:underline text-sm mt-4 inline-block">Lihat Semua &rarr;</a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-3">Produk Hukum</h3>
                <ul class="space-y-3">
                    {{-- PERBAIKAN: HTML diperbaiki dan seluruh area dibuat bisa diklik --}}
                    <li>
                        <a href="#" class="flex items-start space-x-4 p-3 -m-3 rounded-lg hover:bg-gray-50">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-700">Awig-Awig Subak</p>
                                <p class="text-sm text-gray-600">Peraturan yang mengatur sistem irigasi.</p>
                            </div>
                        </a>
                    </li>
                     <li>
                        <a href="#" class="flex items-start space-x-4 p-3 -m-3 rounded-lg hover:bg-gray-50">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-700">Awig-Awig Kependudukan</p>
                                 <p class="text-sm text-gray-600">Aturan tentang administrasi penduduk.</p>
                            </div>
                        </a>
                    </li>
                </ul>
                 <a href="#" class="text-blue-600 font-semibold hover:underline text-sm mt-4 inline-block">Lihat Semua &rarr;</a>
            </div>
        </aside>

    </div>
</div>

@endsection