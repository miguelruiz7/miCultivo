<?php
  include('config/conexion.php');
 
 $conecta = new conexionDB();
        $conecta -> miCultivo();
        $conexion = $conecta ->conexionmiCultivo;
include('vistas/iconos.php');

$errores = '';
$clasesmail = '';
$clasesusr = '';

if($_SERVER['REQUEST_METHOD']=='POST'){
    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $correo_main =  $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];
    $rol = 'usuario';

     //Valida si los campos estan vacios
    if(empty($nombre) or empty($usuario) or empty($correo_main) or empty($contrasena) or empty($contrasena2) ){
        $errores .= "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'>
        Datos vacíos. $alerta
      </div>";
    }

    if($contrasena != $contrasena2){
      $errores .= "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'>
      Las contraseñas no coinciden. $alerta
    </div>";
    $clasespwd = "is-invalid";
  } else {
    $clasespwd = "is-valid";
  }
    
    //Valida si el usuario esta en la base de datos
    $usr=mysqli_query($conexion,"SELECT usuario FROM usuarios WHERE usuario = '$usuario';");
    if (mysqli_num_rows($usr)>0)
    {
        $clasesusr .= "is-invalid";

    }else{
        $clasesusr .= "is-valid";
    }


     //Valida si el correo esta en la base de datos
     $usr=mysqli_query($conexion,"SELECT correo FROM usuarios WHERE correo = '$correo_main';");
     if (mysqli_num_rows($usr)>0)
     {
         $clasesmail .= "is-invalid";
 
     }else{
         $clasesmail .= "is-valid";
     }

  if ($clasesmail != 'is-valid' && $clasesusr != 'is-valid' ) {
    $errores .= "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'><center>
      Ocurrió algo revisa si el correo o usuario son correctos. $alerta</center>
    </div>";
  }
    
  if($errores == ''){
    $insertar = mysqli_query($conexion, "INSERT INTO usuarios (nombre, usuario, correo, contrasena, rol) VALUES ('$nombre', '$usuario', '$correo_main','".password_hash($contrasena, PASSWORD_DEFAULT)."','$rol')");
    if($insertar){
        session_start();
    $_SESSION['usuario']=$usuario;
    header('location:index.php');
   
    }
  }
}
// Llamamos nuestras vistas
require('vistas/registro.php');


?>