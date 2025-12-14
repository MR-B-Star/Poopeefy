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
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased leading-relaxed text-gray-700">
    <header class="bg-gradient-to-r from-primary to-primary-light shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <span class="text-3xl">🌱</span>
                <span class="text-2xl font-bold text-white text-primary-dark">Poopeefy</span>
            </div>

           <nav class="hidden md:flex items-center gap-6">
    <a href="{{ route('articles.index') }}" class="px-4 py-2 rounded-lg text-white hover:bg-white/20">
        Kelola Artikel
    </a>
    <a href="{{ route('industries.index') }}" class="px-4 py-2 rounded-lg text-white hover:bg-white/20">
        Kelola Industri
    </a>
    <a href="{{ route('submissions.index') }}" class="px-4 py-2 rounded-lg text-white hover:bg-white/20">
        Submission
    </a>

</nav>


            <div class="flex items-center gap-3">
                <button onclick="window.location.href='{{ route('login') }}'" class="px-4 py-2 rounded-lg border-2 border-white/80 text-white font-medium hover:bg-white hover:text-primary transition-all duration-300 text-sm shadow-sm">
                    Masuk
                </button>
                <button onclick="window.location.href='{{ route('register') }}'" class="px-4 py-2 rounded-lg border-2 border-white/80 text-white font-medium hover:bg-white hover:text-primary transition-all duration-300 text-sm shadow-sm">
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

               <section class="bg-white rounded-xl shadow p-8 mt-8">
    <h2 class="text-3xl font-bold text-primary-dark mb-6">
        🛠️ Admin Panel
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="{{ route('articles.index') }}"
           class="p-6 rounded-lg bg-primary/10 hover:bg-primary/20 transition">
            <h3 class="text-xl font-bold text-primary-dark mb-2">📄 Artikel</h3>
            <p>Tambah, edit, hapus artikel edukasi</p>
        </a>

        <a href="{{ route('industries.index') }}"
           class="p-6 rounded-lg bg-primary/10 hover:bg-primary/20 transition">
            <h3 class="text-xl font-bold text-primary-dark mb-2">🏭 Industri</h3>
            <p>Kelola data industri pengolah</p>
        </a>

        <a href="{{ route('submissions.index') }}"
            class="p-6 rounded-lg bg-primary/10 hover:bg-primary/20 transition">
            <h3 class="text-xl font-bold text-primary-dark mb-2">📬 Submission</h3>
            <p>Approve / reject pengajuan user</p>
        </a>

    </div>
</section>

            </div>

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
        // Smooth scroll for navigation links (Tetap dipertahankan)
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
