<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class camposMovie extends FormRequest
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
           'title'=>'required|max:255',
           'year'=>'required|numeric|max:4',
           'duration'=>'required|numeric|max:3',
           'rating'=>'required|numeric|max:1',
           'cover'=>'required',


        ];
    }
}
