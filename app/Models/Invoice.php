<?php

namespace App\Models;

use App\Models\ImageSelection;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
  protected $table = 'invoices';

  public function gallery() {
    return $this->hasMany(ImageSelection::class, 'invoice_id', 'id')->first()->gallery();
  }

  public function customer() {
    return $this->belongsTo(Customer::class, 'customer_id', 'id');
  }
}
