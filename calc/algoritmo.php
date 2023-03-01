<?php
    //error_reporting(0);
    $tipo_id = $_POST['tipo_id'];

    switch($tipo_id){
        case('1'):
            ?>
            <form id="dsiembra">
             <input type="text" id="perdida" name="perdida" placeholder="Pérdida de semillas">
             <input type="text" id="margen" name="margen" placeholder="Márgen de seguridad">
             <input type="text" id="densidad" name="densidad" placeholder="Densidad de plantas">
             <input type="hidden" name="calculo" id="calculo" value="1">
             <input type="submit" value="Calcular">
            </form>
            <script>
	$(document).ready(function(){
	    $("#dsiembra").submit(function(event){
			event.preventDefault();
	        var perdida = $("#perdida").val();
	        var margen = $("#margen").val();
	        var densidad = $("#densidad").val();
	        var calculo = $("#calculo").val();
	        $.ajax({
	            url: "calculadora.php",
	            type: "POST",
	            data: { perdida: perdida, margen: margen, densidad: densidad, calculo:calculo},
	            success: function(resultado){
	                $("#resultado").html(resultado);
	            }
	        });
	    });
	});
	</script>
            <?php
        break;
        default:
            echo "defecti";
        break;

     }

?>
                     