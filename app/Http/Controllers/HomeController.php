<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use App\Asistencia;
use App\personas;
use App\Iva;
use App\Mantenimiento;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('home');
    }

    public function asistenciaAfiliado(){
        
        $fecha_actual = strtotime(date("Y-m-d"));
    
       $asistencia = Asistencia::orderBy('created_at', 'desc')->paginate(6);
        
         //$asistencia = Asistencia::paginate(3)->sortByDesc('created_at');
        
        foreach ($asistencia as $key => $value) {
           //Calcular fecha de registro
           $fechaReg = explode(' ', $value->personas->created_at);
           $fechaReg = $fechaReg[0];
           //Calcular Nro pagos
           $nroPagos = Mantenimiento::where('id_personas',$value->id_persona)->count();

           $nuevafecha = strtotime ( '+'.$nroPagos.' month' , strtotime ( $fechaReg )) ; 
           $nuevafecha =date ( 'Y-m-j' , $nuevafecha );

           if (strtotime($nuevafecha) > strtotime($value->created_at)) {
                $estadoMora = 'Solvente';
           }else{  
                $estadoMora = 'Mora';
           } 
        
           $value->fechaReg = $fechaReg;
           $value->nroPagos = $nroPagos;
           $value->estadoMora = $estadoMora;
           $value->fechaCobro = $nuevafecha;
        }


        return view('home', ['asistencia' => $asistencia]);
    }

    public function registrarAsistencia(Request $request){
        if (isset(personas::where('cedula',$request->buscar)->get()->first()->id)) {
            $persona = personas::where('cedula',$request->buscar)->get()->first()->id;

            $asistencia = new Asistencia;
            $asistencia->id_persona = $persona;
            $asistencia->save();


            return redirect()->back()->with('data', ['mensaje'=>'Asistencia marcada con éxito']);
        }

        return redirect()->back()->with('data', ['mensaje'=>'La cédula no corresponde a ningun afiliado ']);
        /*
        $persona = personas::where('cedula',$request->buscar)->get()->first()->id;
        $persona = personas::find($persona);

        dd($persona->asistencia);
        */
    }

    public function AfiliadoFactura($id){
      $personas = personas::find($id);
      $iva = Iva::all();
      $pdf = PDF::setOptions(['defaultFont' => 'sans-serif'])->loadView('pdf.factura', ['personas' => $personas, 'iva' => $iva->last()]);
      return $pdf->setPaper('a6')->stream('Factura de  '."$personas->nombre".'.pdf');
    }
 
}
