$(document).ready(function(){
    $('.button-collapse').sideNav();
    $('.modal').modal();
    $('select').material_select();
    $('.tooltipped').tooltip();
     $('.tabs').tabs();


    $("#carnet").on( "click", function() {  
      $('#precioC').toggle();
    });

     $("#inscripcion").on( "click", function() {  
      $('#precioI').toggle();
    });
    $("#agregarAct").on( "click", function() {  
      $('#datos').toggle();
    });
    $("#agregarActE").on( "click", function() {  
      $('#datosE').toggle();
    });

  });

$('.input-number').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});


$('.input-text').on('input', function () { 
    this.value = this.value.replace(/[^ a-záéíóúüñA-Z]/g,'');
});

$('.telefonoValidacion').on('input', function () { 
  if (this.value.length > 7) 
     this.value = this.value.slice(0,7); 
});

$('.numCuentaValidacion').on('input', function () { 
  if (this.value.length > 20) 
     this.value = this.value.slice(0,20); 
});

$('.cedulaValidacion').on('input', function () { 
  if (this.value.length > 8) 
     this.value = this.value.slice(0,8); 
});

function ocultarCrearActividad(id){
  $('#datosE'+id).toggle();
}

function sumarCostoPlan(){
    var precioCarnet = 0;
    var costoActividad =0;
    var precioInscripcion =0;
    var descuento = 0;
    if ($('#precioCarnet').val().length == 0) precioCarnet = 0; else precioCarnet = parseFloat($('#precioCarnet').val());
    if ($('#costoActividad').val().length == 0) costoActividad = 0; else costoActividad = parseFloat($('#costoActividad').val());
    if ($('#precioInscripcion').val().length == 0) precioInscripcion = 0; else precioInscripcion = parseFloat($('#precioInscripcion').val());
    

    var montoTotal = precioCarnet+costoActividad+precioInscripcion;
        
    

    $("#montoTotal").text(montoTotal+' Bs');
    $("#costoPlan").val(montoTotal);
    console.log(montoTotal);
    mostrarTotal()
}

function sumarActividades(id) {
  if ($('#costoActividades').val().length == 0) var costoActividades = 0; else var costoActividades = parseFloat($('#costoActividades').val());
  
  if( $("#act"+id).prop('checked') ) {
    costoActividades = costoActividades +  parseFloat($("#act"+id).attr('costo'));
  }else costoActividades = costoActividades - parseFloat($("#act"+id).attr('costo'));

  $("#costoActividades").val(costoActividades);
  mostrarTotal()
}

function mostrarTotal(){
  if ($('#costoActividades').val().length == 0) var costoActividades = 0; else var costoActividades = parseFloat($('#costoActividades').val());
  if ($('#costoPlan').val().length == 0) var costoPlan = 0; else var costoPlan = parseFloat($('#costoPlan').val());
  if ($('#descuento').val().length == 0) descuento = 0; else descuento = parseFloat($('#descuento').val());

  if (descuento != 0) {
        var montoTotal = (costoActividades + costoPlan)-(((costoActividades + costoPlan)*descuento)/100);
    }else var montoTotal = costoActividades + costoPlan;

  $('#resultadoFinal').val(montoTotal);    
  $("#montoTotal").text(montoTotal+' Bs');
}





/************************************************************************************************/
$(document).ready(function(){


  $("#form").validate({
    errorClass: "invalid",
    validClass: "success",
    errorElement: 'span',
 
    rules: {
      user:'required',
      nombre:'required'
    },
    messages:{
      user:'introduce un nombre',
      nombre:'inyyyyyyyyyyyyy'
    },
  });
  

});

/*************************************************************************************************/







/*
function sumarCostoPlanEditar(id){
    var precioCarnetEditar = 0;
    var costoActividadEditar =0;
    var precioInscripcionEditar =0;
    var descuentoEditar = 0;
    if ($('#precioCarnetEditar').val().length == 0) precioCarnetEditar = 0; else precioCarnetEditar = parseFloat($('#precioCarnetEditar').val());
    if ($('#costoActividadEditar').val().length == 0) costoActividadEditar = 0; else costoActividadEditar = parseFloat($('#costoActividadEditar').val());
    if ($('#precioInscripcionEditar').val().length == 0) precioInscripcionEditar = 0; else precioInscripcionEditar = parseFloat($('#precioInscripcionEditar').val());
    

    var montoTotalEditar = precioCarnetEditar+costoActividadEditar+precioInscripcionEditar;
        
    

    $("#montoTotalEditar").text(montoTotalEditar+' Bs');
    $("#costoPlanEditar").val(montoTotalEditar);
    console.log(montoTotalEditar);
    mostrarTotalEditar()
}

function sumarActividadesEditar(id) {
  if ($('#costoActividadesEditar').val().length == 0) var costoActividadesEditar = 0; else var costoActividadesEditar = parseFloat($('#costoActividadesEditar').val());
  
  if( $("#actEditar"+id).prop('checked') ) {
    costoActividadesEditar = costoActividadesEditar +  parseFloat($("#actEditar"+id).attr('costo'));
  }else costoActividadesEditar = costoActividadesEditar - parseFloat($("#actEditar"+id).attr('costo'));

  $("#costoActividadesEditar").val(costoActividadesEditar);
  mostrarTotalEditar()
}

function mostrarTotalEditar(){
  if ($('#costoActividadesEditar').val().length == 0) var costoActividadesEditar = 0; else var costoActividadesEditar = parseFloat($('#costoActividadesEditar').val());
  if ($('#costoPlanEditar').val().length == 0) var costoPlanEditar = 0; else var costoPlanEditar = parseFloat($('#costoPlanEditar').val());
  if ($('#descuentoEditar').val().length == 0) descuentoEditar = 0; else descuentoEditar = parseFloat($('#descuentoEditar').val());

  if (descuentoEditar != 0) {
        var montoTotalEditar = (costoActividadesEditar + costoPlanEditar)-(((costoActividadesEditar + costoPlanEditar)*descuentoEditar)/100);
    }else var montoTotalEditar = costoActividadesEditar + costoPlanEditar;

  $('#resultadoFinalEditar').val(montoTotalEditar);    
  $("#montoTotalEditar").text(montoTotalEditar+' Bs');
}
*/
/*
$('.apiCedula').on('input', function () { 
  var cedula = $('.apiCedula').val();
  //var cedula = 6871913;
  var appID= '283';
  var token= '9b987278eb1c076b78553ed2cb807c37';
  var urlAPI = 'https://cuado.co:444/api/v1?app_id='+appID+'&token='+token+'&cedula='+cedula;
  console.log(urlAPI);
$.ajax({
            type: "POST",
            url : urlAPI,
            success : function(data){
              console.log(data);
            },
            error: function() {   
               Materialize.toast('¡Ups! No puedo obtener información de la API',3000);
            }   
        });
});

*/
