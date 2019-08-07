@extends('layouts.master')
@section('hero')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Cadenas</h1>
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
                                    Nueva cadena
                                </button>
                            </div>
                            <!-- END Toggle Side Content -->

                            <!-- Side Content -->
                            <div id="side-content" class="d-none d-md-block push">

                              <form action="/cadenas" method="POST">
                                {{csrf_field()}}
                                <h2 class="content-heading pt-0">Nueva cadena</h2>
                                <div class="row push">

                                    <div class="col-lg-8 col-xl-12">
                                        <div class="form-group">
                                            <label for="text-input-name">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre">
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
                          <div class="row">
                          @foreach ($cadenas as $cadena)
                              <div class="col-sm-6">
                                  <div class="block block-rounded block-bordered">
                                      <div class="block-header block-header-default">
                                          <h3 class="block-title">{{$cadena->nombre}}</h3>
                                          <div class="block-options">
                                              <!-- To toggle block's content, just add the following properties to your button: data-toggle="block-option" data-action="content_toggle" -->
                                              <button class="btn btn-sm btn-info" type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                                          </div>
                                      </div>
                                      <div class="block-content">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-6 js-appear-enabled animated fadeIn" data-toggle="appear">
                                              <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                                                  <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                                                      <div>
                                                          <div class="font-size-h4 font-w300 text-black">{{$cadena->resumen()['q_hoy']}}</div>
                                                          <div class="font-size-h5 font-w300 text-black">S/.{{$cadena->resumen()['monto_hoy']}}</div>
                                                          <div class="font-w600 mt-2 text-uppercase text-muted">Hoy</div>
                                                      </div>
                                                  </div>
                                              </a>
                                            </div>
                                            <div class="col-md-6 col-xl-6 js-appear-enabled animated fadeIn" data-toggle="appear">
                                              <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                                                  <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                                                      <div>
                                                          <div class="font-size-h4 font-w300 text-black">{{$cadena->resumen()['q_ayer']}}</div>
                                                          <div class="font-size-h5 font-w300 text-black">S/.{{$cadena->resumen()['monto_ayer']}}</div>
                                                          <div class="font-w600 mt-2 text-uppercase text-muted">Ayer</div>
                                                      </div>
                                                  </div>
                                              </a>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-md-6 col-xl-6 js-appear-enabled animated fadeIn" data-toggle="appear">
                                              <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                                                  <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                                                      <div>
                                                          <div class="font-size-h4 font-w300 text-black">{{$cadena->resumen()['q_semana']}}</div>
                                                          <div class="font-size-h5 font-w300 text-black">S/.{{$cadena->resumen()['monto_semana']}}</div>
                                                          <div class="font-w600 mt-2 text-uppercase text-muted">Semana</div>
                                                      </div>
                                                  </div>
                                              </a>
                                            </div>
                                            <div class="col-md-6 col-xl-6 js-appear-enabled animated fadeIn" data-toggle="appear">
                                              <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                                                  <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                                                      <div>
                                                          <div class="font-size-h4 font-w300 text-black">{{$cadena->resumen()['q_mes']}}</div>
                                                          <div class="font-size-h5 font-w300 text-black">S/.{{$cadena->resumen()['monto_mes']}}</div>
                                                          <div class="font-w600 mt-2 text-uppercase text-muted">Mes</div>
                                                      </div>
                                                  </div>
                                              </a>
                                            </div>


                                        </div>

                                      </div>
                                  </div>
                              </div>
                          @endforeach
                        </div>

                        </div>
                        <!-- END Main Content -->
                    </div>
                </div>
                <!-- END Page Content -->



    </body>
</html>
@endsection
