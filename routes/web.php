<?php

use App\Models\Ator;
use App\Models\Genero;
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

route::get('/generos', function() {
   $minhavariavel = Genero::all();
   dd($minhavariavel);
});

route::get('/atores', function() {
    $novavariavel = Ator::all();
    dd($novavariavel);
 });