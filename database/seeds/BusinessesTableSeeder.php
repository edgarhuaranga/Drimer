<?php

use Illuminate\Database\Seeder;
use App\Business;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Business::create(['codigo'=>'PDV0001','frecuencia_visita'=>'Quincenal','ciudad'=>'Saga','distribuidora'=>'Rintisa','nombre_comercial_mercado'=>'Mercado Productores','giro_negocio'=>'Mercado','tamanio_negocio'=>'Minorista/Mayorista','direccion_mercado'=>'','puesto'=>'Puesto 05','marca'=>'','nombre_comercial_puesto'=>'','contacto_puesto'=>'Doris Obregon','impulso'=>'','distrito'=>'','referencia'=>'','nombre_vendedor'=>'Jaime Rios','telefono_vendedor'=>'940877985','telefono_contacto'=>'']);
      Business::create(['codigo'=>'PDV0002','frecuencia_visita'=>'Quincenal','ciudad'=>'Ripley','distribuidora'=>'Rintisa','nombre_comercial_mercado'=>'Mercado Palomar','giro_negocio'=>'Mercado','tamanio_negocio'=>'Minorista/Mayorista','direccion_mercado'=>'','puesto'=>'Puesto 07','marca'=>'','nombre_comercial_puesto'=>'','contacto_puesto'=>'Norma Porcel','impulso'=>'','distrito'=>'','referencia'=>'','nombre_vendedor'=>'Jaime Rios','telefono_vendedor'=>'940877985','telefono_contacto'=>'']);
      Business::create(['codigo'=>'PDV0003','frecuencia_visita'=>'Quincenal','ciudad'=>'Paris','distribuidora'=>'Rintisa','nombre_comercial_mercado'=>'Mercado Productores','giro_negocio'=>'Mercado','tamanio_negocio'=>'Minorista/Mayorista','direccion_mercado'=>'','puesto'=>'Puesto 18','marca'=>'','nombre_comercial_puesto'=>'','contacto_puesto'=>'Sebastiana Puma Quispe','impulso'=>'','distrito'=>'','referencia'=>'','nombre_vendedor'=>'Jaime Rios','telefono_vendedor'=>'940877985','telefono_contacto'=>'']);
      Business::create(['codigo'=>'PDV0004','frecuencia_visita'=>'Quincenal','ciudad'=>'Saga','distribuidora'=>'Rintisa','nombre_comercial_mercado'=>'Mercado Productores','giro_negocio'=>'Mercado','tamanio_negocio'=>'Minorista/Mayorista','direccion_mercado'=>'','puesto'=>'Puesto 24','marca'=>'','nombre_comercial_puesto'=>'','contacto_puesto'=>'Damiana Bellota Oviedo','impulso'=>'','distrito'=>'','referencia'=>'','nombre_vendedor'=>'Jaime Rios','telefono_vendedor'=>'940877985','telefono_contacto'=>'']);
      Business::create(['codigo'=>'PDV0005','frecuencia_visita'=>'Quincenal','ciudad'=>'Ripley','distribuidora'=>'Rintisa','nombre_comercial_mercado'=>'Mercado Productores','giro_negocio'=>'Mercado','tamanio_negocio'=>'Minorista/Mayorista','direccion_mercado'=>'','puesto'=>'Puesto 16','marca'=>'','nombre_comercial_puesto'=>'','contacto_puesto'=>'Hermila Vera Araoz','impulso'=>'','distrito'=>'','referencia'=>'','nombre_vendedor'=>'Jaime Rios','telefono_vendedor'=>'940877985','telefono_contacto'=>'']);
      Business::create(['codigo'=>'PDV0006','frecuencia_visita'=>'Quincenal','ciudad'=>'Ripley','distribuidora'=>'Rintisa','nombre_comercial_mercado'=>'Mercado Productores','giro_negocio'=>'Mercado','tamanio_negocio'=>'Minorista/Mayorista','direccion_mercado'=>'','puesto'=>'Puesto F 26','marca'=>'','nombre_comercial_puesto'=>'','contacto_puesto'=>'Fernando Sumire Cahuana','impulso'=>'','distrito'=>'','referencia'=>'','nombre_vendedor'=>'Jaime Rios','telefono_vendedor'=>'940877985','telefono_contacto'=>'']);
      Business::create(['codigo'=>'PDV0007','frecuencia_visita'=>'Quincenal','ciudad'=>'Paris','distribuidora'=>'Rintisa','nombre_comercial_mercado'=>'Mercado Rio Seco','giro_negocio'=>'Mercado','tamanio_negocio'=>'Minorista/Mayorista','direccion_mercado'=>'Av. Aviacion 35','puesto'=>'Puesto 12','marca'=>'','nombre_comercial_puesto'=>'','contacto_puesto'=>'Elzabeth Quesso Limache','impulso'=>'','distrito'=>'','referencia'=>'','nombre_vendedor'=>'Jesus Guzman','telefono_vendedor'=>'958535393','telefono_contacto'=>'']);

    }
}
