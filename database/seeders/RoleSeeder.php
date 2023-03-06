<?php

namespace Database\Seeders;
use App\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()  {
        
        $roles = [
            [
                'level' => 1,
                'name' => 'Super Admin'
            ],
            [
                'level' => 2,
                'name' => 'Admin'
            ],
            [
                'level' => 3,
                'name' => 'Moderator'
            ],
            [
                'level' => 4,
                'name' => 'Editor'
            ]
        ];

        foreach ($roles as $role) {
            $newRole = new Role();
            $newRole->level = $role['level'];
            $newRole->name = $role['name'];
            $newRole->save();
        }
    }
}
