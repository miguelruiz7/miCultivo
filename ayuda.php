<?php
include('config/conexion.php');
include('controlador/sesion.php');
sesion();
include('controlador/rutas.php');
//Incluimos los iconos
include('vistas/iconos.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi cultivo | Ayuda </title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css"href="assets/second.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/png">
    <script src="assets/jquery/jquery.min.js"></script>
  </head>
  <body>

<!-- Notificaciones -->
<section class="py-5 container sticky-top" style="
    background-color: #37ad4f;
">
    <header>
  <div class="collapse" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="fw-light">Introducción al sistema administrativo:</h4>
          <ul class="list-unstyled">
        

            <?php
              $cuestiones = ayuda();
              foreach ($cuestiones as $cuestion){
                ?>
                  <li class="nav-item">
                <a href="<?php echo '#'.$cuestion["seccion"] ?>" class="fw-light nav-link px-2 link-light"><?php echo $cuestion["titulo"] ?></a>
                </li> 
                <?php
              }
              ?>
          </ul>
          <h4 class="fw-light">Introducción a la calculadora:</h4>
          <ul class="list-unstyled">
        

            <?php
              $cuestiones = ayudacalcu();
              foreach ($cuestiones as $cuestion){
                ?>
                  <li class="nav-item">
                <a href="<?php echo '#'.$cuestion["seccion"] ?>" class="fw-light nav-link px-2 link-light"><?php echo $cuestion["titulo"] ?></a>
                </li> 
                <?php
              }
              ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <h1 class="fw-light"> Ayuda</h1>  <a href="<?php echo basename($_SERVER['PHP_SELF'],".php"); ?>">
      </a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
<script>$(document).ready(function() {
  $('.list-unstyled a').click(function(){
    $(".collapse").collapse('hide');
  });
});</script>
</section>
<main>

<div class="container">
<h1 class="fw-light"> Introducción al sistema administrativo:</h1>
<section id="infoagregarcultivo" class="container">
<h2 class="fw-light"> Comenzando agregar un cultivo</h2>

<p class="fw-light"> Se dirige al icono de <?php echo $i_agregar_redondo ?> y posteriormente selecciona  <?php echo $i_externo ?> <strong>Agregar cultivo</strong>, se rellenan los datos de acuerdo al tipo de caracter que nos pida el formulario, se concreto y transparente con lo que vallas a escribir </p>

</section>

<section id="infoagregaractividad" class="container">
<h2 class="fw-light"> Comenzando agregar una actividad al cultivo</h2>

<p class="fw-light"> Se dirige al icono de <?php echo $i_agregar_redondo ?> y posteriormente selecciona <?php echo $i_externo ?> <strong>Agregar actividad al cultivo</strong>, selecionando el cultivo al cual se le aplicara una actividad, se rellenan los datos de acuerdo al tipo de caracter que nos pida el formulario, se concreto y transparente con lo que vallas a escribir </p>

</section>


<section id="infoagregarbitacora" class="container">
<h2 class="fw-light"> Comenzando agregar una bitácora en una actividad de un cultivo</h2>

<p class="fw-light"> Se dirige al icono de <?php echo $i_agregar_redondo ?> y posteriormente  selecciona  <?php echo $i_externo ?> <strong>Agregar bitácora</strong>, selecionando el cultivo y posteriormente seleccionando una actividad la cual se le aplicará a la bitacora, se rellenan los datos de acuerdo al tipo de caracter que nos pida el formulario, se concreto y transparente con lo que vallas a escribir. Puedes escribir las bitácoras que tu desees </p>

</section>

<h1 class="fw-light"> Introducción a la calculadora:</h1>

<section id="infocalculadora" class="container">
<h2 class="fw-light"> Comenzando a calcular</h2>

<p class="fw-light"> Se dirige al icono de <?php echo $i_calculadora ?> y posteriormente  selecciona el cultivo que se desea aplicar dependiendo del tipo de cultivo (Granos, Forrajes), se aplica el cálculo deseado. </p>

</section>

</div>
<div id="ultimo"></div>
  </body>
  <script src="modalbootstrap.js"></script>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
