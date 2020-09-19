<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
  public function landing_page()
  {
    return view('landing-page.welcome');
  }
}
