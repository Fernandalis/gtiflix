<?php

use App\Models\Ator;
use App\Models\Genero;
use App\Models\Diretor;
use App\Models\Nacionalidade;
use App\Models\Filme;
use App\Models\Produtora;
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
})->name('lista-filmes');

route::get('/detalhes-filmes/{filme}',
function(Filme $filme){
   return view('detalhes-filmes', compact('filme'));
})->name('detalhes-filme');

route::view('/login','login')->name('login');

route::post('/logar', function (request $request) {
   dd($request);
})->name('logar');

route::get('/lista-Produtoras', function() {
   $produtoras = Produtora::all();
   return view('lista-Produtoras', 
       compact('produtoras'));
})->name('lista-produtoras');

route::get('/detalhes-produtoras/{produtoras}',
function(Produtora $produtoras){
   return view('detalhes-produtoras', compact('produtoras'));
})->name('detalhes-produtoras');

route::get('/lista-diretores', function() {
   $diretores = Diretor::all();
   return view('lista-diretores', 
       compact('diretores'));
})->name('lista-diretores');

route::get('/detalhes-diretores/{diretores}',
function(Diretor $diretores){
   return view('detalhes-diretores', compact('diretores'));
})->name('detalhes-diretores');

route::get('/lista-atores', function() {
   $atores = Ator::all();
   return view('lista-atores', 
       compact('atores'));
})->name('lista-atores');

route::get('/detalhes-atores/{atores}',
function(Ator $atores){
   return view('detalhes-atores', compact('atores'));
})->name('detalhes-atores');