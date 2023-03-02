<?php

namespace Database\Seeders;
use App\Models\Tecnology;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $data_tecnology = ['HTML', 'CSS', 'JS', 'PHP'];

        foreach ($data_tecnology as $tecnology) {
            $newProject = new Tecnology();
            $newProject->name = $tecnology;
            $newProject->save();
        }
    }
}
