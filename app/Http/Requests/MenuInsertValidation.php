<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuInsertValidation extends FormRequest
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
            'href'=>'required',
            'content'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'href.required'=>'You must enter route name',
            'content.required'=>'You must enter content of the link'
        ];
    }
}
