<?php
include('../vistas/iconos.php');

//Creamos una sesión.
session_start();

error_reporting(0);
include('../config/conexion.php');
$conecta = new conexionDB();
$conecta -> miCultivo();
$conexion = $conecta ->conexionmiCultivo;


$errores = '';
$clasesnom = '';
$clasesusr = '';
$clasespwd = '';
$clasesemail = '';

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

if($contrasena != ''){
  if($contrasena != $contrasena2){
      $errores .= "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'>
      Las contraseñas no coinciden. $alerta
    </div>";
    $clasespwd .= "<script>document.getElementById('contrasena').classList.add('is-invalid');</script>";
  } else {
    $clasespwd .= "<script>document.getElementById('contrasena').classList.remove('is-invalid');</script>";
    $clasespwd .= "<script>document.getElementById('contrasena').classList.add('is-valid');</script>";
  }
}
    
    //Valida si el usuario esta en la base de datos
    if($usuario != ''){
    $usr=mysqli_query($conexion,"SELECT usuario FROM usuarios WHERE usuario = '$usuario';");
    if (mysqli_num_rows($usr)>0)
    {
      $errores .= "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'>
     Ya existe un usuario similar a este. $alerta
    </div>";
        $clasesusr .= "<script>document.getElementById('usuario').classList.add('is-invalid');</script>";
  
    }else{
        $clasesusr .= "<script>document.getElementById('usuario').classList.remove('is-invalid');</script>";
        $clasesusr .= "<script>document.getElementById('usuario').classList.add('is-valid');</script>";
    }}
  
  
     //Valida si el correo esta en la base de datos
     if($correo_main != ''){
     $usr=mysqli_query($conexion,"SELECT correo FROM usuarios WHERE correo = '$correo_main';");
     if (mysqli_num_rows($usr)>0)
     {
      $errores .= "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'>
      Ya existe un correo similar a este. $alerta
     </div>";
         $clasesmail .= "<script>document.getElementById('correo').classList.add('is-invalid');</script>";
  
     }else{
         $clasesmail .= "<script>document.getElementById('correo').classList.remove('is-invalid');</script>";
         $clasesmail .= "<script>document.getElementById('correo').classList.add('is-valid');</script>";
     }}
    
  if($errores == ''){
    $insertar = mysqli_query($conexion, "INSERT INTO usuarios (nombre, usuario, correo, contrasena, rol) VALUES ('$nombre', '$usuario', '$correo_main','".password_hash($contrasena, PASSWORD_DEFAULT)."','$rol')");
    if($insertar){
        session_start();
    $errores .= "<div class='alert alert-success fade show' role='alert'><center>
      Bienvenido $nombre ($usuario), en un momento te redireccionaremos automáticamente a la sesión; Sí no deseas esperar dale click <a href='index'>aquí</a>. $alerta</center>
    </div>"; 
  
    $_SESSION['usuario']=$usuario;

    $errores.="<script type='text/javascript'>
    const btnRegistro = document.getElementById('btnRegistro');
    btnRegistro.setAttribute('disabled', true);
    var n = 2;
    window.setInterval(function(){
        n--;
        // Si se cumple la condición te redirige a la página de inicio
        if(n == 0){
        location.href = 'index.php';
    }
    },1000);
</script>";
   
    }
  }
  }


  echo $errores;
  echo $clasesnom;
  echo $clasesmail;
  echo $clasesusr;
  echo $clasespwd;
?>