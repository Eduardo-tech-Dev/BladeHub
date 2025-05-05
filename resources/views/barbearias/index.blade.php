<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BladeHub - Barbearias</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .hover-scale:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }
        .search-bar:focus {
            box-shadow: 0 0 10px rgba(209, 159, 104, 0.5);
        }
    </style>
</head>
<body class="bg-black text-white min-h-screen">
    <div class="absolute inset-0 bg-cover bg-center brightness-50 z-0 bg-[url('/public/img/back.svg')]"></div>

    <!-- Navbar -->
    <nav class="flex flex-col md:flex-row justify-between items-center px-6 py-4 relative z-10 bg-opacity-60 backdrop-filter backdrop-blur-sm  top-0">
        <div class="flex items-center gap-3 w-full md:w-auto mb-4 md:mb-0">
            <a href="/" class="flex items-center gap-3">
                <ion-icon name="cut-outline" class="text-[#d19f68] text-3xl"></ion-icon>
                <span class="font-bold text-2xl">
                    Blade<span class="text-[#d19f68]">Hub</span>
                </span>
            </a>
        </div>



        <!-- Login/Cadastro -->
        <div class="flex items-center gap-4">
            <a href="/login" class="flex items-center gap-1 text-gray-300 hover:text-[#d19f68] transition-colors">
                <ion-icon name="log-in-outline" class="text-xl"></ion-icon>
                <span>Entrar</span>
            </a>
            <a href="/cadastro" class="bg-[#d19f68] text-black px-4 py-2 rounded-full font-medium hover:bg-[#b88c5a] transition-colors flex items-center gap-1">
                <ion-icon name="person-add-outline" class="text-lg"></ion-icon>
                <span>Cadastrar</span>
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative z-10 py-16 px-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Encontre as melhores barbearias</h1>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">Agende seu horário com os melhores profissionais da sua região de forma prática e rápida.</p>

            <a href="#barbearias" class="bg-[#d19f68] text-black px-8 py-3 rounded-full font-semibold text-lg hover:bg-[#b88c5a] transition-colors inline-flex items-center gap-2">
                <span>Ver barbearias</span>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </a>
        </div>
    </section>

    <div class="w-full flex justify-center items-center mb-4 md:mb-0 px-2">
        <div class="relative w-full md:w-1/2">
            <form method="GET" action="{{ route('barbearias.index') }}">
                <input
                    type="text"
                    name="search"
                    value="{{ request()->search }}"
                    placeholder="Buscar barbearias, serviços, locais..."
                    class="search-bar w-full py-2 px-4 bg-gray-800 text-white rounded-full border border-gray-700 focus:outline-none focus:border-[#d19f68] transition-all"
                >
                <button type="submit" class="absolute right-3 top-2">
                    <ion-icon name="search" class="text-[#d19f68] text-xl"></ion-icon>
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <main id="barbearias" class="container mx-auto px-4 py-8 relative z-10">
        <h2 class="text-3xl font-bold text-center mb-10">Barbearias Disponíveis</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($barbearias as $barbearia)
                <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg border border-gray-800 hover:border-[#d19f68] transition-all hover-scale">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('{{ $barbearia->imagem_url }}')"></div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <ion-icon name="business-outline" class="text-[#d19f68] text-2xl"></ion-icon>
                            <h3 class="text-xl font-bold">{{ $barbearia->nome }}</h3>
                        </div>

                        <div class="space-y-3 text-gray-300">
                            <div class="flex items-center gap-2">
                                <ion-icon name="location-outline" class="text-[#d19f68]"></ion-icon>
                                <p>{{ $barbearia->endereco }}</p>
                            </div>

                            <div class="flex items-center gap-2">
                                <ion-icon name="call-outline" class="text-[#d19f68]"></ion-icon>
                                <p>{{ $barbearia->telefone }}</p>
                            </div>

                            <div class="flex items-center gap-2">
                                <ion-icon name="star" class="text-[#d19f68]"></ion-icon>
                                <p>{{ $barbearia->avaliacao }} ({{ $barbearia->avaliacoes_count }} avaliações)</p>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="#" class="block w-full text-center bg-[#d19f68] text-black font-semibold py-3 rounded-lg hover:bg-[#b88c5a] transition-colors">
                                Agendar Horário
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 py-8 px-6 relative z-10 mt-16">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <a href="/" class="flex items-center gap-3">
                        <ion-icon name="cut-outline" class="text-[#d19f68] text-2xl"></ion-icon>
                        <span class="font-bold text-xl">
                            Blade<span class="text-[#d19f68]">Hub</span>
                        </span>
                    </a>
                    <p class="text-gray-400 mt-2">© 2025 BladeHub. Todos os direitos reservados.</p>
                </div>
                <div class="flex gap-4">
                    <a href="#" class="text-gray-400 hover:text-[#d19f68] transition-colors">
                        <ion-icon name="logo-instagram" class="text-2xl"></ion-icon>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#d19f68] transition-colors">
                        <ion-icon name="logo-facebook" class="text-2xl"></ion-icon>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#d19f68] transition-colors">
                        <ion-icon name="logo-twitter" class="text-2xl"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
