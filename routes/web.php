<?php

use Illuminate\Support\Facades\Route;

//Função anonima
/*function (){

}*/

Route::get('/', function () {
    //return view('welcome');
    //echo 'oi';

    //vai buscar na pasta resources/views/*.blade.php
    // so precisa trocar o nome, pois a função completa com .blade php
    return view('home');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return view('contato');
});