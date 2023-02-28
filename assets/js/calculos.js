$(document).ready(function(){
    $("#cultivo").change(function(){
        var cultivo_id = $(this).val();
        $.ajax({
            url: "modelo/obtener_tipo_de_calculo_segun_cultivo.php",
            type: "POST",
            data: {cultivo_id: cultivo_id},
            success: function(data){
                $("#tipos").html(data);
            }
        });
    });
});

$(document).ready(function(){
    $("#tipodato").change(function(){
        var tipo_id = $(this).val();
        $.ajax({
            url: "modelo/obtener_datos_calculo.php",
            type: "POST",
            data: {tipo_id:tipo_id},
            success: function(data){
                $("#muestra").html(data);
            }
        });
    });
});