<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::where('slug', 'super_admin')->first();

        $permissions = Permission::all()->pluck('id');

        $roles->permissions()->attach($permissions);
    }
}
