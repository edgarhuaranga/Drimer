<?php

namespace App\Http\Controllers;

use App\Gestion;
use App\Promotor;
use App\Exports\GestionVentasExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class GestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $ventas = Gestion::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()])->get();
        $promotores = Promotor::where('rol', '<>', 'supervisor')->get();
        $supervisores = Promotor::where('rol', 'Supervisor')->get();

        return view('gestion.index', compact('ventas', 'promotores', 'supervisores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $gestion = new Gestion;
      $gestion->tienda_id= request('tienda_id');
      $gestion->producto_id= request('producto_id');
      $gestion->cantidad= request('cantidad');
      $gestion->monto_venta= request('monto_venta');
      $gestion->comentarios= request('comentarios');

      $gestion->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function show(Gestion $gestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestion $gestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestion $gestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestion $gestion)
    {
        //
    }

    public function excel(){
      //return view('gestion.index');
      #dump(request('fecha_inicio'));
      #dump(request('fecha_fin'));
      $hoy = Carbon::now()->toDateTimeString();
      if(request('promotor_id') == 0){
        if(request('supervisor_id') == 0){
          $data = Gestion::whereBetween('created_at', [request('fecha_inicio'), request('fecha_fin')])->get();
        }
        else{
          $supervisor = Promotor::find(request('supervisor_id'));
          $data = Gestion::whereBetween('created_at', [request('fecha_inicio'), request('fecha_fin')])
                            ->where('tienda_id', $supervisor->tienda_id)->get();
        }
      }
      else
        $data = Gestion::where('promotor_id', request('promotor_id'))
                      ->whereBetween('created_at', [request('fecha_inicio'), request('fecha_fin')])->get();
      #dd($data);


      return Excel::download(new GestionVentasExport('gestion.excel', $data), 'ReporteVentas'.$hoy.'.xlsx');
    }
}
