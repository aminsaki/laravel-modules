<?php

namespace App\Modules\Login\Http\Requests;

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
        return [
            "email" => ['required'],
            'password' => ['required'],
        ];

    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => trans('Login::validation.email'),
            'password.required' => trans('Login::validation.password'),
        ];
    }

    public function attributes()
    {
        return [
            'email' => "ایمیل",
            'password' => "پسورد",
        ];
    }
}

