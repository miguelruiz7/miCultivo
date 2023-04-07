<?php
 function muestradatos($sesion){
    $conecta = new conexionDB();
    $conecta -> miCultivo();
    $conexion = $conecta ->conexionmiCultivo;
    
    $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$sesion'");
    if (mysqli_num_rows($consulta)>0)
    {
    $columnas = mysqli_fetch_array($consulta);
    $usuario = $columnas['nombre'];
    }else{
        $usuario = 'No hay';
    }
    return $usuario;
}