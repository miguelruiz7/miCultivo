<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi cultivo | Inicio</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css"href="assets/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/png">
  </head>
  <body>
<!-- Encabezado -->
<?php include('vistas/encabezado.php') ?>
<div class="container">
  <?php
  include('vistas/modulos/modales_formularios/agregar_cultivo.php');
  ?>
</div>
<!-- Notificaciones -->
<section class="py-5 container">
<?php 
if(!empty($errores)): ?>
  <?php echo $errores; ?>
<?php endif; ?>
    <div class="row py-lg-4">
      <div class="col-lg-12">
        <h1 class="fw-light"> Mis cultivos</h1>
    </div>
</section>
<main>
<div class="container">
<!-- Cuerpo -->
    <div class="album py-1">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php
            include('conexion.php');
            $result = mysqli_query($conexion, "SELECT id, nombre, tipo_id, nombre_c, ubicacion, inicio, final, descripcion, area, rendimiento FROM c_datos, c_tipo_cultivo WHERE c_datos.tipo_id=c_tipo_cultivo.id_c");
            $rows = mysqli_num_rows($result);
          if($rows > 0){
            while ($datos = mysqli_fetch_array($result)) {
            include('modulos/card_cultivo.php'); 
            }
          }else{
            include('modulos/card_cultivo_vacio.php');  
            }
            ?>
          </div>
        </div>
    </div>
</div>
<section class="py-5 container">
    <div class="row py-lg-4">
      <div class="col-lg-12">
        <h1 class="fw-light"> Mis tareas</h1>
    </div>
  </section>

<div class="container mb-5">
<!-- Cuerpo -->
  <div class="album py-1">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
          include('conexion.php');
          $result = mysqli_query($conexion, "SELECT * FROM c_planificar,c_datos WHERE c_planificar.completado=0 AND c_planificar.cultivo_id=c_datos.id;");
          $rows = mysqli_num_rows($result);
        if($rows > 0){
          while ($datos = mysqli_fetch_array($result)) {
          include('modulos/card_tarea.php');
          }
          }else{
          include('modulos/card_tarea_vacio.php');
          }
          ?>       
        </div>
      </div>
  </div>
</div>
</main>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
