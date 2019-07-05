<table>
<!--  <table class="table table-bordered table-striped .table-sm"> -->
  <thead>
  <tr>

    <th class="text-center">Fecha</th>
    <th class="text-center">Supervisor</th>
    <th class="text-center">DNI Vendedor</th>
    <th class="text-center">Vendedor</th>
    <th class="text-center">Tienda por departamento</th>
    <th class="text-center">Local</th>
    <th class="text-center">Departamento</th>
    <th class="text-center">Provincia</th>
    <th class="text-center">Distrito</th>
    <th class="text-center">SKU</th>
    <th class="text-center">Producto</th>
    <th class="text-center">Cantidad</th>
    <th class="text-center">Precio regular</th>
    <th class="text-center">PVP Real</th>
    <th class="text-center">Monto compra total</th>
    <th class="text-center">Numero de folio</th>

  </tr>
  </thead>
  <tbody>
    @foreach($ventas as $venta)
    <tr>
      <td class="d-none d-sm-table-cell text-center">
        {{$venta->created_at}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        Supervisor
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$venta->promotor()->numero_documento}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$venta->promotor()->nombre_completo}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$venta->tienda()->cadena()->nombre()->nombre_completo}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$venta->tienda()->nombre_sede}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        Lima
      </td>
      <td class="d-none d-sm-table-cell text-center">
        Lima
      </td>
      <td class="d-none d-sm-table-cell text-center">
        Lima
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$venta->producto()->sku}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$venta->producto()->nombre}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$venta->cantidad}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$venta->producto()->precio}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$venta->monto_venta}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$venta->monto_venta*$venta->cantidad}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$venta->boleta}}
      </td>




    </tr>
    @endforeach
  </tbody>
</table>
