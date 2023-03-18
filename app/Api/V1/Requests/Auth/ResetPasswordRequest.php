<?php

namespace App\Api\V1\Requests\Auth;

use Config;
use Dingo\Api\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'token' => 'required|string',
            'password' => ['required', 'string', config('const.rule.password')],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
