<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  protected $table = 'galleries';
  protected $connection = 'mysql';

  protected $hidden = [
    'password'
  ];

  public function setTitleAttribute($value) {
    $this->attributes['title'] = $value;
  }

  public function main_image() {
    //
  }

  public function images() {
    return $this->hasMany(GalleryImage::class, 'gallery_id', 'id');
  }

  public function customers() {
    return $this->belongsToMany(Gallery::class, 'galleries_customers', 'gallery_id');
  }

  public function first_customer() {
    return $this->belongsToMany(Gallery::class, 'galleries_customers', 'gallery_id')->first();
  }

  public function unit_price(int $customer_id) {
    return GalleryCustomer::where('gallery_id', 'like', '%' . $this->id . '%')->where('customer_id', 'like', '%' . $customer_id . '%')->first()->unit_price;
  }
}
