<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
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
    return view('logged-in.tools.gallery.index');
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
    $gallery->save();

    for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
      $file = $request->allFiles()['images'][$i];

      $gallery_image = new GalleryImage();
      $gallery_image->gallery_id = $gallery->id;
      $gallery_image->path = $file->store('galerias/imagens/' . Auth::user()->id . '/' . $gallery->id);
      $gallery_image->save();
      unset($gallery_image);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Gallery $gallery)
  {
    dd($gallery);
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
