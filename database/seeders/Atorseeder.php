<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Atorseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('atores')->insert(
            [
            ['nome' => "Wagner Moura", 'descricao' => "Ator brasileiro", 'nacionalidade_id' => 1],
            ['nome' => "Megan Fox", 'descricao' => "Muito lembrada", 'nacionalidade_id' => 2],
            ]
        );
    }
}
