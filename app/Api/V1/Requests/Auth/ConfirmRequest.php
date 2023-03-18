<?php

namespace App\Api\V1\Requests\Auth;

use Dingo\Api\Http\FormRequest;

class ConfirmRequest extends FormRequest
{
    public function rules()
    {
        return [];
    }

    public function authorize()
    {
        return true;
    }
}
