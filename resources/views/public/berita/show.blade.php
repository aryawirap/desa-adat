@extends('public.layouts.app')
@section('title', $berita->title)

@push('styles')
    {{-- Menambahkan CDN untuk styling otomatis konten (paragraf, judul, dll) --}}
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
@endpush

@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="max-w-4xl mx-auto">
        
        <article class="bg-white p-8 md:p-10 rounded-xl shadow-lg">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $berita->title }}</h1>
            <p class="text-gray-500 mb-6">
                Dipublikasikan pada: {{ $berita->published_at->format('d F Y') }}
            </p>

            @if($berita->image)
                <img src="{{ asset('storage/' . $berita->image) }}" alt="Gambar {{ $berita->title }}" class="w-full h-auto max-h-96 object-cover rounded-lg mb-8 shadow-md">
            @endif

            {{-- Menampilkan isi berita dengan format HTML dari editor --}}
            <div class="prose lg:prose-lg max-w-none">
                {!! $berita->content !!}
            </div>
        </article>

        <div class="mt-12">
            <a href="{{ route('public.berita.index') }}" class="text-blue-600 font-semibold hover:underline">
                &larr; Kembali ke Daftar Berita
            </a>
        </div>
    </div>
</div>
@endsection