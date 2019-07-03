<?php

namespace App\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
    * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businesses = Business::all();
        return view('business.index', compact('businesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('business.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $business = new Business;
        $business->codigo = request('codigo');
        $business->frecuencia_visita = request('frecuencia_visita');
        $business->ciudad = request('ciudad');
        $business->distribuidora = request('distribuidora');
        $business->nombre_comercial_mercado = request('nombre_comercial_mercado');
        $business->direccion_mercado = request('direccion_mercado');
        $business->puesto = request('puesto');
        $business->marca = request('marca');
        $business->nombre_comercial_puesto = request('nombre_comercial_puesto');
        $business->contacto_puesto = request('contacto_puesto');
        $business->impulso = request('impulso');
        $business->distrito = request('distrito');
        $business->referencia = request('referencia');
        $business->nombre_vendedor = request('nombre_vendedor');
        $business->telefono_vendedor = request('telefono_vendedor');
        $business->telefono_contacto = request('telefono_contacto');
        $business->motivo_impulso = request('motivo_impulso');
        $business->motivo_mercaderista = request('motivo_mercaderista');
        #$business->latitude = request('latitude');
        #$business->longitude = request('longitude');
        #$business->accuracy = request('accuracy');

        $business->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        //
    }
}
