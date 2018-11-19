<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerifyRequest extends FormRequest
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
            'name' => [
                'required',
                'regex:/[\x{4e00}-\x{9fa5}]+/u'
            ],

            'idcard' => [
              'required',
              'max:18',
              'regex:/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/'
            ],
            'credit' => 'required',
            'qq' => [
                'required',
                'regex:/^[1-9][0-9]{4,12}$/'
            ],
            'weixin' => 'required',
        ];
    }
}
