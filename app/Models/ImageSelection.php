<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageSelection extends Model
{
  protected $table = 'image_selections';

  public function gallery() {
    return $this->belongsTo(GalleryImage::class, 'gallery_images_id', 'id')->gallery();
  }

  public function gallery_image() {
    return $this->belongsTo(GalleryImage::class, 'gallery_images_id', 'id');
  }

  public function customer() {
    return $this->belongsTo(Customer::class, 'customer_id', 'id');
  }
}
