<link href="css/pdf.css" rel="stylesheet" type="text/css">
<div class="encabezado">
    <img src="imagenes/logo2.png" width="100" height="130">
    <H4>
      <strong>UBICACION:</strong> Calle Roscio |
      <strong>TELEFONO:</strong>  0212-3230696 |
      <strong>CORREO:</strong>    gym_bodyfitness@gmail.com 
    </h4>     
  </div>
  <h1 class="tituloPlan">
    Asistencia de {{$persona->nombre}}
  </h1>
  <table class="tabla-asistencia">
    <thead class="tabla-titulo-asistencia">
      <tr>
        <th>
          Fecha
        </th>
        <th>
          Entrada
        </th>
      </tr>
    </thead>
    <tbody class="">
      @foreach($persona->asistencia as $asistencia)
      <tr>
        <?php $dia = explode(' ', $asistencia->
        created_at) ?>
        <td>
          {{$dia[0]}}
        </td>
        <td>
          {{$dia[1]}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</link>