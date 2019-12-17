@extends('plantilla')
@section('principal')

  <div class="row perfil">
    <div class="col-12 miperfil">
      <h2>Usuario</h2>
      <h3>{{Auth::user()->name}}</h3>
      <h3>{{Auth::user()->email}}</h3>
    </div>
    <div class="col-12">
      <img src="/storage/{{Auth::user()->avatar}}" alt="">
    </div>
    <div class="">
      <form class="" action="miPerfil" method="post">
        
      </form>
    </div>


  </div>

@endsection
