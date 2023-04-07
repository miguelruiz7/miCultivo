<?php
error_reporting(0);
include('config/conexion.php');
include('controlador/sesion.php');
sesion();
include('controlador/rutas.php');
//Incluimos los iconos
include('vistas/iconos.php');
//Incluimos los controladores
include('controlador/cultivos.php');

$cultivo_id = $_GET['id_cultivo'];

$conecta = new conexionDB();
$conecta -> miCultivo();
$conexion = $conecta ->conexionmiCultivo;

 $errores = '';

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

//Vistas
include('vistas/bitacora.php');

    ?>
    
    
    