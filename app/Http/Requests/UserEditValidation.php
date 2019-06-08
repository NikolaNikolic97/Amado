<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditValidation extends FormRequest
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
            'username' => 'required',
            'password' => 'required|max:60|min:6',
            'fullName' => 'required',
            'email' => 'required|email',
            'role'=>'required|not_in:0'
        ];

    }
    public function messages()
    {
        return [
            'role.not_in'=>'You must select role'
        ];
    }
}
