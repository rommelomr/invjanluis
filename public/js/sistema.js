function cargarFormularios(arg){
	if(arg==1){var url= "register"; }


	$("#contenido").html($("#cargar").html());

		$.get(url,function(resul){
			$("#contenido").html(resul);
		});
}



/*$(document).on("submit",".capturarFormulario",function(e){
	//funcion para atrapar los formularios y enviar los datos
	e.preventDefault();

	$('html, body').animate({scrollTop: '0px'},200);
 
	var form=$(this);
	var quien=$(this).attr("id");

	if(quien=="f_nuevo_usuario"){var varurl='register';}


		$.ajax({
			type: "POST",
			url: varurl,
			datatype:'json',
			data: form.serialize(),
			success : function(){
				$('#mensaje').fadeIn();
			}
		});
});*/

$('.input-number').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

function verSelect(){
	if ($('#selectPlanTipo').val() == 'no') {
		$('#icon_telephone').prop('disabled', true);
		$('#icon_telephone').val('0');
	
	}else if ($('#selectPlanTipo').val() == 'si') {
		$('#icon_telephone').prop('disabled', false);
		$('#icon_telephone').val('');
	}
}    

