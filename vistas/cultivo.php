
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi cultivo | Inicio </title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css"href="assets/second.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/png">
    <script src="assets/jquery/jquery.min.js"></script>
  </head>
  <body>

<!-- Notificaciones -->
<section class="py-5 container">
<?php 
if(!empty($errores)): ?>
  <?php echo $errores; ?>
<?php endif; ?>
    <div class="row py-lg-4">
      <div class="col-lg-12">
        <h1 class="fw-light"> Mis cultivos</h1>  <a href="<?php echo basename($_SERVER['PHP_SELF'],".php"); ?>"><button class="btn btn-light"><?php echo $i_recargar; ?></button></a>
    </div>
</section>
<main>
<div class="container">

<!-- Cuerpo -->
    <div class="album py-1">
        <div class="container">
          <div class="justify-content-center row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php echo mostrarinfocultivo(sesion())?>
          </div>
        </div>
    </div>
</div>
<section class="py-5 container">
    <div class="row py-lg-4">
      <div class="col-lg-12">
        <h1 class="fw-light"> Mis tareas</h1>
    </div>
</div>
  </section>

<div class="container mb-5">
<!-- Cuerpo -->
  <div class="album py-1">
      <div class="container">
        <div class="justify-content-center row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php echo mostrartareas(sesion())?>      
        </div>
      </div>
  </div>
</div>
<?php include('vistas/modulos/modales_formularios/agregar_bitacora.php'); ?>
  </body>
  <script src="modalbootstrap.js"></script>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
