<!DOCTYPE html>
<html lang="pt-BR">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BladeHub - Estilo e Precisão em Cada Corte</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-black text-white h-screen flex flex-col">
    <div class="absolute inset-0 bg-[url('/public/img/back.svg')] bg-cover bg-center brightness-[0.4] z-0"></div>

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-6 py-4 relative z-10">
        <div class="flex items-center gap-3">
            <ion-icon name="cut-outline" class="text-[#d19f68] text-[30px]"></ion-icon>
            <span class="font-bold text-2xl">
                Blade<span class="text-[#d19f68]">Hub</span>
            </span>
        </div>
    </nav>

   <!-- Hero Section -->
   <section class="flex-grow flex items-center justify-center text-center relative z-10">
    <div class="relative w-full">
        <div class="relative z-10 flex flex-col items-center justify-center text-white text-center">
            <h1 class="text-3xl md:text-4xl font-bold">ESTILO E PRECISÃO EM CADA CORTE</h1>
            <p class="mt-1 text-base">AGENDE ONLINE E ECONOMIZE TEMPO</p>
            <a href="/Principal" class="mt-3 px-6 py-2 bg-white text-black font-semibold rounded-full shadow-md hover:bg-gray-200 transition">DASHBOARD</a>
        </div>
    </div>
</section>

    <!-- Services Section -->
<section class="text-center relative z-10 mt-auto mb-10 px-4">
    <h2 class="text-5xl mb-10 tracking-wide font-bold">SERVIÇOS PERSONALIZADOS</h2>
    <div class="flex justify-center flex-wrap gap-6">
        <!-- Service Card 1 -->
        <div class="bg-black p-6 rounded-xl text-center border border-gray-800 w-64">
            <ion-icon name="logo-whatsapp" class="text-[#d19f68] text-[40px] mb-3"></ion-icon>
            <div class="font-bold text-lg uppercase mb-2">INTERAÇÃO COM REDES SOCIAIS</div>
            <p class="text-gray-400 text-sm">Você consegue gerenciar seu tempo de melhor forma</p>
        </div>

        <!-- Service Card 2 -->
        <div class="bg-black p-6 rounded-xl text-center border border-gray-800 w-64">
            <ion-icon name="headset-outline" class="text-[#d19f68] text-[40px] mb-3"></ion-icon>
            <div class="font-bold text-lg uppercase mb-2">AGENDAMENTO ONLINE</div>
            <p class="text-gray-400 text-sm">Soluções práticas para facilitar o agendamento de serviços, otimizando o seu atendimento.</p>
        </div>

        <!-- Service Card 3 -->
        <div class="bg-black p-6 rounded-xl text-center border border-gray-800 w-64">
            <ion-icon name="trending-up-outline" class="text-[#d19f68] text-[40px] mb-3"></ion-icon>
            <div class="font-bold text-lg uppercase mb-2">VISIBILIDADE ONLINE</div>
            <p class="text-gray-400 text-sm">Coloque seu negócio disponível 24h para novos clientes encontrarem você com facilidade.</p>
        </div>

        <!-- Service Card 4 -->
        <div class="bg-black p-6 rounded-xl text-center border border-gray-800 w-64">
            <ion-icon name="shield-checkmark-outline" class="text-[#d19f68] text-[40px] mb-3"></ion-icon>
            <div class="font-bold text-lg uppercase mb-2">CREDIBILIDADE</div>
            <p class="text-gray-400 text-sm">Um site bem feito passa confiança, autoridade e solidez para o seu público.</p>
        </div>
    </div>
</section>
</body>
</html>
