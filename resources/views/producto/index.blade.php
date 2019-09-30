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

                  <div class="col-md-4 col-lg-5 col-xl-3 order-md-1">
                    <div class="content">
                    <!-- Toggle Side Content -->
                      <div class="d-md-none push">
                                                  <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                        <button type="button" class="btn btn-block btn-hero-primary" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
                          Nuevo producto
                        </button>
                      </div>
                    <!-- END Toggle Side Content -->

                    <!-- Side Content -->
                      <div id="side-content" class="d-none d-md-block push">

                        <form action="/productos" method="POST">
                          {{csrf_field()}}
                          <h2 class="content-heading pt-0">Nuevo producto</h2>
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
                                <label for="text-input-name">SKU CIC</label>
                                <input type="text" class="form-control" id="codigo" name="sku_cic">
                              </div>
                              <div class="form-group">
                                <label for="text-input-name">SKU</label>
                                <input type="text" class="form-control" id="codigo" name="sku">
                              </div>
                              <div class="form-group">
                                <label for="text-input-document">Categoria</label>
                                <input type="text" class="form-control" id="categoria" name="categoria">
                              </div>
                              <div class="form-group">
                                <label for="text-input-phone">Marca</label>
                                <input type="text" class="form-control" id="name" name="marca">
                              </div>
                              <div class="form-group">
                                <label for="text-input-phone">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                              </div>
                              <div class="form-group">
                                <label for="text-input-phone">Descripcion</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion">
                              </div>
                              <div class="form-group">
                                <label for="text-input-phone">Precio</label>
                                <input type="text" class="form-control" id="precio" name="precio">
                              </div>
                              <div class="form-group">
                                <label for="text-input-address">UNIDAD</label>
                                <input type="text" class="form-control" id="unidad" name="UNIDAD">
                              </div>

                              <div class="block-options" align="center">
                                <button type="submit" class="btn btn-sm btn-outline-primary" >
                                  <i class="fa fa-check"></i> Agregar
                                </button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>                        <!-- END Side Content -->

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
                                                          <table class="table table-sm table-bordered table-striped table-vcenter js-dataTable-buttons">
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

                </div>
                <!-- END Page Content -->



    </body>
</html>
@endsection
