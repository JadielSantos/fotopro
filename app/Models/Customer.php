<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $table = 'customers';

  public function galleries() {
    return $this->belongsToMany(Gallery::class, 'galleries_customers', 'customer_id');
  }
}
