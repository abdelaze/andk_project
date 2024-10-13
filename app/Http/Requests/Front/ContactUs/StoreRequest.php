<?php

namespace App\Http\Requests\Front\ContactUs;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;



class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name'      => 'required|string|max:500',
            'mobile_number'  => 'required|string',  // Assumes 10 digits mobile number
            'city'           => 'required|string|max:255',
            'stocks'         => 'required|integer|min:2000',
            'notes'          => 'nullable|string|max:2000',
        ];
    }

    public function messages()
    {
        return [
            'full_name.required'     => 'يرجى إدخال الاسم الرباعي',
            'mobile_number.required' => 'يرجى إدخال رقم الجوال',
            'mobile_number.digits'   => 'رقم الجوال يجب أن يكون 10 أرقام',
            'city.required'          => 'يرجى إدخال المدينة',
            'stocks.required'        => 'يرجى تحديد عدد الأسهم المرغوب حجزها',
        ];
    }

}
