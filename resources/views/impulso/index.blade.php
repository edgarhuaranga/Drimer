@extends('layouts.master')
@section('hero')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Productos</h1>
            <a href="/impulso/exportar"> Exportar a excel</a>
        </div>
    </div>
</div>
<!-- END Hero -->
@endsection

@section('content')

<!-- Page Content -->
  <div class="row no-gutters flex-md-10-auto">
        <div class="content content-full">
          <div class="block block-fx-pop">
            <div class="block-content">
              <!-- Dynamic Table with Export Buttons -->
              <div class="block block-rounded block-bordered">
                <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                  <table class="table table-bordered table-striped table-sm table-vcenter js-dataTable-buttons">
                <!--  <table class="table table-bordered table-striped .table-sm"> -->
                    <thead>
                    <tr>
                      <th class="text-center" style="width: 80px;">Codigo</th>
                      <th class="d-none d-sm-table-cell text-center">Trabajador</th>
                      <th class="d-none d-sm-table-cell text-center">Es Canje?</th>
                      <th class="d-none d-sm-table-cell text-center">Canje</th>
                      <th class="d-none d-sm-table-cell text-center">Cantidad canje</th>
                      <th class="d-none d-sm-table-cell text-center">Producto seco</th>
                      <th class="d-none d-sm-table-cell text-center">Cantidad producto seco</th>
                      <th class="d-none d-sm-table-cell text-center">Producto humedo</th>
                      <th class="d-none d-sm-table-cell text-center">Cantidad producto humedo</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($canjes as $canje)
                      <tr>
                        <td class="d-none d-sm-table-cell text-center">
                          {{$canje->business_id}}
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          {{$canje->worker()->name}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                          {{$canje->is_canje}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                          {{$canje->merch}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                          {{$canje->q_merch}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                          @if ($canje->productoSeco() == null)
                          {{$canje->producto_seco}}
                          @else
                            {{$canje->productoSeco()->nombre.$canje->productoSeco()->codigo}}
                          @endif
                        </td>
                        <td class="d-none d-sm-table-cell">
                          {{$canje->q_producto_seco}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                          @if ($canje->productoHumedo() == null)
                            {{$canje->producto_humedo}}
                          @else
                            {{$canje->producto_humedo."====".$canje->productoHumedo()->nombre}}
                          @endif
                        </td>
                        <td class="d-none d-sm-table-cell">
                          {{$canje->q_producto_humedo}}
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

    </div>
                <!-- END Page Content -->



    </body>
</html>
@endsection
