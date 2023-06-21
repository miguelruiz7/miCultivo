<?php
include('config/conexion.php');
include('controlador/sesion.php');
sesion();

//Incluimos los iconos
include('vistas/iconos.php');

$user_id = sesion();

$conecta = new conexionDB();
$conecta -> miCultivo();
$conexion = $conecta ->conexionmiCultivo;



//usuario
$errores = '';
$errorpwdmain = '';
if(isset($_POST['btnusr'])){
   
    $errorcorreo = '';
    
if($_SERVER['REQUEST_METHOD']=='POST'){
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];

      //Valida si los campos estan vacios
if(empty($correo) or empty($nombre)){
$errores .= "Por favor rellena todos los datos correctamente. </br>";
}


if($errores == ''){
 
  $sql="UPDATE usuarios SET nombre='$nombre', correo='$correo' WHERE usuario ='$user_id';";

if (mysqli_query($conexion,$sql))
{
  $errores .="<div class='alert alert-primary alert-dismissible fade show' role='alert'>
        Los datos fueron modificados.

      </div>";

}
else{
  $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  Rellene todos los datos correctamente.

</div>";
}

}
}
}

//Contraseña

if(isset($_POST['btnpwd'])){
if($_SERVER['REQUEST_METHOD']=='POST'){
 htmlspecialchars(mysqli_real_escape_string($conexion, $password = $_POST['oldpassword']));
    //$password = $_POST['oldpassword'];
    $passwordnew = $_POST['password'];
    $passwordnewc = $_POST['password2'];
    $errores = '';
    $errorpwdmain = '';
    $errorpwd = '';

//Valida si los campos estan vacios
if(empty($password) or empty($passwordnew) or empty($passwordnewc)){
  $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  Rellene todos los datos correctamente.

</div>";
}

if($password == "'or'1'='1"){
  $errorpwdmain .= "Contraseña incorrecta. (1) </br>";
 }

//Valida si la contraseña tiene más de ocho caracteres
if (strlen($passwordnew) < 8) 
{
    $errorpwd = "La clave debe tener al menos 8 caracteres";
}

//Valida si la contraseña coincide en la base de datos descifrada.
$usr=mysqli_query($conexion,"SELECT contrasena FROM usuarios WHERE usuario = '$user_id'");
if (mysqli_num_rows($usr)>0)
{
  $columnas = mysqli_fetch_array($usr);
  $hash= $columnas['contrasena'];
    if(password_verify($password, $hash) != 1){
      $errorpwdmain .= 'Contraseña incorrecta';
    }
}

//Compara si la contraseña son diferentes
if ($passwordnew != $passwordnewc){
 $errorpwd .= "Las contraseñas no coinciden. </br>";
}


if($errores == '' && $errorpwdmain == '' && $errorpwd == '' ){
  //Ciframos la contraseña con hash
  $passwordnew = password_hash($passwordnew,PASSWORD_DEFAULT);
  $sql="UPDATE usuarios SET contrasena='$passwordnew' WHERE usuario ='$user_id'";

if (mysqli_query($conexion,$sql))
{
  $errores .="<div class='alert alert-primary alert-dismissible fade show' role='alert'>
  La contraseña fue actualizada.

</div>";
  $password = "";
  $passwordnew = "";
  $passwordnewc = "";
}
else{
  $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  Error.

</div>";
}
 
}


}



}

if(isset($_POST['btndel'])){
mysqli_real_escape_string($conexion, $password = $_POST['oldpassword']);
//$password = $_POST['oldpassword'];
//Valida que no envie campos vacios
if(empty($password)){
  $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  Campos vacios.
</div>";
}


//Valida si la contraseña coincide en la base de datos descifrada.
if($password != ''){
$usr=mysqli_query($conexion,"SELECT contrasena FROM usuarios WHERE usuario = '$user_id'");
if (mysqli_num_rows($usr)>0)
{
  $columnas = mysqli_fetch_array($usr);
  $hash= $columnas['contrasena'];
    if(password_verify($password, $hash) != 1){
      $errorpwdmain .= 'Contraseña incorrecta';
      $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      Contraseña incorrecta.
    </div>";
}}


if($errores == ''){

//Verifica que si existen cultivos.
$usr=mysqli_query($conexion,"SELECT * FROM cultivo WHERE usuario_id = '$user_id'");
if (mysqli_num_rows($usr)>0)
{
      $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      Debes eliminar los cultivos.
    </div>";
}else{
  $del="DELETE FROM usuarios WHERE usuario ='$user_id';"; 
  if (mysqli_query($conexion,$del)){
     session_start(); 
      unset($_SESSION["usuario"]);
      if(isset($_GET['redirect'])) {
       header('Location: '.base64_decode($_GET['redirect']));  
      } else {
       header('Location:login');  
      }
  }
}

}
}
}

    

//Vistas
include('vistas/ajustes.php');

    ?>