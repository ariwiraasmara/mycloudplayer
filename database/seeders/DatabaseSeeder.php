<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        //\App\Models\Asmcp1000UserSeeder::factory(10)->create();
        $this->call(TableSeeder::class);
        $this->call(Asmcp1008LevelingsystemSeeder::class);
    }
}
