@extends('layouts.app')
@section('content')
  <div class="row">
    
    <div class="col s12 m12 l5 lx12">
      <div class="card-panel">
        <div class="card-image z-depth-3">
          <h5 style="padding: 2%;" class="center-align teal lighten-1 white-text text-darken-2">Nuevo Insumo</h5>
        </div>
        <form action="{{asset('crear_insumo')}}" method="post" class="row">@csrf
          <div class="col s12">
            <div class=" input-field col s12">
              <input name="nombre" type="text" class="validate tooltipped" data-position="bottom" data-tooltip="Hilo, Barra de Silicon, Tela, etc" data-delay="50" required>
              <label>Nombre del insumo</label>
            </div>
          </div>
          <div class="col s12">
            <div class=" input-field col s12">
              <input type="text" list="lista_unidades" name="unidad_medida" class="validate tooltipped" data-position="bottom" data-tooltip="cm, mt, barra, yardas, etc" data-delay="50" required>
              <datalist id="lista_unidades">
                @forelse($medidas as $num_medida => $val_medida)
                  <option value="{{$val_medida->unidad_medida}}">
                @empty
                @endforelse

              </datalist>
              <label>Unidad de Medida</label>
            </div>
          </div>
          <div class="col s12">
            <div class=" input-field col s12">
              <input name="cantidad_base" type="number" class="validate tooltipped input-number" data-position="bottom" data-tooltip="Unidad minima del insumo: 1 Barra, 1 Metro, etc" data-delay="50" required>
              <label>Cantidad base</label>
            </div>
          </div>
          <div class="col s12">
            <div class=" input-field col s12">
              <input name="costo" type="number" class="validate tooltipped input-number" data-position="bottom" data-tooltip="Unidad minima del insumo: 1 Barra, 1 Metro, etc" data-delay="50" required>
              <label>Costo</label>
            </div>
          </div>

            <div class="col 12 offset-l3">
              <center>
                <button class="btn"><i class="material-icons right">save</i>Guardar</button>
              </center>
            </div>

        </form>

      </div>
    </div>


    <div class="col s12 m12 l7 lx12">
      <div class="card-panel">
        <div class="card-image z-depth-3">
          <h5 style="padding: 2%;" class="center-align teal lighten-1 white-text text-darken-2">Insumos Registrados</h5>
        </div>
          <table class="striped highlight responsive-table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Medida</th>
                <th>Unidad mínima</th>
                <th>Costo</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              @forelse($insumos as $num_insumo => $val_insumo)
                <tr>
                  <th>{{$val_insumo->nombre}}</th>
                  <th>{{$val_insumo->unidad_medida}}</th>
                  <th>{{$val_insumo->cantidad_base}}</th>
                  <th>{{$val_insumo->costo}}</th>
                  <th>
                    <a id_insumo="{{$val_insumo->id}}" nombre="{{$val_insumo->nombre}}" unidad_medida="{{$val_insumo->unidad_medida}}" cantidad_base="{{$val_insumo->cantidad_base}}" costo="{{$val_insumo->costo}}" style="color:#26a69a" href="#editar" class="modal-trigger editar tooltipped" data-position="top" data-tooltip="Editar Insumo">
                      
                      <i class="material-icons">create</i>
                    </a>
                    <a style="color:#e57373" href="#eliminar" class="modal-trigger delete tooltipped" id_insumo="{{$val_insumo->id}}" nombre_insumo="{{$val_insumo->nombre}}" data-position="top" data-tooltip="Eliminar Insumo">
                      <i class="material-icons">delete</i>
                    </a>
                  </th>
                </tr>
              @empty
              <tr>
                
                <th colspan="5">
                  
                  <center>No hay Insumos registrados</center>
                </th>
              </tr>
              @endforelse
            </tbody>
          </table>
          <center>
            {{$insumos->links()}}
          </center>
      </div>
    </div>
  </div>

 <div id="eliminar" class="modal">
    <div class="modal-content">
      <p>¿Seguro que desea eliminar "<span id="insumo_a_eliminar"></span>" de los insumos?</p>
      <p>Esta accion no se puede deshacer</p>
    </div>
    <div class="modal-footer">
      <form action="{{asset('/desactivar_insumo')}}" method="post">
        @csrf
        <input hidden id="id_insumo" name="id_insumo">
        <button class="btn">Aceptar</button>
        <div href="#!" class="modal-close btn red lighten-2">Cancelar</div>
      </form>
    </div>
  </div>
 <div id="editar" class="modal">
    <div class="modal-content">
      <center>
        <div class="card-image z-depth-3">
          
          <h5 style="padding:1%;" class="center-align teal lighten-1 white-text text-darken-2">Editar insumo</h5>
        </div>
      </center>

      <form action="{{asset('/editar_insumo')}}" method="post">
        @csrf
        <input hidden id="editar_id_insumo" name="id_insumo">
          <label>Nombre del insumo</label>
        
          <input id="editar_nombre" class="form-control validate" type="text" name="nombre">
        
          <label>Unidad de Medida</label>
        
          <input id="editar_unidad_medida" class="form-control validate" type="text" name="unidad_medida">
        
          <label>Cantidad base</label>
        
          <input id="editar_cantidad_base" class="form-control validate input-number" type="number" name="cantidad_base">
        
          <label>Costo</label>
        
          <input id="editar_costo" class="form-control validate input-number" type="number" name="costo">
        
        <center>
          
          <button class="btn">Guardar</button>
          <div href="#!" class="modal-close btn red lighten-2">Cancelar</div>
        </center>
      </form>
    </div>
  </div>

@endsection
@section('scriptJs')
  <script src="{{asset('js/insumos.js')}}"></script>
@endsection
