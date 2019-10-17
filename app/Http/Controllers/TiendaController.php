<?php

namespace App\Http\Controllers;

use App\Tienda;
use App\Cadena;
use App\Gestion;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TiendasImport;
use Illuminate\Support\Facades\Validator;

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
        $tienda = new Tienda();
        $tienda->cadena_id = request('cadena_id');
        $tienda->nombre_sede = request('nombre_sede');
        $tienda->direccion= request('direccion');
        $tienda->departamento = request('departamento');
        $tienda->provincia = request('provincia');
        $tienda->distrito = request('distrito');
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
        $ventas = Gestion::where('tienda_id', $tienda->id)->get();
        $cadenas = Cadena::all();
        return view('tienda.show', compact('tienda', 'ventas', 'cadenas'));
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

    public function import(){
      return view('tienda.import');
    }

    public function importarExcel(Request $request){

        Excel::import(new TiendasImport, request('file'));

        return back();
    }
}
