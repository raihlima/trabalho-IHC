# trabalho-ihc

# Instalação 

Instalação do PHP: 
```
sudo apt install curl php7.4 php7.4-curl php7.4-mbstring php7.4-xml git
``` 

Instalação do NPM
```
sudo apt install npm
```

Baixar o composer direto do site do composer.

Depois instalar o composer dentro da pasta do projeto: 
```
composer install
``` 

Se necessário copie o .env.example e renomeie para .env

Após isso:
```
php artisan key:generate
```

Configurar o arquivo .env conforme o banco de dados.
```
php artisan migrate --seed
```

Inicializar o projeto
```
php artisan serve
```
