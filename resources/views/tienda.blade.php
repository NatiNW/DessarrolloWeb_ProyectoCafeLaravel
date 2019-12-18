
@extends('plantilla')
@section('tienda')



<div class="container">
<h2 class="mb-3"><i class="fas fa-shopping-cart"></i> Carrito</h2>
<table class="table table-hover">
    <head>
        <th>Articulo</th>
        <th>Cantidad</th>
        <th>Modificar</th>
    </head>
    <tbody>
      @foreach($listado as $producto)
      <tr>
        <td>{{$producto->producto->nombreProducto}}</td>
        <td>{{$producto->cantidad}}</td>
        <td>
        <form action="">
          <button class="btn btn-primary btn-circle btn-sm" type="submit"><i class="" color:marron></i>Eliminar</button>
        </form>
        <form action="">
          <button class="btn btn-primary btn-circle btn-sm" type="submit"><i class="fas fa-minus"></i></button>
        </form>
        <form action="">
          <button class="btn btn-primary btn-circle btn-sm" type="submit"><i class="fas fa-plus"></i></button>
        </form>
        </td>
      </tr>
    @endforeach
    </tbody>
</table>

<form action="#" >
    <button class="btn btn-dark" type="submit">Pagar</button>
</form>
</div>

@endsection
