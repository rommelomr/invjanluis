$(function(){
    var inputs_calcular = $('.calcular');

    inputs_calcular.change(function(){
        var costo = $('#modal_costo_insumo').val();
        var cantidad_unidades = $('#modal_cantidad_unidades').val();
        var costo_por_unidad_resultado = $('#costo_por_unidad');
        var proporcion = $('#proporcion');

        var resultado_costo_por_unidad = (costo/cantidad_unidades);
        var resultado_proporcion = 1/cantidad_unidades;

        if(resultado_costo_por_unidad>0){
            costo_por_unidad_resultado.html(resultado_costo_por_unidad);
        }else{
            costo_por_unidad_resultado.html(0);
        }
        if(resultado_proporcion>0){
            proporcion.html(resultado_proporcion);
        }else{
            proporcion.html(0);
        }
    });
})