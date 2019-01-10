<?php

namespace database\seeds;

use Illuminate\Database\Seeder;
use App\Companies;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Companies::create([
            'name' => 'Rits Desenvolvimento',
            'address'=>'Av. das Tulipas',
            'number'=>'1849',
            'cep'=>'59078220',
            'neighborhood'=>'Capim Macio',
            'city'=>'Natal',
            'state'=>'RN',
            'country'=>'Brasil'
        ]);
    }
}
