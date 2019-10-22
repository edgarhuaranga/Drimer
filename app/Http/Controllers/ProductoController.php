<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Cadena;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductosImport;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $productos = Producto::all();
      $cadenas = Cadena::all();

      return view('producto.index', compact('productos', 'cadenas'));
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
        //
        //dump($request);
        $tienda = new Producto();
        $tienda->cadena_id = request('cadena_id');
        $tienda->sku_cic = request('sku_cic');
        $tienda->sku= request('sku');
        $tienda->categoria = request('categoria');
        $tienda->marca = request('marca');
        $tienda->nombre = request('nombre');
        $tienda->descripcion = request('descripcion');
        $tienda->precio = request('precio');
        $tienda->UNIDAD = request('UNIDAD');

        $tienda->save();
        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
        $cadenas = Cadena::all();
        return view('producto.show', compact('producto', 'cadenas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->cadena_id = request('cadena_id');
        $producto->sku_cic = request('sku_cic');
        $producto->sku= request('sku');
        $producto->categoria = request('categoria');
        $producto->marca = request('marca');
        $producto->nombre = request('nombre');
        $producto->descripcion = request('descripcion');
        $producto->precio = request('precio');
        $producto->UNIDAD = request('UNIDAD');

        $producto->save();
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }

    public function import(){
      return view('producto.import');
    }

    public function importarExcel(Request $request){
        Excel::import(new ProductosImport, request('file'));

        return back();
    }
}
