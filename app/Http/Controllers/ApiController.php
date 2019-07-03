<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Resources\Promotor as ApiPromotor;
use App\Http\Resources\Business as ApiBusiness;
use Illuminate\Http\Request;
use App\Promotor;
use App\Business;
use App\Product;
use App\POPMaterial;
use App\MerchMaterial;
use App\ImpulsoRegistro;
use App\MercaderismoRegistro;
use App\MerchMaterialFlow;
use App\Tienda;
use Carbon\Carbon;
use Carbon\CarbonPeriod;


class ApiController extends Controller
{
  public function login(Request $request){
    $request_tag = request('requestType');

    if( $request_tag == 'check_user' ){
      $worker =  Promotor::where('numero_documento', request('document_number'))->get();
      if($worker->count() > 0){
        return response()->json([
          'REQUEST_TAG' => $request_tag,
          'status' => 'ok',
          'user_detail' => new ApiPromotor($worker->first())
        ]);
      }
      else{
        return response()->json([
          'REQUEST_TAG' => $request_tag,
          'status' => 'error',
          'message' => 'User not found'
        ]);
      }
    }
  }


  public function tiendas(){
    $tiendas = Tienda::all();
    return $tiendas;
  }


  public function products(){
    $products = Product::all()->where('segmento_x_marca','Rintisa')->groupBy(['categoria','marca','nombre']);
    return $products;
  }

  public function productsCompetencia(){
    $products = Product::all()->where('segmento_x_marca','Competencia')->groupBy(['categoria','marca','nombre']);
    return $products;
  }

  public function popMaterials(){
    $materials = POPMaterial::all()->groupBy(['marca']);
    return $materials;
  }

  public function merchMaterials(){
    $worker = Worker::find(request('worker_id'));
    $business = Business::find(request('business_id'));

    $merchMaterials = MerchMaterial::all()->where('ciudad', $business->ciudad)->groupBy(['marca']);


    return $merchMaterials;
  }

  public function saveCanje(){

    $array_impulsos = json_decode(request('impulsos'), true);
    $i=0;

    $array_impulsos = is_array($array_impulsos) ? $array_impulsos : array($array_impulsos);


    if(request('REQUEST_TAG') == 'IMPULSO_CANJES'){
      foreach($array_impulsos as $impuls) {
        $impulso = new ImpulsoRegistro();
        $impulso->user_id = request('worker_id');
        $impulso->business_id = request('business_id');
        $impulso->is_canje = $impuls['is_canje'];
        $impulso->merch = $impuls['merch'];
        $impulso->q_merch = $impuls['q_merch'];
        $impulso->fecha_gestion = $impuls['fecha_gestion'];
        $impulso->turno=$impuls['turno'];
        $impulso->save();
        $i++;
      }
    }

    if(request('REQUEST_TAG') == 'IMPULSO_VENTAS'){
      foreach($array_impulsos as $impuls) {
        $impulso = new ImpulsoRegistro();
        $impulso->user_id = request('worker_id');
        $impulso->business_id = request('business_id');
        $impulso->is_canje = $impuls['is_canje'];
        $impulso->producto = $impuls['producto'];
        $impulso->q_producto = $impuls['q_producto'];
        $impulso->fecha_gestion = $impuls['fecha_gestion'];
        $impulso->turno="Manana";
        $impulso->save();
        $i++;
      }
    }


    if($i == count($array_impulsos)){
      return response()->json([
        'status' => 'ok',
        'message' => 'Registro exitoso'
      ]);
    }
    else{
      return response()->json([
        'status' => 'error',
        'message' => 'Ocurrio un error al guardar la informacion'
      ]);
    }
  }

  public function saveMercaderismo(){
    $mercaderismo = new MercaderismoRegistro();
    $mercaderismo->user_id = request('worker_id');
    $mercaderismo->business_id = request('business_id');
    $mercaderismo->product_id = request('product_id');
    $mercaderismo->product_price = request('product_price');

    $mercaderismo->save();
    return response()->json([
      'status' => 'ok',
      'message' => 'Registro exitoso'
    ]);
  }

  public function savePOP(){

  }

  public function saveStockMerch(){

    $array_stocks = json_decode(request('stocks'), true);
    $i=0;
    foreach($array_stocks as $stock) {
      $merchMaterialStock = new MerchMaterialFlow();
      $merchMaterialStock->worker_id = request('worker_id');
      $merchMaterialStock->business_id = request('business_id');

      $merchMaterialStock->merch_material_id = $stock['merch_material_id'];
      $merchMaterialStock->merch_material_q = $stock['merch_material_q'];
      $merchMaterialStock->label = $stock['label'];

      $merchMaterialStock->save();
      $i++;
    }

    if($i == count($array_stocks)){
      return response()->json([
        'status' => 'ok',
        'message' => 'Registro exitoso'
      ]);
    }
    else{
      return response()->json([
        'status' => 'error',
        'message' => 'Ocurrio un error al guardar la informacion'
      ]);
    }

  }

  public function getStockByLabel(){

    $hoy = Carbon::today()->toDateTimeString();
    $results = MerchMaterialFlow::selectRaw('merch_material_id, sum(merch_material_q) as conteo, merch_materials.descripcion')
      ->where('worker_id', request('worker_id'))
      ->where('business_id', request('business_id'))
      ->where('label', request('label'))
      ->where('merch_material_flows.created_at', '>', $hoy)->groupBy('merch_material_id')
      ->join('merch_materials', 'merch_material_flows.merch_material_id', '=', 'merch_materials.id')
      ->get();
    return $results;
  }

  public function removeStock(){
    $hoy = Carbon::today()->toDateTimeString();
    $results = MerchMaterialFlow::selectRaw('merch_material_id, sum(merch_material_q) as conteo')
      ->where('worker_id', request('worker_id'))
      ->where('business_id', request('business_id'))
      ->where('label', request('label'))
      ->where('created_at', '>', $hoy)->groupBy('merch_material_id')->get();
    return $results;
  }

  public function baseMercaderismo(){

    #$baseTotal = DB::select(DB::raw('select businesses.codigo as codigo_negocio, products.codigo as codigo_producto from businesses cross join products on businesses.id > 796'));
    $period = CarbonPeriod::create('2019-04-18', Carbon::today());
    $dataMercaderismo = array();

    foreach ($period as $date) {

      $registrosNegocio = MercaderismoRegistro::select('business_id')->whereBetween('created_at', [Carbon::parse($date), Carbon::parse($date)->addDays(1)])
                                                ->orderBy('created_at', 'asc')->distinct('business_id')->get();

      $fecha = $date->format('Y-m-d');
      dump($fecha);
      dump($registrosNegocio);
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


  }

}
