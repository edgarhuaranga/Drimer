<?php

namespace App\Http\Resources;

use App\Promotor;
use App\Tienda;
use App\Producto;

use Illuminate\Http\Resources\Json\JsonResource;

class Gestion extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      $promotor = Promotor::find($this->promotor_id);
      $tienda = Tienda::find($this->tienda_id);
      $producto = Producto::find($this->producto_id);


      return [
        'usuario' => $promotor->nombre_completo,
        'tienda' => $tienda->cadena()->nombre."-".$tienda->nombre_sede,
        'producto' => $producto->nombre,
        'cantidad' => $this->cantidad,
        'monto_unitario' => $this->monto_venta,
        'boleta' => $this->boleta,
      ];
    }
}
