<?php
$errores= '';
include('controlador/conexion.php');

//Incluimos dependencias
include('modelo/bases.php');

//ELIMINAR
if(isset($_POST['eliminar'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
    $id=$_POST['id'];
    $cultivo_id = $_POST['cultivo_id'];
    if($id == ''){
      
    }else{
    $sqldel="DELETE FROM cultivo_bitacora WHERE bitacora_id='$id'";
    if (mysqli_multi_query($conexion,$sqldel))
    {
        echo "<script>window.location.href='bitacora?id_cultivo=$cultivo_id&ver='</script>";
    }
}
  }
}

require('vistas/encabezado.php');
require('vistas/bitacora.php');
require('vistas/modulos/pies/pie.php');

?>