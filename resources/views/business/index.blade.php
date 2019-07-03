@extends('layouts.master')
@section('hero')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Negocios</h1>
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
                                    Nuevo negocio
                                </button>
                            </div>
                            <!-- END Toggle Side Content -->

                            <!-- Side Content -->
                            <div id="side-content" class="d-none d-md-block push">

                              <form action="/businesses" method="POST">
                                {{csrf_field()}}
                                <h2 class="content-heading pt-0">Nuevo negocio/puesto</h2>
                                <div class="row push">

                                    <div class="col-lg-8 col-xl-12">
                                        <div class="form-group">
                                            <label>Codigo</label>
                                            <input type="text" class="form-control" id="codigo" name="codigo">
                                        </div>
                                        <div class="form-group">
                                            <label>Frecuencia visita</label>
                                            <input type="text" class="form-control" id="frecuencia_visita" name="frecuencia_visita">
                                        </div>
                                        <div class="form-group">
                                            <label>Ciudad</label>
                                            <input type="text" class="form-control" id="ciudad" name="ciudad">
                                        </div>
                                        <div class="form-group">
                                            <label>Distribuidora</label>
                                            <input type="text" class="form-control" id="distribuidora" name="distribuidora">
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre comercial mercado</label>
                                            <input type="text" class="form-control" id="nombre_comercial_mercado" name="nombre_comercial_mercado">
                                        </div>
                                        <div class="form-group">
                                            <label>Direccion mercado</label>
                                            <input type="text" class="form-control" id="direccion_mercado" name="direccion_mercado">
                                        </div>
                                        <div class="form-group">
                                            <label>Puesto</label>
                                            <input type="text" class="form-control" id="puesto" name="puesto">
                                        </div>
                                        <div class="form-group">
                                            <label>Marca</label>
                                            <input type="text" class="form-control" id="marca" name="marca">
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre comercial puesto</label>
                                            <input type="text" class="form-control" id="nombre_comercial_puesto" name="nombre_comercial_puesto">
                                        </div>
                                        <div class="form-group">
                                            <label>Contacto puesto</label>
                                            <input type="text" class="form-control" id="contacto_puesto" name="contacto_puesto">
                                        </div>
                                        <div class="form-group">
                                            <label>Impulso</label>
                                            <input type="text" class="form-control" id="impulso" name="impulso">
                                        </div>
                                        <div class="form-group">
                                            <label>Distrito</label>
                                            <input type="text" class="form-control" id="distrito" name="distrito">
                                        </div>
                                        <div class="form-group">
                                            <label>Referencia</label>
                                            <input type="text" class="form-control" id="referencia" name="referencia">
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre vendedor</label>
                                            <input type="text" class="form-control" id="nombre_vendedor" name="nombre_vendedor">
                                        </div>
                                        <div class="form-group">
                                            <label>Telefono vendedor</label>
                                            <input type="text" class="form-control" id="telefono_vendedor" name="telefono_vendedor">
                                        </div>
                                        <div class="form-group">
                                            <label>Telefono contacto</label>
                                            <input type="text" class="form-control" id="telefono_contacto" name="telefono_contacto">
                                        </div>
                                        <div class="form-group">
                                            <label>Motivo impulso</label>
                                            <input type="text" class="form-control" id="motivo_impulso" name="motivo_impulso">
                                        </div>
                                        <div class="form-group">
                                            <label>Motivo mercaderista</label>
                                            <input type="text" class="form-control" id="motivo_mercaderista" name="motivo_mercaderista">
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
                        <div class="content content-full">
                            <div class="block block-fx-pop">
                                <div class="block-content">
                                  <!-- Dynamic Table with Export Buttons -->
                                  <div class="block block-rounded block-bordered">

                                      <div class="block-content block-content-full">
                                          <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                                          <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                                              <thead>
                                                  <tr>
                                                      <th class="text-center" style="width: 80px;">Codigo</th>
                                                      <th>Nombre puesto</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 30%;">Distribuidora</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Ciudad</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Mercado</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Mercaderista</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach($businesses as $business)
                                                  <tr>
                                                      <td class="text-center">
                                                          <a href="/businesses/{{$business->id}}">{{$business->codigo}}</a>
                                                      </td>

                                                      <td class="d-none d-sm-table-cell">
                                                          {{$business->nombre_comercial_puesto}}
                                                      </td>
                                                      <td class="d-none d-sm-table-cell">
                                                          {{$business->distribuidora}}
                                                      </td>
                                                      <td class="d-none d-sm-table-cell">
                                                          {{$business->ciudad}}
                                                      </td>
                                                      <td class="d-none d-sm-table-cell">
                                                          {{$business->nombre_comercial_mercado}}
                                                      </td>
                                                      <td class="d-none d-sm-table-cell">
                                                          Empleado
                                                      </td>
                                                  </tr>
                                                  @endforeach

                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                                  <!-- END Dynamic Table with Export Buttons -->
                                </div>
                            </div>
                        </div>
                        <!-- END Main Content -->
                    </div>
                </div>
                <!-- END Page Content -->


    </body>
</html>
@endsection
