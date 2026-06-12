<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100">
    <div class="flex min-h-screen flex-col">
        <header class="border-b border-white/10 bg-slate-950/90 backdrop-blur">
            <div class="mx-auto flex w-full max-w-6xl items-center justify-between px-6 py-4">
                <a href="{{ route('home') }}" class="text-lg font-semibold tracking-[0.25em] text-sky-300 uppercase">
                    Space Programming
                </a>

                <nav class="flex items-center gap-3 text-sm">
                    <a href="{{ route('home') }}" class="rounded-full px-4 py-2 transition hover:bg-white/10">
                        Home
                    </a>
                    <a href="{{ route('contact') }}" class="rounded-full px-4 py-2 transition hover:bg-white/10">
                        Contact
                    </a>
                </nav>
            </div>
        </header>

        <main class="flex-1">
            @yield('content')
        </main>

        <footer class="border-t border-white/10 bg-slate-950">
            <div class="mx-auto w-full max-w-6xl px-6 py-4 text-sm text-slate-400">
                <p>Space Programming - laravel site werkend voor de presentatie.</p>
            </div>
        </footer>
    </div>
</body>
</html>