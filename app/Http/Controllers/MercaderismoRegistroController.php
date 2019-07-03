<?php

namespace App\Http\Controllers;

use App\MercaderismoRegistro;
use App\Exports\MercaderismoExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class MercaderismoRegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datosMercaderismo = MercaderismoRegistro::all();
      return view('mercaderismo.index', compact('datosMercaderismo'));
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
     * @param  \App\MercaderismoRegistro  $mercaderismoRegistro
     * @return \Illuminate\Http\Response
     */
    public function show(MercaderismoRegistro $mercaderismoRegistro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MercaderismoRegistro  $mercaderismoRegistro
     * @return \Illuminate\Http\Response
     */
    public function edit(MercaderismoRegistro $mercaderismoRegistro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MercaderismoRegistro  $mercaderismoRegistro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MercaderismoRegistro $mercaderismoRegistro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MercaderismoRegistro  $mercaderismoRegistro
     * @return \Illuminate\Http\Response
     */
    public function destroy(MercaderismoRegistro $mercaderismoRegistro)
    {
        //
    }

    public function excel() {
        $hoy = Carbon::now()->toDateTimeString();
        return Excel::download(new MercaderismoExport, 'Mercaderismo'.$hoy.'.xlsx');
    }
}
