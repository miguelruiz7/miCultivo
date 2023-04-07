$(document).ready(function(){
    $("#cultivo").change(function(){
        var cultivo_id = $(this).val();
        $.ajax({
            url: "controlador/obtener_tipo_de_calculo_segun_cultivo.php",
            type: "POST",
            data: {cultivo_id: cultivo_id},
            success: function(data){
                $("#tipos").html(data);
                $("#resultado").html("");
            }
        });
    });

    
});
