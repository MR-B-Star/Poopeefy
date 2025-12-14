<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pengepul Limbah - Poopeefy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4a7c2c 0%, #6ba83d 100%);
            min-height: 100vh;
            padding: 2rem 1rem;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            animation: slideIn 0.5s ease;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            background: linear-gradient(135deg, #2d5016 0%, #4a7c2c 100%);
            color: white;
            padding: 2.5rem;
            text-align: center;
        }

        .header-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .header h1 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .header p {
            font-size: 1rem;
            opacity: 0.9;
        }

        .form-content {
            padding: 2.5rem;
        }

        .section-title {
            color: #2d5016;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #6ba83d;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #2d5016;
            font-weight: 500;
            font-size: 0.95rem;
        }

        .required {
            color: #e74c3c;
            margin-left: 0.2rem;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper input,
        .input-wrapper select,
        .input-wrapper textarea {
            width: 100%;
            padding: 1rem;
            padding-left: 3rem;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
            font-family: inherit;
            transition: border-color 0.3s;
        }

        .input-wrapper textarea {
            resize: vertical;
            min-height: 100px;
        }

        .input-wrapper input:focus,
        .input-wrapper select:focus,
        .input-wrapper textarea:focus {
            outline: none;
            border-color: #4a7c2c;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 1rem;
            font-size: 1.2rem;
            color: #999;
        }

        .radio-group {
            display: flex;
            gap: 2rem;
            margin-top: 0.5rem;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .radio-option input[type="radio"] {
            width: 1.2rem;
            height: 1.2rem;
            cursor: pointer;
        }

        .radio-option label {
            margin: 0;
            cursor: pointer;
        }

        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.8rem;
            margin-top: 0.5rem;
        }

        .checkbox-option {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .checkbox-option input[type="checkbox"] {
            width: 1.1rem;
            height: 1.1rem;
            cursor: pointer;
        }

        .checkbox-option label {
            margin: 0;
            cursor: pointer;
            font-weight: 400;
        }

        .btn-submit {
            width: 100%;
            padding: 1.2rem;
            background: linear-gradient(135deg, #4a7c2c 0%, #6ba83d 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-top: 1rem;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(74, 124, 44, 0.3);
        }

        .info-box {
            background: #e8f5e9;
            border-left: 4px solid #4a7c2c;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            font-size: 0.9rem;
            color: #2d5016;
        }

        .back-link {
            text-align: center;
            margin-top: 1.5rem;
        }

        .back-link a {
            color: #4a7c2c;
            text-decoration: none;
            font-size: 0.95rem;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .checkbox-group {
                grid-template-columns: 1fr;
            }

            .form-content {
                padding: 1.5rem;
            }

            .header {
                padding: 2rem 1.5rem;
            }

            .header h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-icon">♻️</div>
            <h1>Form Data Pengepul Limbah</h1>
            <p>Lengkapi data Anda untuk bergabung dengan Poopeefy</p>
        </div>

        <div class="form-content">
            <div class="info-box">
                ℹ️ Mohon isi semua data dengan benar dan lengkap. Data ini akan digunakan untuk verifikasi dan komunikasi selanjutnya.
            </div>

            <form onsubmit="handleSubmit(event)">
                <!-- Data Pribadi -->
                <div class="section-title">📋 Data Pribadi</div>

                <div class="form-group">
                    <label>Nama Lengkap Pengepul <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <span class="input-icon">👤</span>
                        <input type="text" id="nama" placeholder="Masukkan nama lengkap" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nomor Telepon <span class="required">*</span></label>
                        <div class="input-wrapper">
                            <span class="input-icon">📱</span>
                            <input type="tel" id="telepon" placeholder="08xxxxxxxxxx" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-wrapper">
                            <span class="input-icon">📧</span>
                            <input type="email" id="email" placeholder="Username@email.com">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Nomor KTP <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <span class="input-icon">🪪</span>
                        <input type="text" id="ktp" placeholder="16 digit nomor KTP" maxlength="16" required>
                    </div>
                </div>

                <!-- Domisili -->
                <div class="section-title">📍 Domisili</div>

                <div class="form-group">
                    <label>Alamat Lengkap <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <span class="input-icon">🏠</span>
                        <textarea id="alamat" placeholder="Jalan, RT/RW, No. Rumah" required></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Kelurahan/Desa <span class="required">*</span></label>
                        <div class="input-wrapper">
                            <span class="input-icon">🏘️</span>
                            <input type="text" id="kelurahan" placeholder="Nama kelurahan/desa" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Kecamatan <span class="required">*</span></label>
                        <div class="input-wrapper">
                            <span class="input-icon">🏘️</span>
                            <input type="text" id="kecamatan" placeholder="Nama kecamatan" required>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Kabupaten/Kota <span class="required">*</span></label>
                        <div class="input-wrapper">
                            <span class="input-icon">🏙️</span>
                            <input type="text" id="kabupaten" placeholder="Nama kabupaten/kota" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Provinsi <span class="required">*</span></label>
                        <div class="input-wrapper">
                            <span class="input-icon">🗺️</span>
                            <input type="text" id="provinsi" placeholder="Nama provinsi" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Kode Pos</label>
                    <div class="input-wrapper">
                        <span class="input-icon">📮</span>
                        <input type="text" id="kodepos" placeholder="5 digit kode pos" maxlength="5">
                    </div>
                </div>

                <!-- Data Usaha -->
                <div class="section-title">🏢 Data Usaha</div>

                <div class="form-group">
                    <label>Nama Usaha/Tempat Pengepulan</label>
                    <div class="input-wrapper">
                        <span class="input-icon">🏪</span>
                        <input type="text" id="namaUsaha" placeholder="Nama tempat pengepulan limbah">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Lama Beroperasi <span class="required">*</span></label>
                        <div class="input-wrapper">
                            <span class="input-icon">📅</span>
                            <select id="lamaOperasi" required>
                                <option value="">Pilih durasi</option>
                                <option value="< 1 tahun">Kurang dari 1 tahun</option>
                                <option value="1-2 tahun">1-2 tahun</option>
                                <option value="3-5 tahun">3-5 tahun</option>
                                <option value="> 5 tahun">Lebih dari 5 tahun</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Kapasitas per Hari (kg) <span class="required">*</span></label>
                        <div class="input-wrapper">
                            <span class="input-icon">⚖️</span>
                            <input type="number" id="kapasitas" placeholder="Contoh: 500" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Jenis Kotoran yang Dikumpulkan <span class="required">*</span></label>
                    <div class="checkbox-group">
                        <div class="checkbox-option">
                            <input type="checkbox" id="limbah1" name="limbah" value="Sisa Makanan">
                            <label for="limbah1">Kotoran Manusia</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="limbah2" name="limbah" value="Sayuran">
                            <label for="limbah2">Kotoran Kuda</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="limbah3" name="limbah" value="Buah-buahan">
                            <label for="limbah3">Kotoran Sapi</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="limbah4" name="limbah" value="Daun-daunan">
                            <label for="limbah4">Kotoran Domba</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="limbah6" name="limbah" value="Lainnya">
                            <label for="limbah6">Lainnya</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Apakah memiliki tempat penyimpanan? <span class="required">*</span></label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="penyimpananYa" name="penyimpanan" value="Ya" required>
                            <label for="penyimpananYa">Ya</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="penyimpananTidak" name="penyimpanan" value="Tidak">
                            <label for="penyimpananTidak">Tidak</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Apakah memiliki kendaraan pengangkut? <span class="required">*</span></label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="kendaraanYa" name="kendaraan" value="Ya" required>
                            <label for="kendaraanYa">Ya</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="kendaraanTidak" name="kendaraan" value="Tidak">
                            <label for="kendaraanTidak">Tidak</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Catatan Tambahan</label>
                    <div class="input-wrapper">
                        <span class="input-icon">📝</span>
                        <textarea id="catatan" placeholder="Informasi tambahan yang ingin Anda sampaikan"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Kirim Data</button>
            </form>

            <div class="back-link">
                <a href="{{ route('dashboard-awal') }}">← Kembali ke beranda</a>
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
