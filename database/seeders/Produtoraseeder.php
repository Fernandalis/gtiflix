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
            ['nome' => "Marvel", 'descricao' => "Marvel Studios é o estúdio responsável pelo Universo Cinematográfico Marvel, conhecido por grandes produções de super-heróis e forte influência no cinema moderno.", 'capa' => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Marvel_Logo.svg/1200px-Marvel_Logo.svg.png"],

            ['nome' => "Warnerbros", 'descricao' => "Warner Bros. é uma das produtoras mais tradicionais de Hollywood, famosa por franquias como Harry Potter, Batman e Matrix.", 'capa' => "https://mediaproxy.tvtropes.org/width/1200/https://static.tvtropes.org/pmwiki/pub/images/screenshot_2024_08_18_at_12541.png"],

            ['nome' => "Universal", 'descricao' => "Universal Pictures é um estúdio histórico, conhecido tanto por seus clássicos monstros quanto por franquias atuais como Jurassic Park e Velozes e Furiosos.", 'capa' => "https://naoseinada.com.br/wp-content/uploads/2022/10/universal-logo.png?w=816"],

            ['nome' => "Paramount", 'descricao' => "Paramount Pictures é um dos estúdios mais antigos de Hollywood, reconhecido por filmes marcantes e franquias como O Poderoso Chefão e Missão: Impossível.", 'capa' => "https://sm.ign.com/ign_br/screenshot/default/tudo-sobre-paramount-plus-brasil_57ym.jpg"],

            ['nome' => "globo" , 'descricao' => "Globo é a maior produtora de conteúdo audiovisual do Brasil, destacando-se por novelas, séries e forte presença na TV e no digital.", 'capa' => "https://conteudo.imguol.com.br/c/entretenimento/0d/2020/03/07/logomarca-tv-globo-1583609534618_v2_450x450.jpg"],
            ]
        );
    }
}
