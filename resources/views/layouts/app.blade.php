<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'LINKUP')</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

    @stack('styles')
</head>

<body class="bg-background-light dark:bg-background-dark font-display">
    <div class="flex h-screen overflow-hidden">

        {{-- Sidebar --}}
        @include('layouts.sidebar')

        {{-- Main content --}}
        <main class="flex-1 overflow-y-auto">
            @yield('content')
        </main>

    </div>

    @stack('scripts')
</body>
</html>
