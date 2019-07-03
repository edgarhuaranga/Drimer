@extends('layouts.master')
@section('hero')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Productos</h1>
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
                                                      <th class="text-center" style="width: 80px;">#SKU CIC</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">SKU</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Cadena</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Categoria</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Marca</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Nombre</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Descripcion</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Precio</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">UNIDAD</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach($productos as $producto)
                                                  <tr>
                                                      <td class="text-center">
                                                          <a href="/productos/{{$producto->id}}">{{$producto->sku_cic}}</a>
                                                      </td>
                                                      <td>{{$producto->sku}}</td>
                                                      <td>{{$producto->cadena()->nombre}}</td>
                                                      <td>{{$producto->categoria}}</td>
                                                      <td>{{$producto->marca}}</td>
                                                      <td>{{$producto->nombre}}</td>
                                                      <td>{{$producto->descripcion}}</td>
                                                      <td>{{$producto->precio}}</td>
                                                      <td>{{$producto->UNIDAD}}</td>

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
