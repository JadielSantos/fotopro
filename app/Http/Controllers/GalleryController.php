<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Gallery;
use App\Models\GalleryCustomer;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $galleries = Gallery::where('user_id', 'like', ''.Auth::user()->id.'')->get();
    return view('logged-in.tools.gallery.index', [
    'galleries' => $galleries
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('logged-in.tools.gallery.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $gallery = new Gallery();
    $gallery->title = $request->title;
    $gallery->deadline = $request->deadline;
    $gallery->image_size = $request->image_size;
    $gallery->allow_copy = $request->allow_copy;
    $gallery->use_water_mark = $request->use_water_mark;
    $gallery->allow_individual_comment = $request->allow_individual_comment;
    $gallery->allow_black_white = $request->allow_black_white;
    $gallery->password = $request->password;
    $gallery->is_public = $request->is_public;
    $gallery->user_id = Auth::user()->id;
    $gallery->save();

    for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
      $file = $request->allFiles()['images'][$i];

      $gallery_image = new GalleryImage();
      $gallery_image->gallery_id = $gallery->id;
      $gallery_image->is_main = 0;
      $gallery_image->path = $file->store('galerias/imagens/' . Auth::user()->id . '/' . $gallery->id);
      $gallery_image->save();
      unset($gallery_image);
    }

    for ($i = 0; $i < count($request->customers); $i++) {
      $customer = Customer::where('name', 'like', '%'.$request->customers[$i].'%')->first();

      $gallery_customer = new GalleryCustomer();
      $gallery_customer->gallery_id = $gallery->id;
      $gallery_customer->customer_id = $customer->id;
      $gallery_customer->save();
      unset($gallery_customer);
    }

    return redirect('galerias/'.$gallery->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Gallery $gallery)
  {
    return view('logged-in.tools.gallery.show', [
      'gallery' => $gallery
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
