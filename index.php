<?php
include('config/conexion.php');
include('controlador/sesion.php');
sesion();
include('controlador/rutas.php');
include('controlador/muestradatos.php');
$datos = muestradatos(sesion());
include('controlador/cultivos.php');
//Vistas
include('vistas/main.php');
//include('vistas/mantenimiento.php');

?>