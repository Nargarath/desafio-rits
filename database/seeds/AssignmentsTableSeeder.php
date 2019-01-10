<?php

namespace database\seeds;

use Illuminate\Database\Seeder;
use App\Assignments;

class AssignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assignments::create([
            'type'=>'will_do',
            'text'=>'Transformar layouts (XD e Photoshop) em montagens responsivas utilizando HTML + CSS + JS;',
            'job_id'=>'1'
        ]);
        Assignments::create([
            'type'=>'will_do',
            'text'=>'Integrar montagem com APIs desenvolvidas por outras equipes;',
            'job_id'=>'1'
        ]);
        Assignments::create([
            'type'=>'need_be',
            'text'=>'Possua habilidades arquiteturais para desenvolvimento de software;',
            'job_id'=>'1'
        ]);
        Assignments::create([
            'type'=>'work_with',
            'text'=>'WordPress e sistemas em PHP em geral;',
            'job_id'=>'1'
        ]);
        Assignments::create([
            'type'=>'will_do',
            'text'=>'Montagem de APIs que serão usadas por outras equipes',
            'job_id'=>'2'
        ]);
        Assignments::create([
            'type'=>'need_be',
            'text'=>'Seja focado, proativo, tenha boa comunicação e relacionamento interpessoal.',
            'job_id'=>'2'
        ]);
        Assignments::create([
            'type'=>'need_be',
            'text'=>'Goste de trabalhar em equipe;',
            'job_id'=>'2'
        ]);
        Assignments::create([
            'type'=>'work_with',
            'text'=>'Frameworks PHP modernos (Laravel,Symphony).',
            'job_id'=>'2'
        ]);
    }
}
