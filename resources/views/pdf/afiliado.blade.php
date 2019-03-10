	<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/pdf.css">
</head>
<body>
  <div class="encabezado">
    <img src="imagenes/logo2.png" width="100" height="130">
    <H4>
      <strong>UBICACION:</strong> Calle Roscio |
      <strong>TELEFONO:</strong>  0212-3230696 |
      <strong>CORREO:</strong>    gym_bodyfitness@gmail.com 
    </h4>     
  </div> 
  
  <h1 class="tituloPlan">Hoja de Vida de {{$personas->nombre}}</h1>
  
  <table class="tabla-afiliado">
    <tr>
      <td class="tabla-titulo">
        @if($personas->foto == null)
          <img src="imagenes/1.jpg" alt="" class="circle responsive-img" style="height: 150px; width:112px;">
        @elseif(file_exists ('FotoUsuarios/'.$personas->foto))
          <img class="activator" src="{{'FotoUsuarios/'.$personas->foto}}" width="112" height="140">
        @else
          <img src="imagenes/1.jpg" alt="" class="circle responsive-img" style="height: 150px; width:112px;">
        @endif
      </td>
      <td class="tabla-cuerpo">
        PLAN:{{$personas->Plan->nombrePlan}} 
        <br><br> 
        DEUDA:{{$personas->Plan->costoPlan}}
        <br><br>
        DIAS:{{$personas->Plan->dias}}
      </td>
    </tr>
    <tr>
      <td class="tabla-titulo">NOMBRE</td>
      <td class="tabla-cuerpo">{{$personas->nombre}}</td>
    </tr>
    <tr>
      <td class="tabla-titulo">CEDULA</td>
      <td class="tabla-cuerpo">{{$personas->cedula}}</td>
    </tr>
    <tr>
      <td class="tabla-titulo">TELEFONO</td>
      <td class="tabla-cuerpo">{{$personas->area}}-{{$personas->telefono}}</td>
    </tr>
    <tr>
      <td class="tabla-titulo">SEXO</td>
      <td class="tabla-cuerpo">{{$personas->sexo}}</td>
    </tr>
    <tr>
      <td class="tabla-titulo">ENFERMEDAD</td>
      <td class="tabla-cuerpo">{{$personas->enfermedad}}</td>
    </tr>
    <tr>
      <td class="tabla-titulo">DIRECCION</td>
      <td class="tabla-cuerpo">{{$personas->direccion}}</td>
    </tr>
    <tr>
      <td class="tabla-titulo">ESTADO</td>
      <td class="tabla-cuerpo">{{$personas->estado}}</td>
    </tr>
    <tr>
      <td class="tabla-titulo">CORREO</td>
      <td class="tabla-cuerpo">{{$personas->correo}}</td>
    </tr>
    <tr>
      <td class="tabla-titulo">PLAN</td>
      <td class="tabla-cuerpo">{{$personas->Plan->nombrePlan}}</td>
    </tr>
    <tr>
      <td class="tabla-titulo">TEL.FAMILIAR</td>
      <td class="tabla-cuerpo">{{$personas->areaF}}-{{$personas->telefonoFamiliar}}</td>
    </tr>
    <tr class="">
      <td class="tabla-titulo observaciones">OBSERVACIONES</td>
      <td class="tabla-cuerpo observaciones">{{$personas->observaciones}}</td>
    </tr>
  </table>
</body>
</html>

  

         


	









