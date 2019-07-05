<?php

namespace App;
use App\Tienda;
use App\Promotor;
use App\Producto;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    public function tienda(){
      return Tienda::find($this->tienda_id);
    }

    public function producto(){
      return Producto::find($this->producto_id);
    }

    public function promotor(){
      return Promotor::find($this->promotor_id);
    }
}
