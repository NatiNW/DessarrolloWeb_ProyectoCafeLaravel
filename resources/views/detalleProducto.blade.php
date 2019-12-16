@extends('plantilla')

@section('principal')
  <link rel="stylesheet" href="/css/productos.css">


<div class="container productos">

  <div class="">

  <div class="row detalleProducto">

  <div class="">
  <h2>{{ $producto->categoria}}</h2>
  <h3>{{ $producto->nombreProducto}}</h3>
  <h4>{{ $producto->descripcion }}</h4>
  <p class="">Precio: ${{ $producto->precio}}</p>
	<div class="detalleCarrito">
  <img src="/storage/{{ $producto->foto }}" alt="">
  @guest
  <p>Debe estar registrado para agregar el producto.</p>
  @else
  <form action="/agregarACarrito/{{ $producto->id }}" method='POST' >
    @csrf
    <button class="btn btn-ttc" type="submit"><i class="fas fa-shopping-cart"></i> Agregar</button>
  </form>
  @endGuest
  </div>
  


</div>
</div>
</div>
</div>
@endsection
