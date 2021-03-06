<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
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
    protected $redirectTo = '/';

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
            'name' => 'required|string|between:2,25|unique:users,name',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'captcha'=>'required|captcha',
        ],[
          'name.unique' => '用户名已被占用，请重新填写',
          'name.regex' => '用户名只支持中英文、数字、横杆和下划线',
          'name.between' => '用户名必须介于 3 - 25 个字符之间',
          'name.required' => '用户名不能为空',
          'email.required'=>'请输入Emali',
          'email.email'=>'Email不合法',
          'email.unique'=>'Email已经被占用',
          'password.required'=>'请输入密码',
          'password.min'=>'密码最小6位',
          'password.confirmed'=>'两次输入的密码不一致',
          'captcha.required'=>'请输入验证码',
          'captcha.captcha'=>'验证码不正确',
        ]
      );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
