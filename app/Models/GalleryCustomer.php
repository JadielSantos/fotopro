<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryCustomer extends Model
{
  protected $table = 'galleries_customers';
  public $timestamps = false;

  public function Gallery() {
    return $this->belongsTo(Gallery::class, 'gallery_id', 'id');
  }

  public function Customer() {
    return $this->belongsTo(Gallery::class, 'customer_id', 'id');
  }
}
