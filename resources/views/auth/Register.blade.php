<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Poopeefy</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 1rem;
        }

        .register-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            max-width: 1000px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
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

        .register-left {
            background: linear-gradient(135deg, #2d5016 0%, #4a7c2c 100%);
            color: white;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .logo {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .register-left h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .register-left p {
            font-size: 1rem;
            line-height: 1.6;
            opacity: 0.9;
            margin-bottom: 1.5rem;
        }

        .benefits {
            text-align: left;
            margin-top: 2rem;
        }

        .benefit-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            font-size: 0.95rem;
        }

        .benefit-icon {
            font-size: 1.5rem;
        }

        .register-right {
            padding: 3rem;
            max-height: 90vh;
            overflow-y: auto;
        }

        .register-right::-webkit-scrollbar {
            width: 8px;
        }

        .register-right::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .register-right::-webkit-scrollbar-thumb {
            background: #4a7c2c;
            border-radius: 10px;
        }

        .register-header {
            margin-bottom: 2rem;
        }

        .register-header h2 {
            color: #2d5016;
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .register-header p {
            color: #666;
            font-size: 0.95rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
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

        .input-wrapper {
            position: relative;
        }

        .input-wrapper input,
        .input-wrapper select {
            width: 100%;
            padding: 1rem;
            padding-left: 3rem;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .input-wrapper input:focus,
        .input-wrapper select:focus {
            outline: none;
            border-color: #38B04A;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2rem;
            color: #999;
        }

        .btn-register {
            width: 100%;
            padding: 1rem;
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

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(74, 124, 44, 0.3);
        }

        .terms {
            margin-top: 1rem;
            font-size: 0.85rem;
            color: #666;
            text-align: center;
        }

        .terms a {
            color: #38B04A;
            text-decoration: none;
        }

        .terms a:hover {
            text-decoration: underline;
        }

        .divider {
            text-align: center;
            margin: 1.5rem 0;
            color: #999;
            position: relative;
        }

        .divider:before,
        .divider:after {
            content: "";
            position: absolute;
            top: 50%;
            width: 42%;
            height: 1px;
            background-color: #ddd;
        }

        .divider:before {
            left: 0;
        }

        .divider:after {
            right: 0;
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #666;
        }

        .login-link a {
            color: #4a7c2c;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .back-home {
            text-align: center;
            margin-top: 1rem;
        }

        .back-home a {
            color: #8B6F47;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .back-home a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .register-container {
                grid-template-columns: 1fr;
            }

            .register-left {
                padding: 2rem;
            }

            .register-left h1 {
                font-size: 2rem;
            }

            .benefits {
                display: none;
            }

            .register-right {
                padding: 2rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-left">
            <div class="logo">🌱</div>
            <h1>Poopeefy</h1>
            <p>Website distribusi limbah organik ke pabrik pengelola limbah organik</p>

            <div class="benefits">
                <div class="benefit-item">
                    <span class="benefit-icon">✅</span>
                    <span>Distribusi limbah efisien</span>
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">✅</span>
                    <span>Ramah lingkungan</span>
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">✅</span>
                    <span>Peluang ekonomi baru</span>
                </div>
            </div>
        </div>

        <div class="register-right">
            <div class="register-header">
                <h2>Buat Akun Baru</h2>
                <p>Isi form di bawah untuk mendaftar</p>
            </div>

            <form onsubmit="handleRegister(event)">
                <div class="form-group">
                    <label>Username</label>
                    <div class="input-wrapper">
                        <span class="input-icon">👤</span>
                        <input type="text" placeholder="Masukkan Username" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <div class="input-wrapper">
                        <span class="input-icon">📧</span>
                        <input type="email" placeholder="Username@email.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-wrapper">
                            <span class="input-icon">🔒</span>
                            <input type="password" id="password" placeholder="Minimal 8 karakter" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <div class="input-wrapper">
                            <span class="input-icon">🔒</span>
                            <input type="password" id="confirmPassword" placeholder="Ulangi password" required>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn-register">Daftar Sekarang</button>

                <div class="terms">
                    Dengan mendaftar, Anda menyetujui <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> kami
                </div>
            </form>

            <div class="divider">atau</div>

            <div class="login-link">
                <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
            </div>

            <div class="back-home">
                <a href="{{ route('dashboard-awal') }}">← Kembali ke beranda</a>
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
