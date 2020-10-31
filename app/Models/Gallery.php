<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  protected $table = 'galleries';
  protected $connection = 'mysql';

  protected $fillable = [
    'title'
  ];

  public function setTitleAttribute($value) {
    $this->attributes['title'] = $value;
  }

  public function images() {
    return $this->hasMany(GalleryImage::class, 'gallery_id', 'id');
  }
}
