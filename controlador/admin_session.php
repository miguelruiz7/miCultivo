<?php
$pos_web = basename($_SERVER['PHP_SELF'],'.php');
if($pos_web == "login"){
    session_start();
    if (isset($_SESSION['usuario'])) {
        header('Location: index');
    }

}else{
session_start();
    $sesion = $_SESSION['usuario'];
    //include('sesionportiempo.php');
    if (isset($_SESSION['usuario'])) {

    } else {
        header('Location:login');
       
    }
}

?>