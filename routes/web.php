<?php

Route::get('/', function () {
  return view('presentacion');

Route::get('/productos','productosController@listado');
//function () {
  //  return view('productos');
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

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/usuario','usuariosController@listado');

Route::get('/carrito','carritoController@listado');

Route::get('/categoria','categoriaController@listado');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
