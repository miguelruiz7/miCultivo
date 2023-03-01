<!DOCTYPE html>
<html>
<head>
	<title>Calculadora en PHP y AJAX</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<h1>Calculadora en PHP y AJAX</h1>
	
		<label for="operacion">Operación:</label>
		<select id="calculo" class="form-control rounded-3" id="floatingInput">
                    <option value="0" selected="">Seleccione:</option> 
                              <?php
                            include('../controlador/conexion.php');
                            $generales="SELECT * FROM calculo";
                            $resultado= mysqli_query($conexion,$generales);
                                while($valores= mysqli_fetch_array($resultado)){
                                    ?>
                                    <option value="<?php echo $valores['id'];?>"><?php echo $valores['nombre']; ?></option>
                                    <?php
                                }
                    ?>
        </select>
	<div id="algoritmo"></div>
	<br>
	<label>Resultado:</label>
	<span id="resultado"></span>
	<script>
	$(document).ready(function(){
	    $("#calculo").change(function(){
	        var tipo_id = $(this).val();
	        $.ajax({
	            url: "algoritmo.php",
	            type: "POST",
	            data: {tipo_id: tipo_id},
	            success: function(data){
	                $("#algoritmo").html(data);
					console.log("Se ha cargado"+data);
	            }
	        });
	    });
	});
	</script>
</body>
</html>