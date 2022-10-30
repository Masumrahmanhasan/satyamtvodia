<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Super Admin',
                'slug' => 'super_admin',
            ],
            [
                'name' => 'Area Manager',
                'slug' => 'area_manager',
            ],
            [
                'name' => 'Manager',
                'slug' => 'manager',
            ],
            [
                'name' => 'User',
                'slug' => 'user',
            ],

        ];

        foreach ($roles as $role) {
            Role::query()->firstOrCreate([
                'name' => $role['name'],
                'slug' => $role['slug'],
            ], $role);
        }

    }
}
