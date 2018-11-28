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
              'regex:/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/'
            ],
            'credit' => 'required|numeric|max:4',
            'qq' => [
                'required',
                'regex:/^[1-9][0-9]{4,12}$/'
            ],
            'weixin' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓名不能为空',
            'name.regex' => '姓名格式错误',
            'idcard.required' => '身份证不能为空',
            'idcard.regex' => '身份证格式错误',
            'credit.required' => '芝麻分不能为空',
            'credit.numeric' => '芝麻分格式错误',
            'qq.required' => 'QQ不能为空',
            'weixin.required' => '微信不能为空'
        ];
    }
}
