{{-- ============== FOOTER ============== --}}
<footer class="bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            {{-- Kolom Tentang --}}
            <div>
                <h3 class="text-lg font-semibold">Tentang Desa</h3>
                <p class="mt-4 text-gray-400">
                    Deskripsi singkat tentang desa, sejarah, atau nilai-nilai yang dipegang oleh masyarakat desa.
                </p>
            </div>
            {{-- Kolom Tautan Cepat --}}
            <div>
                <h3 class="text-lg font-semibold">Tautan Cepat</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">Berita</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Pengumuman</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Galeri</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Peta Desa</a></li>
                </ul>
            </div>
            {{-- Kolom Kontak --}}
            <div>
                <h3 class="text-lg font-semibold">Kontak Kami</h3>
                <ul class="mt-4 space-y-2 text-gray-400">
                    <li>Alamat: Jl. Raya Desa, No. 1, Kecamatan, Kabupaten.</li>
                    <li>Telepon: (0361) 123-456</li>
                    <li>Email: info@desa.go.id</li>
                </ul>
            </div>
            {{-- Kolom Media Sosial --}}
            <div>
                 <h3 class="text-lg font-semibold">Ikuti Kami</h3>
                 <div class="flex mt-4 space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"></svg>
                    </a>
                 </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-8 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} Pemerintah Desa [Nama Desa]. Hak Cipta Dilindungi.</p>
        </div>
    </div>
</footer>