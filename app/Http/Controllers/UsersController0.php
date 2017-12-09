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
      dd($request->all());
        $user->update($request->all());
        return redirect()->route('users.show', $user->id)->with('success', '资料修改成功');
    }
    public function avatar(Request $request, User $user)
    {

        return view('users/avatar', compact('user'));
    }
    public function doavatar(Request $request)
    {
      // dd($request->get('img'));
      $base64_img = $request->get('img');
    //正则匹配出图片的格式
    if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_img, $result)) {
        $type = $result[2];     //图片后缀

        $folder = 'images/'.date('Ym', time()) . '/';    //构造存储目录 images/201712/

        // dd($new_file);
        if (!file_exists($folder)) {
            //检查是否有该文件夹，如果没有就创建，并给予最高权限
            mkdir($folder, 0700);
        }

        $filename = uniqid() . ".{$type}";    //文件名

        $path = $folder . $filename;         //构造存储路径

        // var_dump($new_file);
        //写入操作
        if (file_put_contents($path, base64_decode(str_replace($result[1], '', $base64_img)))) {
            return $path;  //返回文件名及路径
        } else {
            return false;
        }
    }

        // return view('users/avatar');
    }
}
