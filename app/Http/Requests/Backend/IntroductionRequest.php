<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class IntroductionRequest extends FormRequest
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
            'category.*' => 'exists:tags,id',
           'fullName' => 'required',
            'dob' => 'required',
            'heading' => 'required',
            'detail' => 'required',
            'email' => 'required',
            'website' => 'required',
            'expBody1' => 'required',
            'expTitle1' => 'required',
            'expBody2' => 'required',
            'expTitle2' => 'required',
            'expBody3' => 'required',
            'expTitle3' => 'required',


        ];
    }

    function messages()
    {
        return [
            'fullName.required' => 'Please Enter Full Name',
            'dob.required' => 'Please Enter Date of Birth',
            'heading.required' => 'Please Enter Heading',
            'detail.required' => 'Please Enter Detail',
            'email.required' => 'Please Enter Email',
            'website.required' => 'Please Enter Website',
            'expBody1.required' => 'Please Enter Experience Body 1',
            'expTitle1.required' => 'Please Enter Experience Title 1',
            'expBody2.required' => 'Please Enter Experience Body 2',
            'expTitle2.required' => 'Please Enter Experience Title 2',
            'expBody3.required' => 'Please Enter Experience Body 3',
            'expTitle3.required' => 'Please Enter Experience Title 3',

        ];
    }
}
