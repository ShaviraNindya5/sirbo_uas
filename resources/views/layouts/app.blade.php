<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SIRBO</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        {{-- SIDEBAR --}}
        <aside class="w-64 bg-slate-900 text-white p-4">
            <h1 class="text-lg font-bold mb-6">SIRBO</h1>
            <ul class="space-y-3 text-sm">
                <li><a href="/dashboard" class="block hover:text-blue-400">Dashboard</a></li>
                <li><a href="#" class="block hover:text-blue-400">Reservasi</a></li>
                <li><a href="#" class="block hover:text-blue-400">Kalender</a></li>
                <li><a href="#" class="block hover:text-blue-400">Laporan</a></li>
            </ul>
        </aside>

        {{-- CONTENT --}}
        <main class="flex-1 p-6">
            {{ $slot }}
        </main>

    </div>

</body>

</html>