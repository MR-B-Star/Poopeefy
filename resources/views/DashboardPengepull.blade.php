<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pengepul - Poopeefy</title>
    
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
                    },
                    fontFamily: {
                        sans: ['-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-sans antialiased leading-relaxed text-gray-700">

    <!-- Notification Container for Real-time Updates -->
    <div id="notification-toast" class="fixed top-24 right-4 z-50 transform transition-all duration-300 translate-x-full opacity-0"></div>

    <header class="bg-gradient-to-r from-primary to-primary-light shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex justify-between items-center text-white">
            
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-primary text-xl shadow-sm">
                    🌱
                </div>
                <span class="text-2xl font-bold tracking-tight">Poopeefy</span>
            </div>

            <nav class="hidden md:flex items-center gap-2">
                <a href="#info" class="px-4 py-2 rounded-lg hover:bg-white/20 hover:text-white transition-all font-medium">Informasi</a>
                <a href="#articles" class="px-4 py-2 rounded-lg hover:bg-white/20 hover:text-white transition-all font-medium">Artikel</a>
                <a href="#form" class="px-4 py-2 rounded-lg hover:bg-white/20 hover:text-white transition-all font-medium">Form Pengepul</a>
            </nav>

            <div class="flex items-center gap-4">
                {{-- Use the 'logout' route and add the CSRF token for security --}}
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="px-4 py-2 rounded-lg border-2 border-white/80 text-white font-medium hover:bg-white hover:text-primary transition-all duration-300 text-sm shadow-sm">
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </header>

    <section class="bg-gradient-to-r from-primary to-primary-light text-white py-10 text-center px-4">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Selamat Datang!</h1>
            <p class="text-lg opacity-90">Pantau status pengajuan limbah Anda di sini.</p>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 pb-12 mt-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 space-y-8">
                
                <section id="info" class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                    <h2 class="text-2xl font-bold text-primary-dark mb-6 flex items-center gap-3">
                        <span>ℹ️</span> Informasi Terkini
                    </h2>
                    
                    <div class="p-4 bg-blue-50 border-l-4 border-blue-500 rounded-r-lg mb-6">
                        <h3 class="font-bold text-blue-800">Status Harga Pasar</h3>
                        <p class="text-sm text-blue-700 mt-1">Harga pupuk organik minggu ini stabil. Permintaan dari sektor industri meningkat 5%.</p>
                    </div>

                    <div>
                        <p class="mb-4">
                            <strong>Poopeefy</strong> terus berkomitmen membantu pengepul menyalurkan limbah kotoran menjadi bernilai ekonomis.
                        </p>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="p-4 rounded-lg bg-gray-50 border border-gray-200">
                                <h3 class="font-bold text-primary-dark mb-2">💡 Tips</h3>
                                <p class="text-sm">Pastikan limbah dikemas dalam karung kedap udara untuk menjaga kualitas kelembapan.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="articles" class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-primary-dark flex items-center gap-3">
                            <span>📰</span> Artikel Edukasi
                        </h2>
                        <a href="#" class="text-sm text-primary font-semibold hover:underline">Lihat Semua</a>
                    </div>
                    
                    <div class="space-y-6">
                        <article class="flex gap-4 group cursor-pointer">
                            <div class="shrink-0 w-20 h-20 rounded-lg bg-primary/10 flex items-center justify-center text-3xl group-hover:bg-primary/20 transition">
                                🌱
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 group-hover:text-primary transition">Cara Meningkatkan Kualitas Pupuk</h3>
                                <p class="text-sm text-gray-500 mt-1">Teknik fermentasi terbaru...</p>
                                <span class="text-xs text-gray-400 mt-2 block">15 Nov 2025</span>
                            </div>
                        </article>
                        
                        <article class="flex gap-4 group cursor-pointer">
                            <div class="shrink-0 w-20 h-20 rounded-lg bg-secondary/10 flex items-center justify-center text-3xl group-hover:bg-secondary/20 transition">
                                🚜
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 group-hover:text-primary transition">Kisah Sukses Pengepul 2025</h3>
                                <p class="text-sm text-gray-500 mt-1">Inspirasi dari Desa Sukamaju...</p>
                                <span class="text-xs text-gray-400 mt-2 block">10 Nov 2025</span>
                            </div>
                        </article>
                    </div>
                </section>
            </div>

            <div class="space-y-6">
                
                <section class="bg-white rounded-xl shadow-[0_10px_15px_-3px_rgba(0,0,0,0.1)] p-6 border-t-4 border-primary relative overflow-hidden">
                    <h3 class="text-xl font-bold text-primary-dark mb-6 flex items-center gap-2">
                        <span>👤</span> Profil Pengepul
                    </h3>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-primary-light flex items-center justify-center text-3xl text-white shadow-md border-2 border-white">
                            👨‍🌾
                        </div>
                        <div>
                            <h4 class="font-bold text-lg text-gray-800 leading-tight">budi_pengepul</h4>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="border-b border-gray-100 pb-2">
                            <span class="text-xs text-gray-500 block uppercase tracking-wide mb-1">Username</span>
                            <span class="text-gray-700 font-medium font-mono bg-gray-50 px-2 py-1 rounded w-full block">
                                budi_pengepul
                            </span>
                        </div>
                        <div class="border-b border-gray-100 pb-2">
                            <span class="text-xs text-gray-500 block uppercase tracking-wide mb-1">Email</span>
                            <span class="text-gray-700 font-medium truncate block">
                                budi.santoso@email.com
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-gray-100">
                        <button onclick="alert('Ke halaman Edit Profil')" class="w-full py-2 text-sm text-primary font-semibold hover:bg-primary/5 rounded transition text-center">
                            ⚙️ Edit Profil
                        </button>
                    </div>
                </section>

                <section id="form" class="bg-white rounded-xl shadow-[0_10px_15px_-3px_rgba(0,0,0,0.1)] p-6">
                    <h3 class="text-xl font-bold text-primary-dark mb-4 flex items-center gap-2">
                        <span>📋</span> Ajukan Limbah Baru
                    </h3>
                    <p class="text-sm text-gray-600 mb-4">
                        Punya stok limbah baru? Segera ajukan form agar industri bisa melihat penawaran Anda.
                    </p>
                    <button onclick="window.location.href='{{ route('FormPengepull') }}'" class="w-full py-3 px-4 rounded-lg font-bold bg-gradient-to-r from-primary to-primary-light text-white hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2">
                        <span>📝</span> Isi Form Pengepul
                    </button>
                </section>
            </div>
        </div>
    </div>

    <footer class="bg-primary-dark text-white py-8 text-center mt-12 border-t-4 border-primary-light">
        <div class="max-w-7xl mx-auto px-4">
            <p class="text-lg mb-2 font-semibold">&copy; 2025 Poopeefy</p>
            <p class="opacity-80 text-sm">Mengubah limbah menjadi berkah untuk pertanian berkelanjutan</p>
        </div>
    </footer>

    <script>
        // --- Polling implementation to check for updates ---

        // Start checking for updates every 5 seconds (5000 milliseconds)
        const pollingInterval = setInterval(checkForUpdates, 5000);

        async function checkForUpdates() {
            try {
                // This endpoint should be created in your routes/api.php.
                // It needs to check for new notifications for the logged-in user.
                const response = await fetch('/api/pengepul/check-updates');
                
                if (!response.ok) {
                    // Don't log errors for things like 404 or 500, as it can be noisy.
                    console.log('No new updates or server not responding.');
                    return;
                }

                const data = await response.json();

                // If the server returns data (e.g., an array of notifications)
                if (data && data.length > 0) {
                    // Show a notification for the first update found
                    const notification = data[0];
                    showNotification(notification.message, notification.status);

                    // Optional: If you only want to show one notification and stop,
                    // you can clear the interval. Otherwise, it will keep checking.
                    // clearInterval(pollingInterval); 
                }

            } catch (error) {
                console.error('Polling error:', error);
            }
        }

        // --- Notification UI functions (no changes needed here) ---

        function showNotification(message, status) {
            const toast = document.getElementById('notification-toast');
            
            // Determine colors based on status
            let icon = status === 'Terima' ? '✅' : '❌';
            let borderColor = status === 'Terima' ? 'border-green-500' : 'border-red-500';
            
            // Set content
            toast.className = `fixed top-24 right-4 z-50 max-w-sm w-full bg-white rounded-lg shadow-lg border-l-4 p-4 flex items-start gap-3 transform transition-all duration-500 translate-x-0 opacity-100 ${borderColor}`;
            
            toast.innerHTML = `
                <div class="text-xl">${icon}</div>
                <div>
                    <h4 class="font-bold text-sm">Status Update!</h4>
                    <p class="text-sm mt-1">${message || 'Status form Anda telah diperbarui.'}</p>
                </div>
                <button onclick="closeNotification()" class="ml-auto text-gray-400 hover:text-gray-600">✕</button>
            `;

            // Auto hide after 8 seconds
            setTimeout(() => {
                closeNotification();
            }, 8000);
        }

        function closeNotification() {
            const toast = document.getElementById('notification-toast');
            toast.classList.add('translate-x-full', 'opacity-0');
            toast.classList.remove('translate-x-0', 'opacity-100');
        }
    </script>

</body>
</html>

<script type="module">
    import Echo from "{{ asset('js/echo.js') }}";
    import { ReverbConnector } from "laravel-reverb";

    window.Echo = new Echo({
        broadcaster: ReverbConnector,
        wsHost: window.location.hostname,
        wsPort: 8080,
        forceTLS: false,
    });

    console.log("Realtime listener berjalan...");

    // Listening to broadcast event
    window.Echo.channel('surat-status')
        .listen('.surat.disetujui', (e) => {
            // Tampilkan notifikasi realtime
            showNotification(`Surat #${e.surat.id} telah disetujui!`, 'Terima');
            console.log("Realtime update diterima:", e);
        });
</script>
