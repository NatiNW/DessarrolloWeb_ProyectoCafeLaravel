@extends('plantilla')

  <div class="row carga">
    <div class="col-12 carga-de-productos">
      <h3>Baja de productos</h3>

      <div class="form-group">

      <form class="" action="baja_de_productos.php" method="post">

          <label for="nombre_del_producto">Nombre del Producto:</label>
          <input type="text" name="nombre_producto" value="<?=$nombreProducto?>">
        </div>

          <button type="submit" name="button">Enviar</button>

      </form>

    </div>

  </div>
