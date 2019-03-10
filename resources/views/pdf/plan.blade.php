<link rel="stylesheet" type="text/css" href="css/pdf.css">

<h1 class="tituloPlan">PLAN {{$planes->nombrePlan}}/Edad Minima {{$planes->edad}} Años</h1>

<img class="FondoPlan" src="imagenes/logo.png">
	<div class="listaPlan">
		

		<?php 
			foreach ($planesActividades as $key => $value) {
				foreach ($value as $llave => $valor) {
					if ($planes->id == $key) {
						echo'<div class="contenedor1">';
							echo'<span class="itemPlan">';
								echo $actividades->find($llave)->nombreActividad;
							echo'</span>';
						echo'</div>';

						echo'<div class="contenedor2">';
							echo'<span class="valorPlan">'; 
								echo $actividades->find($llave)->costoActividad."Bs.s";
							echo'</span>';
						echo'</div>';
					}
				}
			}
		 ?>
				
		 carnet:<span class="valorPlan">{{$planes->costoCarnet}} Bs.S</span>
		 Inscripcion:<span class="contenedor2">{{$planes->costoInscripcion}} Bs.S</span>
		<hr>
		Precio:<span class="valorPlan">{{$planes->costoPlan}} Bs.S</span>
	</div>
	
	
	
									


				


