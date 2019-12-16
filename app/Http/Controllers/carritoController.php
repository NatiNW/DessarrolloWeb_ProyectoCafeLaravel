<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Carrito;

class carritoController extends Controller
{
  public function listar(){
    $listado = Carrito::where('id_usuario',Auth::user()->id)->get();
    return view('tienda',compact('listado'));
  }
  public function agregar(Request $form,$id){
    $idUsuario = Auth::user()->id;
    $idProducto = $id;

    $carrito = new Carrito();
    $carrito->id_usuario = $idUsuario;
    $carrito->id_producto = $idProducto;
    $carrito->cantidad = 1;

    $carrito->save();

    return redirect('/');

  }

}
