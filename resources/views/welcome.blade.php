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
<body class="bg-gray-100 font-sans antialiased overflow-x-hidden">
<div id="app">
    <header class="bg-gray-900 py-6">
        <div class="container mx-auto w-full lg:w-10/12 flex justify-between items-center px-4">
            <h1 class="lg:text-3xl font-bold text-green-500">Documentação da API Viacnt</h1>
        </div>
    </header>

    <main class="container mx-auto py-12">
        <div class="flex flex-col lg:flex-row w-full lg:w-10/12 justify-center" x-data="{
            open : true,
            show : false,
            contact : false,
            donation : false
            }">
            <nav class="w-10/12 mx-auto lg:w-1/4 px-4 py-8">
                <ul class="flex lg:block justify-between">
                    <li class="mb-2">
                        <a href="#" class="block text-gray-800 hover:text-green-500 font-medium"
                           :class="{'text-green-500': open}"
                           @click="open = true; show = false; contact = false; donation = false">
                            Início
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#" class="block text-gray-800 hover:text-green-500 font-medium"
                           :class="{'text-green-500': show}"
                           @click="show = true; open = false; contact = false; donation = false"
                        >Endpoint</a>
                    </li>

                    <li class="mb-2">
                        <a href="#" class="block text-gray-800 hover:text-green-500 font-medium"
                           :class="{'text-green-500': contact}"
                           @click="show = false; open = false; contact = true; donation = false"
                        >Contato</a>
                    </li>

                    <li class="mb-2">
                        <a href="#" class="block text-gray-800 hover:text-green-500 font-medium"
                           :class="{'text-green-500': donation}"
                           @click="show = false; open = false; contact = false; donation = true"
                        >Doações</a>
                    </li>
                </ul>
            </nav>

            <section class="w-full mx-auto bg-white p-8 shadow rounded" x-cloak x-show="open">

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
                            expandir suas funcionalidades. Por favor, caso encontre algum erro na base de dados abra uma
                            issue no github, ou entre em contato conosco.</p>

                        <h2 class="text-2xl font-semibold mb-2">Links Úteis</h2>
                        <p class="mb-4"><span class="font-semibold">GitHub:</span> <a
                                title="Link do Repositório no GitHub" target="_blank"
                                href="https://github.com/Elivandro/cnt-api/blob/main/README.md"
                                class="text-blue-500 hover:underline">Link
                                para o repositório no GitHub </a>
                        </p>
                        <div class="mb-8">
                            <h2 class="text-2xl font-semibold mb-2">Aviso Legal</h2>
                            <p class="mb-4">A API Viacnt é uma ferramenta para consulta de informações relacionadas aos
                                CNAEs (Códigos Nacionais de Atividade Econômica), desenvolvida com o intuito de fornecer
                                dados precisos e confiáveis. No entanto, é importante salientar que:</p>

                            <p class="mb-4">A utilização dos dados fornecidos pela API Viacnt é de responsabilidade do
                                usuário. Não nos responsabilizamos por quaisquer erros, omissões, imprecisões ou
                                preenchimento incorreto dos dados por parte do usuário durante a emissão de notas
                                fiscais ou em outros processos.</p>

                            <p class="mb-4">Apesar de nossos esforços para manter a precisão e atualização dos dados,
                                não garantimos a exatidão, integridade ou adequação das informações fornecidas pela API
                                Viacnt. Os dados fornecidos pela API são para fins informativos e não devem ser
                                considerados como aconselhamento legal ou financeiro.</p>

                            <p class="text-sm italic">Este aviso legal é uma precaução necessária para proteger tanto os
                                usuários quanto os desenvolvedores da API Viacnt. Recomendamos que os usuários
                                verifiquem e validem as informações antes de utilizá-las para quaisquer fins comerciais
                                ou legais.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-full mx-auto bg-white p-8 shadow rounded" x-cloak x-show="show">
                <div class="container mx-auto">
                    <h1 class="text-4xl font-bold mb-4 text-green-500 text-center">Documentação da API Viacnt</h1>

                    <div class="bg-white shadow p-6 rounded">
                        <h2 class="text-2xl font-semibold mb-2">Uso da API - Consulta de CNAE</h2>
                        <p class="mb-4">A API Viacnt oferece um endpoint para consulta de informações relacionadas aos
                            CNAEs (Códigos Nacionais de Atividade Econômica).</p>

                        <h3 class="text-xl font-semibold mb-2">Requisição</h3>
                        <p class="mb-4">Para realizar uma consulta, envie uma requisição GET para o endpoint abaixo,
                            fornecendo o código CNAE desejado no formato de números:</p>

                        <div class="bg-gray-200 rounded p-4 mb-4">
                            <p><span class="font-semibold">Endpoint: </span>
                                GET
                                <span class="text-xs lg:text-sm"> https://viacnt.com.br/api/v1/cnt/6201500</span>
                        </div>

                        <h3 class="text-xl font-semibold mb-2">Resposta</h3>
                        <p class="mb-4">A resposta será um JSON contendo as informações do CNAE consultado, além dos
                            códigos CNT correspondentes a suas descrições associadas.</p>

                        <div class="bg-gray-200 h-fit rounded p-4 space-y-2 lg:space-x-0 lg:hidden">
                            <div class="text-sm lg:text-sm">

                                {
                                "cnae_code": "6201-5/00",
                                "cnae_description": "Desenvolvimento de programas de computador sob encomenda",
                                "cnt": "01.01",
                                "cnt_description": "Análise e desenvolvimento de sistemas."
                                },
                            </div>
                            <div class="text-sm lg:text-sm">
                                {
                                "cnae_code": "6201-5/00",
                                "cnae_description": "Desenvolvimento de programas de computador sob encomenda",
                                "cnt": "01.02",
                                "cnt_description": "Programação."
                                },
                            </div>
                            <div class="text-sm lg:text-sm">
                                {
                                "cnae_code": "6201-5/00",
                                "cnae_description": "Desenvolvimento de programas de computador sob encomenda",
                                "cnt": "01.03",
                                "cnt_description": "Processamento de dados e congêneres."
                                },
                            </div>
                            <div class="text-sm lg:text-sm">
                                {
                                "cnae_code": "6201-5/00",
                                "cnae_description": "Desenvolvimento de programas de computador sob encomenda",
                                "cnt": "01.04",
                                "cnt_description": "Elaboração de programas de computadores, inclusive de jogos
                                eletrônicos."
                                },
                            </div>
                            <div class="text-sm lg:text-sm">
                                {
                                "cnae_code": "6201-5/00",
                                "cnae_description": "Desenvolvimento de programas de computador sob encomenda",
                                "cnt": "01.08",
                                "cnt_description": "Planejamento, confecção, manutenção e atualização de páginas
                                eletrônicas."
                                }
                            </div>
                        </div>
                        <div class="bg-gray-200 rounded p-4 hidden lg:block">
                <pre><code class="text-sm">  {
            "cnae_code": "6201-5/00",
            "cnae_description": "Desenvolvimento de programas de computador sob encomenda",
            "cnt": "01.01",
            "cnt_description": "Análise e desenvolvimento de sistemas."
      },
      {
            "cnae_code": "6201-5/00",
            "cnae_description": "Desenvolvimento de programas de computador sob encomenda",
            "cnt": "01.02",
            "cnt_description": "Programação."
      },
      {
            "cnae_code": "6201-5/00",
            "cnae_description": "Desenvolvimento de programas de computador sob encomenda",
            "cnt": "01.03",
            "cnt_description": "Processamento de dados e congêneres."
      },
      {
            "cnae_code": "6201-5/00",
            "cnae_description": "Desenvolvimento de programas de computador sob encomenda",
            "cnt": "01.04",
            "cnt_description": "Elaboração de programas de computadores, inclusive de jogos eletrônicos."
      },
      {
            "cnae_code": "6201-5/00",
            "cnae_description": "Desenvolvimento de programas de computador sob encomenda",
            "cnt": "01.08",
            "cnt_description": "Planejamento, confecção, manutenção e atualização de páginas eletrônicas."
}
</code></pre>
                        </div>
                    </div>
                </div>
            </section>
            <section class="w-full mx-auto bg-white p-8 shadow rounded" x-cloak x-show="contact">

                <div class="container mx-auto py-8">
                    <h1 class="text-4xl font-bold mb-4 text-green-500">Documentação da API Viacnt</h1>

                    <div class="bg-white shadow p-6 rounded">
                        <h2 class="text-2xl font-semibold mb-2">Contato</h2>
                        <p class="mb-4">Fique à vontade para entrar em contato conosco se tiver alguma dúvida, sugestão
                            ou solicitação. Estamos aqui para ajudar!</p>

                        <div class="mb-6">
                            <h3 class="text-xl font-semibold mb-2">Tiago</h3>
                            <p class="mb-1"><span class="font-semibold">E-mail:</span> <a
                                    href="mailto:tiago.neitzke@yhaoo.com" class="text-blue-500 hover:underline"
                                    target="_blank" title="Email do Tiago">tiago.neitzke@yahoo.com</a></p>
                            <p class="mb-1"><span class="font-semibold">Telefone:</span> <a
                                    href="https://wa.me/5567999082296" class="text-blue-500 hover:underline"
                                    target="_blank" title="Whatsapp do Tiago">+55 (67) 9 9908-2296</a></p>
                            <p class="mb-1"><span class="font-semibold">GitHub:</span> <a
                                    href=https://github.com/TiagoLemosNeitzke" class="text-blue-500 hover:underline"
                                    target="_blank" title="Github do Tiago">GitHub</a></p>
                            <p><span class="font-semibold">LinkedIn:</span> <a
                                    href="https://www.linkedin.com/in/tiago-lemos-neitzke/"
                                    class="text-blue-500 hover:underline" target="_blank" title="Linkedin do Tiago">LinkedIn
                                    do Tiago</a></p>
                        </div>

                        <div>
                            <h3 class="text-xl font-semibold mb-2">Elivandro</h3>
                            <p class="mb-1"><span class="font-semibold">E-mail:</span> <a
                                    href="mailto:elivandro@hotmail.com.br" class="text-blue-500 hover:underline"
                                    target="_blank" title="Email do Elivandro">elivandro@hotmail.com.br</a></p>
                            <p class="mb-1"><span class="font-semibold">Telefone:</span> <a
                                    href="https://wa.me/5569999076818" class="text-blue-500 hover:underline"
                                    target="_blank" title="Whatsapp do Elivandro">+55 (69) 9 9907-6818</a></p>
                            <p class="mb-1"><span class="font-semibold">GitHub:</span> <a
                                    href="https://github.com/Elivandro" class="text-blue-500 hover:underline"
                                    target="_blank" title="Github do Elivandro">GitHub</a></p>
                            <p><span class="font-semibold">LinkedIn:</span> <a
                                    href="https://www.linkedin.com/in/elivandroeas/"
                                    class="text-blue-500 hover:underline" target="_blank" title="Linkedin do Elivandro">LinkedIn
                                </a></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="w-full mx-auto bg-white p-8 shadow rounded" x-cloak x-show="donation">

                <div class="container mx-auto py-8">
                    <h1 class="text-4xl font-bold mb-4 text-green-500">Documentação da API Viacnt</h1>

                    <div class="bg-white shadow p-6 rounded">
                        <h2 class="text-2xl font-semibold mb-2">Faça uma doação</h2>
                        <p class="mb-4">Se você gostou do nosso trabalho e deseja contribuir, estamos abertos a doações
                            via PIX. Agradecemos seu apoio!</p>

                        <div class="flex justify-between items-center mb-6">
                            <div class="w-1/2">
                                {{--os dados abaixo precisam ser mudados--}}
                                <h3 class="text-xl font-semibold mb-2">Dados para PIX</h3>
                                <p class="mb-1"><span class="font-semibold">Chave PIX:</span> tl.neitzke@homail.com</p>
                                <p><span class="font-semibold">Nome do destinatário:</span> Tiago Lemos Neitzke</p>
                            </div>
                            <div class="w-1/2 text-right">
                                <img src="{{asset('assets/qr-code.png')}}" alt="QR Code PIX"
                                     class="w-32 h-32 object-cover">
                            </div>
                        </div>

                        <p class="text-sm italic">Escaneie o QR Code com o app do seu banco ou utilize os dados do PIX
                            fornecidos acima para fazer sua doação. Obrigado!</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer class="bg-gray-900 flex flex-col py-6 text-center text-gray-300 fixed bottom-0 w-full">
        <p></p>
        <p>&copy; {{date_format(now(), 'Y')}} API Viacnt. Todos os direitos reservados.</p>
        <p class="text-sm mt-4">
            Não distribuímos ou comercializamos bases de dados.
        </p>
    </footer>
</div>
</body>
</html>
