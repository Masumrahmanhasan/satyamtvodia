<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        $role = Role::query()->with('permissions')->where('slug', 'super_admin')->first();

        $user->roles()->attach($role);
        $user->permissions()->attach($role->permissions);

    }
}
