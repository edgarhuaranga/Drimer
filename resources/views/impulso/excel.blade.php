<table>
<!--  <table class="table table-bordered table-striped .table-sm"> -->
  <thead>
  <tr>

    <th class="text-center" style="width: 80px;">Ciudad</th>
    <th class="text-center">Fecha</th>
    <th class="text-center">Turno</th>
    <th class="d-none d-sm-table-cell text-center">Impulsador</th>
    <th class="text-center">Codigo de cliente</th>
    <th class="text-center">Tipo de cliente por venta</th>
    <th class="text-center">Contacto del puesto</th>
    <th class="text-center">Mercado</th>
    <th class="text-center">Stock mensual</th>
    <th class="text-center">Saldo stock</th>
    <th class="d-none d-sm-table-cell text-center">Marca a canjear</th>
    <th class="d-none d-sm-table-cell text-center">Codigo canje</th>
    <th class="d-none d-sm-table-cell text-center">Codigo</th>
    <th class="d-none d-sm-table-cell text-center">Escala</th>
    <th class="d-none d-sm-table-cell text-center">Cantidad canje</th>

    <th class="d-none d-sm-table-cell text-center">Marca de secos</th>
    <th class="d-none d-sm-table-cell text-center">Codigo de secos</th>
    <th class="d-none d-sm-table-cell text-center">Cantidad producto seco</th>
    <th class="d-none d-sm-table-cell text-center">Monto producto seco</th>
    <th class="d-none d-sm-table-cell text-center">Marca humedo</th>
    <th class="d-none d-sm-table-cell text-center">Producto humedo</th>
    <th class="d-none d-sm-table-cell text-center">Cantidad producto humedo</th>
    <th class="d-none d-sm-table-cell text-center">Monto producto humedo</th>

    <th class="d-none d-sm-table-cell text-center">Marca biscuit</th>
    <th class="d-none d-sm-table-cell text-center">Producto biscuit</th>
    <th class="d-none d-sm-table-cell text-center">Cantidad producto biscuit</th>
    <th class="d-none d-sm-table-cell text-center">Monto producto biscuit</th>

    <th class="d-none d-sm-table-cell text-center">Marca higiene</th>
    <th class="d-none d-sm-table-cell text-center">Producto higiene</th>
    <th class="d-none d-sm-table-cell text-center">Cantidad producto higiene</th>
    <th class="d-none d-sm-table-cell text-center">Monto producto higiene</th>

  </tr>
  </thead>
  <tbody>
    @foreach($canjes as $canje)
    <tr>
      <td class="d-none d-sm-table-cell text-center">
        {{$canje->worker()->city}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$canje->fecha_gestion}}
      </td>
      <td class="d-none d-sm-table-cell text-center">
        {{$canje->turno}}
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
        @if($canje->business() == null)
          {{$canje->business_id}}
        @else
          {{$canje->business()->tamanio_negocio}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell text-center">
        @if($canje->business() == null)
          {{$canje->business_id}}
        @else
          {{$canje->business()->contacto_puesto}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell text-center">
        @if($canje->business() == null)
          {{$canje->business_id}}
        @else
          {{$canje->business()->nombre_comercial_mercado}}
        @endif
      </td>
      <td></td>
      <td></td>

      <td class="d-none d-sm-table-cell text-center">
        @if($canje->canje() == null)
          Venta sin canje
        @else
          {{$canje->canje()->marca}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell text-center">
        @if($canje->canje() == null)
          Venta sin canje
        @else
          {{$canje->canje()->descripcion}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell text-center">
        @if($canje->canje() == null)
          Venta sin canje
        @else
          {{$canje->canje()->codigo}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell text-center">
        @if($canje->canje() == null)
          Venta sin canje
        @else
          {{$canje->canje()->escala}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        @if($canje->canje() == null)
          Venta sin canje
        @else
          {{$canje->q_merch}}
        @endif
      </td>

      <td class="d-none d-sm-table-cell">
        @if ($canje->productoSeco() == null)
          No vendio seco
        @else
          {{$canje->productoSeco()->marca}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        @if ($canje->productoSeco() == null)
          No vendio seco
        @else
          {{$canje->productoSeco()->nombre}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        @if ($canje->productoSeco() == null)
          No vendio seco
        @else
          {{$canje->q_producto}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">

      </td>

      <td class="d-none d-sm-table-cell">
        @if ($canje->productoHumedo() == null)
          No vendio humedo
        @else
          {{$canje->productoHumedo()->marca}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        @if ($canje->productoHumedo() == null)
          No vendio humedo
        @else
          {{$canje->productoHumedo()->nombre}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        @if ($canje->productoHumedo() == null)
          No vendio humedo
        @else
          {{$canje->q_producto}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">

      </td>

      <td class="d-none d-sm-table-cell">
        @if ($canje->productoBiscuit() == null)
          No vendio Biscuit
        @else
          {{$canje->productoBiscuit()->marca}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        @if ($canje->productoBiscuit() == null)
          No vendio Biscuit
        @else
          {{$canje->productoBiscuit()->nombre}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        @if ($canje->productoBiscuit() == null)
          No vendio Biscuit
        @else
          {{$canje->q_producto}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">

      </td>

      <td class="d-none d-sm-table-cell">
        @if ($canje->productoHigiene() == null)
          No vendio Higiene
        @else
          {{$canje->productoHigiene()->marca}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        @if ($canje->productoHigiene() == null)
          No vendio Higiene
        @else
          {{$canje->productoHigiene()->nombre}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">
        @if ($canje->productoHigiene() == null)
          No vendio Higiene
        @else
          {{$canje->q_producto}}
        @endif
      </td>
      <td class="d-none d-sm-table-cell">

      </td>

    </tr>
    @endforeach
  </tbody>
</table>
