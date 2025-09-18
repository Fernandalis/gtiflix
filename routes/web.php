<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/teste', function() {
    echo 'Olá';
});

route::get('/filmes/{filme}', function($filme) {
    echo 'Acessando dados do filme: '. $filme;
});

route::view('/conheca', 'sobre');
