@extends('public.layouts.app')

@section('title', 'Visi dan Misi - Desa Adat Pererenan')

@section('content')
    {{-- Header Halaman --}}
    <div class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold text-gray-800">Visi & Misi</h1>
            <p class="text-gray-600 mt-2">Arah dan tujuan pembangunan Desa Adat Pererenan.</p>
        </div>
    </div>

    {{-- Konten Visi dan Misi --}}
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto space-y-12">

            {{-- Bagian Visi --}}
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center gap-3">
                    <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639l3.422-3.422a1.012 1.012 0 011.432 1.432L4.16 12l2.72 2.72a1.012 1.012 0 01-1.432 1.432L2.036 12.322zM12 2.036a1.012 1.012 0 01.639 0l3.422 3.422a1.012 1.012 0 01-1.432 1.432L12 4.16 9.28 6.88a1.012 1.012 0 01-1.432-1.432L11.36 2.036zM21.964 12.322a1.012 1.012 0 010 .639l-3.422 3.422a1.012 1.012 0 01-1.432-1.432L19.84 12l-2.72-2.72a1.012 1.012 0 011.432-1.432l3.422 3.422zM12 21.964a1.012 1.012 0 01-.639 0l-3.422-3.422a1.012 1.012 0 011.432-1.432L12 19.84l2.72-2.72a1.012 1.012 0 011.432 1.432l-3.422 3.422z" /></svg>
                    Visi Desa
                </h2>
                <p class="text-gray-700 text-lg leading-relaxed italic">
                    "{{ $profil->visi ?? 'Data visi belum diisi.' }}"
                </p>
            </div>

            {{-- PERBAIKAN: Gunakan kode ini untuk menampilkan misi --}}
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                    <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    Misi Desa
                </h2>
                @if(!empty($profil->misi) && is_array($profil->misi))
                    <ol class="list-decimal list-inside space-y-4 text-gray-700 text-lg">
                        @foreach($profil->misi as $misi_item)
                            <li>{{ $misi_item }}</li>
                        @endforeach
                    </ol>
                @else
                    <p class="text-gray-700">Data misi belum diisi.</p>
                @endif
            </div>

        </div>
    </div>
@endsection