<?php

namespace App;
use App\Cadena;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function cadena(){
      return Cadena::find($this->cadena_id);
    }
}
