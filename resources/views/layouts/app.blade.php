{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TaskFlow') — TaskFlow</title>

    {{-- MENGHUBUNGKAN TAILWIND & VITE KE HALAMAN --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">

    {{-- NAVBAR TOPBAR --}}
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-screen-xl mx-auto px-4 flex items-center h-14">
            {{-- Logo TaskFlow — Sekarang mengarah ke halaman Dashboard --}}
            <a href="{{ route('dashboard') }}" class="font-semibold text-blue-600 text-lg">TaskFlow</a>

            {{-- Link Navigasi — Sekarang mengarah ke halaman Dashboard --}}
            <a href="{{ route('dashboard') }}" class="ml-6 text-sm text-gray-600 hover:text-blue-600">Dashboard</a>
            {{-- Link Navigasi — Sekarang mengarah ke halaman Daftar Tugas --}}
            <a href="{{ route('tasks.index') }}" class="ml-4 text-sm text-gray-600 hover:text-blue-600">Daftar Tugas</a>
        </div>
    </nav>

    {{-- KONTEN UTAMA --}}
    <main class="max-w-screen-xl mx-auto px-4 py-6">
        @yield('content')
    </main>

</body>
</html>
