<?php

use App\Models\Ator;
use App\Models\Genero;
use App\Models\Diretor;
use App\Models\Nacionalidade;
use App\Models\Filme;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

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

 route::get('/diretores', function() {
    $variavel = Diretor::all();
    dd($variavel);
 });

 route::get('/nacionalidades', function() {
    $nacionalidade = Nacionalidade::all();
    dd($nacionalidade);
 });

 route::get('/filmes', function() {
    $filme = Filme::all();
    dd($filme);
 });

 route::get('/', function() {
   $movies = Filme::all();
   return view('lista-filmes', 
       compact('movies'));
});

route::get('/detalhes-filmes/{filme}',
function(Filme $filme){
   return view('detalhes-filmes', compact('filme'));
})->name('detalhes-filme');

route::view('/login','login')->name('login');

route::post('/logar', function (request $request) {
   dd($request);
})->name('logar');