<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Poopeefy</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#4a7c2c',  // Hijau Utama
                            dark: '#2d5016',     // Hijau Gelap (Text/Footer)
                            light: '#6ba83d',    // Hijau Terang (Gradient)
                        },
                        secondary: {
                            DEFAULT: '#8B6F47',  // Coklat
                            dark: '#6d5736',
                        }
                    },
                    fontFamily: {
                        sans: ['-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* CSS tambahan kecil untuk scroll smooth jika diperlukan */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased leading-relaxed text-gray-700">

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <span class="text-3xl">🌱</span>
                <span class="text-2xl font-bold text-primary-dark">Poopeefy</span>
            </div>

            <nav class="hidden md:flex items-center gap-6">
                <a href="#info" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Informasi</a>
                <a href="#articles" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Artikel</a>
            </nav>

            <div class="flex items-center gap-3">
                <button onclick="window.location.href='{{ route('login') }}'" class="hidden md:inline-block px-4 py-2 rounded-lg font-medium border-2 border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300">
                    Masuk
                </button>
                <button onclick="window.location.href='{{ route('register') }}'" class="hidden md:inline-block px-4 py-2 rounded-lg font-medium border-2 border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300">
                    Daftar
                </button>
            </div>
        </div>
    </header>

    <section class="bg-gradient-to-r from-primary to-primary-light text-white py-12 text-center px-4">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl font-bold mb-4">Dashboard Poopeefy</h1>
            <p class="text-xl opacity-90">Platform Distribusi Limbah Kotoran Menjadi Pupuk</p>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 pb-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 space-y-8">
                
                <section id="info" class="bg-white rounded-xl shadow-[0_10px_15px_-3px_rgba(0,0,0,0.1)] p-8 mt-8">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 flex items-center gap-3">
                        <span>ℹ️</span> Informasi Poopeefy
                    </h2>
                    <div>
                        <p class="mb-6">
                            <strong>Poopeefy</strong> adalah platform inovatif yang menghubungkan pengepul limbah kotoran dengan pengelola pupuk organik. Kami berkomitmen untuk menciptakan ekosistem yang berkelanjutan dengan mengubah limbah menjadi sumber daya berharga.
                        </p>
                        
                        <div class="p-6 rounded-lg bg-primary/5 border-l-4 border-primary mb-4">
                            <h3 class="font-bold text-lg text-primary-dark mb-2">Visi Kami</h3>
                            <p>Menciptakan masa depan yang lebih hijau dengan mengoptimalkan pengelolaan limbah kotoran menjadi pupuk berkualitas tinggi untuk pertanian berkelanjutan.</p>
                        </div>

                        <div class="p-6 rounded-lg bg-secondary/5 border-l-4 border-secondary">
                            <h3 class="font-bold text-lg text-primary-dark mb-2">Misi Kami</h3>
                            <ul class="space-y-2">
                                <li class="flex gap-2">
                                    <span class="text-primary font-bold">✓</span>
                                    <span>Menyediakan platform distribusi yang efisien dan transparan</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-primary font-bold">✓</span>
                                    <span>Meningkatkan kesadaran tentang manfaat pupuk kotoran</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-primary font-bold">✓</span>
                                    <span>Memberdayakan pengepul dan pengelola limbah kotoran mahkluk hidup</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-primary font-bold">✓</span>
                                    <span>Mendukung pertanian organik dan ramah lingkungan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="articles" class="bg-white rounded-xl shadow-[0_10px_15px_-3px_rgba(0,0,0,0.1)] p-8">
                    <h2 class="text-3xl font-bold text-primary-dark mb-6 flex items-center gap-3">
                        <span>📰</span> Artikel Terbaru
                    </h2>
                    <div class="space-y-6">
                        <article class="border-b border-gray-200 pb-6 last:border-0 last:pb-0">
                            <div class="flex gap-4 md:gap-6">
                                <div class="shrink-0 w-24 h-24 rounded-lg bg-gradient-to-br from-primary to-primary-light flex items-center justify-center text-4xl">
                                    🌱
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-primary-dark mb-2 hover:text-primary cursor-pointer transition-colors">Manfaat Pupuk Organik untuk Tanaman Pangan</h3>
                                    <p class="text-gray-600 text-sm mb-2">
                                        Pupuk organik memiliki berbagai manfaat untuk meningkatkan produktivitas tanaman pangan. Kandungan nutrisi alami membantu pertumbuhan optimal tanpa merusak tanah...
                                    </p>
                                    <div class="flex gap-4 text-sm text-gray-500">
                                        <span>📅 15 Nov 2025</span>
                                        <span>👤 Admin Poopeefy</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="border-b border-gray-200 pb-6 last:border-0 last:pb-0">
                            <div class="flex gap-4 md:gap-6">
                                <div class="shrink-0 w-24 h-24 rounded-lg bg-gradient-to-br from-secondary to-primary-light flex items-center justify-center text-4xl">
                                    ♻️
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-primary-dark mb-2 hover:text-primary cursor-pointer transition-colors">Proses Pengolahan Limbah Organik yang Efektif</h3>
                                    <p class="text-gray-600 text-sm mb-2">
                                        Mengetahui proses pengolahan limbah organik yang benar sangat penting. Dengan metode komposting yang tepat, limbah dapat diubah menjadi pupuk berkualitas...
                                    </p>
                                    <div class="flex gap-4 text-sm text-gray-500">
                                        <span>📅 10 Nov 2025</span>
                                        <span>👤 Tim Edukasi</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="border-b border-gray-200 pb-6 last:border-0 last:pb-0">
                            <div class="flex gap-4 md:gap-6">
                                <div class="shrink-0 w-24 h-24 rounded-lg bg-gradient-to-br from-primary-light to-primary flex items-center justify-center text-4xl">
                                    🚜
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-primary-dark mb-2 hover:text-primary cursor-pointer transition-colors">Kisah Sukses Petani dengan Pupuk Organik</h3>
                                    <p class="text-gray-600 text-sm mb-2">
                                        Pak Budi dari Jawa Timur berhasil meningkatkan hasil panen hingga 40% setelah beralih ke pupuk organik. Pengalaman ini membuktikan efektivitas pupuk organik...
                                    </p>
                                    <div class="flex gap-4 text-sm text-gray-500">
                                        <span>📅 5 Nov 2025</span>
                                        <span>👤 Reporter Lapangan</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="border-b border-gray-200 pb-6 last:border-0 last:pb-0">
                            <div class="flex gap-4 md:gap-6">
                                <div class="shrink-0 w-24 h-24 rounded-lg bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-4xl">
                                    🌍
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-primary-dark mb-2 hover:text-primary cursor-pointer transition-colors">Dampak Positif Pengelolaan Limbah terhadap Lingkungan</h3>
                                    <p class="text-gray-600 text-sm mb-2">
                                        Pengelolaan limbah organik yang baik dapat mengurangi emisi gas rumah kaca hingga 30%. Ini adalah langkah nyata untuk menjaga kelestarian lingkungan...
                                    </p>
                                    <div class="flex gap-4 text-sm text-gray-500">
                                        <span>📅 1 Nov 2025</span>
                                        <span>👤 Tim Lingkungan</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>
            </div>

            <div class="space-y-8">
                
                <section class="bg-white rounded-xl shadow-[0_10px_15px_-3px_rgba(0,0,0,0.1)] p-6 mt-8">
                    <h3 class="text-xl font-bold text-primary-dark mb-4 flex items-center gap-2">
                        <span>🔐</span> Akses Akun
                    </h3>
                    <div class="space-y-3">
                        <button onclick="window.location.href='{{ route('login') }}'" class="w-full py-3 px-4 rounded-lg font-semibold border-2 border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300 flex items-center justify-center gap-2">
                            <span>🔓</span> Masuk ke Akun
                        </button>
                        <button onclick="window.location.href='{{ route('register') }}'" class="w-full py-3 px-4 rounded-lg font-semibold border-2 border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300 flex items-center justify-center gap-2">
                            <span>✨</span> Daftar Sekarang
                        </button>
                        
                        <div class="pt-3 border-t border-gray-200 text-center">
                            <p class="text-sm text-gray-600">
                                Belum tahu fitur kami? 
                                <a href="index.html" class="text-primary font-semibold hover:underline">Pelajari lebih lanjut</a>
                            </p>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <footer class="bg-primary-dark text-white py-8 text-center mt-12">
        <div class="max-w-7xl mx-auto px-4">
            <p class="text-lg mb-2">&copy; 2025 Poopeefy. Semua hak dilindungi.</p>
            <p class="opacity-90 text-sm">Mengubah limbah menjadi berkah untuk pertanian berkelanjutan</p>
        </div>
    </footer>

    <script>
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>
