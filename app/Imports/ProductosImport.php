<?php

namespace App\Imports;

use App\Producto;
use App\Cadena;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      //Producto::create(['sku_cic'=>'1000000','sku'=>'1059978','cadena_id'=>'6','nombre'=>'CAMA OPORTO OZONO KING','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA OPORTO OZONO KING','precio'=>'4499','UNIDAD'=>'SET']);

      $cadena = Cadena::where('nombre', trim($row[0]))->first();
      $sku_cic  = trim($row[1]);
      $sku = trim($row[2]);
      $nombre = trim($row[3]);
      $categoria = trim($row[4]);
      $marca = trim($row[5]);
      $descripcion = trim($row[6]);
      $precio   = trim($row[7]);
      $UNIDAD = trim($row[8]);

      $producto = new Producto([
        'cadena_id'=>$cadena->id,
        'sku_cic' =>$sku_cic,
        'sku' =>$sku,
        'nombre' =>$nombre,
        'categoria' =>$categoria,
        'marca' =>$marca,
        'descripcion' =>$descripcion,
        'precio' =>$precio,
        'UNIDAD' =>$UNIDAD,
      ]);
      dump($producto);
      $producto->save();
      //dump($tienda);
      return $producto;
    }
}
