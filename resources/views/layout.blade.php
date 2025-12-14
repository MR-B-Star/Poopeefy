<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poopeefy</title>

    {{-- Tailwind CDN --}}
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
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100 text-gray-700">

    {{-- HEADER --}}
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center font-bold text-primary-dark">
            🌱 Poopeefy Admin
        </div>
    </header>

    {{-- MAIN CONTENT --}}
    <main class="max-w-7xl mx-auto px-6 py-10">
        @yield('content')
    </main>

</body>
</html>
