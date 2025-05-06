<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BladeHub - Barbearias')</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    @stack('scripts')

</head>

<body class="bg-black text-white min-h-screen flex flex-col">
    <div class="absolute inset-0 bg-cover bg-center brightness-50 z-0 bg-[url('/public/img/back.svg')]"></div>
    <div class="flex-grow">
        <!-- Navbar -->
        @include('components.navbar')

        <!-- Main Content -->
        <main class="container mx-auto px-4 py-8 relative z-10">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    @include('components.footer')
</body>

</html>