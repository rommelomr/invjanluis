	<link rel="stylesheet" type="text/css" href="css/pdf.css">
	<div class="encabezado">
    <img src="imagenes/logo2.png" width="100" height="130">
    <H4>
      <strong>UBICACION:</strong> Calle Roscio |
      <strong>TELEFONO:</strong>  0212-3230696 |
      <strong>CORREO:</strong>    gym_bodyfitness@gmail.com 
    </h4>     
  </div>
  
  <h1 class="tituloPlan">Hoja de Vida de {{$user->name}}</h1>
   <table class="tabla-afiliado">
    <tr>
      <td class="tabla-titulo">
        @if($user->foto == null)
          <img src="imagenes/1.jpg" alt="" class="circle responsive-img" style="height: 150px; width:112px;">
        @elseif(file_exists ('FotoUsuarios/'.$user->foto))
          <img class="activator" src="{{'FotoUsuarios/'.$user->foto}}" width="112" height="140">
        @else
          <img src="imagenes/1.jpg" alt="" class="circle responsive-img" style="height: 150px; width:112px;">
        @endif
      </td>
    </tr>
    <tr>
      <td class="tabla-titulo">NOMBRE</td>
      <td class="tabla-cuerpo">{{$user->name}} </td>
    </tr>
    <tr>
      <td class="tabla-titulo">CEDULA</td>
      <td class="tabla-cuerpo">{{$user->cedula}}</td>
    </tr>
    <tr>
      <td class="tabla-titulo">TELEFONO</td>
      <td class="tabla-cuerpo">{{$user->area}}-{{$user->telefono}}</td>
    </tr>
    <tr>
      <td class="tabla-titulo">SEXO</td>
      <td class="tabla-cuerpo">{{$user->sexo}}</td>
    </tr>
    <tr>
      <td class="tabla-titulo">fecha nacimiento</td>
      <td class="tabla-cuerpo">{{$user->fec_nacimiento}}</td>
    </tr>
    <tr>
      <td class="tabla-titulo">CORREO</td>
      <td class="tabla-cuerpo">{{$user->email}} </td>
    </tr>
  </table>      
  