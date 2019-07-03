<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Product::create(['segmento_x_formula'=>'Premium','segmento_x_marca'=>'Rintisa','categoria'=>'CAMA AMERICANA SIMMONS','marca'=>'BEAUTYREST','codigo'=>'RN0001','nombre'=>'COLCHON POCKET SIMMONS BEAUTYREST SILVER PT 2 PLAZAS','peso'=>'1 PLZ','precio_sugerido'=>'8.5','condicion'=>'Cond001']);
      Product::create(['segmento_x_formula'=>'Premium','segmento_x_marca'=>'Rintisa','categoria'=>'CAMA AMERICANA SIMMONS','marca'=>'BEAUTYREST','codigo'=>'RN0002','nombre'=>'COLCHON POCKET SIMMONS BEAUTYREST SILVER PT QUEEN ','peso'=>'3PLZ','precio_sugerido'=>'23','condicion'=>'Cond001']);
      Product::create(['segmento_x_formula'=>'Premium','segmento_x_marca'=>'Rintisa','categoria'=>'CAMA AMERICANA SIMMONS','marca'=>'BEAUTYREST','codigo'=>'RN0003','nombre'=>'COLCHON POCKET SIMMONS BEAUTYREST SILVER PT KING','peso'=>'8PLZ','precio_sugerido'=>'55','condicion'=>'Cond001']);
      Product::create(['segmento_x_formula'=>'Premium','segmento_x_marca'=>'Rintisa','categoria'=>'CAMA AMERICANA SIMMONS','marca'=>'BEAUTYREST','codigo'=>'RN0004','nombre'=>'CAMA AMERICANA SIMMONS BEAUTYREST SILVER PT 2 PLAZAS','peso'=>'15PLZ','precio_sugerido'=>'93','condicion'=>'Cond001']);
      Product::create(['segmento_x_formula'=>'Premium','segmento_x_marca'=>'Rintisa','categoria'=>'CAMA AMERICANA SIMMONS','marca'=>'BEAUTYREST','codigo'=>'RN0005','nombre'=>'CAMA AMERICANA  SIMMONS BEAUTYREST SILvER PT QUEEN','peso'=>'22PLZ','precio_sugerido'=>'136.4','condicion'=>'Cond001']);
      Product::create(['segmento_x_formula'=>'Premium','segmento_x_marca'=>'Rintisa','categoria'=>'CAMA AMERICANA SIMMONS','marca'=>'BEAUTYREST','codigo'=>'RNG001','nombre'=>'CAMA AMERICANA SIMMONS BEAUTYREST SILVER PT KING','peso'=>'Granel','precio_sugerido'=>'200.0','condicion'=>'Cond001']);
      Product::create(['segmento_x_formula'=>'Premium','segmento_x_marca'=>'Rintisa','categoria'=>'DORMITORIO ALFA GRIS','marca'=>'Ricocan','codigo'=>'RN0006','nombre'=>'Dormitorio Alfa Gris Ozono','peso'=>'0.4PLZ','precio_sugerido'=>'300','condicion'=>'Cond002']);
      Product::create(['segmento_x_formula'=>'Premium','segmento_x_marca'=>'Rintisa','categoria'=>'DORMITORIO ALFA GRIS','marca'=>'Ricocan','codigo'=>'RN0007','nombre'=>'Dormitorio Alfa Gris Ozono ','peso'=>'2.0Plz','precio_sugerido'=>'8.5','condicion'=>'Cond002']);
      Product::create(['segmento_x_formula'=>'Premium','segmento_x_marca'=>'Rintisa','categoria'=>'DORMITORIO ALFA GRIS','marca'=>'Ricocan','codigo'=>'RN0008','nombre'=>'Dormitorio Alfa Gris Ozono ','peso'=>'1.5PLZ','precio_sugerido'=>'23','condicion'=>'Cond002']);
      Product::create(['segmento_x_formula'=>'Premium','segmento_x_marca'=>'Rintisa','categoria'=>'DORMITORIO ALFA GRIS','marca'=>'Ricocan','codigo'=>'RN0009','nombre'=>'Dormitorio Alfa Gris Ozono ','peso'=>'Queen','precio_sugerido'=>'55','condicion'=>'Cond002']);
      Product::create(['segmento_x_formula'=>'Premium','segmento_x_marca'=>'Rintisa','categoria'=>'DORMITORIO ALFA GRIS','marca'=>'Ricocan','codigo'=>'RN0010','nombre'=>'Dormitorio Alfa Gris Gravity','peso'=>'1.5 PLZ','precio_sugerido'=>'93','condicion'=>'Cond002']);
    }
}
