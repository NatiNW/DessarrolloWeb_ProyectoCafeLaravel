@extends('plantilla')
@section('principal')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<div class="container">
<h2>Baja De Productos</h2>
<p>Para dar de baja un producto debe hacer clic en el botón Eliminar</p>
<table class="table table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Volluto Decaffeinato</td>
      <td><button type="button" class="btn btn-default">Eliminar</button></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Arpeggio Decaffeinato</td>
      <td><button type="button" class="btn btn-default">Eliminar</button></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Vivalto Lungo Decaffeinato</td>
      <td><button type="button" class="btn btn-default">Eliminar</button></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Spicy Intenso</td>
      <td><button type="button" class="btn btn-default">Eliminar</button></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Oscuro</td>
      <td><button type="button" class="btn btn-default">Eliminar</button></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Caramelito</td>
      <td><button type="button" class="btn btn-default">Eliminar</button></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Vivalto Lungo</td>
      <td><button type="button" class="btn btn-default">Eliminar</button></td>
    </tr>
    <tr>
      <td>8</td>
      <td>Linizio Lungo</td>
      <td><button type="button" class="btn btn-default">Eliminar</button></td>
    </tr>
    <tr>
      <td>9</td>
      <td>Linizio Lungo</td>
      <td><button type="button" class="btn btn-default">Eliminar</button></td>
    </tr>
  </tbody>
</table>
</div>

@endsection
