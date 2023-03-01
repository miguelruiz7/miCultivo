<!DOCTYPE html>
<html>
<head>
	<title>Calculadora en PHP y AJAX</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#calcForm").submit(function(event){
				event.preventDefault();
				var num1 = $("#num1").val();
				var num2 = $("#num2").val();
				var operacion = $("#operacion").val();
				$.ajax({
					url: "calculadora.php",
					type: "POST",
					data: { num1: num1, num2: num2, operacion: operacion },
					success: function(resultado){
						$("#resultado").html(resultado);
					}
				});
			});
		});
	</script>
</head>
<body>
	<h1>Calculadora en PHP y AJAX</h1>
	<form id="calcForm">
		<label for="operacion">Operación:</label>
		<select id="operacion" name="operacion">
			<option value="suma">Suma</option>
			<option value="resta">Resta</option>
			<option value="multiplicacion">Multiplicación</option>
			<option value="division">División</option>
		</select><br><br>
		<label for="num1">Número 1:</label>
		<input type="text" id="num1" name="num1"><br><br>
		<label for="num2">Número 2:</label>
		<input type="text" id="num2" name="num2"><br><br>
		<input type="submit" value="Calcular">
	</form>
	<br>
	<label>Resultado:</label>
	<span id="resultado"></span>
</body>
</html>