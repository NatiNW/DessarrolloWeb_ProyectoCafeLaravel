<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
  public function listado(){
    $productos = Producto::all();
    return view ('productos', compact ('productos'));
  }
  public function alta(){
    return view('alta');
  }
  public function baja(){
    return view('baja');
  }

public function agregarProducto(Request $req)
      {
          $reglas = [
              'nombre_producto' => 'required|string|min:2',
              'descripcion' => 'required|string|max:100',
              'precio' => 'required|numeric|min:1',
              'stock' => 'integer|min:1',
              'foto' => 'required',
              'categoria' => 'required',
          ];
          $mensajes = [
              'nombre_producto.required' => 'El Nombre es necesario',
              'nombre_producto.string' => 'El Nombre debe tener letras',
              'nombre_producto.min' => 'El Nombre al menos debe tener 2 letras',
              'numeric' => 'Debe ser un numero, con separador decimal punto',
              'integer' => 'Debe ser un numero',
              'required' => 'Es requerido',
              'min' => 'Al menos debe tener :min cantidad',
              'max' => 'Hasta un maximo de :max'
          ];
          $this->validate($req, $reglas, $mensajes);
          $productos = new Producto;
          $productos->nombreProducto = $req->nombre_producto;
          $productos->descripcion = $req->descripcion;
          $productos->precio = $req->precio;
          $productos->stock = $req->stock;
          $productos->foto = $req->foto;
          $productos->categoria = $req->categoria;
          $productos->save();
          return redirect('/productos');
      }
}
