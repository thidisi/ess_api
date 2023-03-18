<?php

namespace App\Api\V1\Requests\Auth;

use Config;
use Dingo\Api\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
            'save_password' => 'boolean'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
