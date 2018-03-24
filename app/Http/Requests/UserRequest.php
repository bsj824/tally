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
        return [
            'sign'=>'required',
            'avatar'=>'required',
            'birthday'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'sign.required'=>'有个性签名会更fashion哦',
            'avatar.required'=>'有美美的头像不好蛮',
            'birthday.required'=>'填上生日我们会有小惊喜的哦'

        ];
    }
}
