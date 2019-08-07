<?php

namespace App\Imports;

use App\Promotor;
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
        if(count($row) == 7 ){
          $promotor = new Promotor([
              'tienda_id'=>$row[0],
              'nombre_completo'=>$row[1],
              'numero_documento'=>$row[2],
              'fecha_ingreso'=>new Carbon($row[5]."-".$row[4]."-".$row[3]),
              'rol'=>$row[6],
          ]);
          $promotor->save();
          return $promotor;
        }
    }
}
