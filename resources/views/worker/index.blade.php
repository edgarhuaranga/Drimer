@extends('layouts.master')
@section('hero')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Trabajadores</h1>
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
                                    Nuevo trabajador
                                </button>
                            </div>
                            <!-- END Toggle Side Content -->

                            <!-- Side Content -->
                            <div id="side-content" class="d-none d-md-block push">

                              <form action="/workers" method="POST">
                                {{csrf_field()}}
                                <h2 class="content-heading pt-0">Nuevo trabajador</h2>
                                <div class="row push">

                                    <div class="col-lg-8 col-xl-12">
                                        <div class="form-group">
                                            <label for="text-input-name">Nombre</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-document">Documento</label>
                                            <input type="text" class="form-control" id="document_number" name="document_number">
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-phone">Telefono</label>
                                            <input type="text" class="form-control" id="phone_number" name="phone_number">
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-address">Direccion</label>
                                            <input type="text" class="form-control" id="address" name="address">
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-password">Contrasena App</label>
                                            <input type="text" class="form-control" id="app_password" name="app_password">
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-password">Ciudad</label>
                                            <input type="text" class="form-control" id="app_password" name="city">
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-password">Rol</label>
                                            <input type="text" class="form-control" id="app_password" name="cargo">
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
                                                      <th class="text-center" style="width: 80px;">#</th>
                                                      <th>Nombre</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 30%;">Documento</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Celular</th>
                                                      <th class="d-none d-sm-table-cell" style="width: 15%;">Password</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach($workers as $worker)
                                                  <tr>
                                                      <td class="text-center">{{$worker->id}}</td>
                                                      <td class="font-w600">
                                                          <a href="/workers/{{$worker->id}}">{{$worker->name}}</a>
                                                      </td>
                                                      <td class="d-none d-sm-table-cell">
                                                          {{$worker->document_number}}
                                                      </td>
                                                      <td class="d-none d-sm-table-cell">
                                                          {{$worker->phone_number}}
                                                      </td>
                                                      <td>
                                                        {{$worker->app_password}}
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
