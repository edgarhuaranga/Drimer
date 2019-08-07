@extends('layouts.master')
@section('hero')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Tiendas</h1>
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
                                    Nueva tienda
                                </button>
                            </div>
                            <!-- END Toggle Side Content -->

                            <!-- Side Content -->
                            <div id="side-content" class="d-none d-md-block push">

                              <form action="/tiendas" method="POST">
                                {{csrf_field()}}
                                <h2 class="content-heading pt-0">Nueva tienda</h2>
                                <div class="row push">

                                    <div class="col-lg-8 col-xl-12">
                                        <div class="form-group">
                                            <label for="text-input-password">Cadena</label>
                                            <select class="form-control" id="cadena_id" name="cadena_id">
                                                @foreach($cadenas as $cadena)
                                                    <option value="{{$cadena->id}}">{{$cadena->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="text-input-name">Nombre de la sede/tienda</label>
                                            <input type="text" class="form-control" id="nombre_sede" name="nombre_sede">
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-document">Direccion</label>
                                            <input type="text" class="form-control" id="direccion" name="direccion">
                                        </div>

                                        <div class="form-group">
                                            <label for="text-input-password">Ubigeo</label>
                                            <input type="text" class="form-control" id="ubigeo" name="ubigeo">
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
                                                      <th class="d-none d-sm-table-cell" style="width: 10%">#</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 20%;">Cadena</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 30%;">Nombre sede</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 30%;">Direccion</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 10%;">Detalle</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach($tiendas as $tienda)
                                                  <tr>
                                                      <td class="text-center">
                                                          <a href="/tiendas/{{$tienda->id}}">{{$tienda->id}}</a>
                                                      </td>
                                                      <td class="font-w600">
                                                          {{$tienda->cadena()->nombre}}
                                                      </td>
                                                      <td class="font-w600">
                                                          {{$tienda->nombre_sede}}
                                                      </td>
                                                      <td class="font-w600">
                                                          {{$tienda->direccion}}
                                                      </td>

                                                      <td class="text-center">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-outline-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                                                                <a href="/tiendas/{{$tienda->id}}">
                                                                  <i class="fa fa-chart-bar"></i>
                                                                </a>
                                                            </button>
                                                        </div>
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
