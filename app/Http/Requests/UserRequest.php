<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
          'name' => 'required|between:2,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,' . Auth::id(),
          'email' => 'required|email|unique:users,email,'. Auth::id(),
          'bio' => 'max:80',
          // 'password' => 'required|string|min:6|confirmed',
          // 'captcha'=>'required|captcha',
        ];
    }
    public function messages()
{
    return [
        'name.unique' => '用户名已被占用，请重新填写',
        'name.regex' => '用户名只支持中英文、数字、横杆和下划线',
        'name.between' => '用户名必须介于 3 - 25 个字符之间',
        'name.required' => '用户名不能为空',
        'email.required'=>'请输入Emali',
        'email.email'=>'Email不合法',
        'email.unique'=>'Email已经被占用',
        // 'password.required'=>'请输入密码',
        // 'password.min'=>'密码最小6位',
        // 'password.confirmed'=>'两次输入的密码不一致',
        // 'captcha.required'=>'请输入验证码',
        // 'captcha.captcha'=>'验证码不正确',
    ];
}
}
