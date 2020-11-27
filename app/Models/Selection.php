<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
  protected $table = 'selections';

  public function gallery() {
    return $this->hasMany(ImageSelection::class, 'selection_id', 'id')->first()->gallery();
  }

  public function customer() {
    return $this->belongsTo(Customer::class, 'customer_id', 'id');
  }

  public function invoice() {
    return $this->belongsTo(Invoice::class, 'invoice_id', 'id');
  }
}
