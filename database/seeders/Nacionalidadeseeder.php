<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Nacionalidadeseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nacionalidades')->insert(
            [
            ['nome' => "Brasileiro"],
            ['nome' => "Estadunidense"],
            ['nome' => "Canadense"],
            ['nome' => "Coreano"],
            ['nome' => "Chines"],
            ]
        );
    }
}
