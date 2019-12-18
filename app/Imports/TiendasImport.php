<?php

namespace App\Imports;

use App\Tienda;
use App\Cadena;
use Maatwebsite\Excel\Concerns\ToModel;

class TiendasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        dump($row);

        $cadena = Cadena::where('nombre', trim($row[0]))->first();
        $nombre_sede = trim($row[1]);
        $direccion = trim($row[2]);
        $departamento = trim($row[3]);
        $provincia = trim($row[4]);
        $distrito = trim($row[5]);

        $tienda = new Tienda([
                'cadena_id'=>$cadena->id,
                'nombre_sede'=>$nombre_sede,
                'direccion'=>$direccion,
                'departamento'=>$departamento,
                'provincia'=>$provincia,
                'distrito'=>$distrito,
            ]);
        $tienda->save();
        //dump($tienda);
        return $tienda;

    }
}
