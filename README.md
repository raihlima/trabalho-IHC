# Trabalho de IHC

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://github.com/raihlima/trabalho-ihc)

# Como usar o projeto

Por favor, siga os passos listados abaixo.

**OBS:** Após rodar pela primeira vez, basta executar um git pull para garantir que está com a última versão do código e então executar os comandos da seção "Executar o projeto"

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

Acessar o [site do composer](https://getcomposer.org/download/) e seguir as instruções (executar os quatro comandos da primeira caixa de códigos).

Depois instalar o composer dentro da pasta do projeto: 
```
composer install
``` 
Se o comando acima falhar, tentar esse outro:
```
php composer.phar install
```

### - Environment

Se necessário copie o arquivo `.env.example` e renomeie para `.env` com o comando:
```
cp .env.example .env
``` 

### - Banco de dados

Logar no MySQL:
```
sudo mysql
``` 

E então criar um usuário na base:
<pre>
create user '<b>USUARIO</b>'@'localhost' identified by '<b>SENHA</b>';
</pre>

Dar os privilégios de administrador das bases para o novo usuário:
<pre>
grant all privileges on *.* to '<b>USUARIO</b>'@'localhost';
</pre>

Atualizar as permissões das bases:
```
flush privileges;
```

Criar uma nova base de dados para o projeto:
<pre>
create database <b>DATABASE</b>;
</pre>

Se tudo correu bem, sair do MySQL:
```
exit
```

Então, configurar o arquivo `.env` conforme o banco de dados local (Eg. credenciais de acesso, nome da base, etc):
```
nano .env
```

### - Artisan/Laravel

Gerar uma nova chave com o comando:
```
php artisan key:generate
```

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

### Dados de login

Estudante
```
201565041:1234
[...]
201565440:1234
```
Professor
```
100006:1234
[...]
100040:1234
```
Coordenador
```
100002:1234
[...]
100005:1234
```
Chefe de departamento
```
100001:1234
```
Membro PROGEPE
```
1001:1234
[...]
1010:1234
```
