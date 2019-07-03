<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MercaderismoRegistro extends Model
{
  public function worker(){
    $worker = Worker::find($this->user_id);
    //return $this->hasOne('App\Worker', 'id', 'user_id');
    return $worker;
  }

  public function business(){
    $business = Business::where('id', $this->business_id)->first();

    return $business;
  }

  public function product(){
    $producto = Product::find($this->product_id);
    return $producto;
  }

  public function fecha(){
    return $this->created_at->format('d-m-Y');
  }

}
