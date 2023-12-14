<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="ViaCnt api grátis e open source para consulta de Código de Tributação Nacional. Envie uma Requisição get com o código CNAE para obter o CNT correspondete.">
    <meta name="robots" content="index, nofollow">

    <title>Viacnt</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] {
            display: none !important;
        }

        html, body {
            scroll-behavior: smooth;
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V4CLLCRJYR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-V4CLLCRJYR');
    </script>
</head>
<body class="bg-gray-100 font-sans antialiased overflow-x-hidden w-full"
      x-data="{
            open : true,
            show : false,
            contact : false,
            donation : false
            }"
>

<div class="flex flex-col lg:flex-row">
    <header class="lg:h-full w-full lg:w-64">
        <nav class="w-full mx-auto lg:w-1/4 px-4 py-8 flex lg:fixed lg:top-12 lg:left-4">
            <ul class="flex justify-between lg:block w-full">
                <li class="mb-2">
                    <a href="#" class="block text-gray-800 hover:text-green-500 font-medium"
                       :class="{'text-green-500': open}"
                       x-on:click="open = true; show = false; contact = false; donation = false">
                        Início
                    </a>
                </li>

                <li class="mb-2">
                    <a href="#" class="block text-gray-800 hover:text-green-500 font-medium"
                       :class="{'text-green-500': show}"
                       x-on:click="show = true; open = false; contact = false; donation = false"
                    >Endpoint</a>
                </li>

                <li class="mb-2">
                    <a href="#" class="block text-gray-800 hover:text-green-500 font-medium"
                       :class="{'text-green-500': contact}"
                       x-on:click="show = false; open = false; contact = true; donation = false"
                    >Contato</a>
                </li>

                <li class="mb-2">
                    <a href="#" class="block text-gray-800 hover:text-green-500 font-medium"
                       :class="{'text-green-500': donation}"
                       x-on:click="show = false; open = false; contact = false; donation = true"
                    >Doações</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto lg:py-12">

        <div class="border">
            {{--home section--}}
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

                            <p class="mb-4">Licença MIT: Esta licença permissiva permite o uso, cópia, modificação,
                                distribuição e sublicenciamento do software, desde que o aviso de copyright e a licença
                                sejam incluídos em todas as cópias ou partes substanciais do software.
                            </p>
                            <p class="mb-4">
                                Uso Adequado: Os usuários são encorajados a verificar e validar as informações obtidas
                                pela API antes de utilizá-las para fins comerciais ou legais.</p>

                            <p class="text-sm italic">Este aviso legal é uma precaução necessária para proteger tanto os
                                usuários quanto os desenvolvedores da API Viacnt. Recomendamos que os usuários
                                verifiquem e validem as informações antes de utilizá-las para quaisquer fins comerciais
                                ou legais.</p>
                        </div>
                    </div>
                </div>
            </section>
            {{--endpoint section--}}
            <section class="w-full mx-auto bg-white p-8 shadow rounded lg:h-screen"
                     x-cloak x-show="show">
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
                                <a title="Veja um exemplo de resposta" target="_blank"
                                   href="https://viacnt.com.br/api/v1/cnt/9511800"
                                   class="text-sm lg:text-sm hover:text-blue-600 hover:underline">
                                    https://viacnt.com.br/api/v1/cnt/9511800</a>
                        </div>

                        <h3 class="text-xl font-semibold mb-2">Resposta</h3>
                        <p class="mb-4">A resposta será um JSON contendo as informações do CNAE consultado, além dos
                            códigos CNT correspondentes a suas descrições associadas.</p>

                        <div class="bg-gray-200 rounded p-4">
                            <code class="text-sm"> { <br>
                                "cnae_code": "9511-8/00", <br>
                                "cnae_description": "Reparação e manutenção de computadores e de equipamentos periféricos",
                                <br>
                                "cnt": "14.02", <br>
                                "cnt_description": "Assistência técnica." <br>
                                }

                            </code>
                        </div>
                    </div>
                </div>

            </section>
            {{--contact section--}}
            <section class="w-full mx-auto bg-white p-8 shadow rounded h-screen" x-cloak x-show="contact">

                <div class="container mx-auto">
                    <h1 class="text-4xl font-bold mb-4 text-green-500 text-center">Documentação da API Viacnt</h1>

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
                                    href="https://github.com/TiagoLemosNeitzke" class="text-blue-500 hover:underline"
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
                                    class="text-blue-500 hover:underline" target="_blank" title="Linkedin do Elivandro">LinkedIn do Elivandro
                                </a></p>
                        </div>
                    </div>
                </div>
            </section>
            {{--donation section--}}
            <section class="w-full mx-auto bg-white p-8 shadow rounded h-screen" x-cloak x-show="donation">

                <div class="container mx-auto">
                    <h1 class="text-4xl font-bold mb-4 text-green-500 text-center">Documentação da API Viacnt</h1>

                    <div class="bg-white shadow p-6 rounded">
                        <h2 class="text-2xl font-semibold mb-2">Faça uma doação</h2>
                        <p class="mb-4">Se você gostou do nosso trabalho e deseja contribuir, estamos abertos a doações. Agradecemos seu apoio!</p>

                        <div class="flex flex-col lg:flex-row justify-between items-center mb-6">

                            <div class="w-full mt-4 lg:mt-0 lg:w-1/2 flex justify-start gap-6 lg:text-right">
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Opções para doar:</h3>
                                    <div class="flex gap-2">
                                        <!-- component -->
                                        <div x-data="{ pix: false }"
                                            x-on:close-modal.window="pix = false"
                                            x-on:keydown.escape.window="pix = false"
                                            x-transition:enter="transition ease-out duration-300"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-300"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-90"
                                        >
                                            <div
                                                x-show="pix"
                                                class="fixed inset-0 transition-all transform"
                                                x-on:click="pix = false"
                                                x-transition:enter="ease-out duration-300"
                                                x-transition:enter-start="opacity-0"
                                                x-transition:enter-end="opacity-100"
                                                x-transition:leave="ease-in duration-200"
                                                x-transition:leave-start="opacity-100"
                                                x-transition:leave-end="opacity-0"
                                            >
                                                <div class="absolute inset-0 bg-gray-100 opacity-75 dark:bg-gray-800"></div>
                                            </div>
                                            <!-- Trigger button -->
                                            <button x-on:click="pix = true" class="transition duration-300">
                                                {{-- pix --}}
                                                <svg width="36" height="36" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <defs/>
                                                    <g fill="#4BB8A9" fill-rule="evenodd">
                                                        <path d="M112.57 391.19c20.056 0 38.928-7.808 53.12-22l76.693-76.692c5.385-5.404 14.765-5.384 20.15 0l76.989 76.989c14.191 14.172 33.045 21.98 53.12 21.98h15.098l-97.138 97.139c-30.326 30.344-79.505 30.344-109.85 0l-97.415-97.416h9.232zm280.068-271.294c-20.056 0-38.929 7.809-53.12 22l-76.97 76.99c-5.551 5.53-14.6 5.568-20.15-.02l-76.711-76.693c-14.192-14.191-33.046-21.999-53.12-21.999h-9.234l97.416-97.416c30.344-30.344 79.523-30.344 109.867 0l97.138 97.138h-15.116z"/>
                                                        <path d="M22.758 200.753l58.024-58.024h31.787c13.84 0 27.384 5.605 37.172 15.394l76.694 76.693c7.178 7.179 16.596 10.768 26.033 10.768 9.417 0 18.854-3.59 26.014-10.75l76.989-76.99c9.787-9.787 23.331-15.393 37.171-15.393h37.654l58.3 58.302c30.343 30.344 30.343 79.523 0 109.867l-58.3 58.303H392.64c-13.84 0-27.384-5.605-37.171-15.394l-76.97-76.99c-13.914-13.894-38.172-13.894-52.066.02l-76.694 76.674c-9.788 9.788-23.332 15.413-37.172 15.413H80.782L22.758 310.62c-30.344-30.345-30.344-79.524 0-109.868"/>
                                                    </g>
                                                </svg>
                                            </button>

                                            <!-- Modal -->
                                            <div x-show="pix" class="fixed inset-0 flex items-center justify-center z-50">
                                                <div class="bg-white rounded-lg p-6 w-96 max-w-full shadow-lg transform transition-all duration-300" x-show.transition.opacity="pix">
                                                    <!-- Modal Header -->
                                                    <div class="flex justify-between items-center border-b-2 border-gray-200 pb-4">
                                                        <h2 class="text-2xl font-semibold">Transferência pix</h2>
                                                        <button x-on:click="pix = false" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                                <line x1="18" y1="6" x2="6" y2="18" />
                                                                <line x1="6" y1="6" x2="18" y2="18" />
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <!-- Modal Content -->
                                                    <div class="mt-6 space-y-4">
                                                        <div class="flex items-center flex-col space-y-4">
                                                            <img src="{{ asset('assets/pix-wallet.png')}}" class="w-32 h-32 object-cover" alt="pix wallet qr-code" />
                                                        </div>
                                                        <div class="w-full">
                                                            {{--os dados abaixo precisam ser mudados--}}
                                                            <p class="text-center">
                                                                <span class="text-sm">Destinatário:</span>
                                                                <span class="font-semibold text-sm">Tiago Lemos Neitzke</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <!-- Additional Information -->
                                                    <div class="mt-6 text-sm text-gray-500">
                                                        <div x-data="{ input: 'tl.neitzke@homail.com', showMsg: false }" >
                                                            <div class="w-full h-full overflow-hidden">

                                                                <a type="button" x-on:click="navigator.clipboard.writeText(input), showMsg = true, setTimeout(() => showMsg = false, 1000)" class="group inline-flex w-full items-center justify-center px-5 text-sm font-normal text-center text-black border-t border-purple-50  hover:bg-purple-50 truncate rounded-b cursor-copy">

                                                                <button id="clipboard" class="relative pl-1 py-4 cursor-copy text-xs font-medium">Copiar para o Clipboard</button>
                                                                    <div x-show="showMsg" x-on:click.away="showMsg = false" class="fixed bottom-3 right-3 z-20 max-w-sm overflow-hidden bg-green-100 border border-green-300 rounded" style="display: none;">
                                                                        <p class="p-3 flex items-center justify-center text-green-600">Copiado</p>
                                                                    </div>
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- component -->
                                        <div x-data="{ btc: false }"
                                            x-on:close-modal.window="btc = false"
                                            x-on:keydown.escape.window="btc = false"
                                            x-transition:enter="transition ease-out duration-300"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-300"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-90"
                                        >
                                            <div
                                                x-show="btc"
                                                class="fixed inset-0 transition-all transform"
                                                x-on:click="btc = false"
                                                x-transition:enter="ease-out duration-300"
                                                x-transition:enter-start="opacity-0"
                                                x-transition:enter-end="opacity-100"
                                                x-transition:leave="ease-in duration-200"
                                                x-transition:leave-start="opacity-100"
                                                x-transition:leave-end="opacity-0"
                                            >
                                                <div class="absolute inset-0 bg-gray-100 opacity-75 dark:bg-gray-800"></div>
                                            </div>
                                            <!-- Trigger button -->
                                            <button x-on:click="btc = true" class="transition duration-300">
                                                {{-- btc --}}
                                                <svg width="36" height="36" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
                                                    <g fill="none" fill-rule="evenodd">
                                                        <circle fill="#FFAD02" cx="19" cy="19" r="19"></circle>
                                                        <path d="M24.7 19.68a3.63 3.63 0 0 0 1.47-2.06c.74-2.77-.46-4.87-3.2-5.6l.89-3.33a.23.23 0 0 0-.16-.28l-1.32-.35a.23.23 0 0 0-.28.15l-.89 3.33-1.75-.47.88-3.32a.23.23 0 0 0-.16-.28l-1.31-.35a.23.23 0 0 0-.28.15l-.9 3.33-3.73-1a.23.23 0 0 0-.27.16l-.36 1.33c-.03.12.04.25.16.28l.22.06a1.83 1.83 0 0 1 1.28 2.24l-1.9 7.09a1.83 1.83 0 0 1-2.07 1.33.23.23 0 0 0-.24.12l-.69 1.24a.23.23 0 0 0 0 .2c.02.07.07.12.14.13l3.67.99-.89 3.33c-.03.12.04.24.16.27l1.32.35c.12.03.24-.04.28-.16l.89-3.32 1.76.47-.9 3.33c-.02.12.05.24.16.27l1.32.35c.12.03.25-.04.28-.16l.9-3.32.87.23c2.74.74 4.83-.48 5.57-3.25.35-1.3-.05-2.6-.92-3.48zm-5.96-5.95l2.64.7a1.83 1.83 0 0 1 1.28 2.24 1.83 1.83 0 0 1-2.23 1.3l-2.64-.7.95-3.54zm1.14 9.8l-3.51-.95.95-3.54 3.51.94a1.83 1.83 0 0 1 1.28 2.24 1.83 1.83 0 0 1-2.23 1.3z" fill="#FFF" />
                                                    </g>
                                                </svg>
                                            </button>

                                            <!-- Modal -->
                                            <div x-show="btc" class="fixed inset-0 flex items-center justify-center z-50">
                                                <div class="bg-white rounded-lg p-6 w-96 max-w-full shadow-lg transform transition-all duration-300" x-show.transition.opacity="btc">
                                                    <!-- Modal Header -->
                                                    <div class="flex justify-between items-center border-b-2 border-gray-200 pb-4">
                                                        <h2 class="text-2xl font-semibold">Carteira Bitcoin</h2>
                                                        <button x-on:click="btc = false" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                                <line x1="18" y1="6" x2="6" y2="18" />
                                                                <line x1="6" y1="6" x2="18" y2="18" />
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <!-- Modal Content -->
                                                    <div class="mt-6 space-y-4">
                                                        <div class="flex items-center flex-col space-y-4">
                                                            <img src="{{ asset('assets/btc-wallet.png')}}" class="w-32 h-32 object-cover" alt="btc wallet qr-code" />
                                                        </div>
                                                    </div>

                                                    <!-- Additional Information -->
                                                    <div class="mt-6 text-sm text-gray-500">
                                                        <div x-data="{ input: 'bc1q6h06uqphcrsnl3c0cq0eyhktykpxl9cpjgddgc', showMsg: false }" >
                                                            <div class="w-full h-full overflow-hidden">

                                                                <a type="button" x-on:click="navigator.clipboard.writeText(input), showMsg = true, setTimeout(() => showMsg = false, 1000)" class="group inline-flex w-full items-center justify-center px-5 text-sm font-normal text-center text-black border-t border-purple-50  hover:bg-purple-50 truncate rounded-b cursor-copy">

                                                                <button id="clipboard" class="relative pl-1 py-4 cursor-copy text-xs font-medium">Copiar para o Clipboard</button>
                                                                    <div x-show="showMsg" x-on:click.away="showMsg = false" class="fixed bottom-3 right-3 z-20 max-w-sm overflow-hidden bg-green-100 border border-green-300 rounded" style="display: none;">
                                                                        <p class="p-3 flex items-center justify-center text-green-600">Copiado</p>
                                                                    </div>
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- component -->
                                        <div x-data="{ eth: false }"
                                            x-on:close-modal.window="eth = false"
                                            x-on:keydown.escape.window="eth = false"
                                            x-transition:enter="transition ease-out duration-300"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-300"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-90"
                                        >
                                            <div
                                                x-show="eth"
                                                class="fixed inset-0 transition-all transform"
                                                x-on:click="eth = false"
                                                x-transition:enter="ease-out duration-300"
                                                x-transition:enter-start="opacity-0"
                                                x-transition:enter-end="opacity-100"
                                                x-transition:leave="ease-in duration-200"
                                                x-transition:leave-start="opacity-100"
                                                x-transition:leave-end="opacity-0"
                                            >
                                                <div class="absolute inset-0 bg-gray-100 opacity-75 dark:bg-gray-800"></div>
                                            </div>
                                            <!-- Trigger button -->
                                            <button x-on:click="eth = true" class="transition duration-300">
                                                {{-- eth --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="36 " height="36 "
                                                     viewBox="0 0 32 32 ">
                                                    <g fill="none " fill-rule="evenodd ">
                                                        <ellipse cx="16 " cy="16 " fill="#6F7CBA " rx="16 " ry="16 "></ellipse>
                                                        <path fill="#FFF " d="M10.13 17.76c-.1-.15-.06-.2.09-.12l5.49 3.09c.15.08.4.08.56 0l5.58-3.08c.16-.08.2-.03.1.11L16.2 25.9c-.1.15-.28.15-.38 0l-5.7-8.13zm.04-2.03a.3.3 0 0 1-.13-.42l5.74-9.2c.1-.15.25-.15.34 0l5.77 9.19c.1.14.05.33-.12.41l-5.5 2.78a.73.73 0 0 1-.6 0l-5.5-2.76z" />
                                                    </g>
                                                </svg>
                                            </button>

                                            <!-- Modal -->
                                            <div x-show="eth" class="fixed inset-0 flex items-center justify-center z-50">
                                                <div class="bg-white rounded-lg p-6 w-96 max-w-full shadow-lg transform transition-all duration-300" x-show.transition.opacity="eth">
                                                    <!-- Modal Header -->
                                                    <div class="flex justify-between items-center border-b-2 border-gray-200 pb-4">
                                                        <h2 class="text-2xl font-semibold">Carteira Ethereum</h2>
                                                        <button x-on:click="eth = false" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                                <line x1="18" y1="6" x2="6" y2="18" />
                                                                <line x1="6" y1="6" x2="18" y2="18" />
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <!-- Modal Content -->
                                                    <div class="mt-6 space-y-4">
                                                        <div class="flex flex-col space-y-4">
                                                            <div class="flex items-center flex-col space-y-4">
                                                                <img src="{{ asset('assets/eth-wallet.png')}}" class="w-32 h-32 object-cover" alt="btc wallet qr-code" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Additional Information -->
                                                    <div class="mt-6 text-sm text-gray-500">
                                                        <div x-data="{ input: '0x5B8E3810ab3f528938a63AF3CeA33914e7A87f9b', showMsg: false }" >

                                                        <div class="w-full h-full overflow-hidden">

                                                                <a type="button" x-on:click="navigator.clipboard.writeText(input), showMsg = true, setTimeout(() => showMsg = false, 1000)" class="group inline-flex w-full items-center justify-center px-5 text-sm font-normal text-center text-black border-t border-purple-50 hover:bg-purple-50 truncate rounded-b cursor-copy">

                                                                <button id="clipboard" class="relative py-4 cursor-copy text-xs font-medium">Copiar para o Clipboard</button>
                                                                    <div x-show="showMsg" x-on:click.away="showMsg = false" class="fixed bottom-3 right-3 z-20 max-w-sm overflow-hidden bg-green-100 border border-green-300 rounded" style="display: none;">
                                                                        <p class="p-3 flex items-center justify-center text-green-600">Copiado</p>
                                                                    </div>
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="text-sm italic">Escaneie o QR Code com o app do seu banco ou utilize os dados clicando em copiar nas opções fornecidas acima para fazer sua doação. Obrigado!</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>

<footer class="bg-gray-900 flex justify-center py-6 text-center text-gray-300 w-full">
    <div class="flex flex-col w-10/12">
        <p class="text-sm">&copy; {{date_format(now(), 'Y')}} API Viacnt. Esta Api é um projeto open source sob a
            licença MIT.</p>
        <p class="text-sm mt-4">
            Não distribuímos ou comercializamos bases de dados.
        </p>
    </div>
</footer>

</body>
</html>
