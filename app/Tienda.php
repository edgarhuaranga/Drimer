<?php

namespace App;

use App\Cadena;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    //
    public function cadena(){
      return Cadena::find($this->cadena_id);
    }
}
