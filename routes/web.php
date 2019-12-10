<?php

Route::get('/', function () {
  return view('presentacion');
 });
<<<<<<< HEAD
Route::get('/productos','productosController@listado');
//function () {
  //  return view('productos');
});
=======


>>>>>>> 258994c299af1cd04a6aa35fba7d97724def293d
Route::get('/tienda', function () {
    return view('tienda');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/preguntasFrecuentes', function () {
    return view('preguntasFrecuentes');
});

Route::get('/contacto', function () {
    return view('contacto');
});

<<<<<<< HEAD
Route::get('/usuario','usuariosController@listado');

Route::get('/carrito','carritoController@listado');

Route::get('/categoria','categoriaController@listado');

=======
>>>>>>> 258994c299af1cd04a6aa35fba7d97724def293d
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
