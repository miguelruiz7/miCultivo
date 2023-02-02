<?php
include('controlador/conexion.php');
   // prueba
    $result = mysqli_query($conexion, "SELECT id_bitacora,fecha,lugar,desarollo, plan.nombre_plan,cultivo.nombre FROM bitacora, plan, cultivo WHERE cultivo.id = '209' AND bitacora.plan_id = plan.id_plan AND plan.cultivo_id = cultivo.id");
    $rows = mysqli_num_rows($result);
  if($rows > 0){
    while ($datos = mysqli_fetch_array($result)) {
    echo "DELETE FROM bitacora WHERE id_bitacora='".$datos['id_bitacora']."';";
        echo "<br>";
    }
  }else{
    echo "No hay resultados";
    }
?>