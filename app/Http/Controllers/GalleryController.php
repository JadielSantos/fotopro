<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Gallery;
use App\Models\GalleryCustomer;
use App\Models\GalleryImage;
use App\Models\ImageSelection;
use App\Models\Invoice;
use App\Models\Selection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ImageOptimizer;
use Image;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    if (!Auth::guest()) {
      $galleries = Gallery::where('user_id', 'like', '' . Auth::user()->id . '')->get();
      return view('logged-in.tools.gallery.index', compact('galleries'));
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    if (!Auth::guest()) {
      return view('logged-in.tools.gallery.create');
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    if (!Auth::guest()) {
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

      Storage::disk('local')->makeDirectory('public/galerias/imagens/' . Auth::user()->id . '/' . $gallery->id);
      $path = 'galerias/imagens/' . Auth::user()->id . '/' . $gallery->id;

      for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
        $file = $request->allFiles()['images'][$i];

        $gallery_image = new GalleryImage();
        $gallery_image->gallery_id = $gallery->id;
        $gallery_image->is_main = 0;
        $gallery_image->path = $path . '/' . $file->hashName();
        $gallery_image->save();

        if ($gallery->image_size == '800x600') {
          Image::make($file->getRealPath())->resize(800, 600)->save('storage/' . $gallery_image->path);
        } else {
          Image::make($file->getRealPath())->resize(1024, 768)->save('storage/' . $gallery_image->path);
        }

        ImageOptimizer::optimize('storage/' . $gallery_image->path);
        unset($gallery_image);
      }

      for ($i = 0; $i < count($request->customers); $i++) {
        $customer = Customer::where('name', 'like', '%' . $request->customers[$i] . '%')->first();

        $gallery_customer = new GalleryCustomer();
        $gallery_customer->gallery_id = $gallery->id;
        $gallery_customer->customer_id = $customer->id;
        $gallery_customer->unit_price = $request->unit_price;
        $gallery_customer->save();
        unset($gallery_customer);
      }
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
    if (!Auth::guest()) {
      if ($gallery->user_id == Auth::user()->id) {
        return view('logged-in.tools.gallery.show', compact('gallery'));
      }
    } else {
      return view('customer.gallery.password', compact('gallery'));
    }
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

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function password(Request $request)
  {
    $password = $request->password;
    $gallery = Gallery::where('id', 'like', '%' . $request->gallery_id . '%')->first();

    if ($password == $gallery->password) {
      return view('customer.gallery.show', [
        'gallery' => $gallery
      ]);
    } else {
      return view('customer.gallery.password', [
        'gallery' => $gallery
      ]);
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function submit_selection(Request $request)
  {
    $gallery = Gallery::where('id', '=', $request->gallery_id)->first();

    $invoice = new Invoice();
    $invoice->status = 'Pendente';
    $invoice->total_price = $request->unit_price * count($request->images);
    $invoice->total_paid = 0;
    $invoice->save();

    $selection = new Selection();
    $selection->customer_id = $gallery->first_customer()->id;
    $selection->invoice_id = $invoice->id;
    $selection->save();

    for ($i = 0; $i < count($request->images); $i++) {
      $image_id = $request->images[$i];

      $image_selection = new ImageSelection();
      $image_selection->gallery_image_id = $image_id;
      $image_selection->selection_id = $selection->id;
      $image_selection->save();

      unset($image_selection);
    }

    session(['access_invoice' => true]);

    return redirect('selecoes/' . $selection->id);
  }
}
