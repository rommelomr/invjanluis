
function mandarPeticion(varurl){

        $.ajax({
            type: "POST",
            url : varurl,
            datatype:'json',
            data : $('#prueba2').serialize(),
            success : function(data){
               
                    Materialize.toast(data.mensaje, 3000);
            },
            error: function() { 
            
               Materialize.toast('Algo Salio Mal',3000);
            }   
        });
}

function enrutarConsultas(data, funcion){
    if (funcion == 'consultarUsuarios') {consultarUsuarios(data)}
    if (funcion == 'consultarUsuarioUnico') {editarUsuario(data)}
    if (funcion == 'consultarPlanes') {consultarPlanes(data)}
    if (funcion == 'consultarPlanUnico') {editarPlan(data)}


}

function consultarUsuarios(data){
    for (var i = data.length - 1; i >= 0; i--) {
        $('.divConsultarUsuarios').append(
            '<ul class="collection z-depth-3" id="consultar'+data[i].id+'">'+
                '<li class="collection-item avatar">'+
                    '<img src="imagenes/1.jpg" alt="" class="circle responsive-img">'+
                    '<span class="title truncate">'+data[i].name+'</span>'+
                    '<p class="truncate">CI: '+data[i].cedula+' <br>Codigo:'+data[i].id+'</p>'+
                
                    '<a href="#modal2" class="secondary-content waves-effect modal-trigger hide-on-small-only tooltipped" data-position="bottom" data-delay="50" data-tooltip="Modificar datos del usuario" data-target="modal2"style="margin-right: 110px;" onclick="enviarPeticionEditar('+"'"+data[i].id+"'"+');"'+'>'+
                      '<i class="material-icons">edit</i>'+
                    '</a>'+
                    '<a href="#modal1" class="secondary-content waves-effect modal-trigger" data-target="modal1" style="margin-right: 70px;">'+
                      '<i class="material-icons">attach_money</i>'+
                    '</a>'+
                    '<a href="#!" class="secondary-content waves-effect" style="margin-right: 30px;">'+
                      '<i class="material-icons">picture_as_pdf</i></a>'+
                    '<a href="#!" class="secondary-content waves-effect tooltipped" data-position="bottom" data-delay="50" data-tooltip=" Eliminar usuario del sistema" onclick="enviarPeticionEliminar('+"'"+data[i].id+"'"+');'+'EliminarDiv('+"'"+data[i].id+"'"+');"'+'>'+
                      '<i class="material-icons">delete</i>'+
                    '</a>'+
                '</li>'+
            '</ul>'+

        '<form hidden class="form_entrada" id="formularioEliminar'+data[i].id+'" method="POST" action="eliminarUsuarios">'+
              '<input name="id" type="hidden" value="'+data[i].id+'">'+
        '</form>'+

        '<form  hidden funcion="consultarUsuarioUnico" class="form_entrada" id="formularioEditar'+data[i].id+'" method="POST" action="consultarUsuarioUnico">'+
              '<input name="id" type="hidden" value="'+data[i].id+'">'+
        '</form>'
         
        );
    }
}

function EliminarDiv(id){
    $('#consultar'+id).remove();

}

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

  });

function enviarPeticion(arg){
    if (arg == 1) {$('#formulario1').submit();}
    if (arg == 2) {$('#formulario2').submit();}
    if (arg == 'actividades') {$('#consultarActividades').submit();}
    
}

function enviarPeticionEliminar(arg){
    $('#formularioEliminar'+arg).submit();
}

function enviarPeticionEditar(arg){
    $('#formularioEditar'+arg).submit();
}

function editarUsuario(data){ 
    $("#nameModalEditar").val(data.name);
    $("#emailModalEditar").val(data.email);
    $("#cedulaModalEditar").val(data.cedula);
    $("#fec_nacimiento").val(data.fec_nacimiento);
    $("#passwordModalEditar").val(data.password);
    $("#rolModalEditar").val(data.telefono);
    $("#huellaModalEditar").val(data.Huella);
    $("#telefonoModalEditar").val(data.telefono);

    $("#IDModalEditar").val(data.id);
   

    $("#sexoModalEditar").val(data.Sexo);
    
    //console.log($("#rolModalEditar").children('option');
    $("#areaModalEditar").val(data.area);
}

