<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'nickname' => 'required',
            'theme' =>'required',
            'details' =>'required',
            'phone' => 'required|min:11|max:11',
            'qq' =>'required',
            'e_mail' =>'required',

        ];
    }

    public function messages()
    {
       return [
           'nickname.required' => '请输入用户昵称',
           'theme.required' => '请输入反馈问题',
           'details.required' => '请输入反馈正文',
           'phone.required' => '请输入手机号码',
           'phone.max' => '手机号码为11位',
           'phone.min' => '手机号码为11位',
           'qq.required' => '请输入qq',
           'e_mail.required' => '请输入e_mail',
       ];
    }
}
