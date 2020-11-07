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
}
