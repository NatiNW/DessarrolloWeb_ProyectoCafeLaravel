<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriaController extends Controller
{
  public function listadoCategoria(){
    $productos = producto::all();
    return view ('listadoCategoria', compact ('productos'));
  }
  }
