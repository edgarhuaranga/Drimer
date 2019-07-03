<?php

namespace App\Http\Controllers;

use App\Promotor;
use App\Cadena;
use App\Tienda;

use Illuminate\Http\Request;

class PromotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
        $promotores = Promotor::all();
        $tiendas = Tienda::all();
        return view('promotor.index', compact('promotores', 'tiendas'));
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
        $promotor = new Promotor;
        $promotor->tienda_id = request('tienda_id');
        $promotor->nombre_completo = request('nombre_completo');
        $promotor->numero_documento = request('numero_documento');
        $promotor->fecha_ingreso = request('fecha_ingreso');
        $promotor->rol = request('rol');
        $promotor->save();

        return redirect('/promotores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promotor  $promotor
     * @return \Illuminate\Http\Response
     */
    public function show(Promotor $promotor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promotor  $promotor
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotor $promotor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promotor  $promotor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promotor $promotor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promotor  $promotor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotor $promotor)
    {
        //
    }
}
