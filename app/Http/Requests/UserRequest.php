<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
         $rules = [
            'email' => 'required|email|unique:users',
            'name' =>   ' required|string|max:50',
            'password' => 'required'
        ];
         return $rules;
    }
    public function messages()
    {
        return [
            'email.required' => 'Email alanı boş Kalamaz',
            'name.required' => 'Name alanı boş Kalamaz'
        ];
    }
}
