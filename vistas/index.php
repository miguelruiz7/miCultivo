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
        <h1 class="fw-light"> Mis cultivos</h1>  <a href="<?php echo basename($_SERVER['PHP_SELF'],".php"); ?>"><button class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
  <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
</svg></button></a>
    </div>
</section>
<main>
<div class="container">
<!-- Cuerpo -->
    <div class="album py-1">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php
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
<?php include('vistas/modulos/modales_formularios/agregar_bitacora.php'); ?>

