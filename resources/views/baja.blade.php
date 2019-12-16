@extends('plantilla')
@section('principal')
  <link rel="stylesheet" href="/css/productos.css">

  <div class="container productos">

  <div class="">

  <div class="row inicio-lista-1">

  @foreach ($productos as $producto)

  <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <h2>{{ $producto['categoria'] }}</h2>
        <h3>{{ $producto['nombreProducto'] }}</h3>
        <h4>{{ $producto['descripcion'] }}</h4>
  <div class="">
        <img src="/storage/{{ $producto->foto }}" alt="">
  </div>
  <div class="">
    <form action="baja" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$producto->id}}">
                    <button type="submit"class="btn btn-ttc" name="baja">Borrar</button>
    </form>
  </div>
  <div class="">
    <form action="/modificacion/{{$producto->id}}" method="get">
                    <input type="hidden" name="id" value="{{$producto->id}}">
                    <button type="submit" class="btn btn-ttc" name="modificar">Modificar</button>
  </form>

  </div>
  </div>

  @endforeach
  </div>
  </div>
  </div>

@endsection
