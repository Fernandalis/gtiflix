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
            ['nome' => "Marvel"],
            ['nome' => "Warnerbros"],
            ['nome' => "Universal"],
            ['nome' => "Paramount"],
            ['nome' => "globo"],
            ]
        );
    }
}
