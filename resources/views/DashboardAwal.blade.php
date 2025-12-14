<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Poopeefy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #4a7c2c;
            --primary-dark: #2d5016;
            --primary-light: #6ba83d;
            --secondary: #8B6F47;
            --secondary-dark: #6d5736;
            --gray-50: #f9fafb;
            --gray-200: #e5e7eb;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: var(--gray-50);
            line-height: 1.6;
        }

        /* Header */
        header {
            background-color: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .header-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 4rem;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo-icon {
            font-size: 1.875rem;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-dark);
        }

        nav {
            display: none;
            align-items: center;
            gap: 1.5rem;
        }

        nav a {
            color: var(--gray-700);
            text-decoration: none;
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--primary);
        }

        .auth-buttons {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .btn {
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            text-decoration: none;
            display: inline-block;
        }

        .btn-outline {
            color: var(--primary);
            border: 2px solid var(--primary);
            background-color: white;
            display: none;
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary {
            background: linear-gradient(to right, var(--primary), var(--primary-light));
            color: white;
        }

        .btn-primary:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        /* Hero Banner */
        .hero {
            background: linear-gradient(to right, var(--primary), var(--primary-light));
            color: white;
            padding: 3rem 1rem;
            text-align: center;
        }

        .hero-container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 2.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.25rem;
            opacity: 0.9;
        }

        /* Main Content */
        .main-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1rem 3rem;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .card {
            background-color: white;
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-top: 2rem;
        }

        .card-title {
            font-size: 1.875rem;
            font-weight: bold;
            color: var(--primary-dark);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .info-box {
            padding: 1.5rem;
            border-radius: 0.5rem;
            border-left: 4px solid;
            margin: 1rem 0;
        }

        .info-box-primary {
            background-color: rgba(74, 124, 44, 0.05);
            border-color: var(--primary);
        }

        .info-box-secondary {
            background-color: rgba(139, 111, 71, 0.05);
            border-color: var(--secondary);
        }

        .info-box h3 {
            font-weight: bold;
            font-size: 1.125rem;
            color: var(--primary-dark);
            margin-bottom: 0.75rem;
        }

        .mission-list {
            list-style: none;
        }

        .mission-list li {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .checkmark {
            color: var(--primary);
            font-weight: bold;
        }

        /* Articles */
        .article {
            border-bottom: 1px solid var(--gray-200);
            padding-bottom: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .article:last-child {
            border-bottom: none;
        }

        .article-container {
            display: flex;
            gap: 1rem;
        }

        .article-icon {
            flex-shrink: 0;
            width: 6rem;
            height: 6rem;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.25rem;
        }

        .article-icon-1 {
            background: linear-gradient(to bottom right, var(--primary), var(--primary-light));
        }

        .article-icon-2 {
            background: linear-gradient(to bottom right, var(--secondary), var(--primary-light));
        }

        .article-icon-3 {
            background: linear-gradient(to bottom right, var(--primary-light), var(--primary));
        }

        .article-icon-4 {
            background: linear-gradient(to bottom right, var(--primary), var(--secondary));
        }

        .article-content h3 {
            font-size: 1.25rem;
            font-weight: bold;
            color: var(--primary-dark);
            margin-bottom: 0.5rem;
            cursor: pointer;
        }

        .article-content h3:hover {
            color: var(--primary);
        }

        .article-content p {
            color: var(--gray-600);
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .article-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.875rem;
            color: var(--gray-500);
        }

        /* Sidebar */
        .sidebar-card {
            background-color: white;
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin-top: 2rem;
        }

        .sidebar-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: var(--primary-dark);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-full {
            width: 100%;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            margin-bottom: 0.75rem;
        }

        .btn-full-outline {
            background-color: white;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-full-outline:hover {
            background-color: var(--primary);
            color: white;
        }

        .btn-full-primary {
            background: linear-gradient(to right, var(--primary), var(--primary-light));
            color: white;
        }

        .btn-full-primary:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .divider {
            padding-top: 0.75rem;
            border-top: 1px solid var(--gray-200);
            text-align: center;
        }

        .divider p {
            font-size: 0.875rem;
            color: var(--gray-600);
        }

        .divider a {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
        }

        .divider a:hover {
            text-decoration: underline;
        }

        .tip-box {
            margin-top: 1rem;
            padding: 1rem;
            background-color: rgba(74, 124, 44, 0.05);
            border-radius: 0.5rem;
        }

        .tip-box p {
            font-size: 0.75rem;
            color: var(--gray-600);
        }

        .quick-links {
            background: linear-gradient(to bottom right, var(--primary), var(--primary-light));
            color: white;
        }

        .quick-links ul {
            list-style: none;
        }

        .quick-links li {
            margin-bottom: 0.5rem;
        }

        .quick-links a {
            display: block;
            padding: 0.5rem 0.75rem;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 0.5rem;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .quick-links a:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }

        /* Footer */
        footer {
            background-color: var(--primary-dark);
            color: white;
            padding: 2rem 1rem;
            text-align: center;
            margin-top: 3rem;
        }

        footer p {
            margin: 0.5rem 0;
        }

        .footer-subtitle {
            opacity: 0.9;
        }

        /* Responsive */
        @media (min-width: 768px) {
            nav {
                display: flex;
            }

            .btn-outline {
                display: inline-block;
            }

            .hero h1 {
                font-size: 3rem;
            }

            .hero p {
                font-size: 1.5rem;
            }
        }

        @media (min-width: 1024px) {
            .grid {
                grid-template-columns: 2fr 1fr;
            }

            .main-content {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <div class="logo">
                <span class="logo-icon">🌱</span>
                <span class="logo-text">Poopeefy</span>
            </div>
            <nav>
                <a href="#info">Informasi</a>
                <a href="#articles">Artikel</a>
                <a href="#form">Form Pengepul</a>
            </nav>
            <div class="auth-buttons">
                <button onclick="window.location.href='{{ route('login') }}'" class="btn btn-outline">
                    Masuk
                </button>
                <button onclick="window.location.href='{{ route('register') }}'" class="btn btn-primary">
                    Daftar
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Banner -->
    <section class="hero">
        <div class="hero-container">
            <h1>Dashboard Poopeefy</h1>
            <p>Platform Distribusi Limbah Kotoran Menjadi Pupuk</p>
        </div>
    </section>

    <div class="main-container">
        <div class="grid">
            <!-- Main Content -->
            <div class="main-content">
                <!-- Informasi Section -->
                <section id="info" class="card">
                    <h2 class="card-title">
                        <span>ℹ️</span> Informasi Poopeefy
                    </h2>
                    <div>
                        <p>
                            <strong>Poopeefy</strong> adalah platform inovatif yang menghubungkan pengepul limbah kotoran dengan pengelola pupuk organik. Kami berkomitmen untuk menciptakan ekosistem yang berkelanjutan dengan mengubah limbah menjadi sumber daya berharga.
                        </p>
                        <div class="info-box info-box-primary">
                            <h3>Visi Kami</h3>
                            <p>Menciptakan masa depan yang lebih hijau dengan mengoptimalkan pengelolaan limbah kotoran menjadi pupuk berkualitas tinggi untuk pertanian berkelanjutan.</p>
                        </div>
                        <div class="info-box info-box-secondary">
                            <h3>Misi Kami</h3>
                            <ul class="mission-list">
                                <li>
                                    <span class="checkmark">✓</span>
                                    <span>Menyediakan platform distribusi yang efisien dan transparan</span>
                                </li>
                                <li>
                                    <span class="checkmark">✓</span>
                                    <span>Meningkatkan kesadaran tentang manfaat pupuk kotoran</span>
                                </li>
                                <li>
                                    <span class="checkmark">✓</span>
                                    <span>Memberdayakan pengepul dan pengelola limbah kotoran mahkluk hidup</span>
                                </li>
                                <li>
                                    <span class="checkmark">✓</span>
                                    <span>Mendukung pertanian organik dan ramah lingkungan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Articles Section -->
                <section id="articles" class="card">
                    <h2 class="card-title">
                        <span>📰</span> Artikel Terbaru
                    </h2>
                    <div>
                        <!-- Article 1 -->
                        <article class="article">
                            <div class="article-container">
                                <div class="article-icon article-icon-1">
                                    🌱
                                </div>
                                <div class="article-content">
                                    <h3>Manfaat Pupuk Organik untuk Tanaman Pangan</h3>
                                    <p>
                                        Pupuk organik memiliki berbagai manfaat untuk meningkatkan produktivitas tanaman pangan. Kandungan nutrisi alami membantu pertumbuhan optimal tanpa merusak tanah...
                                    </p>
                                    <div class="article-meta">
                                        <span>📅 15 Nov 2025</span>
                                        <span>👤 Admin Poopeefy</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Article 2 -->
                        <article class="article">
                            <div class="article-container">
                                <div class="article-icon article-icon-2">
                                    ♻️
                                </div>
                                <div class="article-content">
                                    <h3>Proses Pengolahan Limbah Organik yang Efektif</h3>
                                    <p>
                                        Mengetahui proses pengolahan limbah organik yang benar sangat penting. Dengan metode komposting yang tepat, limbah dapat diubah menjadi pupuk berkualitas...
                                    </p>
                                    <div class="article-meta">
                                        <span>📅 10 Nov 2025</span>
                                        <span>👤 Tim Edukasi</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Article 3 -->
                        <article class="article">
                            <div class="article-container">
                                <div class="article-icon article-icon-3">
                                    🚜
                                </div>
                                <div class="article-content">
                                    <h3>Kisah Sukses Petani dengan Pupuk Organik</h3>
                                    <p>
                                        Pak Budi dari Jawa Timur berhasil meningkatkan hasil panen hingga 40% setelah beralih ke pupuk organik. Pengalaman ini membuktikan efektivitas pupuk organik...
                                    </p>
                                    <div class="article-meta">
                                        <span>📅 5 Nov 2025</span>
                                        <span>👤 Reporter Lapangan</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Article 4 -->
                        <article class="article">
                            <div class="article-container">
                                <div class="article-icon article-icon-4">
                                    🌍
                                </div>
                                <div class="article-content">
                                    <h3>Dampak Positif Pengelolaan Limbah terhadap Lingkungan</h3>
                                    <p>
                                        Pengelolaan limbah organik yang baik dapat mengurangi emisi gas rumah kaca hingga 30%. Ini adalah langkah nyata untuk menjaga kelestarian lingkungan...
                                    </p>
                                    <div class="article-meta">
                                        <span>📅 1 Nov 2025</span>
                                        <span>👤 Tim Lingkungan</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>
            </div>

            <!-- Sidebar -->
            <div>
                <!-- Auth Buttons Section -->
                <section class="sidebar-card">
                    <h3 class="sidebar-title">
                        <span>🔐</span> Akses Akun
                    </h3>
                    <div>
                        <button onclick="window.location.href='{{ route('login') }}'" class="btn-full btn-full-outline">
                            <span>🔓</span> Masuk ke Akun
                        </button>
                        <button onclick="window.location.href='{{ route('register') }}'" class="btn-full btn-full-primary">
                            <span>✨</span> Daftar Sekarang
                        </button>
                        <div class="divider">
                            <p>
                                Belum tahu fitur kami?
                                <a href="index.html">Pelajari lebih lanjut</a>
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Form Pengepul Section -->
                <section id="form" class="sidebar-card">
                    <h3 class="sidebar-title">
                        <span>📋</span> Form Pengepul Limbah
                    </h3>
                    <p style="color: var(--gray-600); margin-bottom: 1rem; font-size: 0.875rem;">
                        Ajukan pengambilan limbah organik Anda dengan mengisi form pengepul kami.
                    </p>
                    <button onclick="window.location.href='{{ route('form-pengepull') }}'" class="btn-full btn-full-primary">
                        <span>📝</span> Isi Form Pengepul
                    </button>
                    <div class="tip-box">
                        <p>
                            <strong>💡 Tips:</strong> Pastikan data yang Anda masukkan akurat agar proses pengambilan limbah dapat berjalan lancar.
                        </p>
                    </div>
                </section>

                <!-- Quick Links -->
                <section class="sidebar-card quick-links">
                    <h3 class="sidebar-title">🔗 Link Berguna</h3>
                    <ul>
                        <li>
                            <a href="index.html#fitur">Fitur Poopeefy</a>
                        </li>
                        <li>
                            <a href="index.html#cara-kerja">Cara Kerja</a>
                        </li>
                        <li>
                            <a href="index.html#edukasi">Edukasi Pupuk Organik</a>
                        </li>
                        <li>
                            <a href="index.html#kontak">Hubungi Kami</a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div>
            <p style="font-size: 1.125rem; margin-bottom: 0.5rem;">&copy; 2025 Poopeefy. Semua hak dilindungi.</p>
            <p class="footer-subtitle">Mengubah limbah menjadi berkah untuk pertanian berkelanjutan</p>
        </div>
    </footer>

    <script>
        // Smooth scroll for navigation links
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
