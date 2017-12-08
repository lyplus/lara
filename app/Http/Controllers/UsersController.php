<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Input;
use Requests;
use Closure;
use Response;
class UsersController extends Controller
{
    public function show(User $user)
    {
        return view('users/show', compact('user'));
    }
    public function edit(User $user)
    {
        return view('users/edit', compact('user'));
    }
    public function update(UserRequest $request, User $user)
    {
      dd($request->avatar);
        $user->update($request->all());
        return redirect()->route('users.show', $user->id)->with('success', '资料修改成功');
    }
    public function avatar(Request $request, User $user)
    {

        return view('users/avatar', compact('user'));
    }
    public function upavatar(Request $request)
    {
      $base64_img = $request->get('src');

      dd($base64_img);
      //正则匹配出图片的格式
    if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_img, $result)) {

        $type = $result[2];//图片后缀
        $dateFile = date('Y-m-d', time()) . "/";  //创建目录
        $new_file = UPLOAD_BASE_PATH . $dateFile;
        if (!file_exists($new_file)) {
            //检查是否有该文件夹，如果没有就创建，并给予最高权限
            mkdir($new_file, 0700);
        }

        $filename = time() . '_' . uniqid() . ".{$type}"; //文件名
        $new_file = $new_file . $filename;

        //写入操作
        if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image)))) {
            return $dateFile . $filename;  //返回文件名及路径
        } else {
            return false;
        }
    }

        return view('users/avatar');
    }
}
