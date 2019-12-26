
@extends('plantilla')
@section('tienda')



<div class="container">
<h2 class="mb-3"><i class="fas fa-shopping-cart"></i> Carrito</h2>
<table class="table table-hover">
    <head>
        <th>Producto</th>
        <th>Foto</th>
        <th>Cantidad</th>
        <th>Precio por Unidad</th>
        <th>Modificar</th>
    </head>
    <tbody>
      @foreach($listado as $producto)
      <tr>
        <td>{{$producto->producto->nombreProducto}}</td>
        <td><img src="/storage/{{$producto->producto->foto}}"></td>
        <td>{{$producto->cantidad}}</td>
        <td>{{$producto->producto->precio}}</td>
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
     <tr>
       <td></td>
       <td></td>
       <td>Total Compra:</td>
       <td></td>
       <td></td>
     </tr>
    </tbody>
</table>

<form action="#" >
    <button class="btn btn-dark" type="submit">Pagar</button>
</form>
</div>

@endsection
