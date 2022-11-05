<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|string',
            'age' => 'required|numeric',
            'date' => 'required|date',
            'phone' => 'numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'web' => 'string|url',
            'address' => 'string|regex:/(^[-0-9A-Za-z.,\/ ]+$)/'
        ];
    }

    public function messages(){
        return [
            //name
            'name.required' => 'Vui lòng nhập tên',
            'name.string' => 'Vui lòng nhập đúng tên',

            //age
            'age.required' => 'Vui lòng nhập tuổi',
            'age.numeric' => 'Vui lòng nhập đúng tuổi',

            //date
            'date.required' => 'Vui lòng nhập lại ngày',

            //phone
            'phone.numeric' => 'Vui lòng nhập lại số điện thoại',

            //web
            'web.string' => 'Vui lòng nhập lại đúng định dạng web',

            //address
            'address.string' => 'Vui lòng nhập lại địa chỉ',
        ];
    }
}
