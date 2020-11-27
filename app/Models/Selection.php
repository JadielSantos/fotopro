<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
  protected $table = 'selections';

  public function gallery() {
    return ImageSelection::where('selection_id', 'like', '%' . $this->id .'%')->first()->gallery();
  }

  public function customer() {
    return $this->belongsTo(Customer::class, 'customer_id', 'id')->first();
  }
}
