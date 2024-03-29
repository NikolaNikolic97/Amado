<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertImageValidation extends FormRequest
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
            'image'=>'file|mimes:jpg,jpeg,gif,png',
            'post'=>'required|not_in:0',
            'alt'=>'required'
        ];
    }
}
