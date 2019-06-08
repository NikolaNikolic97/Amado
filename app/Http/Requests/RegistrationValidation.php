<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationValidation extends FormRequest
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
            'username' => 'required|unique:users,user_name',
            'password' => 'required|max:60|min:6',
            'fullName' => 'required|max:60',
            'email' => 'required|email|unique:users,email'
        ];
    }
    public function messages()
    {
        return [
            'fullName.regex'=>'Name must start with capital letter'
        ];
    }
}
