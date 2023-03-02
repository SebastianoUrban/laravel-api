<?php

namespace Database\Seeders;
use App\Models\Type;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $data_types = ['corso', 'scuola'];

        foreach ($data_types as $type) {
            $newProject = new Type();
            $newProject->name = $type;
            $newProject->save();
        }
    }
}
