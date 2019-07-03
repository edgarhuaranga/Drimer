<?php

use Illuminate\Database\Seeder;
use App\Cadena;
use App\User;
use App\Tienda;
use Faker\Factory;
use App\Producto;

class CadenasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Edgar Huaranga',
            'email' => 'edhu1227@gmail.com',
            'password' => Hash::make('huaranga14'),
        ]);

        Cadena::create(['nombre'=>'Saga']);
        Cadena::create(['nombre'=>'Ripley']);
        Cadena::create(['nombre'=>'Paris']);
        Cadena::create(['nombre'=>'Tottus']);
        Cadena::create(['nombre'=>'Stylos']);
        Cadena::create(['nombre'=>'Oeschle']);

        Tienda::create(['cadena_id'=>'6', 'nombre_sede'=>' PRIMAVERA','direccion'=>'AV.AVIACION ESQ. CON PRIMAVERA S/N','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'6', 'nombre_sede'=>' CENTRO CÍVICO','direccion'=>'AV. INCA GARCILASO DE LA VEGA 1337','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'6', 'nombre_sede'=>' SALAVERRY','direccion'=>'AV.FELIPE SANTIAGO SALAVERRY CDRA.24 ','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'6', 'nombre_sede'=>' JIRÓN DE LA UNIÓN','direccion'=>'JIRÓN DE LA UNIÓN 600','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'6', 'nombre_sede'=>' JOCKEY PLAZA','direccion'=>'AV. JAVIER PRADO ESTE 4200 ','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'6', 'nombre_sede'=>' PLAZA LIMA NORTE','direccion'=>'AV.ALFREDO MENDIOLA 1400','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'6', 'nombre_sede'=>' SAN BORJA','direccion'=>'JR. VITTORE SCARPAZZA C. 241 ','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'6', 'nombre_sede'=>' MIRAFLORES','direccion'=>'PJE. LOS PINOS 140 ','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'6', 'nombre_sede'=>'MALL SUR','direccion'=>'AV LOS LIRIOS 301 ','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'6', 'nombre_sede'=>'LA CURVA','direccion'=>'CALLE 1RO DE MAYO S/N PUEBLO JOVEN ','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'1', 'nombre_sede'=>' SALAVERRY','direccion'=>'AV. GRAL. SALAVERRY 2370','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'1', 'nombre_sede'=>' JOCKEY PLAZA','direccion'=>'AV. JAVIER PRADO ESTE 4200','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'1', 'nombre_sede'=>' MIRAFLORES','direccion'=>'AV. AREQUIPA 5280','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'1', 'nombre_sede'=>' SAN ISIDRO','direccion'=>'AV. PASEO DE LA REPÚBLICA 3220','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'1', 'nombre_sede'=>' CENTRO CÍVICO','direccion'=>'AV INCA GARCILASO DE LA VEGA 1337','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'1', 'nombre_sede'=>' SAN MIGUEL','direccion'=>'AV. DE LA MARINA 2100','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'1', 'nombre_sede'=>' MEGAPLAZA','direccion'=>'AV INDUSTRIAL 3515','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'1', 'nombre_sede'=>' SANTA ANITA','direccion'=>'CARR. CENTRAL 111','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'1', 'nombre_sede'=>' LIMA NORTE','direccion'=>'CENTRO COMERCIAL PLAZA NORTE, AV. TOMAS VALLE','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'1', 'nombre_sede'=>' MALL DEL SUR','direccion'=>'AV LOS LIRIOS 301 ','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'1', 'nombre_sede'=>' ANGAMOS','direccion'=>'AV. ANGAMOS 1803','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'1', 'nombre_sede'=>'BELLAVISTA','direccion'=>'AV. OSCAR R. BENAVIDES 3866','ubigeo'=>'150101']);
        Tienda::create(['cadena_id'=>'1', 'nombre_sede'=>' JIRÓN DE LA UNIÓN','direccion'=>'JIRÓN DE LA UNIÓN 517','ubigeo'=>'150101']);


        



        $faker = Factory::create();

        for ($i = 1; $i <= 43; $i++) {
          Producto::create([
            'sku_cic'=>$faker->ean8,
            'sku'=>$faker->ean8,
            'cadena_id'=>$faker->numberBetween($min = 1, $max = App\Cadena::all()->count()),
            'categoria'=>$faker->word,
            'marca'=>$faker->word,
            'nombre'=>$faker->sentence($nbWords = 3, $variableNbWords = true),
            'descripcion'=>$faker->sentence($nbWords = 10, $variableNbWords = true),
            'precio'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 200.0),
            'UNIDAD'=>$faker->randomLetter
          ]);
        }
    }
}
