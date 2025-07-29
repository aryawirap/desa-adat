@extends('public.layouts.app')

@section('title', 'Beranda - Selamat Datang di Desa Adat Pererenan')

@section('content')

{{-- ============== BAGIAN HERO & SAMBUTAN ============== --}}
<div class="relative h-[70vh] md:h-[80vh] w-full">
    {{-- Background Image --}}
    <div class="absolute inset-0">
        <img src="https://pererenan.desa.id/storage/pererenan/image/WhatsApp%20Image%202024-12-11%20at%209.26.01%20AM.jpeg"
             alt="Pemandangan Desa"
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-transparent to-white/80"></div>
    </div>
    {{-- Teks Hero --}}
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Sistem Informasi Desa Adat Pererenan</h1>
        <p class="text-lg md:text-xl max-w-2xl drop-shadow-md">
            Portal resmi untuk informasi, layanan, dan transparansi kegiatan Desa Adat Pererenan. Dapatkan berita terbaru, pengumuman, serta akses berbagai layanan desa secara mudah dan cepat.
        </p>
    </div>
    {{-- Kartu Sambutan --}}
    <div class="absolute bottom-[-14rem] md:bottom-[-8rem] left-1/2 -translate-x-1/2 w-[90%] max-w-4xl">
        <div class="bg-white p-6 md:p-8 rounded-2xl shadow-2xl border border-gray-100">
            <div class="flex flex-col md:flex-row items-center gap-6 text-center md:text-left">
                <div class="flex-shrink-0">
                    <img src="{{ asset('bendesa.png') }}" alt="Foto Bendesa" class="w-28 h-28 md:w-36 md:h-36 rounded-full object-cover border-4 border-gray-200 shadow-md">
                </div>
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Om Swastyastu</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Selamat datang di website Desa Adat Pererenan. Dengan adanya website ini diharapkan dapat memberdayakan Desa Adat yang Profesional, efisien, efektif, terbuka dan bertanggung jawab. Serta dapat meningkatkan pelayanan Desa Adat kepada Krama Desa Adat Pererenan.
                    </p>
                    <p class="text-right font-semibold text-gray-800 mt-4">- I Gusti Ngurah Rai Suara</p>
                    <p class="text-right text-sm text-gray-500">Bendesa Adat Pererenan</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ============== KONTEN HALAMAN LAINNYA ============== --}}
<div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-64 md:pt-40 pb-16">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

        {{-- ============== KONTEN UTAMA (KIRI) - BERITA DINAMIS ============== --}}
        <div class="lg:col-span-2">
            <section id="berita">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-3">Berita Terkini</h2>

                {{-- Memeriksa apakah ada berita yang dikirim dari controller --}}
                @if($beritas && $beritas->count() > 0)
                    {{-- Berita Utama (berita pertama/terbaru) --}}
                    @php $beritaUtama = $beritas->first(); @endphp
                    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden mb-10 flex flex-col md:flex-row group">
                        <div class="md:w-2/5 overflow-hidden">
                            <a href="{{ route('public.berita.show', $beritaUtama->slug) }}">
                                <img class="w-full h-64 md:h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                     src="{{ $beritaUtama->image ? asset('storage/' . $beritaUtama->image) : 'https://via.placeholder.com/400x300' }}"
                                     alt="Gambar {{ $beritaUtama->title }}">
                            </a>
                        </div>
                        <div class="p-8 flex flex-col flex-1">
                            <p class="text-sm text-gray-500 mb-2">{{ $beritaUtama->published_at->format('d F Y') }}</p>
                            <h3 class="text-2xl font-bold mb-3 text-gray-900">
                                <a href="{{ route('public.berita.show', $beritaUtama->slug) }}" class="hover:text-blue-600">{{ $beritaUtama->title }}</a>
                            </h3>
                            <p class="text-gray-700 mb-6 line-clamp-3">
                                {{ Str::limit(strip_tags($beritaUtama->content), 150) }}
                            </p>
                            <a href="{{ route('public.berita.show', $beritaUtama->slug) }}" class="text-blue-600 font-semibold hover:underline mt-auto">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>

                    {{-- List Berita Lainnya (berita ke-2 sampai ke-5) --}}
                    <div class="space-y-6">
                        @foreach($beritas->skip(1) as $item)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden flex group">
                            <div class="w-32 h-32 flex-shrink-0 overflow-hidden">
                                <a href="{{ route('public.berita.show', $item->slug) }}">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                     src="{{ $item->image ? asset('storage/' . $item->image) : 'https://via.placeholder.com/150' }}"
                                     alt="Gambar {{ $item->title }}">
                                </a>
                            </div>
                            <div class="p-5 flex flex-col flex-1 justify-center">
                                <p class="text-sm text-gray-500 mb-1">{{ $item->published_at->format('d F Y') }}</p>
                                <h4 class="text-lg font-semibold mb-1 text-gray-900 leading-tight">
                                    <a href="{{ route('public.berita.show', $item->slug) }}" class="hover:text-blue-600">{{ $item->title }}</a>
                                </h4>
                                <a href="{{ route('public.berita.show', $item->slug) }}" class="text-blue-600 font-semibold hover:underline mt-2 text-sm">Baca Selengkapnya &rarr;</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-gray-500 py-10">Belum ada berita untuk ditampilkan.</p>
                @endif

                <div class="text-center mt-10">
                    <a href="{{ route('public.berita.index') }}" class="bg-blue-600 text-white font-semibold py-3 px-8 rounded-lg hover:bg-blue-700 transition duration-300">Lihat Semua Berita</a>
                </div>
            </section>
        </div>

        {{-- ============== SIDEBAR (KANAN) ============== --}}
        <aside class="space-y-8">
            {{-- Widget Pengumuman --}}
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-3">Pengumuman</h3>
                <ul class="space-y-4">
                    {{-- Data Pengumuman bisa dibuat dinamis dengan cara yang sama --}}
                    <li class="flex items-start space-x-3">
                        <div class="flex-shrink-0 mt-1"><svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg></div>
                        <div>
                            <p class="font-semibold text-gray-700">Jadwal Posyandu Bulan Agustus</p>
                            <p class="text-sm text-gray-600">Akan dilaksanakan pada 9 Agustus 2025 di Balai Banjar.</p>
                        </div>
                    </li>
                </ul>
                <a href="#" class="text-blue-600 font-semibold hover:underline text-sm mt-4 inline-block">Lihat Semua &rarr;</a>
            </div>
            {{-- Widget Produk Hukum --}}
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-3">Produk Hukum</h3>
                <ul class="space-y-3">
                     <li>
                        <a href="#" class="flex items-start space-x-4 p-3 -m-3 rounded-lg hover:bg-gray-50">
                            <div class="flex-shrink-0 mt-1"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg></div>
                            <div>
                                <p class="font-semibold text-gray-700">Awig-Awig Subak</p>
                                <p class="text-sm text-gray-600">Peraturan yang mengatur sistem irigasi.</p>
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