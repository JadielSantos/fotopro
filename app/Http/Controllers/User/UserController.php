<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function home()
  {
    return view('user.home');
  }

  public function photos()
  {
    return view('user.photos');
  }

  public function contacts()
  {
    return view('user.contact');
  }
  public function about()
  {
    return view('user.about');
  }
}
