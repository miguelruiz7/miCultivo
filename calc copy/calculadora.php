<?php
if(isset($_POST['operacion']) && isset($_POST['num1']) && isset($_POST['num2'])){
	$operacion = $_POST['operacion'];
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	switch($operacion){
		case 'suma':
			$resultado = $num1 + $num2;
			break;
		case 'resta':
			$resultado = $num1 - $num2;
			break;
		case 'multiplicacion':
			$resultado = $num1 * $num2;
			break;
		case 'division':
			$resultado = $num1 / $num2;
			break;
		default:
			$resultado = 'Error';
			break;
	}
	echo $resultado;
}
?>