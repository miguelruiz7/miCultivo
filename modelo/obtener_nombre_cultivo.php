<?php
    $cultivo_id = $_GET['id_cultivo'];
    $consulta_nombre = mysqli_query($conexion,"SELECT nombre FROM cultivo WHERE id=$cultivo_id");
if(mysqli_num_rows($consulta_nombre)>0){
    $obtenernombre = mysqli_fetch_array($consulta_nombre);
    $nombre_cultivo = $obtenernombre['nombre'];
}else{
    echo "<script>window.location.href='index'</script>";
}
?>