<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertPostValidation extends FormRequest
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
            'description'=>'required',
            'name'=>'required|max:60',
            'price'=>'required|numeric',
            'quantity'=>'required|numeric',
            'brand'=>'required|not_in:0',
            'category'=>'required|not_in:0',
            'image'=>'file|mimes:jpg,jpeg,gif,png'
        ];
    }
}
