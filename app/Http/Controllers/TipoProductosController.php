<?php

namespace App\Http\Controllers;

use App\TipoProducto;
use Illuminate\Http\Request;

class TipoProductosController extends Controller
{
    public function tipoProductos(){
    	$tipo_productos = TipoProducto::where('estado','a')->paginate(10);
    	return view('tipo_productos.tipo_productos',['tipo_productos'=>$tipo_productos]);
    }
    public function crearTipoProducto(Request $tipo_producto){
    	$new_tipo_producto = new TipoProducto;
    	$new_tipo_producto->nombre = $tipo_producto->nombre;
    	$new_tipo_producto->estado = 'a';
    	$new_tipo_producto->save();
    	return redirect()->back();
    }
    public function desactivarTipoProducto(Request $tipo_producto){
    	$tipo_producto = TipoProducto::find($tipo_producto->id_tipo_producto);
    	$tipo_producto->estado = 'i';
    	$tipo_producto->save();
    	return redirect()->back();
    }
    public function editarTipoProducto(Request $tipo_producto){

    	$new_tipo_producto = TipoProducto::find($tipo_producto->id_tipo_producto);
    	$new_tipo_producto->nombre = $tipo_producto->nombre;
    	$new_tipo_producto->save();

    	return redirect()->back();
    }
}
