<?php 
//Datos principales de la conexión
	$host = "localhost";    
	$basededatos = "sistemas_"; 
	$usuariodb = "root";    
	$clavedb = ""; 

// Se crea el objecto que creara la conexion a la base de datos
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
	$conexionPDO = new PDO('mysql:host='.$host.';dbname='.$basededatos.'',''.$usuariodb.'',''.$clavedb.'');

	$pagina=basename($_SERVER['PHP_SELF'],'.php');
	if($pagina=='conexion'){
	if(!$conexion){
		printf("Connect failed: %s\n", $conexion->connect_error);
	}else{
		echo "<script>alert('Conexion exitosa a la base de datos')</script>";
	}
	}
?>
<?php
if($pagina=='conexion'){
?>
<html>
    <head>
        <title>Integradora | Conexión</title>
    </head>
</html>
<?php
}
?>