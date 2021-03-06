@extends('layouts.master')
@section('hero')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Ventas</h1>
            <a href="/exportarventas"> Exportar a excel</a>
        </div>
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">

            <form method="GET" class="form-inline" action="/exportarventas">
              <div class="form-group">
                  <label for="text-input-password">Fecha inicio</label>
                  <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio">
              </div>
              <div class="form-group">
                  <label for="text-input-password">Fecha fin</label>
                  <input type="date" class="form-control" id="fecha_fin" name="fecha_fin">
              </div>
              <div class="form-group">
                <label for="text-input-password">Usuario</label>
                <select class="form-control" id="promotor_id" name="promotor_id">
                    <option value=0 selected>Todos </option>
                    @foreach($promotores as $usuario)
                        <option value="{{$usuario->id}}">{{$usuario->nombre_completo}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="text-input-password">Supervisor</label>
                <select class="form-control" id="supervisor_id" name="supervisor_id">
                    <option value=0 selected>Todos </option>
                    @foreach($supervisores as $supervisor)
                        <option value="{{$supervisor->id}}">{{$supervisor->nombre_completo}}</option>
                    @endforeach
                </select>
              </div>
              <div class="block-options" align="center">
                  <button type="submit" class="btn btn-sm btn-outline-primary" >
                      <i class="fa fa-check"></i> Exportar
                  </button>
              </div>
            </form>
        </div>
    </div>
</div>
<!-- END Hero -->
@endsection

@section('content')

<!-- Page Content -->
                <div class="row no-gutters flex-md-10-auto">

                        <!-- Main Content -->
                        <div class="content content-full">
                            <div class="block block-fx-pop">
                                <div class="block-content">
                                  <!-- Dynamic Table with Export Buttons -->
                                  <div class="block block-rounded block-bordered">

                                      <div class="block-content block-content-full">
                                          <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                                          <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                                              <thead class="thead-dark">
                                                  <tr>
                                                      <th class="text-center" style="width: 80px;">Boleta</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Tienda</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Promotor</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Producto</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Cantidad</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Precio unitario</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach($ventas as $venta)
                                                  <tr>
                                                      <td class="text-center">
                                                          <a href="/ventas/{{$venta->id}}">{{$venta->boleta}}</a>
                                                      </td>
                                                      <td>{{$venta->tienda()->cadena()->nombre."-".$venta->tienda()->nombre_sede}}</td>
                                                      <td>{{$venta->promotor()->nombre_completo}}</td>
                                                      <td>{{$venta->producto()->nombre}}</td>
                                                      <td>{{$venta->cantidad}}</td>
                                                      <td>{{$venta->monto_venta}}</td>

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
                <!-- END Page Content -->



    </body>
</html>
@endsection
