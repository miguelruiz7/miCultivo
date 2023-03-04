<?php
include("../controlador/conexion.php");
//error_reporting(0);

$descripcion = $_POST["resultado"];
$cultivo_id = $_POST["cultivo"];
$calculo_id =  $_POST["tipo"];
$errores = '';

if(empty($descripcion) && empty($calculo_id) && empty($cultivo_id)){
  $errores .= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  Rellena todos los campos.
</div>";
}



if($errores == ''){
//Preparamos la consulta SQL para insertar el resultado en la tabla "resultados"
$sql = "INSERT INTO resultado (id_resultado,descripcion,cultivo_id,calculo_id) VALUES (NULL,'$descripcion','$cultivo_id','$calculo_id')";

//Ejecutamos la consulta SQL
if ($conexion->query($sql) === TRUE) {
  $errores .= "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  Se guardo el resultado.
</div>";
} else {
  $errores .= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  Falló.
</div>";
}
}

echo $errores

?>
