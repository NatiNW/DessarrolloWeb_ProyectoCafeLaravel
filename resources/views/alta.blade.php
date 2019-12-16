@extends('plantilla')
@section('admin')


<div class="row carga">
  <div class="col-12 carga-de-productos">
    <h3>Carga de nuevos productos</h3>

    <div class="form-group">

    <form class="" action="alta" method="post"  enctype="multipart/form-data">
        @csrf
        <label for="nombre_del_producto">Nombre del Producto:</label>
        <input type="text" name="nombre_producto" value="">
        @error('nombre_producto')
        <strong style="color:red">

         {{$message}}
       </strong>
        @enderror
      </div>
      <small style="color:red"></small>
      <div class="form-group">

          <label for="precio">Precio:</label>
          <input type="text" name="precio" value="">
          @error('precio')
          <strong style="color:red">
           {{$message}}
         </strong>
          @enderror
        </div>
        <small style="color:red"> </small>
        <div class="form-group">

            <label for="stock">Stock:</label>
            <input type="text" name="stock" value="">
            @error('stock')
            <strong style="color:red">
             {{$message}}
           </strong>
            @enderror
          </div>
          <small style="color:red"> </small>
      <div class="form-group">
        <label for="foto_del_producto">Subir Foto:</label>
                <input type="file" id="foto-de-producto" name="foto">
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
      <label for="descripcion_del_producto">Descripción del Producto:</label>
      </p>
          <textarea name="descripcion" class= "form-control" value=""></textarea>
          @error('descripcion')
          <strong style="color:red">
           {{$message}}
         </strong>
          @enderror
        </div>
        <small style="color:red"> </small>
        <div class="form-group">
        </div>
        <button type="submit" name="button">Enviar</button>

    </form>

  </div>

</div>
@endsection
