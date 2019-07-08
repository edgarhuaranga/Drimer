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
        return Tienda::where('id',$this->tienda_id)->get();
      }
      elseif($this->rol == 'Promotor volante'){
        $cadena = $this->cadena();
        return Tienda::where('cadena_id', $cadena->id)->get();
      }
    }

    public function cadena(){
      $tienda = Tienda::find($this->tienda_id);
      return $tienda->cadena();
    }
}
