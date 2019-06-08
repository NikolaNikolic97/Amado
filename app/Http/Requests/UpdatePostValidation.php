<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostValidation extends FormRequest
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
            'description'=>'required|max:60',
            'name'=>'required|max:60',
            'price'=>'required|numeric',
            'quantity'=>'required|numeric',
            'brand'=>'required|not_in:0',
            'category'=>'required|not_in:0',
        ];
    }
}
