@extends('admin.layouts.app')

@section('title', 'Kelola Sejarah Desa')

{{-- TIDAK ADA LAGI @push('scripts') KARENA TINYMCE DIHAPUS --}}

@section('content')
    <div class="space-y-8">
        {{-- HEADER HALAMAN --}}
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Kelola Sejarah Desa</h2>
            <p class="text-gray-500 mt-1">Tulis dan perbarui konten sejarah yang akan ditampilkan di halaman publik.</p>
        </div>
        
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <form action="{{ route('admin.sejarah.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="bg-white p-6 rounded-xl shadow-md">
                <div class="mt-4">
                    <label for="sejarah-editor" class="block text-lg font-semibold text-gray-700 mb-2">Konten Sejarah</label>
                    
                    {{-- PERUBAHAN: Menggunakan textarea biasa dengan style --}}
                    <textarea 
                        id="sejarah-editor" 
                        name="sejarah" 
                        rows="20" {{-- Dibuat lebih tinggi --}}
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                        placeholder="Tuliskan sejarah desa di sini. Gunakan Enter untuk membuat paragraf baru."
                    >{{ old('sejarah', $profil->sejarah) }}</textarea>
                </div>
            </div>

            {{-- TOMBOL AKSI --}}
            <div class="flex justify-end pt-6">
                <button type="submit" class="bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection