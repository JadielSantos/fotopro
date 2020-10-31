<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $table = 'customers';

  public function galleries() {
    return $this->hasMany(Gallery::class, 'customer_id', 'id');
  }
}
