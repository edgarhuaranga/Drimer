<?php

use Illuminate\Database\Seeder;
use App\Cadena;
use App\User;
use App\Tienda;
use Faker\Factory;
use App\Producto;

class SextaCargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      Tienda::create(['cadena_id'=>'1','nombre_sede'=>'ESPINAR','direccion'=>'AV. COMANDANTE ESPINAR 235','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'MIRAFLORES']);
      Tienda::create(['cadena_id'=>'1','nombre_sede'=>'JOCKEY PLAZA','direccion'=>'AV. JAVIER PRADO ESTE 4200 LOCAL 110','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'SANTIAGO DE SURCO']);
      Tienda::create(['cadena_id'=>'1','nombre_sede'=>'PRIMAVERA','direccion'=>'AV. PRIMAVERA 1750','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'SANTIAGO DE SURCO']);
      Tienda::create(['cadena_id'=>'6','nombre_sede'=>'ICA','direccion'=>'AV. LOS MAESTROS 206 C.C. EL QUINDE','departamento'=>'ICA','provincia'=>'ICA','distrito'=>'ICA']);

    }
}
