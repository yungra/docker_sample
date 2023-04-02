<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InquiryRequest extends FormRequest
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
            'name' => 'required|max:255',
            'inquiry_name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'content' => 'required|max:1000',
            'age' => 'required|numeric',
            'gender' => 'required|numeric|between:1,3',
        ];
    }
}
