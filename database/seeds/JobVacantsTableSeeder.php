<?php

namespace database\seeds;

use Illuminate\Database\Seeder;
use App\JobVacants;

class JobVacantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobVacants::create([
            'name' => 'Desenvolvedor Front-end',
            'status' => 'A',
            'company_id' => '1'
        ]);
        JobVacants::create([
            'name' => 'Desenvolvedor Back-end',
            'status' => 'A',
            'company_id' => '1'
        ]);
    }
}