function consultarPlanes(data){
    for (var i = data.length - 1; i >= 0; i--) {
      $('#divConsultarPlanes').append(
        '<tr id="consultar'+data[i].id+'"><td class="tooltipped grey-text text-darken-4" data-position="top" data-tooltip="">'+data[i].nombrePlan+'<i class="material-icons left tiny">info</i></td>'+
            '<td class="grey-text text-darken-1">'+data[i].estado+'</td>'+
            '<td class="grey-text text-darken-1">'+data[i].costoPlan+'</td>'+
            '<td>'+
                '<a href="#!" class="secondary-content waves-effect tooltipped" data-position="bottom" data-tooltip="Eliminar plan" data-delay="50"  onclick="enviarPeticionEliminar('+"'"+data[i].id+"'"+');'+'EliminarDiv('+"'"+data[i].id+"'"+');"'+'>'+
                  '<i class="material-icons">delete</i>'+
                '</a>'+
                '<a href="#modalEdit" class="secondary-content waves-effect modal-trigger hide-on-small-only tooltipped" data-position="bottom" data-tooltip="Editar Datos del plan" data-delay="50" data-target="modalEdit" onclick="enviarPeticionEditar('+"'"+data[i].id+"'"+');"'+'>'+
                  '<i class="material-icons">edit</i>'+
                '</a>'+
            '</td>'+

        '</tr>'
             

        );
      $('#inputsForm').append('<form hidden class="form_entrada" id="formularioEliminar'+data[i].id+'" method="POST" action="eliminarPlanes">'+
            '<input name="id" type="hidden" value="'+data[i].id+'">'+
        '</form>'+
        '<form  hidden funcion="consultarPlanUnico" class="form_entrada" id="formularioEditar'+data[i].id+'" method="POST" action="consultarPlanUnico">'+
              '<input name="id" type="hidden" value="'+data[i].id+'">'+
        '</form>'
       );
    }

    
    $('.dropdown-trigger').dropdown();
}

function editarPlan(data){
    $("#nombrePlanModalEditar").val(data.nombrePlan);
    $("#costoPlanModalEditar").val(data.costoPlan);
    $("#costoCarnetModalEditar").val(data.costoCarnet);
    $("#costoInscripcionModalEditar").val(data.costoInscripcion);
    $("#descuentoModalEditar").val(data.descuento);
    $("#diasModalEditar").val(data.dias);
    $("#estadoModalEditar").val(data.estado);
    $("#idModal").val(data.id);
}

function sumarCostoPlan(){
    var montoTotal= 0;

    if ($("#descuento").val() != 0) {
        montoTotal = ((parseFloat($("#precioCarnet").val()) + parseFloat($("#costoActividad").val())+parseFloat($("#precioInscripcion").val()))*parseFloat($("#descuento").val()))/100;
    } else{
        montoTotal = parseFloat($("#precioCarnet").val()) + parseFloat($("#costoActividad").val())+parseFloat($("#precioInscripcion").val());
    }
    //montoTotal + Number($("#costoActividad").val())+Number($("#costoInscripcion").val())+$Number(("#costoCarnet").val());

    $("#montoTotal").text(montoTotal+' Bs');
    $("#costoPlan").val(montoTotal);
    console.log(montoTotal);
}

function traerSelectActividades(){
   
     $("#multipleSelectActividades").html(
            '<select multiple="multiple"  id="multipleSelectActividades" name="actividades[]">'+
                            '<option value="" disabled>Seleccionar Actividades</option>'+
                            '<option value="" >Seleccionar Actividades</option>'+
                            '<option value="" >Seleccionar Actividades</option>'+
                            '<option value="" >Seleccionar Actividades</option>'+
                            '<option value="" >Seleccionar Actividades</option>'+
                        '</select>'
        );
}

$('.input-number').on('input', function () { 
    this.value = this.value.replace(1,2,3,4,5,6,7,8,9,0);
});

$('.input-text').on('input', function () { 
;     this.value = this.value.replace(1,2,3,4,5,6,7,8,9,0);
});