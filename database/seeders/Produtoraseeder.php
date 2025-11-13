<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Produtoraseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtoras')->insert(
            [
            ['nome' => "Marvel", 'descricao' => "Filmes de super heroi"],
            ['nome' => "Warnerbros", 'descricao' => "Filmes de super heroi"],
            ['nome' => "Universal", 'descricao' => "Filmes de super heroi"],
            ['nome' => "Paramount", 'descricao' => "Filmes de super heroi"],
            ['nome' => "globo" , 'descricao' => "Filmes de super heroi"],
            ]
        );
    }
}
