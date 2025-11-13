<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Filmeseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert(
            [
            ['nome' => "A Quiet place", 'capa' => "https://estantedasala.com/wp-content/uploads/2018/04/quiet_place.jpg", 'poster' => "https://estantedasala.com/wp-content/uploads/2018/04/quiet_place.jpg",'diretor_id' => 1, 'produtora_id' => 2, 'nacionalidade_id' => 1],

            ['nome' => "The Book Thief", 'capa' => "https://upload.wikimedia.org/wikipedia/pt/1/11/The_Book_Thief.jpg", 'poster' => "https://upload.wikimedia.org/wikipedia/pt/1/11/The_Book_Thief.jpg",'diretor_id' => 2, 'produtora_id' => 1, 'nacionalidade_id' => 2],
            
            ['nome' => "Sing", 'diretor_id' => 1, 'capa' => "https://upload.wikimedia.org/wikipedia/pt/9/97/Sing_%28filme%29.jpg", 'poster' => "https://upload.wikimedia.org/wikipedia/pt/9/97/Sing_%28filme%29.jpg",'produtora_id' => 3, 'nacionalidade_id' => 3],
            ]
        );
        DB::table('filmes')->insert(
            ['nome' => "Spider Man", 'capa' => "https://upload.wikimedia.org/wikipedia/pt/5/53/The_Amazing_Spider-Man_Poster.jpg", 'poster' => "https://upload.wikimedia.org/wikipedia/pt/5/53/The_Amazing_Spider-Man_Poster.jpg", 'descricao' => "Filme top", 'diretor_id' => 2, 'produtora_id' => 4, 'nacionalidade_id' => 2],
        );
    }
}
