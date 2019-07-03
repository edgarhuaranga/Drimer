<?php

namespace App;
use App\Tienda;
use Illuminate\Database\Eloquent\Model;

class Promotor extends Model
{
    public function tienda(){
      return Tienda::find($this->tienda_id);
    }
}
