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

Route::get('/contacto', function () {
    return view('contacto');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
