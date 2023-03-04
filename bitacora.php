<?php
$errores= '';
include('controlador/conexion.php');

//Incluimos dependencias
include('modelo/bases.php');

//ELIMINAR
if(isset($_POST['eliminar'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
    $id=$_POST['id_plan'];
    $cultivo_id = $_POST['cultivo_id'];
    if($id == ''){
      
    }else{
    $sqldel="DELETE FROM bitacora WHERE plan_id='$id'";
    if (mysqli_multi_query($conexion,$sqldel))
    {
      $sqlupdt="UPDATE plan SET completado=0 WHERE id_plan='$id'";
      if (mysqli_multi_query($conexion,$sqlupdt))
      {
        echo "<script>window.location.href='bitacora?id_cultivo=$cultivo_id&ver='</script>";
      }
    }
}
  }
}

require('vistas/encabezado.php');
require('vistas/bitacora.php');
require('vistas/modulos/pies/pie.php');

?>