<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nav;
use App\Models\Topic;

class NavsController extends Controller
{
    //导航

    public function show(Nav $nav){
      $topics=Topic::where('nav_id',$nav->id)->paginate(3);
      return view('topics/show',compact('topics','nav'));

    }
}
