<?php

namespace App\Http\Controllers;

use App\Tienda;
use App\Cadena;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadenas = Cadena::all();
        $tiendas = Tienda::all();
        return view('tienda.index', compact('tiendas','cadenas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dump($request);
        $tienda = new Tienda();
        $tienda->cadena_id = request('cadena_id');
        $tienda->nombre_sede = request('nombre_sede');
        $tienda->direccion= request('direccion');
        $tienda->ubigeo = request('ubigeo');
        $tienda->save();
        return redirect('/tiendas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function show(Tienda $tienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function edit(Tienda $tienda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tienda $tienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tienda $tienda)
    {
        //
    }
}
