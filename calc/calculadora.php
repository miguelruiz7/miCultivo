<?php
	$calculo = $_POST['calculo'];;
	switch($calculo){
		case '1':
            $perdida = $_POST['perdida'];
            $margen = $_POST['margen'];;
            $densidad = $_POST['densidad'];;
            $resultado = round(((($densidad)/(1-(($perdida+$margen)/100)))/10000),1);
			break;
		default:
			$resultado = 'Error';
			break;
	}

	echo $resultado;
?>