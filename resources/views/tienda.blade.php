
@extends('plantilla')
@section('tienda')



<div class="container">
  @if (count ($listado))


<h2 class="mb-3"><i class="fas fa-shopping-cart"></i> Carrito</h2>

<table class="table table-hover">
    <head>
        <th>Producto</th>
        <th>Foto</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Subtotal</th>
        <th>Modificar</th>
    </head>
    <tbody>
      @foreach($listado as $producto)
      <tr>
        <td>{{$producto->producto->nombreProducto}}</td>
        <td><img src="/storage/{{$producto->producto->foto}}"></td>
        <td>{{$producto->cantidad}}</td>
        <td>{{$producto->producto->precio}}</td>
        <td>{{$producto->producto->precio * $producto->cantidad}}</td>
        <td>
        <form action="/eliminarDelCarrito/{{ $producto->id }}">
          <button class="btn btn-primary btn-circle btn-sm" type="submit">Eliminar</button>
        </form>
        <form action="/restarUnaUnidad/{{ $producto->id }}">
          <button class="btn btn-primary btn-circle btn-sm" type="submit"><i class="fas fa-minus"></i></button>
        </form>
        <form action="/sumarUnaUnidad/{{ $producto->id }}">
          <button class="btn btn-primary btn-circle btn-sm" type="submit"><i class="fas fa-plus"></i></button>
        </form>
        </td>
      </tr>

    @endforeach

    </tbody>
</table><hr>
<h3>
  <span class="label label-success">
    Total: ${{$total}}
  </span>
</h3>

<form action="#" >
    <button class="btn btn-dark" type="submit">Pagar</button>
</form>
@else
<h3>No hay productos en el carrito</h3>
@endif
</div>

@endsection
