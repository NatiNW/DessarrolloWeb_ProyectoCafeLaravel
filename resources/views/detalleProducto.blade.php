@extends('plantilla')

@section('principal')


<div class="container col-md-12">

  <div class="">
  <h2>{{ $producto->categoria}}</h2>
  <div class="row inicio-lista-1">

  <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
  <h3>{{ $producto->nombreProducto}}</h3>
  <h4>{{ $producto->descripcion }}</h4>
  <p class="">{{ $producto->precio}}</p>
	<div class="">
  <img src="/storage/{{ $producto->foto }}" alt="">
  <form action="/agregarACarrito/{{ $producto->id }}">
    <button class="btn btn-ttc" type="submit"><i class="fas fa-shopping-cart"></i> Agregar</button>
  </form>
  </div>
	</div>

  </div>

@endsection
