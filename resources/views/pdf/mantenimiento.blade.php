<link rel="stylesheet" type="text/css" href="css/pdf.css">
 <div class="encabezado">
    <img src="imagenes/logo2.png" width="100" height="130">
    <H4>
      <strong>UBICACION:</strong> Calle Roscio |
      <strong>TELEFONO:</strong>  0212-3230696 |
      <strong>CORREO:</strong>    gym_bodyfitness@gmail.com 
    </h4>     
  </div>
<h1 class="tituloPlan">Movimientos</h1>
<table class="tabla-mantenimiento">
	<thead>
	  <tr class="tabla-titulo-mantenimiento">
	  	  <th>Nª Recibo</th>
	      <th>Fecha</th>
	      <th>Nombre</th>
	      <th>Cedula/Rif</th>
	      <th>Monto</th>
	      <th>Observacion</th>
	      <th>tipo</th>
	  </tr>
	</thead>

	<tbody> 
		@foreach($mantenimiento as $manten)
		  <tr>
		  	<td>{{$manten->recibo}}</td>
		    <td>{{$manten->created_at->format('d-m-Y')}}</td>
		    <td>{{$manten->nombre}}</td>
		    <td>{{$manten->cedula}}</td>
		    <td>{{$manten->monto}}Bs.S</td>
		    <td>{{$manten->observacion}}</td>
		    

		    @if($manten->tipo == 'egreso')
		    	<td style="color: red;">{{$manten->tipo}}</td>
		    @else
		    	<td style="color: green;">{{$manten->tipo}}</td>
		    @endif
		  </tr>
	  	@endforeach
	</tbody>
</table>