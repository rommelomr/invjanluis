@extends('layouts.app')
@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('css/productos.css')}}">
@endsection()

@section('content')

<div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i style="font-size:2.5em" class="material-icons">apps</i>
  </a>
  <ul>
    <li><a href="{{asset('/nuevo_producto')}}" class="btn-floating red"><i class="material-icons tooltipped blue lighten-3" data-position="left" data-tooltip="Agregar nuevo producto">add</i></a></li>
    <li><a href="{{asset('/tipo_productos')}}" class="btn-floating yellow darken-1 tooltipped" data-position="left" data-tooltip="Gestionar tipo de productos"><i class="material-icons">format_list_bulleted</i></a></li>
    <!--li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li-->
  </ul>
</div>

<div class="col s12 m12 l6 lx12">
  <div class="card-panel">
    <center>
      
      <img class="imagen-producto" src="{{asset('imagenes/product_without_img.png')}}">
    </center>
    <div class="row">
      <center>
        
        <div class="col s12 m12 l12 lx12">
          <table>
            <tbody>
              <tr>
                <th>
                  <b>Nombre:</b>
                </th>
                <td>
                  Oso Conejo
                </td>
              </tr>
              <tr>
                <th>
                  <b>Tipo:</b>
                </th>
                <td>Zapatos</td>
              </tr>
              <tr>
                <th>
                  <b>Sexo:</b>
                </th>
                <td>Unisex</td>
              </tr>
              <tr>
                <th>
                  <b>Costo:</b>
                </th>
                <td>5 mil $</td>
              </tr>
              <tr>
                <th>
                  <b>Precio:</b>
                </th>
                <td>7 mil $</td>
              </tr>
              <tr>
                <th>
                  <b>Precio + iva:</b>
                </th>
                <td>9 mil $</td>
              </tr>
            </tbody>
          </table>
        </div>
      </center>

      
    </div>
  </div>
</div>

@endsection
