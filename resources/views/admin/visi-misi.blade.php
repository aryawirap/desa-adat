@extends('admin.layouts.app')

@section('title', 'Kelola Visi dan Misi')

@section('content')
    <div class="space-y-8">
        {{-- HEADER HALAMAN --}}
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Kelola Visi dan Misi Desa</h2>
            <p class="text-gray-500 mt-1">Perbarui konten visi dan misi yang akan ditampilkan di halaman publik.</p>
        </div>
        
        {{-- TAMPILKAN PESAN SUKSES JIKA ADA --}}
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg" role="alert">
                <p class="font-bold">Berhasil!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <form action="{{ route('admin.visi-misi.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-6">
                {{-- KARTU UNTUK EDIT VISI --}}
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 border-b pb-3">Visi Desa</h3>
                    <div class="mt-4">
                        <label for="visi" class="block text-sm font-medium text-gray-700 mb-1">Isi Visi</label>
                        <textarea id="visi" name="visi" rows="5" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                                  placeholder="Tuliskan visi desa di sini...">{{ old('visi', $profil->visi) }}</textarea>
                    </div>
                </div>

                {{-- ====================================================== --}}
                {{-- KARTU INTERAKTIF UNTUK EDIT MISI DENGAN ALPINE.JS --}}
                {{-- ====================================================== --}}
                <div 
                    class="bg-white p-6 rounded-xl shadow-md" 
                    x-data='{ 
                        misi: @json(old("misi", $profil->misi ?? [])),
                        addMisi() {
                            this.misi.push("");
                        },
                        removeMisi(index) {
                            this.misi.splice(index, 1);
                        }
                    }'
                >
                    <div class="flex justify-between items-center border-b pb-3">
                        <h3 class="text-xl font-semibold text-gray-800">Misi Desa</h3>
                        <button type="button" @click="addMisi()" class="bg-blue-500 text-white text-sm font-semibold py-1 px-3 rounded-lg hover:bg-blue-600 inline-flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" /></svg>
                            Tambah Poin
                        </button>
                    </div>

                    <div class="mt-4 space-y-3">
                        <template x-for="(item, index) in misi" :key="index">
                            <div class="flex items-center gap-3">
                                <span class="font-semibold text-gray-500" x-text="index + 1 + '.'"></span>
                                <input 
                                    type="text" 
                                    :name="'misi[' + index + ']'" 
                                    x-model="misi[index]"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Tuliskan poin misi di sini..."
                                >
                                <button type="button" @click="removeMisi(index)" class="text-red-500 hover:text-red-700 p-1 rounded-full hover:bg-red-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                                </button>
                            </div>
                        </template>

                        <div x-show="misi.length === 0" class="text-center text-gray-400 py-4">
                            <p>Belum ada poin misi. Klik "Tambah Poin" untuk memulai.</p>
                        </div>
                    </div>
                </div>

                {{-- TOMBOL AKSI --}}
                <div class="flex justify-end pt-4">
                    <button type="submit" class="bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300 inline-flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" /></svg>
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection