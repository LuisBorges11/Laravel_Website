# Laravel Website

Bem-vindo ao projeto Laravel Website. Este projeto é um exemplo de aplicação web desenvolvida com o framework PHP Laravel. Ele inclui funcionalidades básicas de uma aplicação web moderna, incluindo autenticação de usuários, gerenciamento de conteúdo e uma interface de administração.

## Descrição

O Laravel Website é uma plataforma que permite aos usuários visualizar e interagir com conteúdo dinâmico. Ele inclui um sistema de autenticação robusto, gerenciamento de usuários, e uma interface de administração para gerenciar o conteúdo do site.

## Funcionalidades

- **Autenticação de Usuários**: Registro, login, logout e recuperação de senha.
- **Gerenciamento de Conteúdo**: Criação, edição e exclusão de artigos e páginas.
- **Painel de Administração**: Interface dedicada para administradores gerenciarem o site.
- **Sistema de Comentários**: Usuários podem comentar em artigos e páginas.
- **SEO Otimizado**: URLs amigáveis e metadados configuráveis.

## Requisitos

- PHP 7.3 ou superior
- Composer
- Banco de Dados: MySQL, PostgreSQL ou SQLite
- Servidor Web: Apache ou Nginx

## Como Usar

1. Clone este repositório para sua máquina local.
    ```bash
    git clone https://github.com/seuusuario/laravel_website.git
    ```
2. Navegue até o diretório do projeto.
    ```bash
    cd laravel_website
    ```
3. Instale as dependências do projeto.
    ```bash
    composer install
    ```
4. Copie o arquivo de exemplo `.env` e configure suas credenciais de banco de dados.
    ```bash
    cp .env.example .env
    ```
    Configure o arquivo `.env` com suas credenciais de banco de dados.
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel_website
    DB_USERNAME=seuusuario
    DB_PASSWORD=suasenha
    ```
5. Gere a chave da aplicação.
    ```bash
    php artisan key:generate
    ```
6. Execute as migrações do banco de dados.
    ```bash
    php artisan migrate
    ```
7. Execute as sementes do banco de dados (opcional).
    ```bash
    php artisan db:seed
    ```
8. Inicie o servidor de desenvolvimento.
    ```bash
    php artisan serve
    ```
9. Abra o navegador e acesse `http://localhost:8000` para visualizar o site.

## Estrutura do Projeto

- **/app**: Contém a lógica da aplicação.
  - **Http**: Controladores, Middlewares e Requests.
  - **Models**: Modelos de Eloquent.
- **/config**: Arquivos de configuração.
- **/database**: Migrações e seeders.
- **/public**: Arquivos públicos acessíveis pela web.
- **/resources**: Views, CSS, JS e outros recursos.
- **/routes**: Arquivos de rotas.
- **/storage**: Arquivos gerados pela aplicação, como logs.
- **/tests**: Testes automatizados.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e pull requests para melhorar o Laravel Website.

## Licença

Este projeto está licenciado sob a MIT License. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## Contato

Para mais informações, entre em contato:

- Email: filipefigueiredo39@gmail.com
- LinkedIn: [Luis Borges](https://www.linkedin.com/in/luis-figueiredo-232897258)

