<table>
<!--  <table class="table table-bordered table-striped .table-sm"> -->
  <thead>
  <tr>

    <th class="text-center" style="width: 80px;">Ciudad</th>
    <th class="d-none d-sm-table-cell text-center">Impulsador</th>
    <th class="text-center">Codigo de cliente</th>
    <th class="text-center">Fecha registro</th>
  </tr>
  </thead>
  <tbody>
    @foreach($reportes as $canje)
    <tr>
      <td class="d-none d-sm-table-cell text-center">
        {{$canje->worker()->city}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$canje->worker()->name}}
      </td>

      <td class="d-none d-sm-table-cell text-center">
        @if($canje->business() == null)
          {{$canje->business_id}}
        @else
          {{$canje->business()->codigo}}
        @endif
      </td>

      <td class="d-none d-sm-table-cell text-center">
          {{$canje->fecha_registro}}
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
