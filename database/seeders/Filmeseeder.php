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
            ['nome' => "A Quiet place", 'diretor_id' => 1, 'produtora_id' => 2, 'nacionalidade_id' => 1],
            ['nome' => "The Book Thief", 'diretor_id' => 2, 'produtora_id' => 1, 'nacionalidade_id' => 2],
            ['nome' => "Sing", 'diretor_id' => 1, 'produtora_id' => 3, 'nacionalidade_id' => 3],
            ]
        );
        DB::table('filmes')->insert(
            ['nome' => "Spider Man", 'descricao' => "Filme top", 'diretor_id' => 2, 'produtora_id' => 4, 'nacionalidade_id' => 2],
        );
    }
}
