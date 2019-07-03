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

        Cadena::create(['nombre'=>'No asignado']);
        Cadena::create(['nombre'=>'Saga Fallabella']);
        Cadena::create(['nombre'=>'Ripley']);
        Cadena::create(['nombre'=>'Paris']);
        Cadena::create(['nombre'=>'Oeschle']);

        User::create([
            'name' => 'Edgar Huaranga',
            'email' => 'edhu1227@gmail.com',
            'password' => Hash::make('huaranga14'),
        ]);

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
