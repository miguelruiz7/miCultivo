$(document).ready(function(){
    $("#cultivo").change(function(){
        var plan_id = $(this).val();
        $.ajax({
            url: "modelo/obtener_planes.php",
            type: "POST",
            data: {plan_id: plan_id},
            success: function(data){
                $("#planes").html(data);
            }
        });
    });
});