<?php

use Illuminate\Database\Seeder;
use database\seeds\UsersTableSeeder;
use database\seeds\CompaniesTableSeeder;
use database\seeds\JobVacantsTableSeeder;
use database\seeds\AssignmentsTableSeeder;
use database\seeds\CandidatesTableSeeder;
use database\seeds\CurriculumsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(JobVacantsTableSeeder::class);
        $this->call(AssignmentsTableSeeder::class);
        $this->call(CandidatesTableSeeder::class);
        $this->call(CurriculumsTableSeeder::class);
    }
}
