<table>
<!--  <table class="table table-bordered table-striped .table-sm"> -->
  <thead>
  <tr>
    <th class="d-none d-sm-table-cell text-center">Codigo</th>
    <th class="d-none d-sm-table-cell text-center">Codigo producto</th>
    @foreach($periodos as $fecha)
      <th class="d-none d-sm-table-cell text-center">{{$fecha->format('Y-m-d')}}</th>
    @endforeach
  </tr>
  </thead>
  <tbody>
    @foreach($datosMercaderismo as $dato)
    <tr>
      <td class="d-none d-sm-table-cell text-center">
        {{$dato->codigo_negocio}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$dato->codigo_producto}}
      </td>
      @foreach($periodos as $fecha)
        {{$label_fecha = $fecha->format('Y-m-d')}}
        <td class="d-none d-sm-table-cell text-center">{{$dato->$label_fecha}}</td>
      @endforeach
      </tr>
    @endforeach
  </tbody>
</table>
