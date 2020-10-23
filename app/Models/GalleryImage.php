<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $table = 'gallery_images';
    public $timestamps = false;

    public function Gallery() {
      return $this->belongsTo(Gallery::class, 'gallery_id', 'id');
    }
}
