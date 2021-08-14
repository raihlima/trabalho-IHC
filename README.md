# Trabalho IHC

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://github.com/raihlima/trabalho-ihc)

# Instalação 

Instalação do PHP: 
```
sudo apt install curl php7.4 php7.4-curl php7.4-mbstring php7.4-xml php7.4-mysql git
``` 

Instalação do NPM
```
sudo apt install npm
```

Baixar o composer direto do site do composer. https://getcomposer.org/

Depois instalar o composer dentro da pasta do projeto: 
```
composer install
``` 

Se necessário copie o `.env.example` e renomeie para `.env`

Após isso:
```
php artisan key:generate
```

Configure o arquivo `.env` conforme o banco de dados.
```
php artisan migrate --seed
```

Inicializar o projeto
```
php artisan serve
```
