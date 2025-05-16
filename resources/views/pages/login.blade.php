<html lang="pt-BR" class="overflow-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login com Tailwind</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-300 overflow-hidden h-screen">
    <div class="flex h-screen">
        <!-- Lado esquerdo - Formulário de login -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6 overflow-auto">
            <div class="w-full max-w-md">
                <!-- Logo -->
                <div class="mb-8">
                    <button onclick="history.back()"
                        class="w-12 h-12 bg-[#c08c55] rounded-lg flex items-center justify-center hover:bg-[#a67444] transition">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                </div>

                <!-- Título -->
                <h1 class="text-3xl font-bold text-black mb-2">Sign in to your account</h1>

                <!-- Formulário -->
                <form>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-900 font-medium mb-2">Email address</label>
                        <input type="email" id="email"
                            class="w-full px-3 py-2 border border-gray-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-900 font-medium mb-2">Password</label>
                        <input type="password" id="password"
                            class="w-full px-3 py-2 border border-gray-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 block text-gray-700">Remember me</label>
                        </div>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">Forgot password?</a>
                    </div>

                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Sign in
                    </button>
                </form>

                <!-- Divisor -->
                <div class="flex items-center my-6">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <div class="px-4 text-gray-500 text-sm">Or continue with</div>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>

                <!-- Botões de redes sociais -->
                <div class="flex gap-4">
                    <a href="#"
                        class="flex-1 flex items-center justify-center gap-2 border border-gray-300 rounded-lg py-2 px-4 hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24px" height="24px">
                            <path fill="#FFC107"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                            <path fill="#FF3D00"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                            <path fill="#4CAF50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                            <path fill="#1976D2"
                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                        </svg>
                        <span>Google</span>
                    </a>
                    <a href="#"
                        class="flex-1 flex items-center justify-center gap-2 border border-gray-300 rounded-lg py-2 px-4 hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#333"
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                        <span>GitHub</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Lado direito - Imagem -->
        <div class="hidden lg:block lg:w-1/2 bg-center bg-cover">
            <img src="/img/imagem_login.jpg" alt="Imagem barbearia" class="w-full h-full object-cover" />
        </div>
    </div>
</body>

</html>
