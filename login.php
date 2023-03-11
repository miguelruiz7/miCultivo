<?php
//error_reporting(0);
// Incluimos nuestros controladores
include('controlador/conexion.php');
include('controlador/admin_session.php');
include('vistas/iconos.php');

$errores = '';
$errorusr = '';
$clasesusr = '';
$errorpwd = '';
$clasespwd = '';

if($_SERVER['REQUEST_METHOD']=='POST'){
    //Escape de caracteres
    mysqli_real_escape_string($conexion, $usuario = $_REQUEST['usuario']);
    mysqli_real_escape_string($conexion, $password = $_POST['contrasena']);
   
    //Sin escape de caracteres
   /*
    $usuario = $_REQUEST['usuario'];
    $password = $_POST['contrasena'];
    */

     //Valida si los campos estan vacios
    if(empty($usuario) or empty($password)){
        $errores .= "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'>
        Datos vacíos. $alerta
      </div>";
    }
    
    //Valida si el usuario esta en la base de datos
    $usr=mysqli_query($conexion,"SELECT usuario FROM usuarios WHERE (usuario = '$usuario' or correo = '$usuario');");
    if (mysqli_num_rows($usr)==0)
    {
        //$clasesusr .= "is-invalid";
        //$clasespwd .= "is-invalid";
        $errores .= "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'><center>
        Este usuario no se encuentra en nuestros registros. $alerta</center>
      </div>";
      // Limpiamos los campos
        $usuario = '';
        $password = '';

    }else{
        $clasesusr .= "is-valid";
    }
    
    //Valida si la contraseña coincide en la base de datos descifrada.
$usr=mysqli_query($conexion,"SELECT contrasena FROM usuarios WHERE (usuario = '$usuario' or correo = '$usuario');");
if (mysqli_num_rows($usr)>0)
{
    $columnas = mysqli_fetch_array($usr);
    $hash= $columnas['contrasena'];
    if(password_verify($password, $hash) != 1){
        $clasespwd .= "is-invalid";
        $errores .= "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'><center>
        Credenciales incorrectas. $alerta</center>
      </div>";
    }else{
        $clasespwd .= "is-valid";

        //Selecciona el usuario
        $selusr=mysqli_query($conexion,"SELECT usuario FROM usuarios WHERE (usuario = '$usuario' or correo = '$usuario');");
        if(mysqli_num_rows($selusr)>0){
                $selusuario = mysqli_fetch_array($selusr);
                $usuario = $selusuario['usuario'];
        }
        $_SESSION['usuario'] = $usuario;
       
       header("location:index");
    }
}
}

// Llamamos nuestras vistas
require('vistas/login.php');
?>