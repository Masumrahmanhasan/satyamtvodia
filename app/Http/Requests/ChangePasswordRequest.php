<?php

namespace App\Http\Requests;

use App\Rules\MatchOldPassword;
use App\Rules\MatchPin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class ChangePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'current_password' => ['required', new MatchOldPassword],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'pin_code' => ['required', new MatchPin],
        ];
    }
}
