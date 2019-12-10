@extends('plantilla')
@section('principal')

@csrf
<div class="row carga">
  <div class="col-12 carga-de-productos">
    <h3>Carga de nuevos productos</h3>

    <div class="form-group">

    <form class="" action="carga_de_productos.php" method="post"  enctype="multipart/form-data">

        <label for="nombre_del_producto">Nombre del Producto:</label>
        <input type="text" name="nombre_producto" value="<?=$nombreProducto?>">
      </div>
      <small style="color:red"><?= $errorNombreProducto ?? '' ?> </small>
      <div class="form-group">

          <label for="precio">Precio:</label>
          <input type="text" name="precio" value="<?=$precio?>">
        </div>
        <small style="color:red"><?= $errorPrecio ?? '' ?> </small>
        <div class="form-group">

            <label for="precio">Stock:</label>
            <input type="text" name="stock" value="<?=$stock?>">
          </div>
          <small style="color:red"><?= $errorStock ?? '' ?> </small>
      <div class="form-group">
        <label for="foto_del_producto">Subir Foto:</label>
                <input type="file" id="foto-de-producto" name="foto">
              </div>
              <small style="color:red"><?= $errorFoto ?? '' ?> </small>
        <div class="form-group">
          <label for="categoria_del_producto">Categoría:</label>
          <select class="" name="categoria" value="<?=$categoria?>">

            <option value="descafeinado">Descafeinado</option>
            <option value="largo">Largo</option>
            <option value="corto">Corto</option>
          </select>
        </div>
      <div class="form-group">
        <p>
      <label for="descripcion_del_producto">Descripción del Producto:</label>
      </p>
          <textarea name="descripcion" class= "form-control" value="<?=$descripcion?>"></textarea>
        </div>
        <small style="color:red"><?= $errorDescripcion ?? '' ?> </small>
        <div class="form-group">
        </div>
        <button type="submit" name="button">Enviar</button>

    </form>

  </div>

</div>
@endsection
