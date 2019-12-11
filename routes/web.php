<?php

Route::get('/', function () {
  return view('presentacion');
 });

Route::get('/tienda', function () {
    return view('tienda');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/preguntasFrecuentes', function () {
    return view('preguntasFrecuentes');
});

Route::get('/baja','ProductosController@baja');

Route::post('/baja','ProductosController@eliminarProducto');

Route::get('/productos','ProductosController@listado');

Route::get('/alta','ProductosController@alta');

Route::post('/alta','ProductosController@agregarProducto');

Route::get('/usuario','usuariosController@listado');

Route::get('/carrito','carritoController@listado');

Route::get('/categoria','categoriaController@listado');

<<<<<<< HEAD
=======


>>>>>>> 61d67a1233f8d86a3fe234e0341dd4cfc2e0409c
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
