<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct()
    {
        ini_set('max_execution_time', 500);
    }
    public function index()
    {
        $roles = Role::all()->except(1);
        return view('backend.child_registration', compact('roles'));
    }

    public function store(Request $request)
    {
        $area_manager = User::create([
            'uuid' => Str::uuid(),
            'user_id' => 'GK00'.mt_rand(111111, 999999),
            'manager_id' => $request->input('manager_id')?: null,
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'date_of_birth' => $request->input('date_of_birth'),
            'address' => $request->input('address'),
            'pin_code' => $request->input('pin_code'),
            'password' => Hash::make($request->input('password')),
            'password_text' => $request->input('password'),
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'occupation' => $request->input('occupation'),
        ]);

        $role = Role::with('permissions')->find($request->input('role'));

        if($role->slug == 'area_manager') {
            $area_manager->roles()->attach($role);
            $area_manager->permissions()->attach($role->permissions);

            for ($i = 1; $i <= 5; $i++) {
                $account = $this->associateUser($area_manager->user_id, 'manager');
                for ($u = 1; $u <= 15; $u++){
                    $user = $this->associateUser($account->user_id, 'user');
                }
            }
        }

        return redirect()->route('dashboard');

    }

    public function associateUser($area_manager, $role)
    {
        $accounts = User::create([
            'uuid' => Str::uuid(),
            'user_id' => 'GK00'.mt_rand(111111, 999999),
            'manager_id' => $area_manager,
            'pin_code' => (int) mt_rand(111111, 999999),
            'password' => Hash::make(mt_rand(111111, 999999)),
            'password_text' => mt_rand(111111, 999999),
        ]);

        $this->attachRoleAndPermissions($accounts, $role);
        return $accounts;
    }

    public function attachRoleAndPermissions($accounts, $role)
    {
        $role = Role::with('permissions')->where('slug', $role)->first();
        $accounts->roles()->attach($role);
        $accounts->permissions()->attach($role->permissions);
    }


}
