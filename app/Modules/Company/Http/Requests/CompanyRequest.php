<?php

namespace App\Modules\Company\Http\Requests;

use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            "organization_name" => 'required|max:50',
            "email" => 'required|email',
            "mobile" => 'required|regex:/(09)[0-9]{9}/|numeric',
            "national_number" => 'required|regex:/^[0-9]{10}$/',
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            "gender" => 'required',
            "address" => 'required|max:150',
            "address_city" => 'required|max:50',
            "address_state" => 'required|max:50',
            "address_postal_code" => 'required|numeric|min:10',
            "description" => 'required|max:200',
            "address_country"=>'required|max:50',

        ];

    }
    public function messages()
    {
        return [

            'email.required' => trans('Company::validation.email'),
            'addressCountry.max' => trans('Company::validation.addressCountry_max'),
            'addressCountry.required' => trans('Company::validation.addressCountry'),
            'first_name.max' => trans('Company::validation.first_name_max'),
            'first_name.min' => trans('Company::validation.first_name_min'),
            'last_name.max' => trans('Company::validation.first_name_max'),
            'last_name.min' => trans('Company::validation.first_name_min'),
            'national_number.regex' => trans('Company::validation.national_number_regex'),
            'email.email' => trans('Company::validation.emailValidation'),
            'first_name.required' => trans('Company::validation.first_name'),
            'last_name.required' => trans('Company::validation.last_name'),
            'address.required' => trans('Company::validation.address'),
            'address.max' => trans('Company::validation.address_max'),

            'mobile.required' => trans('Company::validation.mobile'),
            'mobile.regex' => trans('Company::validation.mobileRegex'),
            'national_number.required' => trans('Company::validation.national_number'),
            'address_city.required' => trans('Company::validation.address_city'),
            'address_city.max' => trans('Company::validation.address_city'),
            'address_state.required' => trans('Company::validation.address_state'),
            'address_postal_code.required' => trans('Company::validation.address_postal_code'),
            'address_postal_code.max' => trans('Company::validation.address_postal_code_max'),
            'address_postal_code.min' => trans('Company::validation.address_postal_code_min'),
            'address_postal_code.numeric' => trans('Company::validation.address_postal_code_numeric'),
            'address_country.required' => trans('Company::validation.address_country'),
            'address_country.max' => trans('Company::validation.address_country_max'),
            'description.required' => trans('Company::validation.description'),
            'description.max' => trans('Company::validation.description_max'),
            'gender.required' => trans('Company::validation.gender'),
            'organization_name.required' => trans('Company::validation.organization_name'),
            'organization_name.max' => trans('Company::validation.organization_name_max'),
            'address_state.max' => trans('Company::validation.address_state_max'),



        ];
    }

    public function attributes()
    {
        return [
            'email' => 'ایمیل',
            'organization_name' => " نام شرکت",
            'mobile' => " تلفن همراه",
            'national_number' => "کدملی",
            'first_name' => "نام",
            'last_name' => "نام خانوادگی",
            'gender' => "جنیست",
            'address' => "ادرس",
            'address_city' => "شهر",
            'address_state' => "استان",
            'address_country' => "کشور",
            'address_postal_code' => "کد  پستی",
            'description' => "توضحیات",
        ];
    }
}

