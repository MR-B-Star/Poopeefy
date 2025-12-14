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
                            DEFAULT: '#4a7c2c',
                            dark: '#2d5016',
                            light: '#6ba83d',
                        },
                        secondary: {
                            DEFAULT: '#8B6F47',
                            dark: '#6d5736',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100 text-gray-700">

{{-- ================= HEADER ================= --}}
<header class="bg-gradient-to-r from-primary to-primary-light shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center">

        <div class="flex items-center gap-2 text-white font-bold text-xl">
            🌱 Poopeefy
        </div>

        <nav class="hidden md:flex items-center gap-2">
            <a href="{{ route('dashboard-admin') }}" class="px-4 py-2 rounded-lg text-white bg-white/20">
                Dashboard
            </a>
            <a href="{{ route('articles.index') }}" class="px-4 py-2 rounded-lg text-white hover:bg-white/20">
                Artikel
            </a>
            <a href="{{ route('industries.index') }}" class="px-4 py-2 rounded-lg text-white hover:bg-white/20">
                Industri
            </a>
            <a href="{{ route('submissions.index') }}" class="px-4 py-2 rounded-lg text-white hover:bg-white/20">
                Submission
            </a>
        </nav>

        <div class="flex gap-2">
            <a href="{{ route('login') }}"
               class="px-4 py-2 rounded-lg border border-white text-white hover:bg-white hover:text-primary transition text-sm">
                Masuk
            </a>
            <a href="{{ route('register') }}"
               class="px-4 py-2 rounded-lg border border-white text-white hover:bg-white hover:text-primary transition text-sm">
                Daftar
            </a>
        </div>
    </div>
</header>

{{-- ================= HERO ================= --}}
<section class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-6 py-10">
        <h1 class="text-3xl font-bold text-primary-dark mb-2">
            Dashboard Admin
        </h1>
        <p class="text-gray-600">
            Kelola seluruh data dan konten Poopeefy dari satu tempat
        </p>
    </div>
</section>

{{-- ================= MAIN ================= --}}
<main class="max-w-7xl mx-auto px-6 py-10">

   <section class="bg-white rounded-2xl shadow-lg p-10">

    {{-- Header Panel --}}
    <div class="mb-10">
        <h2 class="text-3xl font-bold text-primary-dark mb-2">
            🛠️ Admin Dashboard
        </h2>
        <p class="text-gray-600 max-w-2xl">
            Pusat kontrol utama untuk mengelola seluruh sistem Poopeefy,
            mulai dari konten edukasi, data industri, hingga pengajuan pengguna.
        </p>
    </div>

    {{-- Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        {{-- Artikel --}}
        <a href="{{ route('articles.index') }}"
           class="group bg-gradient-to-br from-primary/10 to-primary/20
                  rounded-2xl p-8 min-h-[260px]
                  hover:shadow-xl transition flex flex-col justify-between">

            <div>
                <div class="text-5xl mb-4">📄</div>
                <h3 class="text-2xl font-bold text-primary-dark mb-3">
                    Kelola Artikel
                </h3>
                <p class="text-gray-700 leading-relaxed">
                    Buat, edit, dan hapus artikel edukasi seputar
                    pengelolaan limbah organik untuk pengguna Poopeefy.
                </p>
            </div>

            <span class="mt-6 inline-flex items-center text-primary font-semibold group-hover:underline">
                Masuk →
            </span>
        </a>

        {{-- Industri --}}
        <a href="{{ route('industries.index') }}"
           class="group bg-gradient-to-br from-secondary/10 to-secondary/20
                  rounded-2xl p-8 min-h-[260px]
                  hover:shadow-xl transition flex flex-col justify-between">

            <div>
                <div class="text-5xl mb-4">🏭</div>
                <h3 class="text-2xl font-bold text-primary-dark mb-3">
                    Data Industri
                </h3>
                <p class="text-gray-700 leading-relaxed">
                    Kelola informasi industri pengolah limbah
                    yang bekerja sama dengan platform Poopeefy.
                </p>
            </div>

            <span class="mt-6 inline-flex items-center text-primary font-semibold group-hover:underline">
                Kelola →
            </span>
        </a>

        {{-- Submission --}}
        <a href="{{ route('submissions.index') }}"
           class="group bg-gradient-to-br from-primary-light/10 to-primary/20
                  rounded-2xl p-8 min-h-[260px]
                  hover:shadow-xl transition flex flex-col justify-between">

            <div>
                <div class="text-5xl mb-4">📬</div>
                <h3 class="text-2xl font-bold text-primary-dark mb-3">
                    Submission User
                </h3>
                <p class="text-gray-700 leading-relaxed">
                    Review dan verifikasi pengajuan dari pengguna
                    sebelum diproses lebih lanjut di sistem.
                </p>
            </div>

            <span class="mt-6 inline-flex items-center text-primary font-semibold group-hover:underline">
                Tinjau →
            </span>
        </a>

    </div>
</section>


</main>

<footer class="bg-primary-dark text-white text-center py-6 mt-16">
    <p class="text-sm opacity-90">
        © 2025 Poopeefy – Mengubah limbah menjadi berkah 🌱
    </p>
</footer>

</body>
</html>
