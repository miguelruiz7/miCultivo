<?php
//Creamos una sesión
session_start();

//Comprueba que exista una sesión de lo contrario no rediriga al inicio de sesion para identificarse
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

// Si existe una sesión nos redirigirá a la página principal
function sesion_login(){
    if (isset($_SESSION['usuario'])) {
        header('Location: index');
    }
    return;
}

//Obtiene los datos del usuario
function sesion_main(){
    error_reporting(0);
    if (isset($_SESSION['usuario'])){
        include('muestradatos.php');
        $datos = muestradatos(sesion());
        $salida = $datos;
    }
      return array($salida);
}

?>