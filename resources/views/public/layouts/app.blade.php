<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Desa')</title>

    {{-- Tailwind CSS CDN (Paling utama dan selalu up-to-date) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Alpine.js CDN (Untuk interaktivitas dropdown dan menu mobile) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    {{-- Font dari Google (Opsional, tapi membuat tampilan lebih baik) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">

    {{-- Memanggil komponen Navbar --}}
    @include('components.navbar')

    {{-- ============== KONTEN UTAMA HALAMAN ============== --}}
    <main>
        @yield('content')
    </main>

    {{-- Memanggil komponen Footer --}}
    @include('components.footer')

</body>
</html>