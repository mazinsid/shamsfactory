<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counts')->insert([
            'team_work' => 0, 
            'experience' => 0, 
            'clients' => 0, 
            'award_won' => 0, 
        ]);
    }
}
