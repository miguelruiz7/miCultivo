<?php
//Controla nuestra sesión
include('controlador/sesion.php');
sesion_login();
// Llamamos nuestras vistas
require('vistas/registro.php');
?>