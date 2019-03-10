<!DOCTYPE html>
<html>
<head> 
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/pdf.css">
</head>
<body>
	<div class="cuerpo">
		<img src="imagenes/logo.png" class="logo">
		<div class="titulo">
			<h5">BODYFITNESS</h5>
		</div>
		<div class="foto">
			@if($personas->foto == null)
                  <img src="imagenes/1.jpg" alt="" class="circle responsive-img" style="height: 150px; width:112px;">
            	@elseif(file_exists ('FotoUsuarios/'.$personas->foto))
                  <img class="activator" src="{{'FotoUsuarios/'.$personas->foto}}" width="112" height="140">
            	@else
                  <img src="imagenes/1.jpg" alt="" class="circle responsive-img" style="height: 150px; width:112px;">
            @endif
		</div>
		<div class="informacion">
			<span>Nombre:{{$personas->nombre}}</span><br>
			<span>Cédula:{{$personas->cedula}}</span><br>
			<span>Codigo:{{$personas->id}}</span>
		</div>
	</div>
	<div class="cuerpo2">
		<table class="tabla-carnet">
			<tbody class="cuerpo">
				<tr>
					<td class="tdTabla">Enero</td>
					<td class="tdTabla">Febrero</td>
					<td class="tdTabla">Marzo</td>
				</tr>
				<tr>
					<td class="tdTabla">Abril</td>
					<td class="tdTabla">Mayo</td>
					<td class="tdTabla">Junio</td>
				</tr>
				<tr>
					<td class="tdTabla">Julio</td>
					<td class="tdTabla">Agosto</td>
					<td class="tdTabla">Septiembre</td>
				</tr>
				<tr>
					<td class="tdTabla">Octubre</td>
					<td class="tdTabla">Noviembre</td>
					<td class="tdTabla">Diciembre</td>
				</tr>
			</tbody>	
		</table>
		<span class="pie-pagina">
			Calle Roscio Detras De la Torre Chocolate 
			 Antigua Golden Local 2,Piso 1, 
			Los Teques Edo. Miranda
		</span>
	</div>
	
</body>
</html>