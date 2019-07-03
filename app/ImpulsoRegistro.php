<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Worker;
use App\Business;
use App\Product;

class ImpulsoRegistro extends Model
{
    public function worker(){
      $worker = Worker::find($this->user_id);
      //return $this->hasOne('App\Worker', 'id', 'user_id');
      return $worker;
    }

    public function business(){
      $business = Business::find($this->business_id);
      return $business;
    }

    public function productoSeco(){
      $producto = Product::where('nombre', $this->producto)->where('categoria', 'Seco')->first();
      return $producto;
    }

    public function productoHumedo(){
      $producto = Product::where('nombre', $this->producto)->where('categoria', 'Humedo')->first();
      return $producto;
    }

    public function productoBiscuit(){
      $producto = Product::where('nombre', $this->producto)->where('categoria', 'Biscuit')->first();
      return $producto;
    }

    public function productoHigiene(){
      $producto = Product::where('nombre', $this->producto)->where('categoria', 'Cuidado E Higiene')->first();
      return $producto;
    }

    public function canje(){
      $canje = MerchMaterial::where('descripcion', $this->merch)->first();
      return $canje;
    }

    public function fecha(){
      return $this->created_at->format('d-m-Y');
    }
}
