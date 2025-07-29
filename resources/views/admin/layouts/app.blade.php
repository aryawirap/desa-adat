<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - Nama Desa</title>

    {{-- Tailwind & Alpine.js CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen bg-gray-100">
        
        <aside class="w-64 flex-shrink-0 bg-gray-800 text-gray-200 flex flex-col">
            {{-- Logo / Judul Admin --}}
            <div class="h-20 flex items-center justify-center bg-gray-900">
                <h1 class="text-xl font-bold">Desa Adat Pererenan</h1>
            </div>

            <nav class="flex-grow p-4 space-y-1">
                
                {{-- Menu Profil Desa (Dropdown) --}}
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex items-center justify-between px-4 py-2 rounded-lg transition-colors hover:bg-gray-700 hover:text-white">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h6.375a.375.375 0 01.375.375v1.5a.375.375 0 01-.375.375H9a.375.375 0 01-.375-.375v-1.5A.375.375 0 019 6.75zM9 12.75h6.375a.375.375 0 01.375.375v1.5a.375.375 0 01-.375.375H9a.375.375 0 01-.375-.375v-1.5A.375.375 0 019 12.75z" /></svg>
                            Profil Desa
                        </span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div x-show="open" x-transition class="pl-8 pt-1 space-y-1">
                        <a href="{{ route('admin.visi-misi.index') }}" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">Visi dan Misi</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">Sejarah</a>
                    </div>
                </div>

                {{-- Menu Lembaga Adat (Dropdown) --}}
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex items-center justify-between px-4 py-2 rounded-lg transition-colors hover:bg-gray-700 hover:text-white">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m-7.5-2.962A3.75 3.75 0 0112 15v-2.25m-3.75 0A3.75 3.75 0 016 15v-2.25m3.75 0V15m-3.75-2.25v-2.25A3.75 3.75 0 019 6.75v2.25m3.75 0V6.75A3.75 3.75 0 0115 9.75v2.25m-3.75 0h3.75m-3.75 0A3.75 3.75 0 019 15v2.25m3.75 0V15a3.75 3.75 0 013.75-3.75M9 15v2.25A3.75 3.75 0 015.25 21v-2.25m13.5-6.75v-2.25a3.75 3.75 0 00-3.75-3.75h-3a3.75 3.75 0 00-3.75 3.75v2.25m6.75 0v-2.25a3.75 3.75 0 00-3.75-3.75h-3a3.75 3.75 0 00-3.75 3.75v2.25m6.75 0h3.75" /></svg>
                            Lembaga Adat
                        </span>
                         <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div x-show="open" x-transition class="pl-8 pt-1 space-y-1">
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">Struktur Organisasi</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">LPM</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">BPD</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">LPD</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">PECALANG</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">YOWANA DESA ADAT</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">BUPDA</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">SEKAA GONG</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">PAIKETAN PEMANGKU</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">PAIKETAN SERATI</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">PAIKETAN KRAMA ISTRI</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">BANJAR ADAT</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">BAGA DESA ADAT</a>
                    </div>
                </div>

                {{-- =================================== --}}
                {{-- PERUBAHAN MENU INFORMASI DI SINI    --}}
                {{-- =================================== --}}
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex items-center justify-between px-4 py-2 rounded-lg transition-colors hover:bg-gray-700 hover:text-white">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5" /></svg>
                            Informasi
                        </span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div x-show="open" x-transition class="pl-8 pt-1 space-y-1">
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">Pengumuman</a>
                        <a href="#" class="block w-full text-left px-4 py-2 text-sm rounded-lg transition-colors hover:bg-gray-700 hover:text-white">Awig Awig</a>
                    </div>
                </div>
                {{-- =================================== --}}

                <a href="#" class="flex items-center px-4 py-2 rounded-lg transition-colors hover:bg-gray-700 hover:text-white">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5" />
                    </svg>
                    Berita
                </a>
                
                {{-- Menu Galeri --}}
                <a href="#" class="flex items-center px-4 py-2 rounded-lg transition-colors hover:bg-gray-700 hover:text-white">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" /></svg>
                    Galeri
                </a>

                {{-- Menu Kontak --}}
                 <a href="#" class="flex items-center px-4 py-2 rounded-lg transition-colors hover:bg-gray-700 hover:text-white">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                    Kontak
                </a>

                {{-- Menu Pengaduan --}}
                 <a href="#" class="flex items-center px-4 py-2 rounded-lg transition-colors hover:bg-gray-700 hover:text-white">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" /></svg>
                    Pengaduan
                </a>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="h-20 bg-white shadow-md flex items-center justify-between px-6">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800">@yield('title', 'Dashboard')</h2>
                </div>
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center space-x-2">
                        <img src="https://via.placeholder.com/40" alt="Admin" class="w-10 h-10 rounded-full">
                        <span class="font-semibold hidden sm:inline">Nama Admin</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="open" @click.away="open = false" x-cloak
                         class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-xl z-20">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>