@extends('public.layouts.app')
@section('title', 'Berita - Desa Adat Pererenan')

@section('content')
    {{-- Header Halaman --}}
    <div class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold text-gray-800">Berita Desa</h1>
            <p class="text-gray-600 mt-2">Informasi dan kegiatan terkini dari Desa Adat Pererenan.</p>
        </div>
    </div>

    {{-- Konten Daftar Berita --}}
    <div class="container mx-auto px-4 py-16">
        @if($beritas->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($beritas as $berita)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden group flex flex-col">
                        <div class="overflow-hidden">
                            <a href="{{ route('public.berita.show', $berita->slug) }}">
                                <img class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" 
                                     src="{{ $berita->image ? asset('storage/' . $berita->image) : 'https://via.placeholder.com/400x250' }}" 
                                     alt="Gambar {{ $berita->title }}">
                            </a>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <p class="text-sm text-gray-500 mb-2">{{ $berita->published_at->format('d F Y') }}</p>
                            <h3 class="text-xl font-semibold mb-2 text-gray-900 flex-grow">
                                <a href="{{ route('public.berita.show', $berita->slug) }}" class="hover:text-blue-600 transition-colors">
                                    {{ $berita->title }}
                                </a>
                            </h3>
                            <a href="{{ route('public.berita.show', $berita->slug) }}" class="text-blue-600 font-semibold hover:underline mt-auto">
                                Baca Selengkapnya &rarr;
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-12">
                {{ $beritas->links() }}
            </div>
        @else
            <div class="text-center py-12">
                <p class="text-gray-500 text-lg">Belum ada berita yang dipublikasikan.</p>
            </div>
        @endif
    </div>
@endsection