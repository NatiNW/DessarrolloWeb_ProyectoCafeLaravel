@extends('plantilla')

@section('principal')

  <div class="row carga">
    <div class="col-12 carga-de-productos">
      <h3>{{ 'Modificar' }} {{$producto->nombreProducto}}</h3>

      <div class="form-group">

      <form class="" action="{{ url('modificarProducto') }}" method="post"  enctype="multipart/form-data">
          @csrf
          <label for="nombre_del_producto">{{'Nombre del Producto:'}}</label>
          <input type="text" name="nombre_producto" value="{{$producto->nombreProducto}}" required autocomplete="nombre_producto">
          @error('nombre_producto')
          <strong style="color:red">

           {{$message}}
         </strong>
          @enderror
        </div>
        <small style="color:red"></small>

        <input type="hidden" name="id" value="{{$producto->id}}">

        <div class="form-group">

            <label for="precio">{{'Precio:'}}</label>
            <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror" name="precio" required autocomplete="precio" value="{{$producto->precio}}">
            @error('precio')
            <strong style="color:red">
             {{$message}}
           </strong>
            @enderror
          </div>
          <small style="color:red"> </small>
          <div class="form-group">

              <label for="stock">Stock:</label>
              <input id="stock" type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" required autocomplete="stock" value="{{$producto->stock}}">
              @error('stock')
              <strong style="color:red">
               {{$message}}
             </strong>
              @enderror
            </div>
            <small style="color:red"> </small>
        <div class="form-group">
          <label for="foto_del_producto">{{'Subir Foto:'}}</label>
                  <input type="file" id="foto-de-producto" name="foto" class="form-control @error('foto') is-invalid @enderror" name="foto" autocomplete="foto">
                  @error('foto')
                  <strong style="color:red">
                   {{$message}}
                 </strong>
                  @enderror
                </div>
                <small style="color:red"> </small>
          <div class="form-group">
            <label for="categoria_del_producto">Categoría:</label>
            <select class="" name="categoria" value="">

              <option value="Descafeinado">Descafeinado</option>
              <option value="Largo">Largo</option>
              <option value="Corto">Corto</option>
            </select>
          </div>
        <div class="form-group">
          <p>
        <label for="descripcion_del_producto">{{'Descripción del Producto:'}}</label>
        </p>
            <textarea name="descripcion" class= "form-control" value="{{$producto->descripcion}}" name="descripcion" required autocomplete="descripcion"></textarea>
            @error('descripcion')
            <strong style="color:red">
             {{$message}}
           </strong>
            @enderror
          </div>
          <small style="color:red"> </small>
          <div class="form-group">
          </div>
          <div class="">
          <button type="submit" class="btn btn-ttc" value="agregarProducto">{{ __('Modificar') }}</button>
          </div>
      </form>

    </div>

  </div>

@endsection
