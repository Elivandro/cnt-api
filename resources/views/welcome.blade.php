<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
    <!DOCTYPE html>
    <html>
    <head>
        <title>Sua API Viacnt</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-100">
    <div id="app">
        <header class="bg-gray-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-4">
                <h1 class="text-3xl font-bold text-green-500">Documentação da API Viacnt</h1>
                <nav>
                    <a href="#" class="text-gray-300 hover:text-gray-100 px-4">Início</a>
                    <a href="#" class="text-gray-300 hover:text-gray-100 px-4">Guia</a>
                    <a href="#" class="text-gray-300 hover:text-gray-100 px-4">Contato</a>
                </nav>
            </div>
        </header>

        <main class="container mx-auto py-12">
            <div class="flex">
                <nav class="w-1/4 bg-gray-200 px-4 py-8 mr-8">
                    <ul>
                        <li class="mb-2">
                            <a href="#" class="block text-gray-800 hover:text-green-500 font-medium">Endpoint 1</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="block text-gray-800 hover:text-green-500 font-medium">Endpoint 2</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="block text-gray-800 hover:text-green-500 font-medium">Endpoint 3</a>
                        </li>
                        <!-- ... -->
                    </ul>
                </nav>

                <section class="w-3/4 bg-white p-8 shadow rounded">
                    <h2 class="text-2xl font-bold mb-6">Endpoint 1</h2>
                    <p class="mb-6">Descrição do Endpoint 1...</p>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Exemplo de Requisição</h3>
                        <pre><code class="bg-gray-200 p-4 rounded">Exemplo de código JSON da requisição</code></pre>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold mb-2">Exemplo de Resposta</h3>
                        <pre><code class="bg-gray-200 p-4 rounded">Exemplo de código JSON da resposta</code></pre>
                    </div>
                </section>
            </div>
        </main>

        <footer class="bg-gray-900 py-6 text-center text-gray-300">
            <p>&copy; 2023 Sua API Viacnt. Todos os direitos reservados.</p>
        </footer>
    </div>
    </body>
    </html>

    </body>
</html>
