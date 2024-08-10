o que fiz para criar o projeto ate agora 

fiz um git clone https://github.com/laravel/laravel site    // laravel 
criou a pasta
depois entrar na pasta com o comando =                                              cd site 
entrar no .env e configurar o banco de dados com os nomes certos
execultar no terminal o comando =                                                   php artisan serve 
instalar composer com o comando =                                                   composer install
obs> não e obrigatorio dar o = dei o create database no mysql
depois dei um comando =                                                             php artisan migrate 
depois dei um php artisan serve para ver se não tinha mais nem um erro =            php artisan serve
localizar a routes e pasta web.php
resources crair uma pagina no caso a home.blade.php
tem que definir no layout o @yield('conteudo') depois colocar esses tres nas paginas @extends('layout'), @section('conteudo'), @endsection




> Extensões do PHP que devem estar habilitadas para o Laravel no PHP.INI
```
    extension=curl
    extension=fileinfo
    extension=gd
    extension=gettext
    extension=intl
    extension=mbstring
    extension=exif
    extension=zip
    extension=mysqli
    extension=pdo_mysql
```