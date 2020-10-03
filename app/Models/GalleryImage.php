<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $table = 'galery_images';
    public $timestamps = false;

    public function Galery() {
      return $this->belongsTo(Gallery::class, 'galery_id', 'id');
    }
}
