<?php

namespace App;
use App\Tienda;
use App\Cadena;
use App\Producto;
use App\Gestion;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Database\Eloquent\Model;

class Promotor extends Model
{
    protected $fillable = [
        'tienda_id', 'nombre_completo', 'numero_documento', 'fecha_ingreso','rol'
    ];

    public function tienda(){
      return Tienda::find($this->tienda_id);
    }

    public function tiendas(){
      if($this->rol == 'Promotor'){
        return Tienda::where('id',$this->tienda_id)->get();
      }
      elseif($this->rol == 'Promotor volante'){
        $cadena = $this->cadena();
        return Tienda::where('cadena_id', $cadena->id)->get();
      }
    }

    public function cadena(){
      $tienda = Tienda::find($this->tienda_id);
      return $tienda->cadena();
    }


    public function productos(){
      $cadena = $this->cadena();
      return Producto::where('cadena_id', $cadena->id)->get();
    }

    public function resumen(){

      $hoy = Gestion::selectRaw('boleta, count(id) as items, sum(monto_venta*cantidad) as monto_venta')
                      ->where('promotor_id', $this->id)
                      ->where('created_at', '>',Carbon::today())
                      ->groupBy('boleta')->get();

      $ayer = Gestion::selectRaw('boleta, count(id) as items, sum(monto_venta*cantidad) as monto_venta')
                      ->where('promotor_id', $this->id)
                      ->whereBetween('created_at', [Carbon::yesterday(), Carbon::today()])
                      ->groupBy('boleta')->get();

      $semana = Gestion::selectRaw('boleta, count(id) as items, sum(monto_venta*cantidad) as monto_venta')
                      ->where('promotor_id', $this->id)
                      ->whereBetween('created_at',[Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])
                      ->groupBy('boleta')->get();

      $mes = Gestion::selectRaw('boleta, count(id) as items, sum(monto_venta*cantidad) as monto_venta')
                      ->where('promotor_id', $this->id)
                      ->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()])
                      ->groupBy('boleta')->get();

      $resumen = array();
      $resumen['monto_hoy'] = $hoy->sum('monto_venta');
      $resumen['monto_ayer'] = $ayer->sum('monto_venta');
      $resumen['monto_semana'] = $semana->sum('monto_venta');
      $resumen['monto_mes'] = $mes->sum('monto_venta');

      $resumen['q_hoy'] = $hoy->count();
      $resumen['q_ayer'] = $ayer->count();
      $resumen['q_semana'] = $semana->count();
      $resumen['q_mes'] = $mes->count();

      return $resumen;
    }
}
