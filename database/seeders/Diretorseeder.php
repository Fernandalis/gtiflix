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
            [
            ['nome' => "John Krasinski", 'descricao' => " John Krasinski é um ator, roteirista e diretor norte-americano que se destacou ao transitar da comédia para o suspense com grande habilidade. Após ganhar fama em The Office, ele surpreendeu a crítica ao dirigir e coescrever A Quiet Place (2018) e sua sequência, filmes elogiados por sua abordagem tensa, minimalista e emocional sobre o terror. Sua direção combina sensibilidade familiar com construção de suspense eficiente, consolidando-o como um nome versátil e respeitado no cinema contemporâneo.", 'foto' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0IqZ4TOPeOlocfblWEWLJHUiVewxJyk_774gy3udYpDssH4htqCUP20nC9KMwr2xjiD_jxJtidPWR8x2nlHKWVuTKpsh_al4b6pzjHmRQGg&s=10", 'nacionalidade_id' => 3],

            ['nome' => "Michael Sarnoski", 'descricao' => "Michael Sarnoski é um diretor e roteirista norte-americano conhecido por seu estilo sensível e intimista, marcado por forte foco emocional e personagens profundamente humanos. Ele ganhou destaque com Pig (2021), aclamado pela crítica por sua narrativa contida e pela performance de Nicolas Cage, e depois assumiu A Quiet Place: Day One (2024), consolidando-se como um dos cineastas mais promissores de sua geração.", 'foto' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4VxQcx96ATnTdBl7FRSlwqqP31-FdNB2W7zAi-83IxS6grHd-MCxSV7iFcxMMQ2oU_YV88X70SVLaSa3rPehwOMwgqg0N-Or4zLET-6tj&s=10",  'nacionalidade_id' => 4],
            ]
        );
    }
}
                                                            