@extends('layouts.master')
@section('hero')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">{{promotor->nombre_completo}}</h1>
        </div>
    </div>
</div>
<!-- END Hero -->
@endsection

@section('content')

<!-- Page Content -->
                <div class="row no-gutters flex-md-10-auto">
                    <div class="col-md-4 col-lg-5 col-xl-3 order-md-1">
                        <div class="content">
                            <!-- Toggle Side Content -->
                            <div class="d-md-none push">
                                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                                <button type="button" class="btn btn-block btn-hero-primary" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
                                    Actualizar datos
                                </button>
                            </div>
                            <!-- END Toggle Side Content -->

                            <!-- Side Content -->
                            <div id="side-content" class="d-none d-md-block push">

                              <form action="/promotores/{{$promotor->id}}/edit" method="PUT">
                                {{csrf_field()}}
                                <h2 class="content-heading pt-0">Actualizar</h2>
                                <div class="row push">

                                    <div class="col-lg-8 col-xl-12">
                                        <div class="form-group">
                                            <label for="text-input-name">Nombre completo</label>
                                            <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" value="{{promotor->nombre_completo}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-document">Nro documento</label>
                                            <input type="text" class="form-control" id="numero_documento" name="numero_documento" value="{{promotor->numero_documento}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="text-input-password">Tienda</label>
                                            <select class="form-control" id="tienda_id" name="tienda_id">
                                                @foreach($tiendas as $tienda)
                                                    <option value="{{$tienda->id}}">{{$tienda->cadena()->nombre."-".$tienda->nombre_sede}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-password">Fecha de ingreso</label>
                                            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="{{promotor->fecha_ingreso}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-document">Rol</label>
                                            <input type="text" class="form-control" id="rol" name="rol" value="{{promotor->rol}}">
                                        </div>
                                        <div class="block-options" align="center">
                                            <button type="submit" class="btn btn-sm btn-outline-primary" >
                                                <i class="fa fa-check"></i> Agregar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <!-- END Side Content -->
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-7 col-xl-9 order-md-0 bg-body-dark">
                        <!-- Main Content -->
                        <!-- END Main Content -->
                    </div>
                </div>
                <!-- END Page Content -->



    </body>
</html>
@endsection
