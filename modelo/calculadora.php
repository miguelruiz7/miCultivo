<?php
	$calculo = $_POST['calculo'];;
	switch($calculo){
		case '1':
			// Densidad de siembra (Granos)
            $perdida = $_POST['perdida'];
            $margen = $_POST['margen'];;
            $densidad = $_POST['densidad'];
			$distancia = $_POST['distancia'];

			$resultados = "<h2 class='fw-light' id='txtresultado'>".round(((($densidad)/(1-(($perdida+$margen)/100)))/10000)*($distancia),1)."</h2>";
			$unidades = "<h2 class='fw-light'>metros por metro lineal</h2><br><button onclick='guardarResultado()' class='btn btn-outline-light me-2'> Guardar resultado</button>";
			break;

			case '2':
		    // Densidad de siembra (Forraje)
				$epoca = $_POST['epoca'];
				 if($epoca == '1'){
					$resultados = "<h2 class='fw-light' id='txtresultado'>250</h2>";
					$unidades = "<h2 class='fw-light'>plantas por metros cuadrado</h2><br><button onclick='guardarResultado()' class='btn btn-outline-light me-2'> Guardar resultado</button>";
				 }

				 if($epoca == '2'){
					$resultados = "<h2 class='fw-light' id='txtresultado'>350</h2>";
					$unidades = "<h2 class='fw-light'>plantas por metros cuadrado</h2><br><button onclick='guardarResultado()' class='btn btn-outline-light me-2'> Guardar resultado</button>";
				 }
				break;

			case '3':
				//Dosificación de agroquímicos
				$consumo = $_POST['consumo'];
				$producto = $_POST['producto'];
				$concentracion = $_POST['concentracion'];

				$resultados = "<h2 class='fw-light' id='txtresultado'>".((($consumo * $producto) / $concentracion)/10)."</h2>";
				$unidades = "<h2 class='fw-light'>litros por hectárea</h2><br><button onclick='guardarResultado()' class='btn btn-outline-light me-2'> Guardar resultado</button>";
				
				break;
				
				case '4':
				//Rendimiento estimado
				
					$mazorca = $_POST['mazorca'];
					$granosmazorca = $_POST['granosmazorca'];
					$filas = $_POST['filas'];
					$granosfila = $_POST['granosfila'];

					$resultados = "<h2 class='fw-light' id='txtresultado'>".($mazorca)."</h2>";
					$unidades = "<h2 class='fw-light'>litros por hectárea</h2><br><button onclick='guardarResultado()' class='btn btn-outline-light me-2'> Guardar resultado</button>";
					
					break;

		default:
			$resultados = 'Error';
			break;
	}

	echo $resultados;
	echo $unidades;
?>