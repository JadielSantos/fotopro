<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function upload(Request $request) {
      $request->file('file')->store(Auth::user()->id);
      var_dump($request->file('file'), $request->all());
    }
}
