<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Poopeefy</title>
    
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
                        secondary: {
                            DEFAULT: '#8B6F47',
                            dark: '#6d5736',
                        }
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
</head>
<body class="bg-gradient-to-br from-primary to-primary-light min-h-screen flex justify-center items-center p-4 md:p-8 font-sans">

    <div class="bg-white rounded-[20px] shadow-custom overflow-hidden max-w-[1000px] w-full grid grid-cols-1 md:grid-cols-[1fr_1.2fr] animate-slideIn min-h-[600px]">
        
        <div class="bg-gradient-to-br from-primary-dark to-primary text-white p-12 flex flex-col justify-center items-center text-center">
            <div class="text-5xl mb-4">🌱</div>
            <h1 class="text-4xl font-bold mb-4">Poopeefy</h1>
            <p class="text-base opacity-90 leading-relaxed mb-8">
                Website distribusi limbah organik ke pabrik pengelola limbah organik
            </p>

            <div class="text-left w-full space-y-4 hidden md:block mt-4">
                <div class="flex items-center gap-4 text-base">
                    <span class="text-2xl">✅</span>
                    <span>Distribusi limbah efisien</span>
                </div>
                <div class="flex items-center gap-4 text-base">
                    <span class="text-2xl">✅</span>
                    <span>Ramah lingkungan</span>
                </div>
                <div class="flex items-center gap-4 text-base">
                    <span class="text-2xl">✅</span>
                    <span>Peluang ekonomi baru</span>
                </div>
            </div>
        </div>

        <div class="p-8 md:p-12 overflow-y-auto max-h-[90vh] md:max-h-none">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-primary-dark mb-2">Buat Akun Baru</h2>
                <p class="text-gray-500 text-sm">Isi form di bawah untuk mendaftar</p>
            </div>

            <form onsubmit="handleRegister(event)">
                <div class="mb-6">
                    <label class="block mb-2 text-primary-dark font-medium text-sm">Username</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-lg text-gray-400">👤</span>
                        <input type="text" placeholder="Masukkan Username" required 
                            class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-primary-dark font-medium text-sm">Email</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-lg text-gray-400">📧</span>
                        <input type="email" placeholder="Username@email.com" required 
                            class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <label class="block mb-2 text-primary-dark font-medium text-sm">Password</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-lg text-gray-400">🔒</span>
                            <input type="password" id="password" placeholder="Min 8 karakter" required 
                                class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                        </div>
                    </div>

                    <div>
                        <label class="block mb-2 text-primary-dark font-medium text-sm">Konfirmasi Password</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-lg text-gray-400">🔒</span>
                            <input type="password" id="confirmPassword" placeholder="Ulangi password" required 
                                class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] focus:outline-none focus:border-primary transition-colors text-base">
                        </div>
                    </div>
                </div>

                <button type="submit" 
                    class="w-full p-4 bg-gradient-to-br from-primary to-primary-light text-white text-lg font-semibold rounded-[10px] shadow-lg shadow-primary/30 transform transition-all duration-300 hover:-translate-y-0.5 hover:shadow-xl mt-4">
                    Daftar Sekarang
                </button>

                <div class="text-center mt-4 text-xs text-gray-500">
                    Dengan mendaftar, Anda menyetujui <a href="#" class="text-primary hover:underline">Syarat & Ketentuan</a> dan <a href="#" class="text-primary hover:underline">Kebijakan Privasi</a> kami
                </div>
            </form>

            <div class="relative text-center my-6 text-gray-400">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <span class="relative bg-white px-4 text-sm">atau</span>
            </div>

            <div class="text-center mt-6 text-gray-500 text-sm">
                <p>Sudah punya akun? <a href="{{ route('login') }}" class="text-primary font-semibold hover:underline">Masuk di sini</a></p>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('dashboard-awal') }}" class="text-secondary text-sm hover:underline">← Kembali ke beranda</a>
            </div>
        </div>
    </div>

    <script>
        function handleRegister(e) {
            e.preventDefault();

            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                alert('Password dan konfirmasi password tidak sama!');
                return;
            }

            if (password.length < 8) {
                alert('Password minimal 8 karakter!');
                return;
            }

            alert('Pendaftaran berhasil! Silakan login dengan akun baru Anda 🎉');
            window.location.href = '{{ route('login') }}';
        }
    </script>
</body>
</html>
