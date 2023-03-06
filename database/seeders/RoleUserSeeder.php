<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $users = User::all();

        $roles = Role::all();

        foreach ($users as $user) {
            $user->roles()->attach(4); //assegnazione fissa per ora perche non ho faker
        }
    }
}
