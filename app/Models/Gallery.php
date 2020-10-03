<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  public function Images() {
    return $this->hasMany(GalleryImage::class);
  }
}
