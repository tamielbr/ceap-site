# Site principal do CEAP

Utilizamos o gerador de sites estáticvos [Jigsaw](http://jigsaw.tighten.co/).

## Instalação

Após baixar o repositório localmente no servidor e instalar o [Composer](https://getcomposer.org) e o [NodeJS](https://nodejs.org/en/), execute os comandos abaixo com um usuário que tenha permissão para escrever em `/var/www/html`.

    composer install
    npm install
    npm run deploy

## Editando o site

Para informações de como editar o site, olhe o site [Jigsaw/instalation](http://jigsaw.tighten.co/docs/installation/).

Após editar o site, basta atualizar o repositório local no servidor e executar o comando abaixo:

    npm run deploy