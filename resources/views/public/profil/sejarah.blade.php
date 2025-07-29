@extends('public.layouts.app')

@section('title', 'Sejarah - Desa Adat Pererenan')

@push('styles')
    {{-- Menambahkan CDN untuk styling otomatis konten (paragraf, judul, dll) --}}
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
@endpush

@section('content')
    {{-- Header Halaman --}}
    <div class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold text-gray-800">Sejarah Desa Adat Pererenan</h1>
            <p class="text-gray-600 mt-2">Jejak langkah dan warisan para leluhur.</p>
        </div>
    </div>

    {{-- Konten Sejarah --}}
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto bg-white p-8 md:p-10 rounded-xl shadow-lg">
            
            @if(!empty($profil->sejarah))
                {{-- 
                    PENTING: Gunakan {!! !!} untuk merender teks sebagai HTML.
                    Gunakan class 'prose' untuk styling otomatis dari Tailwind Typography.
                --}}
                <article class="prose lg:prose-lg max-w-none">
                    {!! $profil->sejarah !!}
                </article>
            @else
                <p class="text-center text-gray-500">Konten sejarah belum tersedia.</p>
            @endif
        </div>
    </div>
@endsection