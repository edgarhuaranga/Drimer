@extends('layouts.master')
@section('hero')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Promotores</h1>
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
                                    Nuevo promotor
                                </button>
                            </div>
                            <!-- END Toggle Side Content -->

                            <!-- Side Content -->
                            <div id="side-content" class="d-none d-md-block push">

                              <form action="/promotores" method="POST">
                                {{csrf_field()}}
                                <h2 class="content-heading pt-0">Nuevo promotor</h2>

                                <div class="row push">

                                    <div class="col-lg-8 col-xl-12">
                                        <div class="form-group">
                                            <label for="text-input-name">Nombre completo</label>
                                            <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-document">Nro documento</label>
                                            <input type="text" class="form-control" id="numero_documento" name="numero_documento" required>
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
                                            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-document">Rol</label>
                                            <select class="form-control" id="rol" name="rol">
                                              <option value="Promotor" selected >Promotor</option>
                                              <option value="Promotor volante">Promotor volante</option>
                                            </select>
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
                                                      <th class="text-center" style="width: 80px;">#Documento</th>
                                                      <th>Nombre completo</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Cadena</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Tienda</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Fecha ingreso</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Rol</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach($promotores as $promotor)
                                                  <tr>
                                                      <td class="text-center">
                                                          <a href="/promotores/{{$promotor->id}}">{{$promotor->numero_documento}}</a>
                                                      </td>
                                                      <td class="font-w600">
                                                          {{$promotor->nombre_completo}}
                                                      </td>
                                                      <td class="d-none d-sm-table-cell">
                                                          {{$promotor->tienda()->cadena()->nombre}}
                                                      </td>
                                                      <td class="d-none d-sm-table-cell">
                                                          {{$promotor->tienda()->nombre_sede}}
                                                      </td>
                                                      <td>
                                                        {{$promotor->fecha_ingreso}}
                                                      </td>
                                                      <td>
                                                        {{$promotor->rol}}
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
