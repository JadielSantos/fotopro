<?php

namespace App\Models;

use App\Models\ImageSelection;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
  protected $table = 'invoices';

  public function gallery() {
    return $this->belongsTo(Selection::class, 'invoice_id', 'id')->first()->gallery();
  }

  public function customer() {
    return Selection::where('invoice_id', 'like', '%' . $this->id .'%')->first()->customer();
  }

  public function user() {
    return Selection::where('invoice_id', 'like', '%' . $this->id .'%')->first()->gallery()->user();
  }
}
