@extends('plantilla')
@section('admin')

  <link rel="stylesheet" href="/css/productos.css">

  <div class="container productos">

  @foreach ($productos as $producto)

  <div class="">
  <h2>{{ $producto['categoria']}}</h2>
  <div class="row inicio-lista-1">

  <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
  <h3>{{ $producto['nombreProducto'] }}</h3>
  <h4>{{ $producto['descripcion'] }}</h4>
  <div class="">
  <img src=src="/storage/{{ $producto->foto }}" alt="">
    <button type="button" class="btn btn-ttc"><a href={{ url("/detalleProducto/{$producto->id}") }} role="button">Ver Mas!</a></button>
</div>
<div class="">
                  <form action="/borrar" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$producto->id}}">
                    <button type="submit"class="btn btn-ttc" name="borrate"></i> Borrar</button>
                  </form>

          </div>
  @endforeach
</div>
</div>







@endsection
