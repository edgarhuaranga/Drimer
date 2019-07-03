<?php

namespace App\Http\Controllers;

use App\ImpulsoRegistro;
use App\Exports\ImpulsosExport;
use App\Exports\ReporteExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class ImpulsoRegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canjes = ImpulsoRegistro::all();
        return view('impulso.index', compact('canjes'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ImpulsoRegistro  $impulsoRegistro
     * @return \Illuminate\Http\Response
     */
    public function show(ImpulsoRegistro $impulsoRegistro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ImpulsoRegistro  $impulsoRegistro
     * @return \Illuminate\Http\Response
     */
    public function edit(ImpulsoRegistro $impulsoRegistro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ImpulsoRegistro  $impulsoRegistro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImpulsoRegistro $impulsoRegistro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ImpulsoRegistro  $impulsoRegistro
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImpulsoRegistro $impulsoRegistro)
    {
        //
    }


    public function excel() {
        $hoy = Carbon::now()->toDateTimeString();
        return Excel::download(new ImpulsosExport, 'Impulso'.$hoy.'.xlsx');
    }

    public function excelReporte(){
      $hoy = Carbon::now()->toDateTimeString();
      return Excel::download(new ReporteExport, 'Impulso'.$hoy.'.xlsx');
    }

}
