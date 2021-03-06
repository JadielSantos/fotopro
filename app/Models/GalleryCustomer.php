<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryCustomer extends Model
{
  protected $table = 'galleries_customers';
  public $timestamps = false;

  public function gallery() {
    return $this->belongsTo(Gallery::class, 'gallery_id', 'id');
  }

  public function customer() {
    return $this->belongsTo(Customer::class, 'customer_id', 'id');
  }
}
