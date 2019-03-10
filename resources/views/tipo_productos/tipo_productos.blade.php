@extends('layouts.app')
@section('content')
  <div class="row">
    
    <div class="col s12 m12 l5 lx12">
      <div class="card-panel">
        <div class="card-image z-depth-3">
          <h5 style="padding: 2%;" class="center-align teal lighten-1 white-text text-darken-2">Nueva Categoría</h5>
        </div>
        <form action="{{asset('crear_tipo_producto')}}" method="post" class="row">@csrf
          <div class="col s12">
            <div class=" input-field col s12">
              <input name="nombre" type="text" class="validate tooltipped" data-position="bottom" data-tooltip="Hilo, Barra de Silicon, Tela, etc" data-delay="50" required>
              <label>Nombre de la categoría</label>
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
          <h5 style="padding: 2%;" class="center-align teal lighten-1 white-text text-darken-2">Categorías Registradas</h5>
        </div>
          <table class="striped highlight responsive-table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Opciones</th>

              </tr>
            </thead>
            <tbody>
              @forelse($tipo_productos as $num_tipo_producto => $val_tipo_producto)
                <tr>
                  <th>{{$val_tipo_producto->nombre}}</th>
                  <th>
                    <a id_tipo_producto="{{$val_tipo_producto->id}}" nombre="{{$val_tipo_producto->nombre}}" style="color:#26a69a" href="#editar" class="modal-trigger editar">
                      
                      <i class="material-icons">create</i>
                    </a>
                    <a style="color:#e57373" href="#eliminar" class="modal-trigger delete" id_tipo_producto="{{$val_tipo_producto->id}}" nombre_tipo_producto="{{$val_tipo_producto->nombre}}">
                      <i class="material-icons">delete</i>
                    </a>
                  </th>
                </tr>
              @empty
              <tr>
                
                <th colspan="5">
                  
                  <center>No hay tipos de producto registrados</center>
                </th>
              </tr>
              @endforelse
            </tbody>
          </table>
          <center>
            
            {{$tipo_productos->links()}}
          </center>
      </div>
    </div>
  </div>

 <div id="eliminar" class="modal">
    <div class="modal-content">
      <p>¿Seguro que desea eliminar "<span id="tipo_producto_a_eliminar"></span>" de los tipos de producto?</p>
      <p>Esta accion no se puede deshacer</p>
    </div>
    <div class="modal-footer">
      <form action="{{asset('/desactivar_tipo_producto')}}" method="post">
        @csrf
        <input hidden id="id_tipo_producto" name="id_tipo_producto">
        <button class="btn">Aceptar</button>
        <div href="#!" class="modal-close btn red lighten-2">Cancelar</div>
      </form>
    </div>
  </div>
<div id="editar" class="modal">
    <div class="modal-content">
      <center>
        <div class="card-image z-depth-3">
          
          <h5 style="padding:1%;" class="center-align teal lighten-1 white-text text-darken-2">Editar tipo_producto</h5>
        </div>
      </center>

      <form action="{{asset('/editar_tipo_producto')}}" method="post">
        @csrf
        <input hidden id="editar_id_tipo_producto" name="id_tipo_producto">
          <label>Nombre del tipo de producto</label>
        
          <input id="editar_nombre" class="form-control validate" type="text" name="nombre">

        <center>
          
          <button class="btn">Aceptar</button>
          <div href="#!" class="modal-close btn red lighten-2">Cancelar</div>
        </center>
      </form>
    </div>
</div>

@endsection
@section('scriptJs')
  <script src="{{asset('js/tipo_productos.js')}}"></script>
@endsection
