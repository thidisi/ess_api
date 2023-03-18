<?php

namespace App\Api\V1\Requests\Auth;

use Dingo\Api\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules ()
    {
        return [
            'password' => 'nullable', 
            'belong_to' => 'nullable', 
            'authority' => 'nullable', 
            'type' => 'nullable', 
            'email' => 'required|email', 

            'created_at' => 'nullable', 
            'created_by' => 'nullable', 
            'updated_at' => 'nullable', 
            'updated_by' => 'nullable'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            
        ];
    }

    public function authorize()
    {
        return true;
    }
}
