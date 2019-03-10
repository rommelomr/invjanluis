$(function(){
    var mensaje_eliminar = $('#tipo_producto_a_eliminar');
    var input_tipo_producto_a_eliminar = $('#id_tipo_producto');
    
    $('.delete').click(function(){
        var a_eliminar = $(this);
        mensaje_eliminar.html(a_eliminar.attr('nombre_tipo_producto'));
        input_tipo_producto_a_eliminar.attr('value',a_eliminar.attr('id_tipo_producto'));
    });

    $('.editar').click(function(){
        var a_editar = $(this);
        $('#editar_id_tipo_producto').val(a_editar.attr('id_tipo_producto'));
        $('#editar_nombre').val(a_editar.attr('nombre'));
    });

})