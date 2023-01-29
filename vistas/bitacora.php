<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi cultivo | Bitácora</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css"href="assets/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/png">
    <script src="assets/jquery/jquery.min.js"></script>
  </head>
  <body>
<!-- Encabezado -->
<?php include('vistas/encabezado.php') ?>
<div class="container">
  <?php
  include('vistas/modulos/modales_formularios/agregar_bitacora.php');
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
        <?php 
          include('modelo/obtener_nombre_cultivo.php');
        ?>
        <h1 class="fw-light"> Mostrando bitácora: <?php echo $nombre_cultivo ?> </h1>
    </div>
</section>
<main>
<div class="container">
<!-- Cuerpo -->
    <div class="album py-1">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php 
            if(isset($_GET['ver'])){
            include('conexion.php');
            $result = mysqli_query($conexion, "SELECT id_bitacora, plan_id, fecha,lugar,desarollo,c_bitacora.cultivo_id, c_datos.nombre, c_planificar.nombre_plan FROM c_bitacora, c_datos, c_planificar WHERE c_bitacora.cultivo_id=c_datos.id AND c_bitacora.plan_id=c_planificar.id_plan AND c_bitacora.cultivo_id = '$cultivo_id'");
            $rows = mysqli_num_rows($result);
          if($rows > 0){
            while ($datos = mysqli_fetch_array($result)) {
            include('modulos/card_bitacora.php'); 
            }
          }else{
            include('modulos/card_bitacora_vacio.php');  
            }}else{
            echo "<script>alert('¿Qué estás estas haciendo?'); window.location.href = 'index';</script>";
            }
            ?>
          </div>
        </div>
    </div>
</div>
</main>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $("#cultivo").change(function(){
        var plan_id = $(this).val();
        $.ajax({
            url: "modelo/obtener_planes.php",
            type: "POST",
            data: {plan_id: plan_id},
            success: function(data){
                $("#planes").html(data);
            }
        });
    });
});
  </script>
  </body>
</html>
