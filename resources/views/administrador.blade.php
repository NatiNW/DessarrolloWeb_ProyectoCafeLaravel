@extends('plantilla')
@section('admin')

<div class="col-12 adminproductos">


  <h2>Administración de productos de Coffee Code</h2>

  <ul>
    <li class="nav-item">
      <a class="nav-link" href="{{url('alta')}}">Alta de Producto</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('baja')}}">Baja o Modificación de Producto</a>
    </li>

  </ul>

</div>

@endsection
