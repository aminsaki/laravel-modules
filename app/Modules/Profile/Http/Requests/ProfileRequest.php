<?php

namespace App\Modules\Profile\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProfileRequest extends FormRequest
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
            "email" => 'required|email',
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'address' => 'required|max:50|min:3',
            'phoneNumber' => 'required|regex:/(09)[0-9]{9}/|numeric',
            'nationalCode' => 'required|regex:/^[0-9]{10}$/',
            'city' => 'required|max:50',
            'state' => 'required|max:50',
            'postalCode' => 'required|min:10|numeric',
            'addressCountry' => 'required|max:50',
            'description' => 'required|max:200|min:3',
            'webSite' => 'required|max:100',
            'instagram' => 'required|max:100'
        ];

    }

    public function messages()
    {
        return [
            'email.required' => trans('Profile::validation.email'),
            'email.email' => trans('Profile::validation.emailValidation'),
            'first_name.required' => trans('Profile::validation.first_name'),
            'first_name.max' => trans('Profile::validation.first_name_max'),
            'first_name.min' => trans('Profile::validation.first_name_min'),
            'last_name.required' => trans('Profile::validation.last_name'),
            'last_name.min' => trans('Profile::validation.last_name_min'),
            'last_name.max' => trans('Profile::validation.last_name_max'),
            'address.required' => trans('Profile::validation.address'),
            'address.min' => trans('Profile::validation.address_min'),
            'address.max' => trans('Profile::validation.address_max'),
            'phoneNumber.required' => trans('Profile::validation.phoneNumber'),
            'phoneNumber.regex' => trans('Profile::validation.phoneNumberRegex'),
            'postalCode.max' => trans('Profile::validation.postalCode_code_max'),
            'postalCode.min' => trans('Profile::validation.postalCode_code_min'),
            'postalCode.numeric' => trans('Profile::validation.postalCode_code_numeric'),
            'nationalCode.regex' => trans('Profile::validation.nationalCode_regex'),
            'nationalCode.required' => trans('Profile::validation.nationalCode'),
            'city.required' => trans('Profile::validation.city'),
            'city.max' => trans('Profile::validation.city_max'),
            'state.required' => trans('Profile::validation.state'),
            'state.max' => trans('Profile::validation.state_max'),
            'postalCode.required' => trans('Profile::validation.postalCode'),
            'addressCountry.required' => trans('Profile::validation.addressCountry'),
            'addressCountry.max' => trans('Profile::validation.addressCountry_max'),
            'description.required' => trans('Profile::validation.description'),
            'description.max' => trans('Profile::validation.description_max'),
            'description.min' => trans('Profile::validation.description_min'),
            'webSite.required' => trans('Profile::validation.webSite'),
            'webSite.max' => trans('Profile::validation.webSite_max'),
            'instagram.required' => trans('Profile::validation.instagram'),
            'instagram.max' => trans('Profile::validation.instagram_max'),

        ];
    }


    public function attributes()
    {
        return [
            'email' => 'ایمیل',
            'password' => "پسورد",
            'first_name' => 'نام',
            'last_name' => 'نام خانوادگی',
            'address' => 'ادرس',
            'phoneNumber' => ' تلفن همراه',
            'nationalCode' => "کد ملی",
            'city' => "شهر",
            'state' => "استان",
            'postalCode' => "کد پستی",
            'addressCountry' => "نام کشور",
            'description' => "توضحیات"
        ];
    }
}

