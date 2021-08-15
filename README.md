# Trabalho IHC

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://github.com/raihlima/trabalho-ihc)

# Como usar o projeto

Por favor, siga os passos listados abaixo.

**OBS:** Após rodar pela primeira vez, basta executar um git pull para gareantir que está com a última versão do código e então executar os comandos da seção "Executar o projeto"

## Instalação de requisitos

Instalação do PHP: 
```
sudo apt install curl php7.4 php7.4-curl php7.4-mbstring php7.4-xml php7.4-mysql git
``` 

Instalação do NPM:
```
sudo apt install npm
```

Instalação do banco:
```
sudo apt install mysql
```

## Repostório

Clonar o repositório:
```
git clone https://github.com/raihlima/trabalho-ihc.git
```

E entrar na pasta do repositório:
```
cd trabalho-ihc
```

## Setup inicial

### - Composer

Baixar o composer direto do site do composer. https://getcomposer.org/

Depois instalar o composer dentro da pasta do projeto: 
```
composer install
``` 

### - Environment

Se necessário copie o arquivo `.env.example` e renomeie para `.env` com o comando:
```
cp .env.example .env
``` 

### - Banco de dados




### - Artisan/Laravel

Gerar uma nova chave com o comando:
```
php artisan key:generate
```

Configurar o arquivo `.env` conforme o banco de dados local (Eg. credenciais de acesso, nome da base, etc).

Executar a migração do schema da base de dados:
```
php artisan migrate --seed
```

## Executar o projeto

Inicializar o projeto
```
php artisan serve
```
Então basta abrir o site pelo navegador:
```
http://127.0.0.1:8000
```