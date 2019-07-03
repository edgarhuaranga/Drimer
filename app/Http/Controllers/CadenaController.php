<?php

namespace App\Http\Controllers;

use App\Cadena;
use Illuminate\Http\Request;

class CadenaController extends Controller
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
        return view('cadena.index', compact('cadenas'));
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
        $cadena = new Cadena;
        $cadena->nombre = request('nombre');
        $cadena->save();
        return redirect('/cadenas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cadena  $cadena
     * @return \Illuminate\Http\Response
     */
    public function show(Cadena $cadena)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cadena  $cadena
     * @return \Illuminate\Http\Response
     */
    public function edit(Cadena $cadena)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cadena  $cadena
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cadena $cadena)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cadena  $cadena
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cadena $cadena)
    {
        //
    }
}
