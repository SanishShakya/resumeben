<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
           'questions' => 'required',
            'answers' => 'required',


        ];
    }

    function messages()
    {
        return [
            'questions.required' => 'Please Enter Question',
            'answers.required' => 'Please Enter Answer',

        ];
    }
}
