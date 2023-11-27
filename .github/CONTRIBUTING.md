# Contribuindo para Gerencie Mei
Antes de enviar sua contribuição, reserve um momento e leia as seguintes diretrizes.

- [1. Começando](#1-começando)
- [2. Diretrizes de relatórios de problemas](#2-issue-reporting-guidelines)
- [3. Diretrizes de pull request](#3-pull-request-guidelines)
- [4. Novos recursos e vulnerabilidades de segurança](#4-novos-recursos-e-vulnerabilidades-de-segurança)
- [5. Configuração de desenvolvimento](#5-desenvolvimento-configuração)
    - [5.1. Requisitos mínimos](#51-minimum-requirements)
    - [5.2. Prepare o Ambiente](#52-prepare-o-ambiente)
    - [5.3. Criar o ambiente](#53-criar-o-ambiente)
    - [5.4. Ativos de construção](#54-building-assets)
- [6. Abrir aplicativo no navegador](#6-abrir-aplicativo-no-browser)
- [7. Testes](#7-testes)

## 1. Primeiros passos

Antes de você começar:
- Verifique se seu ambiente atende aos requisitos mínimos estabelecidos.
- Confira os [problemas existentes](https://github.com/TiagoLemosNeitzke/gerencie_mei/issues) e veja se aceitamos contribuições para o seu tipo de problema em nosso [Discord Adicionar o link](https://discord.com/).

<br />

## 2. Diretrizes para relatórios de problemas

- A lista de problemas deste repositório é exclusivamente para relatórios de bugs, relatórios de documentos e solicitações de recursos. Problemas não conformes serão encerrados imediatamente.

    - Para responder às suas perguntas, você pode obter respostas em nosso [Whatsapp](https://wa.me/5567998686331).

- Tente pesquisar pelo seu problema, ele já pode ter sido respondido ou até mesmo corrigido no branch master (principal).

- Use apenas a quantidade mínima de código necessária para reproduzir o comportamento inesperado. Quanto mais precisamente você isolar o problema, mais rápido poderemos investigar.

- Verifique se o problema pode ser reproduzido com a última versão estável do `Gerencie Mei` e indique a versão específica que você está usando.

- Problemas sem etapas claras de reprodução não serão triados. Se um problema rotulado como "precisa de reprodução" não receber mais informações do autor do problema por mais de 7 dias, ele será fechado.

- Se o seu problema foi resolvido, mas ainda está aberto, não hesite em fechá-lo. Caso você tenha encontrado uma solução sozinho, pode ser útil explicar como você a corrigiu.

- Mais importante ainda, pedimos sua paciência: a equipe deve equilibrar sua solicitação com muitas outras responsabilidades - corrigir outros bugs, responder a outras perguntas, novos recursos, nova documentação, etc.

<br />

## 3. Diretrizes de pull request
- Se adicionar um novo recurso:
    - Forneça um motivo convincente para adicionar esse recurso. Idealmente, você deve abrir um problema de sugestão primeiro e dar sinal verde antes de trabalhar nele.
    - Inclua testes para todos os códigos adicionados ou modificados.
    - Certifique-se de que todos os testes estão passando.

- Se corrigindo um bug:
    - Se você estiver resolvendo um problema especial, adicione `(correção: #xxxx[,#xxx])` (#xxxx é o ID do problema) em seu título de PR para obter um registro de lançamento melhor, por exemplo, `correção: atualização de codificação/decodificação de entidades (correção #3899)`.
    - Forneça uma descrição detalhada do bug no PR.

<br />

## 4. Novos recursos e vulnerabilidades de segurança

Se você pretende propor um novo recurso, envie um problema para este repositório.

Em caso de descoberta de uma vulnerabilidade de segurança em `Gerencie Mei`, **NÃO** divulgue publicamente como um problema, envie uma mensagem para o endereço de e-mail [tiago.neitzke@yahoo.com](mailto://tiago.neitzke@yahoo.com). Todas as vulnerabilidades de segurança serão resolvidas o mais rápido possível.

<br />

## 5. Configuração de desenvolvimento
`Gerencie Mei` é desenvolvido com a versão Laravel 10.x. Todo o ambiente de desenvolvimento pode ser criado facilmente usando `Laravel Sail`. Criando assim um ambiente padrão, onde todos os desenvolvedores terão as mesmas versões de determinadas tecnologias em suas estações de trabalho, evitando possíveis problemas por incompatibilidade de versões.

`Laravel Sail` conforme definido em sua [documentação](https://laravel.com/docs/10.x/sail) tem a seguinte definição:

> O Laravel Sail é uma interface de linha de comando leve para interagir com o ambiente de desenvolvimento Docker padrão do Laravel. O Sail fornece um excelente ponto de partida para criar um aplicativo Laravel usando PHP, MySQL e Redis sem exigir experiência anterior com o Docker.

Consequentemente, para que possamos manter a compatibilidade entre os ambientes de desenvolvimento, definiremos aqui os requisitos mínimos para geração e hospedagem do projeto.

<br />

### 5.1. Requerimentos mínimos
- PHP v8.1+;
- Compositor v2.2.o;
- NodeJs v20.5.1 ;
- Npm v9.8.0 ;
- Docker v24.0.5;

<br />

### 5.2. Prepare o ambiente
Primeiro, clone o repositório executando o seguinte comando:

```bash
$ git clone https://github.com/TiagoLemosNeitzke/gerencie_mei.git
```

Após clonar o repositório, entre na pasta do projeto e execute:

```bash
$ ./sail config
```

📝 Observação
> Caso esteja executando o projeto pela primeira vez, é necessário executar o comando acima para que as dependências composer e npm sejam instaladas corretamente. Além disso, este comando criará um arquivo .env para você (se ainda não existir) com base no arquivo .env.example.

<br />

### 5.3. Crie o ambiente
Depois que todas as dependências `composer` e `npm` estiverem instaladas, crie efetivamente o ambiente de desenvolvimento do Docker com o comando abaixo:

```bash
$ ./sail init
```

Este comando iniciará o download de todas as imagens do Docker necessárias para criar todo o ambiente de desenvolvimento estabelecido pela equipe do Laravel.

📝 Observação
> Caso as imagens do Docker já existam em sua estação de trabalho, seu download será ignorado e se o Dockerfile da imagem do aplicativo for alterado, este comando irá reconstruir a imagem antes de executar o container.

Após o download de todas as imagens do Docker, todos os contêineres serão iniciados, encerrando assim o ciclo de criação do ambiente de desenvolvimento.

<br />

### 5.4. Ativos de construção
Agora que o ambiente de desenvolvimento foi construído, precisamos compilar os assets para que (`estilos, scripts, etc`) sejam manipulados e publicados. Para fazer isso, basta executar o seguinte comando:

```bash
$ ./sail npm run dev
```

<br />

## 6. Abra o aplicativo no navegador
Com tudo resolvido, definitivamente chegou a hora de ver o aplicativo funcionando, para isso acesse a url `http://localhost:${APP_PORT}` no seu navegador favorito.

📝 Observação
> Onde ${APP_PORT} deve ser substituído pelo número da porta informado em seu arquivo '.env', caso não tenha informado um número de porta, a porta padrão utilizada será `80`.

<br />

## 7. Testes

Gerencie Mei` usa [Pest](https://pestphp.com/) PHP Test Framework.

Para executar os testes, execute o comando:

```bash
$ ./sail test
```
