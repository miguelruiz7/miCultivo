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
        <h1 class="fw-light"> Mis cultivos</h1>  <a href="<?php echo basename($_SERVER['PHP_SELF'],".php"); ?>"><button class="btn btn-light"><?php echo $i_recargar; ?></button></a>
    </div>
</section>
<main>
<div class="container">
<!-- Cuerpo -->
    <div class="album py-1">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php
            $result = mysqli_query($conexion, "SELECT id, nombre, tipo_id, nombre_c, ubicacion, inicio, final, descripcion, area, rendimiento FROM cultivo, tipo WHERE cultivo.tipo_id=tipo.id_c");
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
          $result = mysqli_query($conexion, "SELECT * FROM plan, cultivo WHERE inicio_plan <= DATE_ADD(NOW(), INTERVAL 4 DAY) AND plan.completado = 0 AND plan.cultivo_id = cultivo.id;");
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
<?php include('vistas/modulos/modales_formularios/agregar_bitacora.php'); ?>

