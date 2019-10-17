@extends('layouts.master')
@section('hero')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Importar tiendas</h1>
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


                            <!-- Side Content -->
                            <div id="side-content" class="d-none d-md-block push">

                              <form action="/tiendas/importar" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <input type="file" name="file" class="form-control"></input>
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
