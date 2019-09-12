<?php

use Illuminate\Database\Seeder;
use App\Cadena;
use App\User;
use App\Tienda;
use Faker\Factory;
use App\Producto;

class CuartaCargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'SAN ISIDRO','direccion'=>'AV. PASEO DE LA REPÚBLICA 3220 URB JARDÍN','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'SAN ISIDRO']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'JOCKEY PLAZA','direccion'=>'AV. JAVIER PRADO ESTE 4200 ','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'SANTIAGO DE SURCO']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'MIRAFLORES','direccion'=>'AV. AREQUIPA 5280 ','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'MIRAFLORES']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'LIMA CENTRO ','direccion'=>'JR. DE LA UNIÓN 517 ','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'CERCADO DE LIMA ']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'SAN MIGUEL','direccion'=>'AV. LA MARINA 2100 - URB PANDO 1RA ETAPA','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'SAN MIGUEL']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'MEGAPLAZA','direccion'=>'AV. INDUSTRIAL 3515 - 3517','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'INDEPENDENCIA']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'BELLAVISTA ','direccion'=>'AV. MAQRISCAL ORCAR R. BENAVIDES 3866 TIENDA 2','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'CALLAO']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'ATOCONGO','direccion'=>'AV. CIRCUNVALACIÓN 1803 TIENDA ANCLA 2','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'SAN JUAN DE MIRAFLORES']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'ANGAMOS','direccion'=>'AV. ANGAMOS ESTE N° 1803 TIENDA ANCLA 2','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'SURQUILLO']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'SANTA ANITA','direccion'=>'AV. CARRETERA CENTRAL N° 111 TIENDA TD-1','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'SANTA ANITA']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'LIMA NORTE ','direccion'=>'AV. ALFREDO MENDIOLA 1400 ANCLA 6 ','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'INDEPENDENCIA']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'SALAVERRY','direccion'=>'AV. GENERAL FELIPE SALAVERRY CDRA. 23 ESQ- AV. PUNTA','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'JESUS MARIA']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'CENTRO CÍVICO','direccion'=>'AV. GARCILAZO DE LA VEGA 1337 CON AV. ESPAÑA ','departamento'=>'LIMA','provincia'=>'LIMA','distrito'=>'CERCADO DE LIMA ']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'TRUJILLO MALL','direccion'=>'AV. MANSICHE S/N CASERÍO CORTIJO ','departamento'=>'LA LIBERTAD','provincia'=>'TRUJILLO','distrito'=>'TRUJILLO']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'CAJAMARCA MALL','direccion'=>'JR. SOR MANUELA GIL N° 151 URB. SAN CARLOS ','departamento'=>'CAJAMARCA','provincia'=>'CAJAMARCA','distrito'=>'CAJAMARCA']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'AREQUIPA','direccion'=>'AV. EJERCITO 793 ','departamento'=>'AREQUIPA','provincia'=>'AREQUIPA','distrito'=>'CAYMA']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'PORONGOCHE','direccion'=>'AV. PORONGOCHE 502 MALL AVENTURA PLAZA','departamento'=>'AREQUIPA','provincia'=>'AREQUIPA','distrito'=>'PAUCARPATA']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'ICA','direccion'=>'AV. LOS MAESTROS 206 CENTRO COMERCIAL EL QUINDE','departamento'=>'ICA','provincia'=>'ICA ','distrito'=>'ICA']);
      Tienda::create(['cadena_id'=>'8','nombre_sede'=>'CHICLAYO','direccion'=>'CALLE MIGUEL DE CERVANTES 300 PJ DIEGO FERRE ','departamento'=>'LAMBAYEQUE','provincia'=>'CHICLAYO','distrito'=>'CHICLAYO']);
      Tienda::create(['cadena_id'=>'3','nombre_sede'=>'CHICLAYO','direccion'=>'CALLE MIGUEL DE CERVANTES 300 PJ DIEGO FERRE ','departamento'=>'LAMBAYEQUE','provincia'=>'CHICLAYO','distrito'=>'CHICLAYO']);
      Tienda::create(['cadena_id'=>'7','nombre_sede'=>'CHICLAYO','direccion'=>'AV. SAN JOSE 787','departamento'=>'LAMBAYEQUE','provincia'=>'CHICLAYO','distrito'=>'CHICLAYO']);
      Tienda::create(['cadena_id'=>'5','nombre_sede'=>'CHICLAYO','direccion'=>'AV. VÍCTOR RAUL HAYA DE LA TORRE 150 URB. SAN EDUARDO','departamento'=>'LAMBAYEQUE','provincia'=>'CHICLAYO','distrito'=>'CHICLAYO']);


    }
}
