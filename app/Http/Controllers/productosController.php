<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
  public function listado(){
    $productosDescafeinados = Producto::where('categoria', '=', 'descafeinado')->get();
    $productosCorto = Producto::where('categoria', '=', 'corto')->get();
    $productosLargo = Producto::where('categoria', '=', 'largo')->get();
    $vac = compact('productosDescafeinados', 'productosCorto', 'productosLargo');
    return view ('listadoProductos', $vac);
  }


  public function detalle($id)
      {
          $producto = Producto::find($id);
          return view('detalleProducto',compact('producto'));
      }


  public function alta(){
    return view('alta');
  }
  public function baja(){
    return view('baja');
  }
  public function modificar(){
    return view('modificacion');
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

          $ruta = $req->file("foto")->store("public");
          $nombreArchivo = basename($ruta);

          $productos->nombreProducto = $req->nombre_producto;
          $productos->descripcion = $req->descripcion;
          $productos->precio = $req->precio;
          $productos->stock = $req->stock;
          $productos->foto = $nombreArchivo;
          $productos->categoria = $req->categoria;
          $productos->save();
          return redirect('/listadoProductos');
      }

      public function eliminarProducto(Request $req)
      {
        $producto = Producto::find($req["id"]);

        $producto->delete();
        return redirect('/listadoProductos');
      }



    public function modificarProducto(Request $req)
      {
        $producto = Producto::find($req["id"]);
        $producto->titulo = $req["titulo"];
        if($req->file("foto") != null){
          $ruta = $req->file("foto")->store("public");
          $nombreArchivo = basename($ruta);
          $producto->foto = $nombreArchivo;
        }
        $producto->descripcion = $req["descripcion"];
        $producto->precio = $req["precio"];
        $producto->stock = $req["stock"];
        $producto->save();
        return redirect('/modificacion');
      }
}
