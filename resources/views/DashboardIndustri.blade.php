<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Industri - Poopeefy</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { DEFAULT: '#4a7c2c', dark: '#2d5016', light: '#6ba83d' },
                        secondary: { DEFAULT: '#8B6F47', dark: '#6d5736' }
                    }
                }
            }
        }
    </script>
    <style>
        .sidebar-sticky {
            position: sticky;
            top: 5rem;
        }
        /* Custom scrollbar untuk list jika terlalu panjang */
        .custom-scroll::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scroll::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .custom-scroll::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans text-gray-700">

    <header class="bg-gradient-to-r from-primary to-primary-light shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex justify-between items-center text-white">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-primary text-xl shadow-sm">
                    🏭
                </div>
                <span class="text-2xl font-bold tracking-tight">Poopeefy Industri</span>
            </div>

            <nav class="hidden md:flex items-center gap-2">
                <a href="#daftar-surat" class="px-4 py-2 rounded-lg hover:bg-white/20 hover:text-white transition-all font-medium">Daftar Surat</a>
                <a href="#status" class="px-4 py-2 rounded-lg hover:bg-white/20 hover:text-white transition-all font-medium">Status Order</a>
            </nav>

            <button  onclick="window.location.href='{{ route('dashboard-awal') }}'" class="px-4 py-2 rounded-lg border-2 border-white/80 text-white font-medium hover:bg-white hover:text-primary transition-all duration-300 text-sm shadow-sm">
                Keluar
            </button>
        </div>
    </header>

    <section class="bg-gradient-to-r from-primary to-primary-light text-white py-10 text-center px-4">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Selamat Datang!</h1>
            <p class="text-lg opacity-90">Pantau status pengajuan limbah Anda di sini.</p>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <div class="lg:col-span-2 space-y-6">
                <div class="flex items-center gap-2 mb-4">
                    <span class="text-2xl">📥</span>
                    <h2 class="text-2xl font-bold text-primary-dark">Daftar Surat Permintaan Limbah</h2>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">

                    <div class="letter-item p-5 border-b border-gray-100 hover:bg-blue-50 cursor-pointer transition-colors flex gap-4 items-start"
                         onclick="selectLetter('POO-001')">
                        <div class="w-12 h-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0 mt-1 shadow-sm">
                            📄
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg font-bold text-gray-800">
                                Permintaan #POO-001 - <span class="text-blue-600">Baru</span>
                            </h3>
                            <p class="text-gray-600 mt-1 text-sm">
                                Dari: <strong>PT. Hijau Lestari</strong> | Jenis: Kotoran Sapi | Volume: 500 Kg
                            </p>
                            <div class="text-xs text-gray-400 mt-2 flex items-center gap-1">
                                📅 3 Des 2025, 10:30 WIB
                            </div>
                        </div>
                        <div class="text-gray-300">👉</div>
                    </div>

                    <div class="letter-item p-5 border-b border-gray-100 bg-gray-50 hover:bg-blue-50 cursor-pointer transition-colors flex gap-4 items-start border-l-4 border-l-primary"
                         onclick="selectLetter('POO-002')">
                        <div class="w-12 h-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0 mt-1 shadow-sm">
                            📄
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg font-bold text-gray-800">
                                Permintaan #POO-002 - <span class="text-blue-600">Baru</span>
                            </h3>
                            <p class="text-gray-600 mt-1 text-sm">
                                Dari: <strong>CV. Alam Subur</strong> | Jenis: Kotoran Ayam | Volume: 200 Kg
                            </p>
                            <div class="text-xs text-gray-400 mt-2 flex items-center gap-1">
                                📅 2 Des 2025, 15:00 WIB
                            </div>
                        </div>
                        <div class="text-gray-300">👉</div>
                    </div>

                    <div class="letter-item p-5 border-b border-gray-100 hover:bg-green-50 cursor-pointer transition-colors flex gap-4 items-start"
                         onclick="selectLetter('POO-003')">
                        <div class="w-12 h-12 rounded-full bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0 mt-1 shadow-sm">
                            ✅
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg font-bold text-gray-800">
                                Permintaan #POO-003 - <span class="text-green-600">Diterima</span>
                            </h3>
                            <p class="text-gray-600 mt-1 text-sm">
                                Dari: <strong>Kelompok Tani Makmur</strong> | Jenis: Kotoran Kambing | Volume: 300 Kg
                            </p>
                            <div class="text-xs text-gray-400 mt-2 flex items-center gap-1">
                                📅 1 Des 2025, 08:00 WIB
                            </div>
                        </div>
                    </div>

                    <div class="letter-item p-5 hover:bg-red-50 cursor-pointer transition-colors flex gap-4 items-start"
                         onclick="selectLetter('POO-004')">
                        <div class="w-12 h-12 rounded-full bg-red-100 text-red-600 flex items-center justify-center flex-shrink-0 mt-1 shadow-sm">
                            ❌
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg font-bold text-gray-800">
                                Permintaan #POO-004 - <span class="text-red-600">Ditolak</span>
                            </h3>
                            <p class="text-gray-600 mt-1 text-sm">
                                Dari: <strong>Bpk. Agus</strong> | Jenis: Kotoran Sapi | Volume: 100 Kg
                            </p>
                            <div class="text-xs text-gray-400 mt-2 flex items-center gap-1">
                                📅 30 Nov 2025, 12:00 WIB
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="space-y-6">

                <section class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-primary to-primary-light"></div>
                    <h3 class="text-xl font-bold text-primary-dark mb-4 flex items-center gap-2">👤 Profil Industri</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-primary-light flex items-center justify-center text-3xl text-white shadow-md border-2 border-white">
                                🏭
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-800 leading-tight">pupuk_jaya</h4>
                            </div>
                        </div>
                        <div class="border-b border-gray-100 pb-2">
                            <span class="text-xs text-gray-500 block uppercase tracking-wide">Nama Perusahaan</span>
                            <span class="font-bold text-gray-800">PT. Pupuk Makmur Jaya</span>
                        </div>
                        <div class="border-b border-gray-100 pb-2">
                            <span class="text-xs text-gray-500 block uppercase tracking-wide">Username</span>
                            <span class="text-gray-700 font-medium">pupuk_jaya</span>
                        </div>
                        <div>
                            <span class="text-xs text-gray-500 block uppercase tracking-wide">Email</span>
                            <span class="text-gray-700 font-medium">contact@pupukjaya.com</span>
                        </div>
                    </div>
                </section>

                <section class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 sidebar-sticky">
                    <h3 class="text-xl font-bold text-primary-dark mb-6 flex items-center gap-2">
                        🔍 Detail Surat Pilihan
                    </h3>

                    <div id="detail-content" class="space-y-4 text-sm">
                        <div class="text-center py-10 text-gray-400">
                            <p>Silakan pilih surat di sebelah kiri untuk melihat detail lengkap.</p>
                        </div>
                    </div>

                    <div id="action-buttons" class="space-y-3 mt-6 hidden">
                        <p class="text-gray-500 text-xs mb-4 leading-relaxed">
                            **Aksi:** Pilih antara Terima atau Tolak permintaan limbah ini.
                        </p>

                        <button onclick="handleAction('Terima')" class="w-full py-3 px-4 rounded-lg font-bold text-white bg-primary hover:bg-primary-light transition-all flex items-center justify-center gap-2 shadow-sm transform hover:-translate-y-0.5">
                            ✅ Terima Permintaan
                        </button>

                        <button onclick="handleAction('Tolak')" class="w-full py-3 px-4 rounded-lg font-bold text-white bg-red-600 hover:bg-red-500 transition-all flex items-center justify-center gap-2 shadow-sm transform hover:-translate-y-0.5">
                            ❌ Tolak Permintaan
                        </button>
                    </div>

                    <div id="warning-box" class="mt-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200 flex gap-3 hidden">
                        <span class="text-yellow-600 text-xl">⚠️</span>
                        <p class="text-xs text-yellow-800 leading-relaxed">
                            <strong>Penting:</strong> Keputusan Anda akan dikirimkan langsung ke pengepul. Pastikan ketersediaan Anda sebelum menerima.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script>
        // Database Dummy (dari kode kamu sebelumnya)
        const lettersData = {
            'POO-001': { nama: 'PT. Hijau Lestari', kontak: '0812-1111-2222', jenis: 'Kotoran Sapi', volume: '500 Kg', lokasi: 'Jl. Raya Hijau No. 12, Bandung', tanggal: '3 Des 2025', status: 'Baru', color: 'text-blue-600' },
            'POO-002': { nama: 'CV. Alam Subur', kontak: '0857-3333-4444', jenis: 'Kotoran Ayam', volume: '200 Kg', lokasi: 'Desa Mekar, Cimahi', tanggal: '2 Des 2025', status: 'Baru', color: 'text-blue-600' },
            'POO-003': { nama: 'Kelompok Tani Makmur', kontak: '0813-5555-6666', jenis: 'Kotoran Kambing', volume: '300 Kg', lokasi: 'Lembang, Bandung Barat', tanggal: '1 Des 2025', status: 'Diterima', color: 'text-green-600' },
            'POO-004': { nama: 'Bpk. Agus', kontak: '0811-7777-8888', jenis: 'Kotoran Sapi', volume: '100 Kg', lokasi: 'Soreang, Bandung', tanggal: '30 Nov 2025', status: 'Ditolak', color: 'text-red-600' }
        };

        window.onload = function() {
            selectLetter('POO-002');
        };

        function selectLetter(id) {
            const data = lettersData[id];

            const detailHtml = `
                <div class="flex justify-between items-center border-b border-dashed border-gray-200 pb-2">
                    <span class="text-gray-600 font-medium">Nomor Surat</span>
                    <span class="font-bold text-gray-800" id="current-id">#${id}</span>
                </div>
                <div class="flex justify-between items-center border-b border-dashed border-gray-200 pb-2">
                    <span class="text-gray-600 font-medium">Nama Pengepul</span>
                    <span class="text-gray-800 text-right">${data.nama}</span>
                </div>
                <div class="flex justify-between items-center border-b border-dashed border-gray-200 pb-2">
                    <span class="text-gray-600 font-medium">Kontak Pengepul</span>
                    <span class="text-gray-800">${data.kontak}</span>
                </div>
                <div class="flex justify-between items-center border-b border-dashed border-gray-200 pb-2">
                    <span class="text-gray-600 font-medium">Jenis Limbah</span>
                    <span class="text-gray-800">${data.jenis}</span>
                </div>
                <div class="flex justify-between items-center border-b border-dashed border-gray-200 pb-2">
                    <span class="text-gray-600 font-medium">Volume Limbah</span>
                    <span class="text-gray-800">${data.volume}</span>
                </div>
                <div class="flex justify-between items-start border-b border-dashed border-gray-200 pb-2">
                    <span class="text-gray-600 font-medium whitespace-nowrap">Lokasi Pengambilan</span>
                    <span class="text-gray-800 text-right w-1/2">${data.lokasi}</span>
                </div>
                <div class="flex justify-between items-center border-b border-dashed border-gray-200 pb-2">
                    <span class="text-gray-600 font-medium">Tanggal Pengajuan</span>
                    <span class="text-gray-800">${data.tanggal}</span>
                </div>
                <div class="flex justify-between items-center pb-2">
                    <span class="text-gray-600 font-medium">Status</span>
                    <span class="font-bold ${data.color}">${data.status}</span>
                </div>
            `;

            document.getElementById('detail-content').innerHTML = detailHtml;

            const btnContainer = document.getElementById('action-buttons');
            const warningBox = document.getElementById('warning-box');

            if (data.status !== 'Baru') {
                btnContainer.classList.add('hidden');
                warningBox.classList.add('hidden');
            } else {
                btnContainer.classList.remove('hidden');
                warningBox.classList.remove('hidden');
            }
        }

        function handleAction(action) {
            const idText = document.getElementById('current-id').innerText;
            const id = idText.replace('#', '');

            if (confirm(`Apakah Anda yakin ingin ${action} surat ${id}?`)) {

                fetch('/api/surat/update-status', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        id: id,
                        status: action
                    })
                })
                .then(res => res.json())
                .then(data => {
                    alert(`Berhasil! Surat ${id} telah di-${action}.`);

                    lettersData[id].status = action === 'Terima' ? 'Diterima' : 'Ditolak';
                    lettersData[id].color = action === 'Terima' ? 'text-green-600' : 'text-red-600';

                    selectLetter(id);
                })
                .catch(err => {
                    console.error(err);
                    alert("Gagal mengirim status ke server.");
                });
            }
        }
    </script>

</body>
</html>
