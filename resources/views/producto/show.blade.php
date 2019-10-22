@extends('layouts.master')
@section('hero')
<!-- Hero -->

<div class="bg-image" style="background-image: url('assets/media/various/bg_dashboard.jpg');">
    <div class="bg-white-90">
        <div class="content content-full">
            <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-center">
                    <div class="py-4 py-md-0 text-center text-md-left invisible" data-toggle="appear">
                        <h1 class="font-size-h2 mb-2">{{$producto->nombre}}</h1>
                        <h2 class="font-size-lg font-w400 text-muted mb-0">Editar</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->
@endsection

@section('content')

                  <!-- Page Content -->
                  <div class="row no-gutters flex-md-10-auto">

                    <div class="col-md-10 col-lg-7 col-xl-9 order-md-0 bg-body-dark">
                        <!-- Main Content -->
                        <div class="content">

                          <form action="/productos/{{$producto->id}}/actualizar" method="POST">
                            {{csrf_field()}}
                            <h2 class="content-heading pt-0">Nuevo producto</h2>
                            <div class="row push">
                              <div class="col-lg-8 col-xl-12">
                                <div class="form-group">
                                    <label for="text-input-password">Cadena</label>
                                    <select class="form-control" id="cadena_id" name="cadena_id">
                                        @foreach($cadenas as $cadena)
                                            @if($cadena->id == $producto->cadena_id)
                                              <option value="{{$cadena->id}}" selected>{{$cadena->nombre}}</option>
                                            @else
                                                <option value="{{$cadena->id}}">{{$cadena->nombre}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label for="text-input-name">SKU CIC</label>
                                  <input required type="text" class="form-control" id="codigo" name="sku_cic" value="{{$producto->sku_cic}}">
                                </div>
                                <div class="form-group">
                                  <label for="text-input-name">SKU</label>
                                  <input required type="text" class="form-control" id="codigo" name="sku" value="{{$producto->sku}}">
                                </div>
                                <div class="form-group">
                                  <label for="text-input-document">Categoria</label>
                                  <input required type="text" class="form-control" id="categoria" name="categoria" value="{{$producto->categoria}}">
                                </div>
                                <div class="form-group">
                                  <label for="text-input-phone">Marca</label>
                                  <input required type="text" class="form-control" id="name" name="marca" value="{{$producto->marca}}">
                                </div>
                                <div class="form-group">
                                  <label for="text-input-phone">Nombre</label>
                                  <input required type="text" class="form-control" id="nombre" name="nombre" value="{{$producto->nombre}}">
                                </div>
                                <div class="form-group">
                                  <label for="text-input-phone">Descripcion</label>
                                  <input required type="text" class="form-control" id="descripcion" name="descripcion" value="{{$producto->descripcion}}">
                                </div>
                                <div class="form-group">
                                  <label for="text-input-phone">Precio</label>
                                  <input required type="text" class="form-control" id="precio" name="precio" value="{{$producto->precio}}">
                                </div>
                                <div class="form-group">
                                  <label for="text-input-address">UNIDAD</label>
                                  <input required type="text" class="form-control" id="unidad" name="UNIDAD" value="{{$producto->UNIDAD}}">
                                </div>

                                <div class="block-options" align="center">
                                  <button type="submit" class="btn btn-sm btn-outline-primary" >
                                    <i class="fa fa-check"></i> Modificar
                                  </button>
                                </div>
                              </div>
                            </div>
                          </form>


                        <!-- END Main Content -->

                    </div>
                </div>


                  <!-- END Page Content -->
@endsection
