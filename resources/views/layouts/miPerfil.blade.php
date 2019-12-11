@extends('plantilla')
@section('principal')

  <div class="row perfil">
    <div class="col-12 miperfil">
      {{Auth::user()->email}}
    </div>
    <div class="col-12">
      <img src="/storage/{{Auth::user()->avatar}}" alt="">
    </div>

  
  </div>

@endsection
