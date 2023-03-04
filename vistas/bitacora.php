
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
        <h1 class="fw-light"> Mostrando bitácora: <?php echo $nombre_cultivo ?></h1> <a href="<?php echo $_SERVER['REQUEST_URI']; ?>"><button class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
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
            if(isset($_GET['ver'])){
            $result = mysqli_query($conexion, "SELECT id_bitacora, plan_id, GROUP_CONCAT('<strong>',DATE_FORMAT(fecha, '%d-%m-%Y'),' a las ',DATE_FORMAT(fecha, '%H:%i:%s'),' en ',lugar, ': </strong> </br> <p>', desarollo SEPARATOR'</p> </br>') as descripciones, GROUP_CONCAT(fecha SEPARATOR '<br>') as fecha, plan.nombre_plan,cultivo.nombre FROM bitacora, plan, cultivo WHERE cultivo.id = '$cultivo_id' AND bitacora.plan_id = plan.id_plan AND plan.cultivo_id = cultivo.id GROUP BY plan_id;");
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
<div class="container">
  <?php
  include('vistas/modulos/modales_formularios/agregar_bitacora.php');
  ?>
</div>
