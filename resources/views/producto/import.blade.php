@extends('layouts.master')
@section('hero')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Importar productos</h1>
        </div>
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h4 class="flex-sm-fill font-size-h5 font-w400 mt-2 mb-0 mb-sm-2"></h4>
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

                              <form action="importar" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <input type="file" name="file" class="form-control">
                                  <br>
                                  <button class="btn btn-hero-success">Importar</button>
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
