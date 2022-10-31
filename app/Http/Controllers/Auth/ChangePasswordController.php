<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ChangePinRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function changePassword(Request $request)
    {
        return view('backend.change_password');
    }

    public function updatePassword(ChangePasswordRequest $request)
    {
        User::find(auth()->user()->id)->update([
            'password' => Hash::make($request->input('password')),
            'password_text' => $request->input('password'),
        ]);

        return redirect()->back();
    }

    public function changePin(Request $request)
    {
        return view('backend.change_pin');
    }

    public function updatePin(ChangePinRequest $request)
    {
        User::find(auth()->user()->id)->update([
            'pin' => Hash::make($request->input('password')),
            'password_text' => $request->input('password'),
        ]);

        return redirect()->back();
    }
}
