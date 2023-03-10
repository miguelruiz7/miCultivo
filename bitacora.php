<?php
//Se incluye la conexión
include('controlador/conexion.php');
/*
// Extracción del archivo: controlador/conexion.php

//Datos principales de la conexión
  $host = "localhost";    
	$basededatos = "tubasededatos"; 
	$usuariodb = "tuusuario";    
	$clavedb = "tuclave"; 

// Se crea el objecto que creara la conexion a la base de datos
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
	$conexionPDO = new PDO('mysql:host='.$host.';dbname='.$basededatos.'',''.$usuariodb.'',''.$clavedb.'');
	$pagina=basename($_SERVER['PHP_SELF'],'.php');

*/

//Incluimos dependencias
include('modelo/bases.php');

$errores= '';
//ELIMINAR
if(isset($_POST['eliminar'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
      // Se almacenan los valores obtenidos por el formulario en las siguientes variables.
    $id=$_POST['id_plan'];
    $cultivo_id = $_POST['cultivo_id'];
    //Verifica que el campo no este vacio
    if($id == ''){
    }else{
    //Si no hay ningún error se procede a ejecutar las sentencias SQL
    //Se realiza la eliminacion en en la tabla bitácora a través del mysqli_query
    $sqldel="DELETE FROM bitacora WHERE plan_id='$id'";
    if (mysqli_query($conexion,$sqldel))
    {
    //Se realiza la eliminacion en la tabla plan a través del mysqli_query
      $sqlupdt="UPDATE plan SET completado=0 WHERE id_plan='$id'";
      if (mysqli_query($conexion,$sqlupdt))
      {
        echo "<script>window.location.href='bitacora?id_cultivo=$cultivo_id&ver='</script>";
      }
    }
}
  }
}
//Incluimos nuestras vistas
require('vistas/encabezado.php');
require('vistas/bitacora.php');
require('vistas/modulos/pies/pie.php');

?>