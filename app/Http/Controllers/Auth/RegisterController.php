<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'backend';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'phone' => 'required|unique:users',
            'password' => 'required|min:6',
            'captcha' => 'required|captcha',
        ],[
            'captcha.required'=>'验证码不为空',
            'captcha.captcha'=>'验证码错误',
            'name.required'=>'用户名不为空',
            'phone.required'=>'手机号不为空',
            'password.min'=>'密码不能少于6位',
            'phone.unique'=>'该手机号已被注册',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Model\User
     */
    protected function create(array $data)
    {
        return \App\Model\User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
        ]);
    }

}
