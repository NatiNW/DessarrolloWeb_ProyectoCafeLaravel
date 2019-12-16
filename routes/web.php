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

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/preguntasFrecuentes', function () {
    return view('preguntasFrecuentes');
});

Route::get('/listadoProductos','ProductosController@listado');

Route::get('/detalleProducto/{id}','ProductosController@detalle');

Route::get('/baja','ProductosController@baja')->middleware('isAdmin');

Route::post('/baja','ProductosController@eliminarProducto')->middleware('isAdmin');

Route::get('/alta','ProductosController@alta')->middleware('isAdmin');

Route::post('/alta','ProductosController@agregarProducto')->middleware('isAdmin');

Route::get('/modificacion','ProductosController@modificacion')->middleware('isAdmin');

Route::get('/modificacion/{id}', 'ProductosController@modificar')->middleware('isAdmin');



Route::get('/usuario','usuariosController@listado');

Route::get('/carrito','carritoController@listado');

Route::get('/categoria','categoriaController@listado');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
