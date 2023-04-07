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

if($_SERVER['REQUEST_METHOD']=='POST'){
    //Escape de caracteres para prevenir inyecciones SQL con mysqli_real_escape_string
    mysqli_real_escape_string($conexion, $usuario = $_POST['usuario']);
    mysqli_real_escape_string($conexion, $password = $_POST['contrasena']);

            //Valida que los campos no esten vacios
            if(empty($usuario) || empty($password)){
                $errores .= "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'><center>
                Datos vacios. $alerta</center>
              </div>";
            }

            if($errores==''){
                    $usr=mysqli_query($conexion,"SELECT usuario FROM usuarios WHERE usuario = '$usuario';");
                    if (mysqli_num_rows($usr)==0)
                    {
                        $errores .= "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'><center>
                        Usuario inexistente, contacta con tu administrador de sistemas. $alerta</center>
                      </div>";
                    }
                    
                    //Valida si la contraseña coincide en la base de datos descifrada.
                    $usr=mysqli_query($conexion,"SELECT contrasena FROM usuarios WHERE usuario = '$usuario';");
                    if (mysqli_num_rows($usr)>0)
                    {
                        $columnas = mysqli_fetch_array($usr);
                        $hash= $columnas['contrasena'];
                        if(password_verify($password, $hash) != 1){
                            $clasespwd .= "is-invalid";
                            $errores .= "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'><center>
                            Contraseña incorrecta. $alerta</center>
                          </div>";
                        }else{
                            $selusr=mysqli_query($conexion,"SELECT usuario, nombre FROM usuarios WHERE (usuario = '$usuario' or correo = '$usuario');");
                            if(mysqli_num_rows($selusr)>0){
                                    $selusuario = mysqli_fetch_array($selusr);
                                    $usuario = $selusuario['usuario'];
                                    $nombre = $selusuario['nombre'];
                            }
                            $_SESSION['usuario'] = $usuario;

                            $errores .= "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'><center>
                            Bienvenido, $nombre. $alerta</center>
                          </div>";

                            $errores.="<script type='text/javascript'>
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

}
  echo $errores;
?>