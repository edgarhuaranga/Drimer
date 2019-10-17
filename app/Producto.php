<?php

namespace App;
use App\Cadena;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $fillable = [
    'cadena_id',
    'sku_cic',
    'sku',
    'nombre',
    'categoria',
    'marca',
    'descripcion',
    'precio',
    'UNIDAD',
  ];

    public function cadena(){
      return Cadena::find($this->cadena_id);
    }
}
