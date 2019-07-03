<?php

namespace App\Exports;

use DB;
use App\MercaderismoRegistro;
use App\Worker;
use App\Business;
use App\Product;
use App\POPMaterial;
use App\MerchMaterial;
use App\ImpulsoRegistro;
use App\MerchMaterialFlow;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class MercaderismoExport implements FromView
{
  public function view(): View
  {
      /*return view('mercaderismo.excel', [

          'datosMercaderismo' => MercaderismoRegistro::all()
      ]);*/
      set_time_limit(3000);
      $baseTotal = DB::select(DB::raw('select businesses.codigo as codigo_negocio, products.codigo as codigo_producto from businesses cross join products on businesses.id > 1208 and businesses.ciudad= "Chiclayo"'));
      $period = CarbonPeriod::create('2019-04-18', Carbon::today());
      #$period = CarbonPeriod::create('2019-04-18', '2019-04-20');
      $dataMercaderismo = array();

      foreach ($baseTotal as $fila) {
        #echo($fila->codigo_negocio."===".$fila->codigo_producto."\t");

        foreach ($period as $date) {
          $ids_negocio = Business::select('id')->where('codigo', $fila->codigo_negocio)->get();
          $ids_producto = Product::select('id')->where('codigo', $fila->codigo_producto)->get();
          $registrosNegocio = MercaderismoRegistro::whereIn('business_id', $ids_negocio)
                                                    ->whereIn('product_id',$ids_producto)
                                                    ->whereBetween('created_at', [Carbon::parse($date), Carbon::parse($date)->addDays(1)])
                                                    ->orderBy('created_at', 'asc')->get();

          $fecha = $date->format('Y-m-d');
          if ($registrosNegocio->count() > 0) {
            #echo($fila->codigo_negocio."\t".$fila->codigo_producto."\t".$registrosNegocio->first()->product_price);
            $fila->$fecha = $registrosNegocio->first()->product_price;
            #echo($registrosNegocio->first()->product_price);
            #echo("\t");
          }
          else{
            $fila->$fecha= 0;
            #echo("0");
            #echo("\t");
          }
        }
        #echo("<br>");
        #dump($fila);
        array_push($dataMercaderismo, $fila);
      }

      return view('mercaderismo.excel2', [
            'datosMercaderismo' => $dataMercaderismo,
            'periodos' =>$period
        ]);



  }


}
