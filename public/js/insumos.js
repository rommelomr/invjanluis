$(function(){
    var mensaje_eliminar = $('#insumo_a_eliminar');
    var input_insumo_a_eliminar = $('#id_insumo');
    
    $('.delete').click(function(){
        var a_eliminar = $(this);
        mensaje_eliminar.html(a_eliminar.attr('nombre_insumo'));
        input_insumo_a_eliminar.attr('value',a_eliminar.attr('id_insumo'));
    });

    $('.editar').click(function(){
        var a_editar = $(this);
        $('#editar_id_insumo').val(a_editar.attr('id_insumo'));
        $('#editar_nombre').val(a_editar.attr('nombre'));
        $('#editar_unidad_medida').val(a_editar.attr('unidad_medida'));
        $('#editar_cantidad_base').val(a_editar.attr('cantidad_base'));
        $('#editar_costo').val(a_editar.attr('costo'));
    });

})