<?php
session_start();
 function sesion(){
    if (isset($_SESSION['usuario'])) {
        $sesion = $_SESSION['usuario'];
    } else {
        $sesion = '';
       header('Location:login');
       exit();
    }
    return $sesion;
}

function sesion_login(){
    if (isset($_SESSION['usuario'])) {
        header('Location: index');
    }
    return;
}
function sesion_main(){
    error_reporting(0);
    if (isset($_SESSION['id_coach'])){
        include('muestradatos.php');
        $datos = muestradatos(sesion());
        $salida = $datos;
    }
      return array($salida);
}

?>