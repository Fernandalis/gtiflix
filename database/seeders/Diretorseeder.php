<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Diretorseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diretores')->insert(
            ['nome' => "John Krasinski", 'descricao' => " diretor top", 'nacionalidade_id' => 3],
            ['nome' => "Michael Sarnoski", 'descricao' => "diretor ajudante", 'nacionalidade_id' => 4],
        );
    }
}
                                                            