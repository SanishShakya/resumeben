<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
            'name' => 'required|unique:permissions',
            'module_id' => 'required',
            'route' => 'required|unique:permissions',
        ];
    }

    function messages()
    {
        return [
            'name.required' => 'Please enter name',
            'module_id.required' => "Please Enter Module ID",
            'route.required' => "Please Enter the Route",
        ];
    }
}
