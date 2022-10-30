<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'dashboard' => 'r',
            'admin_management' => 'c,r,u,d',
            'point_transfer' => 'c,r,u,d',
            'customers' => 'c,r,u,d',
            'wallets' => 'c,r,u,d',
            'games' => 'c,r,u,d',
        ];

        $map = collect([
            'c' => 'create',
            'r' => 'read',
            'u' => 'update',
            'd' => 'delete'
        ]);

        foreach ($permissions as $module => $value){
            foreach (explode(',', $value) as $permission) {
                $permissionValue = $map->get($permission);

                $permissions[] = Permission::query()->firstOrCreate([
                    'name' => ucfirst($permissionValue).' '.ucfirst($module),
                    'slug' => $module.'.'.$permissionValue,
                ])->id;
            }
        }

    }
}
