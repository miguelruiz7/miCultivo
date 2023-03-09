<?php
	$calculo = $_POST['calculo'];;
	switch($calculo){
		case '1':
			// Densidad de siembra (Granos)
            $perdida = $_POST['perdida'];
            $margen = $_POST['margen'];;
            $densidad = $_POST['densidad'];
			$distancia = $_POST['distancia'];

			$resultados = "<h2 class='fw-light m-2 text-center'>La densidad de siembra en granos será de:</h2><h2 class='fw-light' id='txtresultado'>".round(((($densidad)/(1-(($perdida+$margen)/100)))/10000)*($distancia),1)."</h2>";
			$unidades = "<h2 class='fw-light'>metros por metro lineal</h2><br><!--<button onclick='guardarResultado()' class='btn btn-outline-light me-2'> Guardar resultado</button>-->";
			break;

			case '2':
		    // Densidad de siembra (Forraje)
				$epoca = $_POST['epoca'];
				 if($epoca == '1'){
					$resultados = "<h2 class='fw-light m-2 text-center'>La densidad de siembra en forraje será de:</h2><h2 class='fw-light' id='txtresultado'>250</h2>";
					$unidades = "<h2 class='fw-light'>plantas por metros cuadrado</h2><br><!--<button onclick='guardarResultado()' class='btn btn-outline-light me-2'> Guardar resultado</button>-->";
				 }

				 if($epoca == '2'){
					$resultados = "<h2 class='fw-light m-2 text-center'>La densidad de siembra en forrajes será de:</h2><h2 class='fw-light' id='txtresultado'>350</h2>";
					$unidades = "<h2 class='fw-light'>plantas por metros cuadrado</h2><br><!--<button onclick='guardarResultado()' class='btn btn-outline-light me-2'> Guardar resultado</button>-->";
				 }
				break;

			case '3':
				//Dosificación de agroquímicos
				$consumo = $_POST['consumo'];
				$producto = $_POST['producto'];
				$concentracion = $_POST['concentracion'];

				$resultados = "<h2 class='fw-light m-2 text-center'>La dosificación de agroquímicos será de:</h2><h2 class='fw-light' id='txtresultado'>".((($consumo * $producto) / $concentracion)/10)."</h2>";
				$unidades = "<h2 class='fw-light'>litros por hectárea</h2><br><!--<button onclick='guardarResultado()' class='btn btn-outline-light me-2'> Guardar resultado</button>-->";
				
				break;
				
				case '4':
				//Rendimiento estimado
					$mazorca = $_POST['mazorca'];
					$filas = $_POST['filas'];
					$granosfila = $_POST['granosfila'];
					$peso = $_POST['peso'];
					$hectarea = $_POST['hectareas'];

					$resulton= (($mazorca * 1000)*($filas*$granosfila))*(($peso)/(1000000));

					$resultadoreal = ((($hectarea*$resulton)/1)/1000);

					$resultados = "<h2 class='fw-light m-2 text-center'>El rendimiento estimado será de:</h2><h2 class='fw-light' id='txtresultado'>".round($resultadoreal,3)."</h2>";
					$unidades = "<h2 class='fw-light'>toneladas por $hectarea hectárea(s)</h2><br><!--<button onclick='guardarResultado()' class='btn btn-outline-light me-2'> Guardar resultado</button>-->";
					
					break;

					case '5':
						$resultados = '';
						//Tasas de aplicación de fertilizante

						// Nutrientes
							$n = $_POST['n'];
							$p = $_POST['p'];
							$k = $_POST['k'];

						// Otros parametros
						    $area= $_POST['area'];
							$kaplicados = $_POST['kaplicados'];
						
						
						//Si no hay ningun valor debe obligar a llenar uno
							if(empty($n) && empty($p) && empty($k) ){
								$resultados .= "<h2 class='fw-light m-2 text-center'>Debes por lo menos insertar en algún nutriente su valor para calcular</h2>";
								$unidades ='.';
							}

							if(isset($n) && $n>0){
								$tasaN = (($kaplicados) * (($n)/(100)))/($area);
								$resultados .= "<h2 class='fw-light m-2 text-center'>La tasa de aplicación del Nitrógeno (N) fue de:</h2><h2 class='fw-light' id='txtresultado'>".round($tasaN,2)."</h2><h2 class='fw-light'> kilogramos por hectárea</h2><br>";
								$unidades ='.';
							}

							if(isset($p) && $p>0){
								$tasaP = (($kaplicados) * (($p)/(100)))/($area);
								$resultados .= "<h2 class='fw-light m-2 text-center'>La tasa de aplicación del Fósforo (P) fue de:</h2><h2 class='fw-light' id='txtresultado'>".round($tasaP,2)."</h2><h2 class='fw-light'> kilogramos por hectárea</h2><br>";
								$unidades ='.';
							}

							if(isset($k) && $k>0){
								$tasaK = (($kaplicados) * (($k)/(100)))/($area);
							$resultados .= "<h2 class='fw-light m-2 text-center'>La tasa de aplicación del Potasio (K) fue de:</h2><h2 class='fw-light' id='txtresultado'>".round($tasaK,2)."</h2><h2 class='fw-light'> kilogramos por hectárea</h2><br>";
							$unidades ='.';
							}
							break;

		default:
			$resultados = 'Error';
			$unidades ='.';
			break;
			
	}

	echo $resultados;
	echo $unidades;
?>