<?php

namespace App;
use App\Tienda;
use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    public function tienda(){
      return Tienda::find($this->tienda_id);
    }

    public function producto(){
      return Producto::find($this->producto_id);
    }
}
