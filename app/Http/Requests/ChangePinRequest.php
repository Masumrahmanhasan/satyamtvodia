<?php

namespace App\Http\Requests;

use App\Rules\MatchOldPassword;
use App\Rules\MatchPin;
use Illuminate\Foundation\Http\FormRequest;

class ChangePinRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'current_pin' => ['required', new MatchPin],
            'pin' => ['required', 'confirmed', 'min|max:6'],
            'pin_code' => ['required', new MatchOldPassword],
        ];
    }
}
