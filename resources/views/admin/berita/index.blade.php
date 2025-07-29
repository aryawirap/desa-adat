@extends('admin.layouts.app')
@section('title', 'Manajemen Berita')

@section('content')
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Daftar Berita</h2>
        <p class="text-gray-500 mt-1">Kelola semua artikel berita yang ada di sini.</p>
    </div>
    <a href="{{ route('admin.berita.create') }}" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300 inline-flex items-center gap-2 mt-4 sm:mt-0">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" /></svg>
        Tambah Berita
    </a>
</div>

@if (session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6" role="alert">
        <p>{{ session('success') }}</p>
    </div>
@endif

<div class="bg-white p-6 rounded-xl shadow-md overflow-x-auto">
    <table class="w-full min-w-full">
        <thead>
            <tr class="text-left text-gray-600 border-b">
                <th class="py-3 px-4">Judul</th>
                <th class="py-3 px-4">Status</th>
                <th class="py-3 px-4">Tanggal Publikasi</th>
                <th class="py-3 px-4 text-right">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($beritas as $berita)
                <tr class="border-b">
                    <td class="py-4 px-4 font-semibold">{{ $berita->title }}</td>
                    <td class="py-4 px-4">
                        @if($berita->published_at)
                            <span class="bg-green-200 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Published</span>
                        @else
                            <span class="bg-gray-200 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Draft</span>
                        @endif
                    </td>
                    <td class="py-4 px-4">{{ $berita->published_at ? $berita->published_at->format('d M Y, H:i') : '-' }}</td>
                    <td class="py-4 px-4 text-right">
                        <a href="{{ route('admin.berita.edit', $berita) }}" class="text-blue-600 hover:underline font-medium">Edit</a>
                        <form action="{{ route('admin.berita.destroy', $berita) }}" method="POST" class="inline-block ml-4" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline font-medium">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center py-6 text-gray-500">Tidak ada berita yang ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-6">
        {{ $beritas->links() }}
    </div>
</div>
@endsection