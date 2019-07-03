<table>
<!--  <table class="table table-bordered table-striped .table-sm"> -->
  <thead>
  <tr>
    <th class="text-center" style="width: 80px;">Fecha</th>
    <th class="d-none d-sm-table-cell text-center">Codigo</th>
    <th class="d-none d-sm-table-cell text-center">Trabajador</th>
    <th class="d-none d-sm-table-cell text-center">Codigo</th>
    <th class="d-none d-sm-table-cell text-center">Categoria </th>
    <th class="d-none d-sm-table-cell text-center">Marca </th>
    <th class="d-none d-sm-table-cell text-center">Producto </th>
    <th class="d-none d-sm-table-cell text-center">Peso </th>
    <th class="d-none d-sm-table-cell text-center">Precio producto</th>
  </tr>
  </thead>
  <tbody>
    @foreach($datosMercaderismo as $dato)
    <tr>
      <td class="d-none d-sm-table-cell text-center">
        {{$dato->fecha()}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        @if ($dato->business() == null)
        Desconocido
        @else
        {{$dato->business()->codigo}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$dato->worker()->name}}
      </td>
      <td class="d-none d-sm-table-cell">
        @if ($dato->product() == null)
        Desconocido
        @else
        {{$dato->product()->codigo}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        @if ($dato->product() == null)
        Desconocido
        @else
        {{$dato->product()->categoria}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        @if ($dato->product() == null)
        Desconocido
        @else
        {{$dato->product()->marca}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        @if ($dato->product() == null)
        Desconocido
        @else
        {{$dato->product()->nombre}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        @if ($dato->product() == null)
        Desconocido
        @else
        {{$dato->product()->peso}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        {{$dato->product_price}}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
