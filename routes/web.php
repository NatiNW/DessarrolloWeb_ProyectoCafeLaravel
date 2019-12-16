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

Route::get('/baja','ProductosController@baja');//->middleware('isAdmin');;

Route::post('/baja','ProductosController@eliminarProducto');//->middleware('isAdmin');;

Route::get('/productos','ProductosController@listado');

Route::get('/alta','ProductosController@alta');//->middleware('isAdmin');;

Route::post('/alta','ProductosController@agregarProducto');//->middleware('isAdmin');

Route::get('/usuario','usuariosController@listado');

Route::get('/carrito','carritoController@listado');

Route::get('/categoria','categoriaController@listado');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
