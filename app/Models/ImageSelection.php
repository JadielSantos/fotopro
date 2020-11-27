<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageSelection extends Model
{
  protected $table = 'image_selections';

  public function gallery() {
    return GalleryImage::where('id', 'like', '%' . $this->gallery_image_id .'%')->first()->gallery();
  }

  public function gallery_image() {
    return $this->belongsTo(GalleryImage::class, 'gallery_images_id', 'id')->first();
  }

  public function customer() {
    return $this->belongsTo(Customer::class, 'customer_id', 'id')->first();
  }
}
