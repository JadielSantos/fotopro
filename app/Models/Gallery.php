<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  protected $table = 'galleries';
  protected $connection = 'mysql';

  public function Images() {
    return $this->hasMany(GalleryImage::class);
  }
}
