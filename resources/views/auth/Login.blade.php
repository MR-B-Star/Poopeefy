<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Poopeefy</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#4a7c2c', // Hijau Utama
                            light: '#6ba83d',   // Hijau Terang
                            dark: '#2d5016',    // Hijau Gelap
                        },
                        secondary: {
                            DEFAULT: '#8B6F47', // Coklat
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
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        slideIn: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-primary to-primary-light min-h-screen flex justify-center items-center p-4 font-sans">

    <div class="bg-white rounded-[20px] shadow-custom overflow-hidden max-w-[900px] w-full grid grid-cols-1 md:grid-cols-2 animate-slideIn">
        
        <div class="bg-gradient-to-br from-primary-dark to-primary text-white p-12 flex flex-col justify-center items-center text-center">
            <div class="text-5xl mb-4">🌱</div>
            <h1 class="text-4xl font-bold mb-4">Poopeefy</h1>
            <div class="text-9xl my-8 animate-float">♻️</div>
            <p class="text-lg opacity-90 leading-relaxed">
                Website distribusi limbah organik ke pabrik pengelola limbah organik
            </p>
        </div>

        <div class="p-8 md:p-12 flex flex-col justify-center">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-primary-dark mb-2">Login 🔐</h2>
                <p class="text-gray-500 text-sm">Masuk ke akun Anda untuk melanjutkan</p>
            </div>

            <form onsubmit="handleLogin(event)">
                <div class="mb-6">
                    <label class="block mb-2 text-primary-dark font-medium text-sm">Email</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-xl text-gray-400">📧</span>
                        <input type="email" placeholder="Username@email.com" required 
                            class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] text-base transition-colors focus:outline-none focus:border-primary">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-primary-dark font-medium text-sm">Password</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-xl text-gray-400">🔒</span>
                        <input type="password" placeholder="Masukkan password" required 
                            class="w-full pl-12 p-4 border-2 border-gray-200 rounded-[10px] text-base transition-colors focus:outline-none focus:border-primary">
                    </div>
                </div>

                <div class="text-right mb-6">
                    <a href="#" class="text-primary text-sm hover:underline">Lupa password?</a>
                </div>

                <button type="submit" 
                    class="w-full p-4 bg-gradient-to-br from-primary to-primary-light text-white text-lg font-semibold rounded-[10px] shadow-lg shadow-primary/30 transform transition-all duration-300 hover:-translate-y-0.5 hover:shadow-xl cursor-pointer border-none">
                    Masuk
                </button>
            </form>

            <div class="relative text-center my-6 text-gray-400">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <span class="relative bg-white px-4 text-sm">atau</span>
            </div>

            <div class="text-center mt-6 text-gray-500">
                <p>Belum punya akun? <a href="{{ route('register') }}" class="text-primary font-semibold hover:underline">Daftar sekarang</a></p>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('dashboard-awal') }}" class="text-secondary text-sm hover:underline">← Kembali ke beranda</a>
            </div>
        </div>
    </div>

    <script>
        function handleLogin(e) {
            e.preventDefault();
            // Logika login di sini
            alert('Login berhasil! Selamat datang di Poopeefy 🌱');
        }
    </script>
</body>
</html>
