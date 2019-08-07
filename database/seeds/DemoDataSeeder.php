<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use App\Tienda;
use App\Promotor;

class DemoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Factory::create();

      $tiendas = Tienda::all();
      $numeroPromotores = $faker->numberBetween(1, $tiendas->count()-1);


      foreach($tiendas as $tienda) {
        App\Promotor::create([
          'tienda_id'=>$tienda->id,
          'nombre_completo'=>$faker->name('male'),
          'numero_documento'=>$faker->ean8,
          'fecha_ingreso'=>$faker->dateTimeThisDecade('now', null),
          'rol'=>'Promotor',
        ]);
      }

      $promotores = Promotor::all();


      foreach($promotores as $promotor){
        $productos = $promotor->productos();

        for ($i = 1; $i <= 400; $i++) {
          App\Gestion::create([
            'promotor_id'=>$promotor->id,
            'tienda_id'=>$promotor->tienda()->id,
            'producto_id'=>$faker->numberBetween(1, $productos->count()-1),
            'cantidad'=>$faker->randomDigit,
            'monto_venta'=>$faker->randomFloat(2, 500, 2000),
            'boleta'=>$faker->ean13,
            'origen'=>'web',
            'created_at'=>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
          ]);
        }

        for ($i = 1; $i <= 100; $i++) {
          App\Gestion::create([
            'promotor_id'=>$promotor->id,
            'tienda_id'=>$promotor->tienda()->id,
            'producto_id'=>$faker->numberBetween(1, $productos->count()-1),
            'cantidad'=>$faker->randomDigit,
            'monto_venta'=>$faker->randomFloat(2, 500, 2000),
            'boleta'=>$faker->ean13,
            'origen'=>'tienda',
            'created_at'=>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
          ]);
        }

      }

    }
}
