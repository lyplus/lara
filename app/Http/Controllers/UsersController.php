<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Handlers\ImgHandler;
use Auth;
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show','add','create']]);
    }
    public function show(User $user)
    {
        return view('users/show', compact('user'));
    }
    public function edit(User $user)
    {
        $this->authorize('update', $user);
        // dd($request->all());
        return view('users/edit', compact('user'));
    }
    public function update(UserRequest $request, User $user)
    {
        $this->authorize('update', $user);
        // dd($request->all());
        $user->update($request->all());
        return redirect()->route('users.show', $user->id)->with('success', '资料修改成功');
    }

    //用户注册
    public function add(){

      return view('users/add');

    }
    //用户注册操作
    public function create(UserRequest $request, User $user){

      $user=User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
      ]);
      Auth::login($user);  //注册成功后自动登录
      return redirect()->route('users.show',$user->id)->with('success','注册成功');

    }

    public function avatar(Request $request, ImgHandler $uploader, User $user)
    {
        $this->authorize('update', $user);
        // dd($request->img);
        // dd($request->get('img'));
        $base64_img = $request->get('img');
        if ($base64_img) {
            $path = $uploader->add($base64_img, 'images');
            if ($path) {
                $user->update(['avatar' =>$path]);
                // return redirect()->route('users.show', $user->id)->with('success', '资料修改成功');

                return ['status' => 1,'route' => route('users.edit', $user->id),];
                // return response()->json(['status' => 1,'route' => route('users.show', $user->id),]);
            }
        }
    }
}
