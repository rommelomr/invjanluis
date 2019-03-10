<?php

namespace App\Http\Controllers;
use App\Insumo;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function productos()
    {
    	return view('productos.productos');
    }
    public function nuevoProducto()
    {
    	$insumos = Insumo::where('estado','a')->get();
    	return view('productos.nuevo_producto',['insumos'=>$insumos]);
    }

}
