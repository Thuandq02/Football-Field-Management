<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCustomer extends FormRequest
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
            'name'=>'required|string|max:25',
            'phone'=>'required|regex:/(0)[0-9]{9}/',
            'address'=>'required|string|max:225',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Name is required',
            'phone.required'=>'Phone name is required',
            'address.required'=>'Address name is required',
        ];
    }
}
