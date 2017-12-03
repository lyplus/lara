<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function root(){
      return view('homes/root');
    }
}
