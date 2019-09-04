@extends('layouts.master')
@section('hero')
<!-- Hero -->

<div class="bg-image" style="background-image: url('assets/media/various/bg_dashboard.jpg');">
    <div class="bg-white-90">
        <div class="content content-full">
            <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-center">
                    <div class="py-4 py-md-0 text-center text-md-left invisible" data-toggle="appear">
                        <h1 class="font-size-h2 mb-2">{{$promotor->nombre_completo}}</h1>
                        <h2 class="font-size-lg font-w400 text-muted mb-0">Resumen ultimo mes</h2>
                    </div>
                </div>
                <div class="col-md-6 d-md-flex align-items-md-center">
                    <div class="row w-100 text-center">
                        <div class="col-6 col-xl-4 offset-xl-4 invisible" data-toggle="appear" data-timeout="300">
                            <p class="font-size-h3 font-w600 text-body-color-dark mb-0">
                                {{$promotor->resumen()['q_mes']}}
                            </p>
                            <p class="font-size-sm font-w700 text-uppercase mb-0">
                                <i class="far fa-chart-bar text-muted mr-1"></i> Ventas
                            </p>
                        </div>
                        <div class="col-6 col-xl-4 invisible" data-toggle="appear" data-timeout="600">
                            <p class="font-size-h3 font-w600 text-body-color-dark mb-0">
                                S/. {{$promotor->resumen()['monto_mes']}}
                            </p>
                            <p class="font-size-sm font-w700 text-uppercase mb-0">
                                <i class="far fa-chart-bar text-muted mr-1"></i> Ventas
                            </p>
                        </div>
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

                              <form action="/promotores/{{$promotor->id}}/actualizar" method="POST">
                                {{csrf_field()}}
                                <h2 class="content-heading pt-0">Actualizar</h2>
                                <div class="row push">

                                    <div class="col-lg-8 col-xl-12">
                                        <div class="form-group">
                                            <label for="text-input-name">Nombre completo</label>
                                            <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" value="{{$promotor->nombre_completo}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-document">Nro documento</label>
                                            <input type="text" class="form-control" id="numero_documento" name="numero_documento" value="{{$promotor->numero_documento}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="text-input-password">Tienda</label>
                                            <select class="form-control" id="tienda_id" name="tienda_id">
                                                @foreach($tiendas as $tienda)

                                                    @if ($tienda->id == $promotor->tienda_id)
                                                      <option value="{{$tienda->id}}" selected>{{$tienda->cadena()->nombre."-".$tienda->nombre_sede}}</option>
                                                    @else
                                                      <option value="{{$tienda->id}}">{{$tienda->cadena()->nombre."-".$tienda->nombre_sede}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-password">Fecha de ingreso</label>
                                            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="{{$promotor->fecha_ingreso}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="text-input-document">Rol</label>
                                            <input type="text" class="form-control" id="rol" name="rol" value="{{$promotor->rol}}">
                                        </div>
                                        <div class="block-options" align="center">
                                            <button type="submit" class="btn btn-sm btn-outline-info" >
                                                <i class="fa fa-check"></i> Actualizar
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
                        <div class="content">

                          <div class="row">
                              <div class="col-md-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear">
                                <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                                    <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                                        <div>
                                            <div class="font-size-h1 font-w300 text-black">{{$promotor->resumen()['q_hoy']}}</div>
                                            <div class="font-size-h3 font-w300 text-black">S/.{{$promotor->resumen()['monto_hoy']}}</div>
                                            <div class="font-w600 mt-2 text-uppercase text-muted">Hoy</div>
                                        </div>
                                    </div>
                                </a>
                              </div>
                              <div class="col-md-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear">
                                <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                                    <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                                        <div>
                                            <div class="font-size-h1 font-w300 text-black">{{$promotor->resumen()['q_ayer']}}</div>
                                            <div class="font-size-h3 font-w300 text-black">S/.{{$promotor->resumen()['monto_ayer']}}</div>
                                            <div class="font-w600 mt-2 text-uppercase text-muted">Ayer</div>
                                        </div>
                                    </div>
                                </a>
                              </div>
                              <div class="col-md-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear">
                                <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                                    <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                                        <div>
                                            <div class="font-size-h1 font-w300 text-black">{{$promotor->resumen()['q_semana']}}</div>
                                            <div class="font-size-h3 font-w300 text-black">S/.{{$promotor->resumen()['monto_semana']}}</div>
                                            <div class="font-w600 mt-2 text-uppercase text-muted">Semana</div>
                                        </div>
                                    </div>
                                </a>
                              </div>
                              <div class="col-md-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear">
                                <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                                    <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                                        <div>
                                            <div class="font-size-h1 font-w300 text-black">{{$promotor->resumen()['q_mes']}}</div>
                                            <div class="font-size-h3 font-w300 text-black">S/.{{$promotor->resumen()['monto_mes']}}</div>
                                            <div class="font-w600 mt-2 text-uppercase text-muted">Mes</div>
                                        </div>
                                    </div>
                                </a>
                              </div>
                          </div>
                          <!-- END Quick Stats -->

                          <div class="block block-rounded block-mode-loading-refresh invisible" data-toggle="appear">
                              <div class="block-header block-header-default">

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
                                                            <th class="text-center" style="width: 80px;">Fecha</th>
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
                                                            <td>{{$venta->fechaHora()}}</td>
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

                              </div>

                          </div>

                        <!-- END Main Content -->

                    </div>
                </div>


                  <!-- END Page Content -->
@endsection
