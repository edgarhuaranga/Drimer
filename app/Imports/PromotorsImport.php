<?php

namespace App\Imports;

use App\Promotor;
use App\Cadena;
use App\Tienda;
use Maatwebsite\Excel\Concerns\ToModel;
use DateTime;
use Carbon\Carbon;

class PromotorsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(count($row) == 5 ){
          $descripcion_tienda = explode("-",$row[0]);
          if(count($descripcion_tienda) == 2){
            $cadena = Cadena::where('nombre', trim($descripcion_tienda[0]))->first();
            $tienda = Tienda::where('cadena_id', $cadena->id)->where('nombre_sede', trim($descripcion_tienda[1]))->first();
            #dump($descripcion_tienda);
            #dump($row[3]);
            #dump(date("Y-m-d", ((int)$row[3]))*24*60*60);
            #$fechainicio = date("Y-m-d", "((int)$row[3])*24*60*60");
            $fechainicio = (new Carbon(date("Y-m-d", ((int)$row[3])*24*60*60)))->subYears(70);
            #dump($fechainicio);
            if(is_null($tienda)){
              dump($descripcion_tienda);
            }
            $promotor = new Promotor([
                'tienda_id'=>$tienda->id,
                'nombre_completo'=>$row[1],
                'numero_documento'=>$row[2],
                'fecha_ingreso'=>$fechainicio,
                'rol'=>$row[4],
            ]);
            $promotor->save();
            return $promotor;
          }

        }
    }
}
