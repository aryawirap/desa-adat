@extends('admin.layouts.app')
@section('title', 'Edit Berita')

@section('content')
<h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Berita</h2>

<form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-xl shadow-md space-y-6">
    @csrf
    @method('PUT')
    <div>
        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Berita</label>
        <input type="text" name="title" id="title" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ old('title', $berita->title) }}" required>
        @error('title')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
    </div>
    <div>
        <label for="content-editor" class="block text-sm font-medium text-gray-700 mb-1">Isi Berita</label>
        <textarea id="content-editor" name="content">{{ old('content', $berita->content) }}</textarea>
        @error('content')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
    </div>
    <div>
        <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Ganti Gambar Sampul (Opsional)</label>
        @if($berita->image)
            <img src="{{ asset('storage/' . $berita->image) }}" alt="Gambar saat ini" class="w-48 h-auto rounded-md my-2 shadow-sm">
            <p class="text-xs text-gray-500 mb-2">Gambar saat ini: {{ $berita->image }}</p>
        @endif
        <input type="file" name="image" id="image" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
        @error('image')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
    </div>
    <div class="flex items-center">
        <input type="checkbox" name="is_published" id="is_published" value="1" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" @checked(old('is_published', $berita->published_at))>
        <label for="is_published" class="ml-2 block text-sm text-gray-900">Publikasikan</label>
    </div>
    <div class="flex justify-end gap-4">
        <a href="{{ route('admin.berita.index') }}" class="bg-gray-200 text-gray-800 font-semibold py-2 px-6 rounded-lg hover:bg-gray-300">Batal</a>
        <button type="submit" class="bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-700">Simpan Perubahan</button>
    </div>
</form>
@endsection

@push('scripts')
    {{-- Memuat CKEditor 5 dari CDN --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content-editor' ), {
                toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                    ]
                }
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush