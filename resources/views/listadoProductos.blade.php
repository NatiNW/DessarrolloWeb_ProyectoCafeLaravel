@extends('plantilla')

@section('principal')
  <link rel="stylesheet" href="/css/productos.css">



<div class="container productos">

  <div class="">
  <h2>Descafeinados</h2>
  <div class="row inicio-lista-1">

  @foreach ($productosDescafeinados as $producto)

  <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
  <h3>{{ $producto['nombreProducto'] }}</h3>
  <h4>{{ $producto['descripcion'] }}</h4>
	<div class="">
  <img src="/storage/{{ $producto->foto }}" alt="">
    <button type="button" class="btn btn-ttc"><a href="/detalleProducto/{{$producto->id}}" role="button">Ver Mas!</a></button>
  </div>
	</div>

  @endforeach
</div>
</div>

<div class="">
<h2>Cortos</h2>
<div class="row inicio-lista-1">

@foreach ($productosCorto as $producto)

<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
<h3>{{ $producto['nombreProducto'] }}</h3>
<h4>{{ $producto['descripcion'] }}</h4>
<div class="">
<img src="/storage/{{ $producto->foto }}" alt="">
  <button type="button" class="btn btn-ttc"><a href="/detalleProducto/{{$producto->id}}" role="button">Ver Mas!</a></button>
</div>
</div>

@endforeach

</div>
</div>

<div class="">
<h2>Largos</h2>
<div class="row inicio-lista-1">

@foreach ($productosLargo as $producto)

<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
<h3>{{ $producto['nombreProducto'] }}</h3>
<h4>{{ $producto['descripcion'] }}</h4>
<div class="">
<img src="/storage/{{ $producto->foto }}" alt="">
  <button type="button" class="btn btn-ttc"><a href="/detalleProducto/{{$producto->id}}" role="button">Ver Mas!</a></button>
</div>
</div>

@endforeach

</div>
</div>

</div>




@endsection
