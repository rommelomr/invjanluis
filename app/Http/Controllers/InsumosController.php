<?php

namespace App\Http\Controllers;

use App\Insumo;
use Illuminate\Http\Request;

class InsumosController extends Controller
{
    public function insumos(){
    	 $insumos = Insumo::where('estado','a')->paginate(10);
    	 $medidas = Insumo::select('unidad_medida')->distinct()->get();
    	return view('insumos.insumos',['insumos'=>$insumos,'medidas'=>$medidas]);
    }
    public function crearInsumo(Request $req){
    	$insumo = new Insumo;
    	$req->validate([
    		'nombre'=>'required|unique:insumos',
    		'unidad_medida'=>'required',
    		'cantidad_base'=>'integer|required',
    		'costo'=>'integer|required',
    	]);
    	$insumo->nombre = $req->nombre;
    	$insumo->unidad_medida = $req->unidad_medida;
    	$insumo->cantidad_base = $req->cantidad_base;
    	$insumo->costo = $req->costo;
    	//$insumo->estado = 'a';
    	$insumo->save();
    	
    	return redirect()->back();
    }
    public function desactivarInsumo(Request $insumo){
    	$insumo = Insumo::find($insumo->id_insumo);
    	$insumo->estado = 'i';
    	$insumo->save();
    	return redirect()->back();
    }
    public function editarInsumo(Request $insumo){

    	$new_insumo = Insumo::find($insumo->id_insumo);
    	$new_insumo->nombre = $insumo->nombre;
    	$new_insumo->unidad_medida = $insumo->unidad_medida;
    	$new_insumo->cantidad_base = $insumo->cantidad_base;
    	$new_insumo->costo = $insumo->costo;
    	
    	$new_insumo->save();

    	return redirect()->back();
    }

}
