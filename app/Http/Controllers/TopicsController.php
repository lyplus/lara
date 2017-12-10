<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TopicRequest;
use App\Models\Topic;
use App\Models\User;
use App\Models\Nav;
use Auth;
class TopicsController extends Controller
{
  public function __construct(){
    $this->middleware('auth',['except'=>['show']]);

  }
  //主题列表
    public function show(){
    $topics = Topic::with('nav','user')->paginate(6);
      return view('topics/show',compact('topics'));
    }
    public function add(){
      return view('topics/add');
    }
    public function create(){

    }
    public function edit(){
      return view('topics/edit');
    }
    public function update(){

    }
    public function delecte(){

    }
}
