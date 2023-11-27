<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sua API Viacnt</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased">
<div id="app">
    <header class="bg-gray-900 py-6">
        <div class="container mx-auto w-10/12 flex justify-between items-center px-4">
            <h1 class="lg:text-3xl font-bold text-green-500">Documentação da API Viacnt</h1>
            <nav>
                <a href="#" class="text-gray-300 hover:text-gray-100 px-4">Contato</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-12">
        <div class="flex flex-col lg:flex-row w-10/12 justify-center" x-data="{
            open : true,
            show : false
            }">
            <nav class="w-10/12 mx-auto lg:w-1/4 px-4 py-8 mr-8">
                <ul class="flex lg:block justify-between">
                    <li class="mb-2">
                        <a href="#" class="block text-gray-800 hover:text-green-500 font-medium"
                           :class="{'text-green-500': open}" @click="open = !open; show = false">
                            Início
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block text-gray-800 hover:text-green-500 font-medium"
                           :class="{'text-green-500': show}" @click="show = !show; open = false"
                        >Endpoint</a>
                    </li>
                    {{--<li class="mb-2">
                        <a href="#" class="block text-gray-800 hover:text-green-500 font-medium">Endpoint 3</a>
                    </li>
                    <!-- ... -->--}}
                </ul>
            </nav>

            <section class="w-full mx-auto lg:w-2/4 bg-white p-8 shadow rounded" x-cloak x-show="open">

                <div class="container mx-auto">
                    <h1 class="text-4xl font-bold mb-4 text-green-500 text-center">Documentação da API Viacnt</h1>

                    <div class="bg-white shadow p-6 rounded">
                        <p class="mb-4">Bem-vindo à Documentação da API Viacnt! Nossa API foi desenvolvida para fornecer
                            acesso rápido e fácil às informações relacionadas aos CNAEs (Códigos Nacionais de Atividade
                            Econômica), permitindo que você obtenha detalhes específicos de cada CNAE a partir de
                            consultas simples.</p>

                        <h2 class="text-2xl font-semibold mb-2">Descrição</h2>
                        <p class="mb-2">A API Viacnt é uma solução robusta e acessível para consultas de CNAEs,
                            projetada para simplificar a obtenção de informações detalhadas sobre atividades
                            econômicas.</p>

                        <ul class="list-disc pl-8 mb-4">
                            <li><span class="font-semibold">Open Source:</span> A API Viacnt é um projeto open source,
                                possibilitando melhorias contínuas e transparência no desenvolvimento.
                            </li>
                            <li><span class="font-semibold">Gratuita:</span> Totalmente gratuita para uso, permitindo
                                acesso às informações dos CNAEs sem custos adicionais.
                            </li>
                            <li><span class="font-semibold">Fácil Integração:</span> Estrutura simples e documentada
                                para integração rápida em suas aplicações.
                            </li>
                            <li><span class="font-semibold">Detalhes de CNAE:</span> Fornece informações detalhadas
                                sobre a atividade econômica correspondente ao código do CNAE.
                            </li>
                        </ul>

                        <h2 class="text-2xl font-semibold mb-2">Uso Responsável</h2>
                        <p class="mb-4">Solicitamos aos usuários que respeitem os limites de requisições para garantir
                            um serviço estável para todos os usuários. Incentivamos contribuições para aprimorar a API e
                            expandir suas funcionalidades.</p>

                        <h2 class="text-2xl font-semibold mb-2">Links Úteis</h2>
                        <p class="mb-4"><span class="font-semibold">GitHub Repository:</span> <a
                                href="https://github.com/Elivandro/cnt-api" class="text-blue-500 hover:underline">Link
                                para o repositório no GitHub</a></p>
                        {{--<p><span class="font-semibold">Documentação Completa:</span> <a href="seu-link-da-documentacao" class="text-blue-500 hover:underline">Link para a documentação detalhada</a></p>--}}
                    </div>
                </div>
            </section>

            <section class="w-full mx-auto lg:w-2/4 bg-white p-8 shadow rounded" x-cloak x-show="show">
                <div class="container mx-auto py-8">
                    <h1 class="text-4xl font-bold mb-4 text-green-500 text-center">Documentação da API Viacnt</h1>

                    <div class="bg-white shadow p-6 rounded">
                        <h2 class="text-2xl font-semibold mb-2">Uso da API - Consulta de CNAE</h2>
                        <p class="mb-4">A API Viacnt oferece um endpoint para consulta de informações relacionadas aos
                            CNAEs (Códigos Nacionais de Atividade Econômica).</p>

                        <h3 class="text-xl font-semibold mb-2">Requisição</h3>
                        <p class="mb-4">Para realizar uma consulta, envie uma requisição GET para o endpoint abaixo,
                            fornecendo o código CNAE desejado no formato de números:</p>

                        <div class="bg-gray-200 rounded p-4 mb-4">
                            <p><span class="font-semibold">Endpoint:</span> <code>GET
                                    /consultar-cnae?cnae={código}</code></p>
                            <p><span class="font-semibold">Exemplo:</span> <code>/consultar-cnae?cnae=123456</code></p>
                        </div>

                        <h3 class="text-xl font-semibold mb-2">Resposta</h3>
                        <p class="mb-4">A resposta será um JSON contendo as informações do CNAE consultado, além dos
                            códigos CNT correspondentes e suas descrições associadas.</p>

                        <div class="bg-gray-200 rounded p-4">
                <pre><code class="text-sm">{
    "cnae": "123456",
    "descricao_cnae": "Descrição do CNAE consultado...",
    "codigos_cnt": [
        {
            "codigo": "CNT001",
            "descricao": "Descrição do CNT001"
        },
        {
            "codigo": "CNT002",
            "descricao": "Descrição do CNT002"
        },
        ...
    ]
}</code></pre>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer class="bg-gray-900 py-6 text-center text-gray-300 fixed bottom-0 w-full">
        <p>&copy; {{date_format(now(), 'Y')}} API Viacnt. Todos os direitos reservados.</p>
    </footer>
</div>
</body>
</html>
