<?php
$obtenertiempo = mysqli_query($conexion, "SELECT fin_sesion FROM ajustes WHERE usuario_id = '$sesion'");
if($obtenertiempo){
  $buscardato = mysqli_fetch_array($obtenertiempo);
  $time = $buscardato['fin_sesion'];
}
//Obtenemos el timestamp del servidor de cuanto se hizo la petición
$hora = $_SERVER["REQUEST_TIME"];
//Duración de la sesión en segundos
$duracion = $time;
$duracionreal = ($duracion - 2);
//Si el tiempo de la petición* es mayor al tiempo permitido de la duración, 
//destruye la sesión y crea una nueva
if (isset($_SESSION['ultima_actividad']) && ($hora - $_SESSION['ultima_actividad']) > $duracionreal) {
  session_unset();
  session_destroy();
};
// * Por esto este archivo debe ser incluido en cada página que necesite comprobar las sesiones
//Definimos el valor de la sesión "ultima_actividad" como el timestamp del servidor
$_SESSION['ultima_actividad'] = $hora;
?>
<?php
?>