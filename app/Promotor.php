<?php

namespace App;
use App\Tienda;
use App\Cadena;
use Illuminate\Database\Eloquent\Model;

class Promotor extends Model
{
    public function tienda(){
      return Tienda::find($this->tienda_id);
    }

    public function tiendas(){
      if($this->rol == 'Promotor'){
        return $this->tienda();
      }
      elseif($this->rol == 'Promotor volante'){
        $cadena = $this->cadena();
        return Tienda::where('cadena_id', $cadena->id);
      }
    }

    public function cadena(){
      $tienda = Tienda::find($this->tienda_id);
      return $tienda->cadena();
    }
}
