<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pengepul Limbah - Poopeefy</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#4a7c2c',
                            light: '#6ba83d',
                            dark: '#2d5016',
                        },
                    },
                    fontFamily: {
                        sans: ['Segoe UI', 'Tahoma', 'Geneva', 'Verdana', 'sans-serif'],
                    },
                    boxShadow: {
                        'custom': '0 20px 60px rgba(0, 0, 0, 0.3)',
                    },
                    animation: {
                        'slideIn': 'slideIn 0.5s ease-out forwards',
                    },
                    keyframes: {
                        slideIn: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* CSS Reset kecil untuk textarea resize */
        textarea { resize: vertical; }
    </style>
</head>
<body class="bg-gradient-to-br from-primary to-primary-light min-h-screen p-4 md:p-8 font-sans text-gray-700">

    <div class="max-w-[800px] mx-auto bg-white rounded-[20px] shadow-custom overflow-hidden animate-slideIn">
        
        <div class="bg-gradient-to-br from-primary-dark to-primary p-10 text-center text-white">
            <div class="text-5xl mb-4">♻️</div>
            <h1 class="text-3xl font-bold mb-2">Form Data Pengepul Limbah</h1>
            <p class="text-base opacity-90">Lengkapi data Anda untuk bergabung dengan Poopeefy</p>
        </div>

        <div class="p-6 md:p-10">
            <div class="bg-green-50 border-l-4 border-primary p-4 rounded-lg mb-8 text-sm text-primary-dark flex gap-2 items-start">
                <span>ℹ️</span>
                <p>Mohon isi semua data dengan benar dan lengkap. Data ini akan digunakan untuk verifikasi dan komunikasi selanjutnya.</p>
            </div>

            <form onsubmit="handleSubmit(event)">
                <div class="text-primary-dark text-xl font-semibold mb-6 pb-2 border-b-2 border-primary-light">
                    📋 Data Pribadi
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-primary-dark font-medium">Nama Lengkap Pengepul <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <span class="absolute left-4 top-4 text-lg text-gray-400">👤</span>
                        <input type="text" id="nama" placeholder="Masukkan nama lengkap" required
                            class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block mb-2 text-primary-dark font-medium">Nomor Telepon <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <span class="absolute left-4 top-4 text-lg text-gray-400">📱</span>
                            <input type="tel" id="telepon" placeholder="08xxxxxxxxxx" required
                                class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                        </div>
                    </div>

                    <div>
                        <label class="block mb-2 text-primary-dark font-medium">Email</label>
                        <div class="relative">
                            <span class="absolute left-4 top-4 text-lg text-gray-400">📧</span>
                            <input type="email" id="email" placeholder="Username@email.com"
                                class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-primary-dark font-medium">Nomor KTP <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <span class="absolute left-4 top-4 text-lg text-gray-400">🪪</span>
                        <input type="text" id="ktp" placeholder="16 digit nomor KTP" maxlength="16" required
                            class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                    </div>
                </div>

                <div class="text-primary-dark text-xl font-semibold mb-6 pb-2 border-b-2 border-primary-light mt-8">
                    📍 Domisili
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-primary-dark font-medium">Alamat Lengkap <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <span class="absolute left-4 top-4 text-lg text-gray-400">🏠</span>
                        <textarea id="alamat" placeholder="Jalan, RT/RW, No. Rumah" required
                            class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] min-h-[100px] focus:outline-none focus:border-primary transition-colors text-base"></textarea>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block mb-2 text-primary-dark font-medium">Kelurahan/Desa <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <span class="absolute left-4 top-4 text-lg text-gray-400">🏘️</span>
                            <input type="text" id="kelurahan" placeholder="Nama kelurahan/desa" required
                                class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                        </div>
                    </div>

                    <div>
                        <label class="block mb-2 text-primary-dark font-medium">Kecamatan <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <span class="absolute left-4 top-4 text-lg text-gray-400">🏘️</span>
                            <input type="text" id="kecamatan" placeholder="Nama kecamatan" required
                                class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block mb-2 text-primary-dark font-medium">Kabupaten/Kota <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <span class="absolute left-4 top-4 text-lg text-gray-400">🏙️</span>
                            <input type="text" id="kabupaten" placeholder="Nama kabupaten/kota" required
                                class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                        </div>
                    </div>

                    <div>
                        <label class="block mb-2 text-primary-dark font-medium">Provinsi <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <span class="absolute left-4 top-4 text-lg text-gray-400">🗺️</span>
                            <input type="text" id="provinsi" placeholder="Nama provinsi" required
                                class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-primary-dark font-medium">Kode Pos</label>
                    <div class="relative">
                        <span class="absolute left-4 top-4 text-lg text-gray-400">📮</span>
                        <input type="text" id="kodepos" placeholder="5 digit kode pos" maxlength="5"
                            class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                    </div>
                </div>

                <div class="text-primary-dark text-xl font-semibold mb-6 pb-2 border-b-2 border-primary-light mt-8">
                    🏢 Data Usaha
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-primary-dark font-medium">Nama Usaha/Tempat Pengepulan</label>
                    <div class="relative">
                        <span class="absolute left-4 top-4 text-lg text-gray-400">🏪</span>
                        <input type="text" id="namaUsaha" placeholder="Nama tempat pengepulan limbah"
                            class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block mb-2 text-primary-dark font-medium">Lama Beroperasi <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <span class="absolute left-4 top-4 text-lg text-gray-400">📅</span>
                            <select id="lamaOperasi" required
                                class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base bg-white appearance-none">
                                <option value="">Pilih durasi</option>
                                <option value="< 1 tahun">Kurang dari 1 tahun</option>
                                <option value="1-2 tahun">1-2 tahun</option>
                                <option value="3-5 tahun">3-5 tahun</option>
                                <option value="> 5 tahun">Lebih dari 5 tahun</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block mb-2 text-primary-dark font-medium">Kapasitas per Hari (kg) <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <span class="absolute left-4 top-4 text-lg text-gray-400">⚖️</span>
                            <input type="number" id="kapasitas" placeholder="Contoh: 500" required
                                class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-primary-dark font-medium">Jenis Kotoran yang Dikumpulkan <span class="text-red-500">*</span></label>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-2">
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="limbah1" name="limbah" value="Kotoran Manusia" class="w-5 h-5 accent-primary cursor-pointer">
                            <label for="limbah1" class="cursor-pointer">Kotoran Manusia</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="limbah2" name="limbah" value="Kotoran Kuda" class="w-5 h-5 accent-primary cursor-pointer">
                            <label for="limbah2" class="cursor-pointer">Kotoran Kuda</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="limbah3" name="limbah" value="Kotoran Sapi" class="w-5 h-5 accent-primary cursor-pointer">
                            <label for="limbah3" class="cursor-pointer">Kotoran Sapi</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="limbah4" name="limbah" value="Kotoran Domba" class="w-5 h-5 accent-primary cursor-pointer">
                            <label for="limbah4" class="cursor-pointer">Kotoran Domba</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="limbah6" name="limbah" value="Lainnya" class="w-5 h-5 accent-primary cursor-pointer">
                            <label for="limbah6" class="cursor-pointer">Lainnya</label>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-primary-dark font-medium">Apakah memiliki tempat penyimpanan? <span class="text-red-500">*</span></label>
                    <div class="flex gap-8 mt-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" id="penyimpananYa" name="penyimpanan" value="Ya" required class="w-5 h-5 accent-primary cursor-pointer">
                            <label for="penyimpananYa" class="cursor-pointer">Ya</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" id="penyimpananTidak" name="penyimpanan" value="Tidak" class="w-5 h-5 accent-primary cursor-pointer">
                            <label for="penyimpananTidak" class="cursor-pointer">Tidak</label>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-primary-dark font-medium">Apakah memiliki kendaraan pengangkut? <span class="text-red-500">*</span></label>
                    <div class="flex gap-8 mt-2">
                        <div class="flex items-center gap-2">
                            <input type="radio" id="kendaraanYa" name="kendaraan" value="Ya" required class="w-5 h-5 accent-primary cursor-pointer">
                            <label for="kendaraanYa" class="cursor-pointer">Ya</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="radio" id="kendaraanTidak" name="kendaraan" value="Tidak" class="w-5 h-5 accent-primary cursor-pointer">
                            <label for="kendaraanTidak" class="cursor-pointer">Tidak</label>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-primary-dark font-medium">Catatan Tambahan</label>
                    <div class="relative">
                        <span class="absolute left-4 top-4 text-lg text-gray-400">📝</span>
                        <textarea id="catatan" placeholder="Informasi tambahan yang ingin Anda sampaikan"
                            class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] min-h-[100px] focus:outline-none focus:border-primary transition-colors text-base"></textarea>
                    </div>
                </div>

                <button type="submit" 
                    class="w-full p-5 mt-4 bg-gradient-to-br from-primary to-primary-light text-white text-lg font-semibold rounded-[10px] shadow-lg shadow-primary/30 transform transition-all duration-300 hover:-translate-y-0.5 hover:shadow-xl">
                    Kirim Data
                </button>
            </form>

            <div class="text-center mt-6">
                <a href="{{ route('dashboard-pengepull') }}" class="text-primary hover:underline text-base">← Kembali ke beranda</a>
            </div>
        </div>
    </div>

    <script>
        function handleSubmit(e) {
            e.preventDefault();

            // Validasi nomor telepon
            const telepon = document.getElementById('telepon').value;
            if (!/^08\d{8,11}$/.test(telepon)) {
                alert('Format nomor telepon tidak valid! Harus dimulai dengan 08 dan 10-13 digit.');
                return;
            }

            // Validasi KTP
            const ktp = document.getElementById('ktp').value;
            if (ktp.length !== 16 || !/^\d+$/.test(ktp)) {
                alert('Nomor KTP harus 16 digit angka!');
                return;
            }

            // Validasi jenis limbah
            const limbahChecked = document.querySelectorAll('input[name="limbah"]:checked');
            if (limbahChecked.length === 0) {
                alert('Pilih minimal satu jenis limbah yang dikumpulkan!');
                return;
            }

            // Kumpulkan data
            const formData = {
                nama: document.getElementById('nama').value,
                telepon: telepon,
                email: document.getElementById('email').value,
                ktp: ktp,
                alamat: document.getElementById('alamat').value,
                kelurahan: document.getElementById('kelurahan').value,
                kecamatan: document.getElementById('kecamatan').value,
                kabupaten: document.getElementById('kabupaten').value,
                provinsi: document.getElementById('provinsi').value,
                kodepos: document.getElementById('kodepos').value,
                namaUsaha: document.getElementById('namaUsaha').value,
                lamaOperasi: document.getElementById('lamaOperasi').value,
                kapasitas: document.getElementById('kapasitas').value,
                jenisLimbah: Array.from(limbahChecked).map(cb => cb.value),
                penyimpanan: document.querySelector('input[name="penyimpanan"]:checked').value,
                kendaraan: document.querySelector('input[name="kendaraan"]:checked').value,
                catatan: document.getElementById('catatan').value
            };

            console.log('Data Pengepul:', formData);
            alert('Data berhasil dikirim! ✅\n\nTerima kasih telah mendaftar sebagai pengepul limbah di Poopeefy. Tim kami akan segera menghubungi Anda untuk proses verifikasi.');

            // Reset form
            e.target.reset();
        }
    </script>
</body>
</html>
