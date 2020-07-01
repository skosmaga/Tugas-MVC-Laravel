<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function reg(){
    return view('reg');
  }

  public function wel(){
    return view('wel');
  }
}
