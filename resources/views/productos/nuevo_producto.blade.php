@extends('layouts.app')
@section('content')

<div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i style="font-size:2.5em" class="material-icons">apps</i>
  </a>
  <ul>
    <li><a href="#calculadora" class="btn-floating red modal-trigger"><i class="material-icons tooltipped blue-grey darken-4" data-position="left" data-tooltip="Calcular Proporción">exposure</i></a></li>
    <!--li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li-->
  </ul>
</div>

<div class="row">
  <center>

    <div class="col s12 m12 l8 offset-l2 lx12">
      <div class="card-panel">
        <div class="card-image z-depth-3">
          <h5 style="padding: 2%;" class="center-align teal lighten-1 white-text text-darken-2">Registrar Producto Nuevo</h5>
        </div>
        <form action="{{asset('crear_insumo')}}" method="post" class="row">@csrf
          <div class="col s12">
            <div class=" input-field col s12">
              <input name="nombre" type="text" class="validate tooltipped" data-position="bottom" data-tooltip="Hilo, Barra de Silicon, Tela, etc" data-delay="50" required>
              <label>Nombre del producto</label>
            </div>
          </div>

        </form>

      </div>
    </div>
  </center>
</div>
<div id="calculadora" class="modal">
    <div class="modal-content">
      <center>
        <div class="card-image z-depth-3">
          
          <h5 style="padding:1%;" class="center-align teal lighten-1 white-text text-darken-2">Calcular Proporción</h5>
        </div>
      </center>
      <br><br>
        <div class="row">
          Esta calculadora esta diseñada para <b style="color:#ee6e73">unidades de insumo</b> que se utilicen para mas de una <b style="color:blue">unidad de producto</b> (tela, silicon, etc).
        </div>
        <hr><br>
        <div class="row">
          <div class="col s12 m12 l6 lx12" style="border-right: solid;border-right-width: 1px;border-color: lightgrey">
            Nombre o Costo del insumo
            @if(count($insumos)>0)
              <input list="insumos" id="modal_costo_insumo" class="calcular">
              <datalist id="insumos">
                @foreach($insumos as $num_insumo => $val_insumo)
                  <option value="{{$val_insumo->costo}}">{{$val_insumo->nombre}}</option>
                @endforeach
              </datalist>
            @else
            <br>
            <center>
              No hay insumos para realizar calculos
            </center>
            @endif
          

            ¿Con una sola <b style="color:#ee6e73">unidad de este insumo</b> cuántas <b style="color:blue">unidades de prodcto</b> se obtienen?
            <input class="validate input-number calcular" id="modal_cantidad_unidades" type="number" value="1">
          </div>
          
            
          <div class="col s12 m12 l6 lx12">
            <center>
              Por <b>unidad de producto</b> se gastan <b><span id="costo_por_unidad">0</span></b> Bs<br>
              Proporción del insumo para una <b>unidad de producto:</b> <b><span id="proporcion">0</span></b><br>

            </center>
          </div>
        </div>

    </div>
</div>
@endsection
@section('scriptJs')
  <script src="{{asset('js/nuevo_producto.js')}}"></script>
@endsection