<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Produtos</title>

    @vite('resources/css/app.css')

</head>
<body class="bg-gray-100" style="margin: 0;">
    <header class="bg-blue-600 text-white p-4 fixed top-0 left-0 w-full z-10">
        <div class="container mx-auto flex items-center justify-between">
            <h1 class="text-lg font-bold">Meu Projeto</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/" class="hover:text-blue-200">Home</a></li>
                    <li><a href="/products" class="hover:text-blue-200">Produtos</a></li>
                    <li><a href="/about" class="hover:text-blue-200">Sobre</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>
</html>
