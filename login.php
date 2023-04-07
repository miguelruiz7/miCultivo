<?php
//Controla nuestra sesión
include('controlador/sesion.php');
sesion_login();
//Inclimos nuestra vista
include('vistas/login.php');
//include('vistas/mantenimiento.php');
?>