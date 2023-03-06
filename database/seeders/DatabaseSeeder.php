<?php

namespace Database\Seeders;

use Database\Seeders\ProjectsTableSeeder;
use Database\Seeders\TypeSeeder;
use Database\Seeders\TecnologySeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\RoleUserSeeder;


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
            RoleSeeder::class,
            TypeSeeder::class,
            TecnologySeeder::class,
            ProjectsTableSeeder::class,
            RoleUserSeeder::class
        ]);
    }
}
