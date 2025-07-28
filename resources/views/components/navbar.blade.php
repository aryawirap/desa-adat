<nav x-data="{ mobileOpen: false }" class="sticky top-0 z-50 bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            {{-- Logo --}}
            <div class="flex-shrink-0 flex items-center">
                <a href="/"></a>
                    <img src="/desaadat.png" alt="Logo Desa Adat" class="h-14 w-auto">
                </a>
            </div>

            {{-- Menu Desktop --}}
            <div class="hidden lg:flex lg:items-center lg:space-x-2">
                <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Beranda</a>

                {{-- Dropdown: Profil Desa --}}
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" @click.away="open = false" class="flex items-center text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        <span>Profil Desa</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 ml-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-2"
                         class="absolute mt-2 w-48 bg-white rounded-md shadow-lg z-20">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600">Visi & Misi</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600">Sejarah Desa</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600">Peta Wilayah</a>
                    </div>
                </div>
                {{-- Dropdown: Lembaga Adat --}}
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" @click.away="open = false" class="flex items-center text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        <span>Lembaga Adat</span>
                        <svg :class="{'rotate-180': open}" class="w-4 h-4 ml-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-2"
                         class="absolute mt-2 w-48 bg-white rounded-md shadow-lg z-20">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600">LPD</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600">PECALANG</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600">YOWANA DESA ADAT</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600">BUPDA</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600">SEKAA GONG</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600">PAIKETAN PEMANGKU</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600">PAIKETAN SERATI</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600">PAIKETAN KRAMA ISTRI</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600">BANJAR ADAT</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-blue-600">BAGA DESA ADAT</a>
                    </div>
                </div>
                <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Informasi</a>
                <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Galeri</a>
                <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Kontak</a>
                <a href="#" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Pengaduan</a>
            </div>

            {{-- Tombol Hamburger --}}
            <div class="flex items-center lg:hidden">
                <button @click="mobileOpen = !mobileOpen" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-700 hover:bg-gray-100 focus:outline-none">
                    <span class="sr-only">Buka menu</span>
                    <svg x-show="!mobileOpen" class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    <svg x-show="mobileOpen" class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Menu Mobile --}}
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform -translate-x-full"
         x-transition:enter-end="opacity-100 transform translate-x-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 transform translate-x-0"
         x-transition:leave-end="opacity-0 transform -translate-x-full"
         class="lg:hidden fixed inset-0 z-40">
        
        {{-- Overlay --}}
        <div @click="mobileOpen = false" class="fixed inset-0 bg-black/30"></div>

        {{-- Konten Menu --}}
        <div class="relative w-64 h-full bg-white p-4 space-y-4">
            <h3 class="text-xl font-bold">Menu</h3>
            <a href="#" class="block text-gray-700 hover:text-blue-600 py-2 rounded-md font-medium">Beranda</a>

            {{-- Dropdown Mobile: Profil Desa --}}
            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex justify-between items-center text-gray-700 hover:text-blue-600 py-2 rounded-md font-medium">
                    <span>Profil Desa</span>
                    <svg :class="{'rotate-180': open}" class="w-4 h-4 ml-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" class="pl-4 mt-2 space-y-2">
                    <a href="#" class="block text-sm text-gray-600 hover:text-blue-600">Visi & Misi</a>
                    <a href="#" class="block text-sm text-gray-600 hover:text-blue-600">Sejarah Desa</a>
                    <a href="#" class="block text-sm text-gray-600 hover:text-blue-600">Peta Wilayah</a>
                </div>
            </div>

            {{-- Dropdown Mobile: Lembaga Adat --}}
            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex justify-between items-center text-gray-700 hover:text-blue-600 py-2 rounded-md font-medium">
                    <span>Lembaga Adat</span>
                    <svg :class="{'rotate-180': open}" class="w-4 h-4 ml-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" class="pl-4 mt-2 space-y-2">
                    <a href="#" class="block text-sm text-gray-600 hover:text-blue-600">LPD</a>
                    <a href="#" class="block text-sm text-gray-600 hover:text-blue-600">PECALANG</a>
                    <a href="#" class="block text-sm text-gray-600 hover:text-blue-600">YOWANA DESA ADAT</a>
                    <a href="#" class="block text-sm text-gray-600 hover:text-blue-600">BUPDA</a>
                    <a href="#" class="block text-sm text-gray-600 hover:text-blue-600">SEKAA GONG</a>
                    <a href="#" class="block text-sm text-gray-600 hover:text-blue-600">PAIKETAN PEMANGKU</a>
                    <a href="#" class="block text-sm text-gray-600 hover:text-blue-600">PAIKETAN SERATI</a>
                    <a href="#" class="block text-sm text-gray-600 hover:text-blue-600">PAIKETAN KRAMA ISTRI</a>
                    <a href="#" class="block text-sm text-gray-600 hover:text-blue-600">BANJAR ADAT</a>
                    <a href="#" class="block text-sm text-gray-600 hover:text-blue-600">BAGA DESA ADAT</a>
                </div>
            </div>

            <a href="#" class="block text-gray-700 hover:text-blue-600 py-2 rounded-md font-medium">Informasi</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600 py-2 rounded-md font-medium">Galeri</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600 py-2 rounded-md font-medium">Kontak</a>
            <a href="#" class="block bg-blue-600 text-white px-4 py-2 rounded-md font-medium hover:bg-blue-700 transition-colors w-full text-center mt-4">Pengaduan</a>
        </div>
    </div>
</nav>