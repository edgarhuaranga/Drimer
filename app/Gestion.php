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

    public function fecha(){
      return $this->created_at->format('d-m-Y');
    }

    public function hora(){
      return $this->created_at->format('H:i:s');
    }

    public function fechaHora(){
      return $this->created_at->format('d/m/Y H:i');
    }

    public function supervisor(){
      return Promotor::where('tienda_id', $this->id)->where('rol', 'Supervisor')->last();
    }


}
