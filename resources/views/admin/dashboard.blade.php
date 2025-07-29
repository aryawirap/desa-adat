@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="space-y-8">

        {{-- 1. BAGIAN HEADER: SAPAAN & AKSI CEPAT --}}
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Selamat Datang, Admin! 👋</h2>
                <p class="text-gray-500 mt-1">
                    {{-- Menampilkan tanggal hari ini dalam format Indonesia --}}
                    Hari ini: {{ \Carbon\Carbon::now()->translatedFormat('l, j F Y') }}
                </p>
            </div>
            <div class="flex items-center space-x-2">
                <a href="#" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300 inline-flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Tambah Berita
                </a>
                <a href="#" class="bg-gray-200 text-gray-800 font-semibold py-2 px-4 rounded-lg hover:bg-gray-300 transition duration-300">
                    Lihat Pengaduan
                </a>
            </div>
        </div>

        {{-- 2. KARTU STATISTIK DENGAN IKON --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Kartu Total Berita --}}
            <div class="bg-white p-5 rounded-xl shadow-md flex items-center gap-4">
                <div class="bg-blue-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5" /></svg>
                </div>
                <div>
                    <h4 class="text-gray-500 font-medium">Total Berita</h4>
                    <p class="text-2xl font-bold text-gray-800">150</p>
                </div>
            </div>
            {{-- Kartu Pengguna --}}
            <div class="bg-white p-5 rounded-xl shadow-md flex items-center gap-4">
                <div class="bg-green-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-4.67c.12-.34-.026-.72-.386-1.02a4.125 4.125 0 00-7.23 2.153M15 19.128a5.25 5.25 0 00-4.473-2.435z" /></svg>
                </div>
                <div>
                    <h4 class="text-gray-500 font-medium">Krama Terdaftar</h4>
                    <p class="text-2xl font-bold text-gray-800">2,345</p>
                </div>
            </div>
            {{-- Kartu Pengumuman --}}
            <div class="bg-white p-5 rounded-xl shadow-md flex items-center gap-4">
                <div class="bg-yellow-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688 0-1.25-.562-1.25-1.25s.562-1.25 1.25-1.25h3.32c.688 0 1.25.562 1.25 1.25s-.562 1.25-1.25 1.25h-3.32zM9.09 11.59V7.16c0-.688.562-1.25 1.25-1.25h3.32c.688 0 1.25.562 1.25 1.25v4.43c0 .688-.562 1.25-1.25 1.25h-3.32c-.688 0-1.25-.562-1.25-1.25z" /><path stroke-linecap="round" stroke-linejoin="round" d="M9.09 11.59V7.16c0-.688.562-1.25 1.25-1.25h3.32c.688 0 1.25.562 1.25 1.25v4.43c0 .688-.562 1.25-1.25 1.25h-3.32c-.688 0-1.25-.562-1.25-1.25zM12 21a9 9 0 100-18 9 9 0 000 18z" /></svg>
                </div>
                <div>
                    <h4 class="text-gray-500 font-medium">Pengumuman</h4>
                    <p class="text-2xl font-bold text-gray-800">28</p>
                </div>
            </div>
            {{-- Kartu Kunjungan --}}
            <div class="bg-white p-5 rounded-xl shadow-md flex items-center gap-4">
                <div class="bg-red-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639l3.422-3.422a1.012 1.012 0 011.432 1.432L4.16 12l2.72 2.72a1.012 1.012 0 01-1.432 1.432L2.036 12.322zM12 2.036a1.012 1.012 0 01.639 0l3.422 3.422a1.012 1.012 0 01-1.432 1.432L12 4.16 9.28 6.88a1.012 1.012 0 01-1.432-1.432L11.36 2.036zM21.964 12.322a1.012 1.012 0 010 .639l-3.422 3.422a1.012 1.012 0 01-1.432-1.432L19.84 12l-2.72-2.72a1.012 1.012 0 011.432-1.432l3.422 3.422zM12 21.964a1.012 1.012 0 01-.639 0l-3.422-3.422a1.012 1.012 0 011.432-1.432L12 19.84l2.72-2.72a1.012 1.012 0 011.432 1.432l-3.422 3.422z" /></svg>
                </div>
                <div>
                    <h4 class="text-gray-500 font-medium">Kunjungan Hari Ini</h4>
                    <p class="text-2xl font-bold text-gray-800">1,024</p>
                </div>
            </div>
        </div>

        {{-- 3. GRAFIK DAN AKTIVITAS TERBARU --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- Grafik Kunjungan --}}
            <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-md">
                <h4 class="text-lg font-semibold text-gray-800 mb-4">Grafik Kunjungan Situs (7 Hari Terakhir)</h4>
                <div>
                    <canvas id="kunjunganChart"></canvas>
                </div>
            </div>

            {{-- Tabel Aktivitas Terbaru --}}
            <div class="bg-white p-6 rounded-xl shadow-md">
                <h4 class="text-lg font-semibold text-gray-800 mb-4">Aktivitas Terbaru</h4>
                <div class="space-y-4">
                    {{-- Item Aktivitas 1 --}}
                    <div class="flex items-center gap-4">
                        <img src="https://via.placeholder.com/40" alt="Avatar" class="w-10 h-10 rounded-full">
                        <div>
                            <p class="text-sm text-gray-800 font-semibold">I Wayan Berita <span class="text-gray-500 font-normal">membuat post baru.</span></p>
                            <p class="text-xs text-gray-400">2 menit yang lalu</p>
                        </div>
                    </div>
                    {{-- Item Aktivitas 2 --}}
                    <div class="flex items-center gap-4">
                        <img src="https://via.placeholder.com/40" alt="Avatar" class="w-10 h-10 rounded-full">
                        <div>
                            <p class="text-sm text-gray-800 font-semibold">Admin <span class="text-gray-500 font-normal">menghapus komentar.</span></p>
                            <p class="text-xs text-gray-400">1 jam yang lalu</p>
                        </div>
                    </div>
                     {{-- Item Aktivitas 3 --}}
                    <div class="flex items-center gap-4">
                        <img src="https://via.placeholder.com/40" alt="Avatar" class="w-10 h-10 rounded-full">
                        <div>
                            <p class="text-sm text-gray-800 font-semibold">Ni Made Galeri <span class="text-gray-500 font-normal">mengunggah 5 foto baru.</span></p>
                            <p class="text-xs text-gray-400">3 jam yang lalu</p>
                        </div>
                    </div>
                     {{-- Item Aktivitas 4 --}}
                    <div class="flex items-center gap-4">
                        <img src="https://via.placeholder.com/40" alt="Avatar" class="w-10 h-10 rounded-full">
                        <div>
                            <p class="text-sm text-gray-800 font-semibold">Admin <span class="text-gray-500 font-normal">memperbarui awig-awig.</span></p>
                            <p class="text-xs text-gray-400">Kemarin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- PENTING: Tambahkan script untuk Chart.js --}}
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('kunjunganChart').getContext('2d');
    const kunjunganChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
            datasets: [{
                label: 'Jumlah Kunjungan',
                data: [650, 720, 810, 780, 950, 1100, 1024], // Ganti dengan data asli Anda
                backgroundColor: 'rgba(59, 130, 246, 0.2)',
                borderColor: 'rgba(59, 130, 246, 1)',
                borderWidth: 2,
                tension: 0.4,
                fill: true,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
</script>
@endpush