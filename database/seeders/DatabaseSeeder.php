<?php

namespace Database\Seeders;

use Database\Seeders\ProjectsTableSeeder;
use Database\Seeders\TypeSeeder;
use Database\Seeders\TecnologySeeder;

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
        $this->call([
            TypeSeeder::class,
            TecnologySeeder::class,
            ProjectsTableSeeder::class
        ]);
    }
}
