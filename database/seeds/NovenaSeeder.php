<?php

use Illuminate\Database\Seeder;
use App\Cadena;
use App\User;
use App\Tienda;
use Faker\Factory;
use App\Producto;

class NovenaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Producto::create(['sku_cic'=>'1000000','sku'=>'1059978','cadena_id'=>'6','nombre'=>'CAMA OPORTO OZONO KING','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA OPORTO OZONO KING','precio'=>'4499','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1059979','cadena_id'=>'6','nombre'=>'CAMA OPORTO GRAVITY KING','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA OPORTO GRAVITY KING','precio'=>'4699','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1059980','cadena_id'=>'6','nombre'=>'CAMA CANTABRIA OZONO KING','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA CANTABRIA OZONO KING','precio'=>'4499','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1059981','cadena_id'=>'6','nombre'=>'CAMA CANTABRIA GRAVITY KING','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA CANTABRIA GRAVITY KING','precio'=>'4699','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1059982','cadena_id'=>'6','nombre'=>'CAMA SOFIA OZONO KING','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA SOFIA OZONO KING','precio'=>'4499','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1059983','cadena_id'=>'6','nombre'=>'CAMA SOFIA GRAVITY KING','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA SOFIA GRAVITY KING','precio'=>'4699','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1059984','cadena_id'=>'6','nombre'=>'CAMA KAELA OZONO KING','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA KAELA OZONO KING','precio'=>'4499','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1059985','cadena_id'=>'6','nombre'=>'CAMA KAELA GRAVITY KING','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA KAELA GRAVITY KING','precio'=>'4699','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060672','cadena_id'=>'6','nombre'=>'CABECERA TELA ALFA GRIS ','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CABECERA TELA ALFA GRIS ','precio'=>'399','UNIDAD'=>'UND']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060793','cadena_id'=>'6','nombre'=>'COLCHON POCKET VISCO 1.5 PLAZA ALM+PRO','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'COLCHON POCKET VISCO 1.5 PLAZA ALM+PRO','precio'=>'1099','UNIDAD'=>'UND']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060794','cadena_id'=>'6','nombre'=>'COLCHON POCKET VISCO 2 PLAZAS ALM+PRO','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'COLCHON POCKET VISCO 2 PLAZAS ALM+PRO','precio'=>'1349','UNIDAD'=>'UND']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060795','cadena_id'=>'6','nombre'=>'COLCHON POCKET VISCO QUEEN ALM+PRO','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'COLCHON POCKET VISCO QUEEN ALM+PRO','precio'=>'1799','UNIDAD'=>'UND']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060796','cadena_id'=>'6','nombre'=>'COLCHON POCKET VISCO KING ALM+PRO','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'COLCHON POCKET VISCO KING ALM+PRO','precio'=>'2199','UNIDAD'=>'UND']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060797','cadena_id'=>'6','nombre'=>'CAMA AMERICANA POCKET VISCO 1.5 PLAZ A+P','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA AMERICANA POCKET VISCO 1.5 PLAZ A+P','precio'=>'1749','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060798','cadena_id'=>'6','nombre'=>'CAMA AMERICANA POCKET VISCO 2 PLAZA A+P','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA AMERICANA POCKET VISCO 2 PLAZA A+P','precio'=>'2029','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060799','cadena_id'=>'6','nombre'=>'CAMA AMERICANA POCKET  VISCO QUEEN A+P','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA AMERICANA POCKET  VISCO QUEEN A+P','precio'=>'2699','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060800','cadena_id'=>'6','nombre'=>'CAMA AMERICANA POCKET VISCO KING A+P','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA AMERICANA POCKET VISCO KING A+P','precio'=>'3449','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060801','cadena_id'=>'6','nombre'=>'CAMA GOLD POCKET VISCO 1.5 PLAZA A+P','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA GOLD POCKET VISCO 1.5 PLAZA A+P','precio'=>'1749','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060802','cadena_id'=>'6','nombre'=>'CAMA GOLD POCKET  VISCO 2 PLAZAS A+P','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA GOLD POCKET  VISCO 2 PLAZAS A+P','precio'=>'2029','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060803','cadena_id'=>'6','nombre'=>'CAMA GOLD POCKET VISCO QUEEN A+P','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA GOLD POCKET VISCO QUEEN A+P','precio'=>'2699','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060804','cadena_id'=>'6','nombre'=>'CAMA GOLD POCKET  VISCO KING A+P','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'CAMA GOLD POCKET  VISCO KING A+P','precio'=>'3449','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060805','cadena_id'=>'6','nombre'=>'DORMITORIO NICOLE OXYGEN 1.5 PLZ A+P','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'DORMITORIO NICOLE OXYGEN 1.5 PLZ A+P','precio'=>'2099','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060806','cadena_id'=>'6','nombre'=>'DORMITORIO NICOLE OXYGEN 2.0 PLZ A+P','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'DORMITORIO NICOLE OXYGEN 2.0 PLZ A+P','precio'=>'2629','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1060807','cadena_id'=>'6','nombre'=>'DORMITORIO NICOLE OXYGEN QUEEN A+P','categoria'=>'COLCHONES','marca'=>'TECHNODREAM','descripcion'=>'DORMITORIO NICOLE OXYGEN QUEEN A+P','precio'=>'2949','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1061411','cadena_id'=>'6','nombre'=>'CABECERA VALENCIA MARRON 2 PLZ','categoria'=>'COLCHONES','marca'=>'DRIMER','descripcion'=>'CABECERA VALENCIA MARRON 2 PLZ','precio'=>'799','UNIDAD'=>'UND']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1061412','cadena_id'=>'6','nombre'=>'CABECERA VALENCIA MARRON QUEEN','categoria'=>'COLCHONES','marca'=>'DRIMER','descripcion'=>'CABECERA VALENCIA MARRON QUEEN','precio'=>'929','UNIDAD'=>'UND']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1061413','cadena_id'=>'6','nombre'=>'CABECERA VALENCIA MARRON KING','categoria'=>'COLCHONES','marca'=>'DRIMER','descripcion'=>'CABECERA VALENCIA MARRON KING','precio'=>'1099','UNIDAD'=>'UND']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1314008801','cadena_id'=>'5','nombre'=>'DORMITORIO RAYAS GALAXY 1.5 PLZ','categoria'=>'COLCHONES','marca'=>'DRIMER','descripcion'=>'DORMITORIO RAYAS GALAXY 1.5 PLZ','precio'=>'1299','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1315008801','cadena_id'=>'5','nombre'=>'DORMITORIO RAYAS GALAXY 2 PLZ','categoria'=>'COLCHONES','marca'=>'DRIMER','descripcion'=>'DORMITORIO RAYAS GALAXY 2 PLZ','precio'=>'1499','UNIDAD'=>'SET']);
      Producto::create(['sku_cic'=>'1000000','sku'=>'1316008801','cadena_id'=>'5','nombre'=>'DORMITORIO RAYAS GALAXY QUEEN','categoria'=>'COLCHONES','marca'=>'DRIMER','descripcion'=>'DORMITORIO RAYAS GALAXY QUEEN','precio'=>'1999','UNIDAD'=>'SET']);

    }
}
