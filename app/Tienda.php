<?php

namespace App;

use App\Cadena;
use App\Gestion;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $fillable = [
      'cadena_id', 'nombre_sede', 'direccion', 'departamento','provincia', 'distrito'
    ];
    //
    public function cadena(){
      return Cadena::find($this->cadena_id);
    }

    public function resumen(){
      $hoy = Gestion::selectRaw('boleta, count(id) as items, sum(monto_venta*cantidad) as monto_venta')
                      ->where('tienda_id', $this->id)
                      ->where('created_at', '>',Carbon::today())
                      ->groupBy('boleta')->get();

      $ayer = Gestion::selectRaw('boleta, count(id) as items, sum(monto_venta*cantidad) as monto_venta')
                      ->where('tienda_id', $this->id)
                      ->whereBetween('created_at', [Carbon::yesterday(), Carbon::today()])
                      ->groupBy('boleta')->get();

      $semana = Gestion::selectRaw('boleta, count(id) as items, sum(monto_venta*cantidad) as monto_venta')
                      ->where('tienda_id', $this->id)
                      ->whereBetween('created_at',[Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])
                      ->groupBy('boleta')->get();

      $mes = Gestion::selectRaw('boleta, count(id) as items, sum(monto_venta*cantidad) as monto_venta')
                      ->where('tienda_id', $this->id)
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
